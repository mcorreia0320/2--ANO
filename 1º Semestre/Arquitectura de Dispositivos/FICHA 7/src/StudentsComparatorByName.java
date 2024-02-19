import java.util.Comparator;

public class StudentsComparatorByName implements Comparator<Student> {

    public StudentsComparatorByName(){};

    @Override
    public int compare(Student o1, Student o2) {
        return o1.getName().compareTo(o2.getName());
    }
}
