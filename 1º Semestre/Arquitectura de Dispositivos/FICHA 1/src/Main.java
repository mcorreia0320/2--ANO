// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        System.out.println("\nHello World");

        int retangulo = calcularPerimetro(2,4);
        System.out.println("\n" + retangulo);

        float volume = calcularVolume(2,2,9);
        System.out.println("\n" + volume);

        double Celcius = ftoC(76);
        System.out.println("\n" + Celcius);

        intervaloTemporal(40000);

        int[] interios= {9,11,45,10,90,37,88};
        dadosArray(interios);
    }
    public static int calcularPerimetro (int heigth, int width) {
        return (2 * heigth) + (2 * width);
    }

    public static float calcularVolume(float heigth, float width, float depth) {
        return heigth * width * depth;
    }

    public static double ftoC(double fahrenheit) {
        return (fahrenheit - 32) * 5/9;
    }

    public static void intervaloTemporal(int segundos) {
        int sobrante1, sobrante2, horas, minutos;

        horas = segundos / 3600;
        sobrante1 = segundos % 3600;

        minutos = sobrante1 / 60;
        sobrante2 = sobrante1 % 60;

        System.out.println("\nHORAS: " + horas + " MINUTOS: " + minutos + " SEGUNDOS: " + sobrante2);
    }

    public static void dadosArray(int[] array) {
        int maximo = 0, minimo = array[0];
        float media = 0;

        for (int i = 0; i < array.length ; i++) {
            int atual = array[i];

            minimo = minimo < atual ? minimo : atual;
            maximo = maximo < atual ? atual : maximo;

            media += atual;
        }

        System.out.println("\nMinimo: " + minimo + "\nMaximo: " + maximo + "\nMedia: " + media / array.length);
    }
}