public class Triangle {
    private Point a;
    private Point b;
    private Point c;

    public Triangle() {
        a = new Point();
        b = new Point();
        c = new Point();
    }
    public Triangle(Point a, Point b, Point c) {
        this.a = a;
        this.b = b;
        this.c = c;
    }

    public Point getA() {
        return a;
    }

    public Point getB() {
        return b;
    }

    public Point getC() {
        return c;
    }
    public void setPointA(double x, double y) {
        a.setXY(x,y);
    }
    public void setPointB(double x, double y) {
        b.setXY(x,y);
    }
    public void setPointC(double x, double y) {
        c.setXY(x,y);
    }
    public void setPointABC(double xa, double ya, double xb, double yb, double xc, double yc ) {
        setPointA(xa,ya);
        setPointB(xb,yb);
        setPointC(xc,yc);
    }

    public double baseTriangle() {
        return a.distanceTo(b);
    }


    public double heightTriangle() {
        return a.distanceTo(c);
    }

    public double areaTriangle() {
        return (baseTriangle() * heightTriangle()) / 2;
    }
}
