import java.util.Arrays;

public class ArrayUtilities {
    /*public static String toString (char[] array){
        String result = "";
        for (int i = 0; i < array.length; i++) {
            char caracter = array[i];
            result += caracter;
        }
        return result;
    }*/

    public static String toString( int[] array) {
        String result = "[";

        for (int i = 0; i < array.length; i++) {
            result += array[i];
            if(i == array.length - 1) {
                result += "]";
            } else result += ",";
        }

        return result;
    }

    public static int maximumOf(int[] array) {
        int result= array[0];
        for (int i = 0; i < array.length; i++) {
            int element = array[i];
            result = (result < element) ? element : result;
        }
        return result;
    }

    public static int minimumOf(int[] array) {
        int result= array[0];
        for (int i = 0; i < array.length; i++) {
            int element = array[i];
            result = (result > element) ? element : result;
        }
        return result;
    }

    public static int[] copyOf(int[] array) {
        if (array == null) {
            return null;
        }
        int[] copy = Arrays.copyOf(array, array.length);

        return copy;
    }

    public static boolean contains(int num, int[] array) {
        for (int i = 0; i < array.length; i++) {
            int element = array[i];

            if ( num == element) {
                return true;
            }
        }
        return  false;
    }

    public static boolean containsDuplicates(int[] array) {

        for (int i = 0; i < array.length; i++) {
            int element = array[i];

            for (int j = i + 1; j < array.length ; j++) {
                int element2 = array[j];
                if (element == element2) {
                    return true;
                }

            }
        }
        return false;
    }

    public static int indexOf(int num, int[] array) {
        for (int i = 0; i < array.length ; i++) {
            if (num == array[i]) {
                return i;
            }
        }
        return -1;
    }
    public static int[] add(int num, int[] array) {

        int[] copyArray = Arrays.copyOf(array, array.length + 1);

        copyArray[copyArray.length -1] = num;

        return copyArray;
    }

    public static int[] remove(int num, int[] array){
        if (indexOf(num, array) == -1) {
            return null;
        }
        int newSize = array.length - 1;
        int[] newArray = new int[newSize];

        int newIndex = 0;

        for (int i = 0; i < array.length; i++) {
            if (array[i] != num) {
                newArray[newIndex] = array[i];
                newIndex++;
            }
        }
        return newArray;
    }
}
