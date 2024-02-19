// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        // EXERCICIO 2

        //a.
        int[][] matrizIrregular = {
                {1,6,2,10, 5},
                {7,4,5},
                {10,3,2,9}
        };
        int[][] matrizRegular = {
                {22,10,36},
                {5,2,3},
                {9,5,2}
        };
        int[][] matrizRegular2 = {
                {3,10,2},
                {3,4,9},
                {10,2,1}
        };
        int[][] matrizIdentity = {
                {1,0,0},
                {0,1,0},
                {0,0,1}
        };

        System.out.println(MatrixUtilities.show(matrizRegular));

        //b.

        System.out.println(MatrixUtilities.isRegular(matrizIrregular));

        //c.

        System.out.println(MatrixUtilities.isIdentity(matrizIdentity));

        //d.

        System.out.println(MatrixUtilities.show(MatrixUtilities.multiplyBy(matrizRegular, 2)));

        //e.

        System.out.println(MatrixUtilities.areCompatibleForSum(matrizRegular, matrizRegular2));

        //f.

        System.out.println(MatrixUtilities.show(MatrixUtilities.sumOf(matrizRegular, matrizRegular2)));

        //EXERCICIO 3

        //a.
        System.out.println(CharacterDrawingUtilities.drawElement('+'));

        //b.
        System.out.println(CharacterDrawingUtilities.drawHorizontalSegmentWith('+', 10));
        System.out.println("");

        //c.
        System.out.println(CharacterDrawingUtilities.drawFilledRectangleWith('+', 7, 8));
        System.out.println("");

        //d.
        System.out.println(CharacterDrawingUtilities.drawEmptyRectangleWith('*', 7, 10));
    };
}