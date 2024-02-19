public class Triangle extends Shape{
    private Point b;
    private Point c;

    public Triangle() {
        super();
        b = new Point();
        c = new Point();
    }
    public Triangle(Point a, Point b, Point c) {
        super(a);
        this.b = b;
        this.c = c;
    }

    public Point getB() {
        return b;
    }

    public Point getC() {
        return c;
    }

    public void setB(Point b) {
        this.b = b;
    }

    public void setC(Point c) {
        this.c = c;
    }

    public void setABC(Point a, Point b, Point c) {
        setPosition(a);
        this.b = b;
        this.c = c;
    }

    public double baseTriangle() {
        return getPosition().distanceTo(b);
    }


    public double heightTriangle() {
        return getPosition().distanceTo(c);
    }

    public double getArea() {
        return (baseTriangle() * heightTriangle()) / 2;
    }

    @Override
    public double getPerimeter() {
        return baseTriangle() + heightTriangle() + b.distanceTo(c);
    }
}
