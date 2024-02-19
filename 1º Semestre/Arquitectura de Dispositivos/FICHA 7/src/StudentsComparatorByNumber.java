import java.util.Comparator;

public class StudentsComparatorByNumber implements Comparator<Student> {


    public StudentsComparatorByNumber(){};

    @Override
    public int compare(Student o1, Student o2) {
        return o1.getNumber() - o2.getNumber() ;
    }
}
