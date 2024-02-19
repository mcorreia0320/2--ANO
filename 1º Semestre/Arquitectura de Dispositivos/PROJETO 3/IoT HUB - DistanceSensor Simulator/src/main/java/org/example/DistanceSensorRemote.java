package org.example;

import com.microsoft.azure.sdk.iot.service.exceptions.IotHubException;
import com.microsoft.azure.sdk.iot.service.methods.DirectMethodRequestOptions;
import com.microsoft.azure.sdk.iot.service.methods.DirectMethodsClient;

import javax.swing.*;
import javax.swing.event.ChangeEvent;
import javax.swing.event.ChangeListener;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.IOException;
import java.time.LocalDateTime;
import java.util.Objects;
import java.util.Timer;
import java.util.TimerTask;

public class DistanceSensorRemote extends JFrame{
    private JPanel PainelMain;
    private JButton setDistance;
    private JSlider slider;
    private JTextArea log;
    private JButton turnStatus;
    private JLabel status;
    private JLabel settingDistance;
    private JButton clearLog;
    private Timer timer;
    private String dateAndHours;
    private DirectMethodsClient client;  //invoca metodos



    public DistanceSensorRemote(String title){
        super(title);
        this.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        this.setContentPane(PainelMain);
        this.pack();
        timer = new Timer();
        client = new DirectMethodsClient(AzureProperities.OWNER);

        // Configuração do Slider
        slider.setMinimum(0);
        slider.setMaximum(100);
        slider.setPaintTicks(true);
        slider.setPaintLabels(true);
        slider.setMajorTickSpacing(50);
        slider.setMinorTickSpacing(5);
        settingDistance.setText("Distância Mínima: " + slider.getValue());


        //Atualizar a fecha e hora atual
        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                LocalDateTime date = LocalDateTime.now();
                int day = date.getDayOfMonth();
                int month = date.getMonth().getValue();
                int year = date.getYear();
                String dateString = day + "/" + month + "/" + year;
                int hour = date.getHour();
                int minute = date.getMinute();
                int seconds = date.getSecond();
                dateAndHours = dateString + " - " + (hour < 10 ? "0" : "") + hour + ":"  + (minute < 10 ? "0" : "") + minute + ":" + (seconds < 10 ? "0" : "") + seconds;
            }
        },0, 1000);

        //Evento do Slider
        slider.addChangeListener(new ChangeListener() {
            @Override
            public void stateChanged(ChangeEvent e) {
                settingDistance.setText("Distância Mínima: " + slider.getValue());
            }
        });

        // Invocar metodo para atualizar a distancia minima permitida
        setDistance.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                // Payload info
                DirectMethodRequestOptions options = DirectMethodRequestOptions.builder()
                        .payload(slider.getValue())
                        .methodResponseTimeoutSeconds(5)
                        .methodConnectTimeoutSeconds(5)
                        .build();

                try {
                    client.invoke(AzureProperities.DEVICE_ID, AzureProperities.INVOKE_ID, "setDistance", options);
                } catch (IotHubException | IOException ex) {
                    throw new RuntimeException(ex);
                }

                log.append("Distância mínima alterada: " + slider.getValue() + " -> " + dateAndHours + "\n");
            }
        });

        // Invocar metodo que liga o dispositivo
        turnStatus.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                if (Objects.equals(turnStatus.getText(), "OFF")){
                    // MethodsInvoke
                    DirectMethodRequestOptions options = DirectMethodRequestOptions.builder()
                            .payload(slider.getValue())
                            .methodResponseTimeoutSeconds(30)
                            .methodConnectTimeoutSeconds(30)
                            .build();

                    try {
                        client.invoke(AzureProperities.DEVICE_ID, AzureProperities.INVOKE_ID, "turnOff", options);       //invocacion del metodo turn off
                    } catch (IotHubException | IOException ex) {
                        throw new RuntimeException(ex);
                    }

                    turnStatus.setText("ON");
                    status.setText("DESLIGADO");
                    log.append("Dispositivo Desligado -> " + dateAndHours + "\n");
                } else {
                    // MethodsInvoke
                    DirectMethodRequestOptions options = DirectMethodRequestOptions.builder()
                            .payload(slider.getValue())
                            .methodResponseTimeoutSeconds(30)
                            .methodConnectTimeoutSeconds(30)
                            .build();

                    try {
                        client.invoke(AzureProperities.DEVICE_ID, AzureProperities.INVOKE_ID, "turnOn", options);
                    } catch (IotHubException | IOException ex) {
                        throw new RuntimeException(ex);
                    }

                    turnStatus.setText("OFF");
                    status.setText("LIGADO");
                    log.append("Dispositivo Ligado -> " + dateAndHours + "\n");
                }
            }
        });
        clearLog.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                log.setText("");
            }
        });
    }

    public static void main(String[] args) {
        JFrame frame = new DistanceSensorRemote("Distance Sensor Remote");
        frame.setVisible(true);
        frame.setSize(500, 500);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLocationRelativeTo(null);
        frame.setResizable(false);
    }
}
