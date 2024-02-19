public class MatrixUtilities {


    public static String show(int[][] matriz) {
        String str = "[\n";
        for (int i = 0; i < matriz.length; i++) {
            str += " [";
            for (int j = 0; j < matriz[i].length; j++) {
                if (j != matriz[i].length -1)
                    str += matriz[i][j] + ", ";
                else
                    str += matriz[i][j] + "]";
            }
            if ( i != matriz.length - 1)
                str += ", \n";

        }
        str += "\n]";
        return str;
    }

    public static boolean isRegular(int[][] matrix) {
        int firstLenght = matrix[0].length;
        for (int i = 1; i < matrix.length; i++) {
            if (matrix[i].length != firstLenght) {
                return false;
            }
        }
        return true;
    }

    public static boolean isIdentity(int[][] matrix) {
        if (!isRegular(matrix)) {
            return false; // não é n * n, quer dizer a matriz não é quadrada
        }

        for (int i = 0; i < matrix.length; i++) {
            for (int j = 0; j < matrix.length; j++) {
                if (i == j && matrix[i][j] != 1 || (i != j && matrix[i][j] != 0 )) {
                    return false;
                }
            }
        }
        return true;
    }

    public static int[][] multiplyBy(int[][] matriz, int k) {
        int[][] result = new int[matriz.length][matriz[0].length];
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                result[i][j] = matriz[i][j] * k;
            }
        }
        return result;
    }


    public static boolean areCompatibleForSum(int[][] matriz, int[][] matriz2) {
        if (matriz.length != matriz2.length) return false;

        for (int i = 0; i < matriz.length; i++) {
            if (matriz[i].length != matriz2[i].length) {
                return false;
            }
        }

        return true;
    }

    public static int[][] sumOf(int[][] matriz, int[][] matriz2) {
        if (!areCompatibleForSum(matriz, matriz2)) {
            return null;
        }

        int[][] result = new int[matriz.length][matriz[0].length];

        for (int i = 0; i < matriz.length ; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                result[i][j] = matriz[i][j] + matriz2[i][j];
            }
        }
        return result;
    }
}
