package org.example.SubscribeAndMessaging;

import com.microsoft.azure.sdk.iot.device.IotHubClientProtocol;
import com.microsoft.azure.sdk.iot.device.ModuleClient;
import com.microsoft.azure.sdk.iot.device.exceptions.IotHubClientException;
import com.microsoft.azure.sdk.iot.device.twin.DirectMethodPayload;
import com.microsoft.azure.sdk.iot.device.twin.DirectMethodResponse;
import com.microsoft.azure.sdk.iot.device.twin.MethodCallback;
import com.microsoft.azure.sdk.iot.service.exceptions.IotHubException;
import com.microsoft.azure.sdk.iot.service.messaging.IotHubServiceClientProtocol;
import com.microsoft.azure.sdk.iot.service.messaging.Message;
import com.microsoft.azure.sdk.iot.service.messaging.MessagingClient;
import org.example.AzureProperities;

import java.io.IOException;
import java.nio.charset.StandardCharsets;
import java.time.LocalDateTime;
import java.util.Scanner;
import java.util.Timer;
import java.util.TimerTask;
import java.util.concurrent.TimeoutException;

public class SubscribeAndMessageApp {

    private boolean sendingMessages; //boolean que controla quando vão ser enviadas as mensagens
    private double distance;  //distancia que vai a ser enviada
    private MessagingClient messagingClient;  //cliente que envia as mensagens
    private ModuleClient moduleClient;   //modulo que vai estar a espera da invocação dos metodos

    public SubscribeAndMessageApp(){
        sendingMessages = false;
        distance = 50.0;
        messagingClient = new MessagingClient(AzureProperities.OWNER, IotHubServiceClientProtocol.AMQPS);    //instancia que envia as mensagens
        moduleClient = new ModuleClient(AzureProperities.INVOKE_MODULE, IotHubClientProtocol.AMQPS);     //instancia que vai estar a escutar as invocaões dos metodos
    }

    public void setSendingMessages(boolean sendingMessages) {
        this.sendingMessages = sendingMessages;
    }

    public void setDistance(double distance) {
        this.distance = distance;
    }

    public boolean isSendingMessages() {
        return sendingMessages;
    }

    public double getDistance() {
        return distance;
    }

    public static void main(String[] args) throws IotHubClientException, IOException, InterruptedException, IotHubException, TimeoutException {
        SubscribeAndMessageApp client = new SubscribeAndMessageApp();
        Timer timer = new Timer();

        client.messagingClient.open();

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {

                if (client.isSendingMessages()){
                    String alarme = "";
                    double minimumDistance = client.getDistance();
                    double distance = 1 + Math.random() * 100;

                    // Round a 1 decimal
                    distance = Math.round(distance * 10.0) / 10.0;

                    if (distance <= minimumDistance) {
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

                    String msgStr = "Distância: " + distance + "cm, Distância Minima: " + minimumDistance + "cm, Alarme Ligado: " + alarme + ", Alerta: " + alarme + ", " + fecha;

                    Message msg = new Message(msgStr);

                    try {
                        client.messagingClient.send(AzureProperities.DEVICE_ID, AzureProperities.TELEMETRY_ID, msg);
                    } catch (InterruptedException | IotHubException | TimeoutException e) {
                        return;
                    }
                }
            }
        }, 0, 2000);

        // Ligação do DirectMethod
        client.moduleClient.open(true);
        System.out.println("Successfully created an IoT Hub client.");

        try {
            System.out.println("Opened connection to IoT Hub.");

            //Subscribe methods
            client.moduleClient.subscribeToMethods(new MethodCallback() {       //o metodo subscriteToMethods recibe uma instancia do methodCallBack
                @Override
                public DirectMethodResponse onMethodInvoked(String methodName, DirectMethodPayload methodData, Object context) {
                    if (methodName.equals("turnOn")){
                        client.setSendingMessages(true);
                    } else if (methodName.equals("turnOff")) {
                        client.setSendingMessages(false);
                    } else if (methodName.equals("setDistance")) {
                        client.setDistance(Double.parseDouble(methodData.getPayloadAsJsonString()));
                    }
                    return new DirectMethodResponse(200, methodData);
                }
            }, null);
        } catch (IotHubClientException e) {
            System.out.println("Failed to subscribe to direct methods. Error code: " + e.getStatusCode());
            client.moduleClient.close();
            System.out.println("Shutting down...");
            return;
        } catch (InterruptedException e) {
            throw new RuntimeException(e);
        }
    }
}
