package org.example;

import com.microsoft.azure.sdk.iot.service.exceptions.IotHubException;
import com.microsoft.azure.sdk.iot.service.methods.DirectMethodRequestOptions;
import com.microsoft.azure.sdk.iot.service.methods.DirectMethodResponse;
import com.microsoft.azure.sdk.iot.service.methods.DirectMethodsClient;
import org.json.JSONObject;

import java.io.IOException;

public class ModuleInvokeMethodSample
{
    public static void main(String[] args) throws IOException, IotHubException {
        System.out.println("Starting...");
        System.out.println("Beginning setup.");

        DirectMethodRequestOptions options = DirectMethodRequestOptions.builder()
                .payload(20)
                .methodResponseTimeoutSeconds(5)
                .methodConnectTimeoutSeconds(5)
                .build();

        DirectMethodsClient client = new DirectMethodsClient(AzureProperities.OWNER);
        DirectMethodResponse result = client.invoke(AzureProperities.DEVICEID, AzureProperities.INVOKE_ID, "turnOn", options);
        System.out.println(result.getPayloadAsJsonString());
    }
}
