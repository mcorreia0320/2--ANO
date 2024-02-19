import java.util.Objects;

public class Rational implements Comparable<Rational>{
    private int numerator;
    private  int denominator;


    public Rational(){
        numerator = 0;
        denominator = 0;
    }

    public Rational(int numerator, int denominator){
        this.numerator = numerator;
        this.denominator = denominator;
    }

    public int getNumerator() {
        return numerator;
    }

    public int getDenominator() {
        return denominator;
    }

    public void setNumerator(int numerator) {
        this.numerator = numerator;
    }

    public void setDenominator(int denominator) {
        this.denominator = denominator;
    }

    @Override
    public boolean equals(Object obj) {
        Rational other = (Rational) obj;
        return this.numerator == other.numerator && this.denominator == other.denominator;
    }

    @Override
    public int compareTo(Rational other) {
        return this.numerator * other.denominator - this.denominator * other.numerator;
    }

    @Override
    public String toString() {
        return this.numerator + "/" + this.denominator;
    }
}
