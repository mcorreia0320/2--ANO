public class Circle extends Shape{
    private double radius;

    public Circle() {
        super();
        radius = 0.0;
    }
    public Circle(Point position, double radius){
        super(position);
        this.radius = radius;
    }

    public double getRadius() {
        return radius;
    }

    @Override
    public double getArea() {
        return Math.PI * Math.pow(radius, 2);
    }
    public double getPerimeter() {
        return 2 * Math.PI * radius;
    }
}
