public class CaesarCipherDecipherer {
    public static String cipher(String texto, int saltos) {
        String text = "";

        for (int i = 0; i < texto.length(); i++) {

            text += CharacterUtilities.lowerLetterSuccessorStepsOf(texto.charAt(i), saltos);
        }
        texto = text;

        return texto;
    }

    public static String decipher(String texto, int saltos) {
        String text = "";

        for (int i = 0; i < texto.length(); i++) {

            text += CharacterUtilities.lowerLetterPredecessorStepsOf(texto.charAt(i), saltos);
        }
        texto = text;

        return texto;
    }
}
