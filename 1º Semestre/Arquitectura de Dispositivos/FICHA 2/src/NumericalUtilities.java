public class NumericalUtilities {
    public static float powerOf(float num, float potencia) {
        float result = num;

        for (int i = 0; i < potencia - 1 ; i++) {
           result = result * num;
        }
        return result;
    }

    public static int sumOfNaturalNumbersUpTo(int limite) {
        int result = 0;

        for (int i = 0; i <= limite; i++) {
            result += i;
        }

        return result;
    }

    public static int sumOfNaturalNumbersBetween(int inicio, int fim) {
        int result = 0;

        for (int i = inicio; i <= fim; i++) {
            result += i;
        }
        return result;
    }

    public static int sumOfEvenNumbersBetween(int inicio, int fim) {
        int result = 0;
        for (int i = inicio; i <= fim ; i++) {
            if (i % 2 == 0) {
                result += i;
            }
        }
        return result;
    }
    public static int numberOfDivisorsOf(int num) {
        int result = 1;

        for (int i = 1; i < num; i++) {
            if (num % i == 0) {
                result++;
            }
        }
        return result;
    }

    public static boolean isPrime(int num) {
        return num == 2;
    }
}
