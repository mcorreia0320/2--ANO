import java.util.Random;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        Car car = new Car(4, 2010, "Ford", "Focus", 2020.10, "Blue");
        //System.out.println(car.toString());

        Motorcycle moto = new Motorcycle(true, 2020, "Yamaha", "X20", 725.5, "Orange");
        //System.out.println(moto.toString());

        Point pointTriangle1 = new Point(0, 0);
        Point pointTriangle2 = new Point(0, 3);
        Point pointTriangle3 = new Point(3, 0);

        Triangle triangulo = new Triangle(pointTriangle1, pointTriangle2, pointTriangle3);

        System.out.println(triangulo.getArea());

        Point positionCircle = new Point(8, 8);

        Circle circulo = new Circle(positionCircle, 4);

        System.out.println(circulo.getArea());
        System.out.println(circulo.getPerimeter());

        Point topLeftPoint = new Point(0, 5);
        Point inRectangle = new Point(7, 8);
        Rectangle rectangle = new Rectangle(topLeftPoint, 4, 8);

        System.out.println("A area do retangulo é: " + rectangle.getArea());

        System.out.println("O perimetro do retagulo é: " + rectangle.getPerimeter());

        System.out.println(rectangle.containsPoint(inRectangle));

        Figure figure = new Figure();

        figure.add(triangulo);
        figure.add(circulo);
        figure.add(rectangle);


        double areaT = figure.getShapes().get(0).getArea();

        for (int i = 0; i < figure.getShapes().size(); i++) {
            System.out.println(figure.getShapes().get(i).getArea());
        }

        for (Shape shape : figure.getShapes()) {
            System.out.println("Area: " + shape.getArea());
            System.out.println("Perimetro: " + shape.getPerimeter());
        }


    }







}
