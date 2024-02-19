package org.example;

import com.microsoft.azure.sdk.iot.device.*;
import com.microsoft.azure.sdk.iot.device.exceptions.IotHubClientException;
import com.microsoft.azure.sdk.iot.device.transport.IotHubConnectionStatus;
import com.microsoft.azure.sdk.iot.service.exceptions.IotHubException;
import com.microsoft.azure.sdk.iot.service.messaging.IotHubServiceClientProtocol;
import com.microsoft.azure.sdk.iot.service.messaging.Message;
import com.microsoft.azure.sdk.iot.service.messaging.MessagingClient;

import java.io.IOException;
import java.net.URISyntaxException;
import java.time.LocalDateTime;
import java.util.*;
import java.util.concurrent.TimeoutException;

public class SendMessage {

    public static void main(String[] args) throws IOException, InterruptedException, IotHubException, TimeoutException {

        Timer timer = new Timer();

        MessagingClient client = new MessagingClient(AzureProperities.OWNER, IotHubServiceClientProtocol.AMQPS);

        System.out.println("Successfully created an IoT Hub client.");
        client.open();

        System.out.println("Opened connection to IoT Hub.");
        System.out.println("Sending the following event messages:");


        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                String alarme = "";
                double distance = 8 + Math.random() * 92;
                // Round a 1 decimal
                distance = Math.round(distance * 10.0) / 10.0;

                if (distance <= 20) {
                    alarme = "Verdadeiro";
                } else alarme = "Falso";

                LocalDateTime date = LocalDateTime.now();
                int day = date.getDayOfMonth();
                int month = date.getMonth().getValue();
                int year = date.getYear();
                String dateString = day + "/" + month + "/" + year;
                int hour = date.getHour();
                int minute = date.getMinute();
                int seconds = date.getSecond();
                String fecha = dateString + " - " + (hour < 10 ? "0" : "") + hour + ":" + (minute < 10 ? "0" : "") + minute + ":" + (seconds < 10 ? "0" : "") + seconds;

                String msgStr = "Distância: " + distance + "cm, Alarme Ligado: " + alarme + ", Alerta: " + alarme + ", " + fecha;

                Message msg = new Message(msgStr);
                System.out.println(msgStr);

                try {
                    client.send("mydevice2019122", "TelemetryReader", msg);
                    System.out.println("Successfully sent the message");
                } catch (InterruptedException | IotHubException | TimeoutException e) {
                    System.out.println("Failed to send the message. Status code: " + e.getCause());
                }
            }
        }, 0, 2000);
    }
}
