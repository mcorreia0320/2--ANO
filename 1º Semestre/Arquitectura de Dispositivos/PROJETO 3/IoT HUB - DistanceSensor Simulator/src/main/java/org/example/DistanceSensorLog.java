package org.example;

import com.microsoft.azure.sdk.iot.device.*;
import com.microsoft.azure.sdk.iot.device.exceptions.IotHubClientException;
import com.microsoft.azure.sdk.iot.device.transport.IotHubConnectionStatus;

import javax.swing.*;
import javax.swing.filechooser.FileNameExtensionFilter;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.nio.charset.StandardCharsets;
import java.util.Scanner;

public class DistanceSensorLog extends JFrame {
    private JPanel PainelMain;
    private JTextArea log;
    private JButton clearHandle;
    private JButton saveHandle;
    private ModuleClient client;

    private com.microsoft.azure.sdk.iot.device.MessageCallback MessageCallback;

    private void saveTxt() {
        JFileChooser fileChooser = new JFileChooser();

        // Limita a extensão a .txt
        fileChooser.setFileFilter(new FileNameExtensionFilter("Ficheiros de Texto (*.txt)", "txt"));

        if (fileChooser.showSaveDialog(this) == JFileChooser.APPROVE_OPTION) {
            File archivo = fileChooser.getSelectedFile();

            // Adicionar extensão .txt
            if (!archivo.getName().toLowerCase().endsWith(".txt")) {
                archivo = new File(archivo.getPath() + ".txt");
            }

            try (BufferedWriter writer = new BufferedWriter(new FileWriter(archivo))) {
                writer.write(log.getText());
                JOptionPane.showMessageDialog(this, "Ficheiro guardado!");
            } catch (IOException e) {
                e.printStackTrace();
                JOptionPane.showMessageDialog(this, "Error a guardar o ficheiro", "Error", JOptionPane.ERROR_MESSAGE);
            }
        }
    }

    public DistanceSensorLog(String title) throws IotHubClientException {

        super(title);
        this.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        this.setContentPane(PainelMain);
        this.pack();

        MessageCallback  = new com.microsoft.azure.sdk.iot.device.MessageCallback() {
            @Override
            public IotHubMessageResult onCloudToDeviceMessageReceived(Message message, Object o) {
                log.append(new String(message.getBytes(), Message.DEFAULT_IOTHUB_MESSAGE_CHARSET) + "\n");
                return IotHubMessageResult.COMPLETE;
            }
        };
        
        //RECEIVE MSG CLIENT
        client = new ModuleClient(AzureProperities.TELEMETRY_MODULE, IotHubClientProtocol.AMQPS);
        System.out.println("Successfully created an IoT Hub client.");

        client.setMessageCallback(this.MessageCallback, null);

        System.out.println("Successfully set message callback.");

        client.open(true);

        System.out.println("Opened connection to IoT Hub. Messages sent to this device will now be received.");

        // Apagar conteudo do log
        clearHandle.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                    log.setText("");
            }
        });

        // Save txt
        saveHandle.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                saveTxt();
            }
        });
    }

    public static void main(String[] args) throws IotHubClientException {
        DistanceSensorLog frame = new DistanceSensorLog("Distance Sensor Log");
        frame.setVisible(true);
        frame.setSize(750, 400);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLocationRelativeTo(null);
    }
}
