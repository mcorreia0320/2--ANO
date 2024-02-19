public abstract class Vehicle {
    protected int year;
    protected String brand;
    protected String model;
    protected double price;
    protected String color;

    public Vehicle() {
        year = 0;
        brand = "";
        model = "";
        price = 0.0;
        color = "";
    }

    public Vehicle(int year, String brand, String model, double price, String color) {
        this.year = year;
        this.brand = brand;
        this.model = model;
        this.price = price;
        this.color = color;
    }

    public int getYear() {
        return year;
    }

    public String getBrand() {
        return brand;
    }

    public String getModel() {
        return model;
    }

    public double getPrice() {
        return price;
    }

    public String getColor() {
        return color;
    }

    @Override
    public String toString() {
        return "Year: " + getYear() + "\nBrand: " + getBrand() + "\nModel: " + getModel() + "\nPrice: " + getPrice() + "\nColor: " + getColor();
    }
}
