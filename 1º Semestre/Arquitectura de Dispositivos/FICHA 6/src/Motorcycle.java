public class Motorcycle extends Vehicle{
    private boolean isAutomatic;

    public Motorcycle() {
        super();
        isAutomatic = false;
    }
    public Motorcycle(boolean isAutomatic, int year, String brand, String model, double price, String color) {
        super(year,brand,model,price,color);
        this.isAutomatic = isAutomatic;
    }
    @Override
    public String toString(){
        return super.toString() + "\nCaja: " + ((isAutomatic == false) ? "Manual" : "Automatica");
    }
}
