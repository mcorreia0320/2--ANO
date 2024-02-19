import java.util.Arrays;

public class Main {
    public static void main(String[] args) {
        // EXERCICIO 2

        // a.
            System.out.println(NumericalUtilities.powerOf(3,3));

        // b.
            System.out.println(NumericalUtilities.sumOfNaturalNumbersUpTo(10));

        // c.
            System.out.println(NumericalUtilities.sumOfNaturalNumbersBetween(6,10));

        // d.
            System.out.println(NumericalUtilities.sumOfEvenNumbersBetween(1, 10));

        // e.
            System.out.println(NumericalUtilities.numberOfDivisorsOf(45));

        // f.
            System.out.println(NumericalUtilities.isPrime(NumericalUtilities.numberOfDivisorsOf(4)));

        // EXERCICIO 3

        // a.
            //char []wordArray = {'H', 'O', 'L', 'A'};
            int[] arrayNumbers2 = {8,3,1,5,4};
            System.out.println(ArrayUtilities.toString(arrayNumbers2));

        // b
            int []numbersArray = {23,14,63,98,112,30,43,12,15,8};
            System.out.println(ArrayUtilities.maximumOf(numbersArray));

        // c
            System.out.println(ArrayUtilities.minimumOf(numbersArray));

        // d
            System.out.println(Arrays.toString(ArrayUtilities.copyOf(numbersArray)));

        // e
            System.out.println(ArrayUtilities.contains(43, numbersArray));

        // f
            System.out.println(ArrayUtilities.containsDuplicates(numbersArray));

        // g
            System.out.println(ArrayUtilities.indexOf(12, numbersArray));

        // h
            System.out.println(Arrays.toString(ArrayUtilities.add(10, numbersArray)));

        // i
            int[] Array2 = {1, 2, 3, 4, 5};
            System.out.println(Arrays.toString(ArrayUtilities.remove(3, Array2)));
    }
}

