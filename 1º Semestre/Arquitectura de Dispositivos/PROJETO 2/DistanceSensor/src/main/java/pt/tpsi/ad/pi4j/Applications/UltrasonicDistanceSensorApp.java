package pt.tpsi.ad.pi4j.Applications;

import com.pi4j.context.Context;
import com.pi4j.io.gpio.digital.DigitalInput;
import com.pi4j.io.gpio.digital.DigitalOutput;
import com.pi4j.io.gpio.digital.DigitalState;
import com.pi4j.io.gpio.digital.PullResistance;
import pt.tpsi.ad.pi4j.Interfaces.Application;
import pt.tpsi.ad.pi4j.Components.UltrasonicDistanceSensorComponent;
import pt.tpsi.ad.pi4j.Exceptions.MeasurementException;

/**
 * Example Application of using the Crow Pi Ultrasonic Distance Sensor.
 */
public class UltrasonicDistanceSensorApp implements Application {

    private static final int PIN_BUTTON = 24; // PIN 18 = BCM 24
    private static final int PIN_LED = 22; // PIN 15 = BCM 22
    private volatile boolean sensorActive = true; // Controla os estado do sensor

    @Override
    public void execute(Context pi4j) {
        // Create new tilt sensor component
        final var distanceSensor = new UltrasonicDistanceSensorComponent(pi4j);

        // Configuração do LED
        var ledConfig = DigitalOutput.newConfigBuilder(pi4j)
                .id("led")
                .name("LED Flasher")
                .address(PIN_LED)
                .shutdown(DigitalState.LOW)
                .initial(DigitalState.LOW)
                .provider("pigpio-digital-output");
        var led = pi4j.create(ledConfig);

        // Configuração do botão
        var buttonConfig = DigitalInput.newConfigBuilder(pi4j)
                .id("button")
                .name("Press button")
                .address(PIN_BUTTON)
                .pull(PullResistance.PULL_DOWN)
                .debounce(3000L)
                .provider("pigpio-digital-input");
        var button = pi4j.create(buttonConfig);
        button.addListener(e -> {
            if (e.state() == DigitalState.LOW) {
                // Toggle the sensor state
                sensorActive = !sensorActive;
                led.low();
                if (sensorActive) {
                    System.out.println("Sensor Ligado!");
                } else System.out.println("Sensor Desligado!");
            }
        });
       // Ciclo Infinito para a Aplicação nunca finalizar
        while (true) {
            if (sensorActive) {

                try {
                    if (distanceSensor.measure() < 30) {
                        led.high();
                    } else {
                        led.low();
                    }
                    System.out.println("A distância medida é: " + distanceSensor.measure() + " cm");
                } catch (MeasurementException e) {
                    // If the measurement fails with a MeasurementException, inform the user and try again next time
                    System.out.println("Erro ao tentar medir!");
                }

                // Delay the measurements a little. This gives you some time to move in front of the sensor.
                sleep(1000);
            } else {
                // Sleep quando o sensor esta inativo
                sleep(100);
            }
        }
    }
}
