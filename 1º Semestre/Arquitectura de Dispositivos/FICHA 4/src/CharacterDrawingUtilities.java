public class CharacterDrawingUtilities {
    public static char drawElement(char caracter) {
        return caracter;
    }

    public static char drawNewLine() {
        return '\n';
    }
    public static String drawHorizontalSegmentWith(char caracter, int width) {
        String result = "";
        for (int i = 1; i <= width; i++) {
            result += caracter + " " ;
        }
        return result;
    }
    public static String drawFilledRectangleWith(char caracter, int heigth, int width) {
        String result = "";
        for (int i = 1; i <= heigth; i++) {
            result += drawHorizontalSegmentWith(caracter,width);
            result += drawNewLine();
        }
        return result;
    }

    public static String drawEmptyRectangleWith(char caracter, int heigth, int width) {
        String result = "";
        for (int i = 0; i < heigth; i++) {
            for (int j = 0; j < width; j++) {
                if(i == 0 || i == heigth - 1 || j == 0 || j == width - 1) {
                    result += drawElement(caracter) + " ";
                } else result += " " + " ";
            }
            result += drawNewLine();
        }
        return result;
    }
}
