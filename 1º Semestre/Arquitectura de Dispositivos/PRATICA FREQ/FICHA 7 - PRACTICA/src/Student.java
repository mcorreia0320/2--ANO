public class Student implements Comparable<Student>{
    private int number;
    private String name;

    public Student() {
        number = 0;
        name = "";
    }
    public Student(int number, String name) {
        this.number = number;
        this.name = name;
    }

    public int getNumber() {
        return number;
    }

    public String getName() {
        return name;
    }

    @Override
    public boolean equals(Object obj) {
        Student other = (Student) obj;
        return this.number == other.number;
    }

    @Override
    public int compareTo(Student other) {
        return this.name.compareTo(other.name);
    }

    @Override
    public String toString() {
        return "[ nome: " + name + ", numero: " + number + "]" ;
    }
}
