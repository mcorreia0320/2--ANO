import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Date;
import java.util.Random;
import java.util.Timer;
import java.util.TimerTask;

public class SmartTermo extends JFrame {
    private JPanel PainelMain;
    private JButton reduce;
    private JButton plus;
    private JButton convertGraus;

    private JLabel Date;
    private JLabel dateValue;
    private JLabel tempLabel;
    private JLabel tempdLabel;
    private JLabel tempValue;
    private JLabel tempdValue;
    private JTextArea log;
    private JLabel setTo;
    private JLabel currentHumLabel;
    private JLabel desiredHumLabel;
    private JLabel humDValue;
    private JLabel humValue;
    private JButton reduceHum;
    private JButton increaseHum;
    private JLabel setHumTo;
    private JLabel heating;
    private JLabel heatingValue;
    private JLabel horaLabel;
    private JLabel horaValue;
    private JToggleButton toggle;
    private float desiredTemp;
    private float currentTemp;
    private int currentHum;
    private int desiredHum;
    private boolean farenheit;
    private boolean heatingStatus;
    private Timer timer;
    private String hours;


    public SmartTermo (String title) {
        super(title);
        farenheit = false;
        currentTemp = 19f;
        desiredTemp = 19f;
        currentHum = 45;
        desiredHum = 45;
        timer = new Timer();
        heatingStatus = false;
        heatingValue.setText("DESLIGADO");
        humValue.setText(currentHum + "%");
        humDValue.setText(desiredHum + "%");
        setHumTo.setText(desiredHum + "");
        setTo.setText(desiredTemp + "");
        tempdValue.setText(desiredTemp + "º");
        tempValue.setText(currentTemp + "º");
        LocalDateTime date = LocalDateTime.now();
        int day = date.getDayOfMonth();
        int month = date.getMonth().getValue();
        int year = date.getYear();
        String dateString = day + "-" + month + "-" + year;
        dateValue.setText(dateString);
        int hour = date.getHour();
        int minute = date.getMinute();
        int seconds = date.getSecond();
        hours = (hour < 10 ? "0" : "") + hour + ":"  + (minute < 10 ? "0" : "") + minute + ":" + (seconds < 10 ? "0" : "") + seconds;
        this.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        this.setContentPane(PainelMain);
        this.pack();
        plus.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                desiredTemp += 0.5f;
                tempdValue.setText(desiredTemp + "º");
                setTo.setText(desiredTemp + "");
                log.append(hours + " - User increased temperature to: " + desiredTemp + ((farenheit) ? "º Farenheit": "º Celcius") + "\n");
            }
        });
        reduce.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                desiredTemp -= 0.5f;
                tempdValue.setText(desiredTemp + "º");
                setTo.setText(desiredTemp + "");
                log.append(hours + " - User reduce temperature to: " + desiredTemp + ((farenheit) ? "º Farenheit": "º Celcius") + "\n");
            }
        });
        convertGraus.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                if (!farenheit) {
                    farenheit = true;
                    desiredTemp = (desiredTemp * 9/5) +32;
                    currentTemp = (currentTemp * 9/5) +32;
                    convertGraus.setText("Conversão to Celcius");
                    tempdValue.setText(desiredTemp + "º");
                    tempValue.setText(currentTemp + "º");
                } else {
                    farenheit = false;
                    desiredTemp = (desiredTemp - 32) * 5/9;
                    currentTemp = (currentTemp - 32) * 5/9;
                    convertGraus.setText("Conversão to Farenheit");
                    tempdValue.setText(desiredTemp + "º");
                    tempValue.setText(currentTemp + "º");
                }
            }
        });
        reduceHum.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                desiredHum -= 5;
                humDValue.setText(desiredHum + "%");
                setHumTo.setText(desiredHum + "");
                log.append( hours + " - User reduce humidity to: " + desiredHum + "%\n");
            }
        });
        increaseHum.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                desiredHum += 5;
                humDValue.setText(desiredHum + "%");
                setHumTo.setText(desiredHum + "");
                log.append(hours + " - User increase humidity to: " + desiredHum + "%\n");
            }
        });

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                Random r = new Random();
                double randomNumber = r.nextDouble();

                if (randomNumber < 0.3) {
                    currentTemp -= 0.5f;
                    tempValue.setText(currentTemp + "º");
                    log.append(hours + " - The temperature decrease to: " + currentTemp + ((farenheit) ? "º Farenheit": "º Celcius") + "\n");
                }

                if (toggle.isSelected()) {

                    if (currentTemp < desiredTemp) {
                        if (randomNumber > 0.2) {
                            currentTemp += 0.5f;
                            tempValue.setText(currentTemp + "º");
                            log.append(hours + " - The temperature increase to: " + currentTemp + ((farenheit) ? "º Farenheit": "º Celcius") + "\n");
                        }
                    }
                }
            }
        }, 0, 3000);

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                LocalDateTime date = LocalDateTime.now();
                int hour = date.getHour();
                int minute = date.getMinute();
                int seconds = date.getSecond();
                String Hour = (hour < 10 ? "0" : "") + hour + ":"  + (minute < 10 ? "0" : "") + minute + ":" + (seconds < 10 ? "0" : "") + seconds;
                horaValue.setText(Hour);
                hours = Hour;
            }
        },0, 1000);

        toggle.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                if (toggle.isSelected()){
                    toggle.setText("ON");
                    heatingValue.setText("LIGADO");
                } else {
                    toggle.setText("OFF");
                    heatingValue.setText("DESLIGADO");
                }
            }
        });
    }

    public static void main(String[] args) {
        JFrame frame = new SmartTermo("SmartTermo");
        frame.setVisible(true);
        frame.setSize(900, 600);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLocationRelativeTo(null);
    }


}
