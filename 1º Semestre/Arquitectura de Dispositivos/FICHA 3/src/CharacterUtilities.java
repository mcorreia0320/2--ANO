public class CharacterUtilities {
    public static char lowerLetterSuccessorOf(char letter) {
        return (letter == 'z') ? 'a' : ++letter;
    }

    public static char lowerLetterPredecessorOf(char letter) {
        return (letter == 'a') ? 'z' : --letter;
    }

    public static char lowerLetterSuccessorStepsOf(char letter, int steps) {
        for (int i = 0; i < steps; i++) {
            letter = lowerLetterSuccessorOf(letter);
        }
        return letter;
    }

    public static char lowerLetterPredecessorStepsOf(char letter, int steps) {
        for (int i = 0; i < steps; i++) {
            letter = lowerLetterPredecessorOf(letter);
        }
        return letter;
    }

    public static int occurrencesOfCharacterIn(char letter, char[] arrayLetters) {
        int result = 0;

        for (int i = 0; i < arrayLetters.length ; i++) {
            if(arrayLetters[i] == letter) {
                result++;
            }
        }
        return result;
    }

    public static char[] replaceCharacterIn(char findLetter, char subsLetter, char[] array) {

        for (int i = 0; i < array.length; i++) {
            if (findLetter == array[i]) {
                array[i] = subsLetter;
            }
        }

        return array;
    }

    public static char[] concatenationOf(char[] array1, char[] array2) {

        int sizeArray = array1.length + array2.length;

        char[] newArray = new char[sizeArray];

        int newIndex = array1.length;

        for (int i = 0; i < array1.length ; i++) {
            newArray[i] = array1[i];
        }

        for (int i = 0; i < array2.length; i++) {
            newArray[newIndex] = array2[i];
            newIndex++;
        }

        return newArray;
    }

    public static char[] copyOfPartOf(int start, int end, char[] array) {
        int newSize = (end - start) + 1;

        char []newArray = new char[newSize];

        int newIndex = 0;

        for (int i = start; i <= end ; i++) {
            newArray[newIndex] = array[i];
            newIndex++;
        }

        return newArray;
    }
}
