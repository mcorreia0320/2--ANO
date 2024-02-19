package org.example;

import com.google.gson.JsonElement;
import com.google.gson.JsonObject;
import com.microsoft.azure.sdk.iot.device.*;
import com.microsoft.azure.sdk.iot.device.exceptions.IotHubClientException;
import com.microsoft.azure.sdk.iot.device.twin.DirectMethodPayload;
import com.microsoft.azure.sdk.iot.device.twin.DirectMethodResponse;
import com.microsoft.azure.sdk.iot.device.twin.MethodCallback;
import com.microsoft.azure.sdk.iot.device.transport.IotHubConnectionStatus;
import com.microsoft.azure.sdk.iot.device.twin.SubscriptionAcknowledgedCallback;

import java.io.IOException;
import java.net.URISyntaxException;
import java.nio.charset.StandardCharsets;
import java.util.Scanner;

public class DirectMethodSample
{
    public static void main(String[] args)
            throws IOException, URISyntaxException, IotHubClientException, InterruptedException
    {
        System.out.println("Starting...");
        System.out.println("Beginning setup.");

        ModuleClient client = new ModuleClient(AzureProperities.INVOKE_CONN, IotHubClientProtocol.AMQPS);
        client.open(true);
        System.out.println("Successfully created an IoT Hub client.");


        try
        {
            System.out.println("Opened connection to IoT Hub.");
            client.subscribeToMethods(new MethodCallback() {
                @Override
                public DirectMethodResponse onMethodInvoked(String methodName, DirectMethodPayload methodData, Object context) {
                    System.out.println("Received a direct method invocation with name " + methodName + " and payload " + methodData.getPayloadAsJsonString());
                    return new DirectMethodResponse(200, methodData);
                }
            }, null);
        }
        catch (IotHubClientException e)
        {
            System.out.println("Failed to subscribe to direct methods. Error code: " + e.getStatusCode());
            client.close();
            System.out.println("Shutting down...");
            return;
        }

        System.out.println("Press any key to exit...");

        Scanner scanner = new Scanner(System.in, StandardCharsets.UTF_8.name());
        scanner.nextLine();
        client.close();
        System.out.println("Shutting down...");
    }
}