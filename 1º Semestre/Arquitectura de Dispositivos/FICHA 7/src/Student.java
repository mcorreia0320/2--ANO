public class Student implements Comparable<Student>{
    private int number;
    private String name;

    public Student(int number, String name){
        this.number = number;
        this.name= name;
    }

    public String getName() {
        return name;
    }

    public int getNumber() {
        return number;
    }

    @Override
    public boolean equals(Object obj) {
        Student other = (Student) obj;
        return this.number == other.getNumber();
    }

    @Override
    public int compareTo(Student other) {
        return this.number - other.number;
    }
}
