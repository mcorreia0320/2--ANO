public class Rectangle {
    private Point topLeftPoint;
    private double height;
    private double width;

    public Rectangle() {
        topLeftPoint = new Point();
        height = 0.0;
        width = 0.0;
    }

    public Rectangle(Point topLeftPoint, double height, double width) {
        this.topLeftPoint = topLeftPoint;
        this.height = height;
        this.width = width;
    }

    public Point getTopLeftPoint(){
        return topLeftPoint;
    }

    public double getHeight() {
        return height;
    }

    public double getWidth() {
        return width;
    }
    public void setTopLeftPoint(double x, double y){
        topLeftPoint.setXY(x,y);
    }

    public void setHeight(double height) {
        this.height = height;
    }

    public void setWidth(double width) {
        this.width = width;
    }

    public double areaRectangle() {
        return height * width;
    }

    public double perimetroRectangle() {
        return 2 * (height + width);
    }

    public boolean containsPoint(Point point) {
        double x = point.getX();
        double y = point.getY();

        double rectX = topLeftPoint.getX();
        double rectY = topLeftPoint.getY();

        if (x >= rectX && x <= rectX + width && y >= rectY && y <= rectY + height) {
            return true;
        }

        return false;
    }
}
