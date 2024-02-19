public class Car extends Vehicle{
    private int doors;

    public Car(){
        // Invoca o constructor de la clase que hereda
        super();
        this.doors = 0;
    }

    public Car (int doors, int year, String brand, String model, double price, String color){
        super(year,brand,model,price,color);
        this.doors = doors;
    }

    @Override
    public String toString() {
        return super.toString() + "\nDoors: " + this.doors;
    }
}
