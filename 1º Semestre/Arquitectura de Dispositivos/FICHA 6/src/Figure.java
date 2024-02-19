import java.util.ArrayList;

public class Figure {
    private ArrayList<Shape> shapes;

    public Figure() {
        shapes = new ArrayList<>();
    }
    public Figure(ArrayList<Shape> shapes) {
        this.shapes = shapes;
    }
    public ArrayList<Shape> getShapes() {
        return shapes;
    }

    public void add(Shape shape) {
        shapes.add(shape);
    }
}
