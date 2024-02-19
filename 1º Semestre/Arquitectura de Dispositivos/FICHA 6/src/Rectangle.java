public class Rectangle extends Shape{
    private double height;
    private double width;

    public Rectangle() {
        super();
        height = 0.0;
        width = 0.0;
    }

    public Rectangle(Point topLeftPoint, double height, double width) {
        super(topLeftPoint);
        this.height = height;
        this.width = width;
    }

    public double getHeight() {
        return height;
    }

    public double getWidth() {
        return width;
    }

    public void setHeight(double height) {
        this.height = height;
    }

    public void setWidth(double width) {
        this.width = width;
    }

    public double getArea() {
        return height * width;
    }

    public double getPerimeter() {
        return 2 * (height + width);
    }

    public boolean containsPoint(Point point) {
        double x = point.getX();
        double y = point.getY();

        double rectX = getPosition().getX();
        double rectY = getPosition().getY();

        if (x >= rectX && x <= rectX + width && y >= rectY && y <= rectY + height) {
            return true;
        }

        return false;
    }
}
