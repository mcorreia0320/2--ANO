import java.util.Arrays;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        //EXERCICIO 2
        // a.
        System.out.println(CharacterUtilities.lowerLetterSuccessorOf('b'));

        // b.
        System.out.println(CharacterUtilities.lowerLetterPredecessorOf('a'));

        // c.
        System.out.println(CharacterUtilities.lowerLetterSuccessorStepsOf('y', 3));

        // d.
        System.out.println(CharacterUtilities.lowerLetterPredecessorStepsOf('b', 3));

        // e.
        char []letters = {'g', 'd', 'k', 'e', 'a', 'd', 'g', 'l', 'e','a', 'g'};
        System.out.println(CharacterUtilities.occurrencesOfCharacterIn('g', letters));

        // f.
        System.out.println(Arrays.toString(CharacterUtilities.replaceCharacterIn('g','z', letters)));

        // g.
        char []array = {'a','b','c','d'};
        char []array2 = {'e', 'f', 'g', 'h'};
        System.out.println(Arrays.toString(CharacterUtilities.concatenationOf(array, array2)));

        //h.
        System.out.println(Arrays.toString(CharacterUtilities.copyOfPartOf(5,9, letters)));

        // EXERCICIO 3

        //a.
        String text = "atacar";
        System.out.println(CaesarCipherDecipherer.cipher(text,2));

        //b.
        String encryptedText = CaesarCipherDecipherer.cipher(text,2);
        System.out.println(CaesarCipherDecipherer.decipher(encryptedText, 2));
    }
}