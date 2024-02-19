

public class Main {
    public static void main(String[] args) {

        // EXERCICIO 2

        //b.
        Point ponto1 = new Point(2,8);
        Point ponto2 = new Point(4,10);

        //c.

        System.out.println(ponto1.getX());
        System.out.println(ponto2.getY());

        //d.
        ponto1.setX(2.4);
        ponto2.setY(9.8);
        ponto1.setXY(2.9,8.7);

        System.out.println(ponto1.getX());
        System.out.println(ponto1.getY());

        //e.
        System.out.println(ponto1.distanceTo(ponto2));

        // EXERCICIO 3
        Point pointTriangle1 = new Point(0,0);
        Point pointTriangle2 = new Point(3,0);
        Point pointTriangle3 = new Point(0,3);

        Triangle triangle1 = new Triangle(pointTriangle1, pointTriangle2, pointTriangle3);

        System.out.println(triangle1.getA().getY());
        System.out.println(triangle1.getB().getX());
        System.out.println(triangle1.getC().getY());

        // d. ii.
        //triangle1.setPointABC(1,2,3,4,5,6);

        // e.
        System.out.println("A base do triangulo é: " + triangle1.baseTriangle());

        System.out.println("A altura do triangulo é: " + triangle1.heightTriangle());

        System.out.println("A area do triangulo é: " + triangle1.areaTriangle());

        // EXERCICIO 4

        Point topLeftPoint = new Point(0,5);
        Point inRectangle = new Point(7, 8 );
        Rectangle rectangle1 = new Rectangle(topLeftPoint, 4, 8);

        System.out.println("A area do retangulo é: " + rectangle1.areaRectangle());

        System.out.println("O perimetro do retagulo é: " + rectangle1.perimetroRectangle());

        System.out.println(rectangle1.containsPoint(inRectangle));







    }
}