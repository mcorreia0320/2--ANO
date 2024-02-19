import javax.sound.sampled.Line;
import java.util.*;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {

    //b
    public static void b() {
        MenuGame[] options = MenuGame.values();

        for (MenuGame option : options) {
            String name = option.name();
            System.out.println(name);
        }
    }

    //c
    public static void c() {

        Scanner scanner = new Scanner(System.in);
        System.out.println("Introduza um comando:");
        String line = scanner.nextLine();

        try{
            MenuGame option = MenuGame.valueOf(line);


        } catch (IllegalArgumentException e) {
            System.out.println("A opção não existe!");
        }
    }
    // d
    public static void d() {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Introduza um comando:");
        String line = scanner.nextLine();

            try{
                MenuGame option = MenuGame.valueOf(line);

                switch(option){
                    case START:
                        System.out.println("START");
                        break;
                    case SAVEGAME:
                        System.out.println("SAVEGAME");
                        break;
                    case LOADGAME:
                        System.out.println("LOADGAME");
                        break;
                    case HIGHSCORES:
                        System.out.println("HIGHSCORE");
                        break;
                    case QUIT:
                        System.out.println("QUIT");
                        break;
                }
            }catch (IllegalArgumentException e) {
                System.out.println("A opção não existe!");
            }
    }


    public static void main(String[] args) {
        //b
        //Main.b();
        //c
        //Main.c();
        //d
        //Main.d();
        //e

        /*Rational r1 = new Rational(1,2);
        Rational r2 = new Rational(1,3);
        Rational r3 = new Rational(1,4);
        Rational r4 = new Rational(1,6);
        Rational r5 = new Rational(1,8);

        ArrayList<Rational> rationalArrayList = new ArrayList<Rational>();

        rationalArrayList.add(r1);
        rationalArrayList.add(r2);
        rationalArrayList.add(r3);
        rationalArrayList.add(r4);
        rationalArrayList.add(r5);

        Collections.sort(rationalArrayList);

        for (Rational rational: rationalArrayList) {
            System.out.println(rational.toString());
        }*/

        Student student1 = new Student(1, "Miguel");
        Student student2 = new Student(3, "Jacky");
        Student student3 = new Student(2, "Saul");
        Student student4 = new Student(5, "Roberto");
        Student student5 = new Student(4, "David");
        Student student6 = new Student(5, "Miguel");

        ArrayList<Student> studentArrayList = new ArrayList<Student>();

        studentArrayList.add(student1);
        studentArrayList.add(student2);
        studentArrayList.add(student3);
        studentArrayList.add(student4);
        studentArrayList.add(student5);
        studentArrayList.add(student6);

        //Collections.sort(studentArrayList);
        //Collections.sort(studentArrayList, new StudentsComparatorByName());
        Collections.sort(studentArrayList, new StudentsComparatorByNumber());

        /*for (Student s: studentArrayList) {
            System.out.println(s.getNumber());
        }*/

        Course course1 = new Course(1, "Math", 60, 1);
        Course course2 = new Course(3, "Port", 50, 2);
        Course course3 = new Course(2, "Prog", 70, 3);
        Course course4 = new Course(5, "Hist", 40, 2);

        Map<String, Course> courses = new HashMap<String, Course>();

        courses.put(course1.getName(), course1);
        courses.put(course2.getName(), course2);
        courses.put(course3.getName(), course3);
        courses.put(course4.getName(), course4);

        if (courses.containsKey("Prog")){
            //System.out.println(courses.get("Prog").toString());
        }

        for (String key : courses.keySet()) {
            //System.out.println(key);
        }

        for (String key : courses.keySet()) {
            //System.out.println(courses.get(key).toString());
        }

        for (String key : courses.keySet()) {
            //System.out.println(key + ": " + courses.get(key).toString());
        }

        Map<Integer, ArrayList<Course>> courseMapByYear = new HashMap<Integer, ArrayList<Course>>();

        for (String key: courses.keySet()) {
            Course course = courses.get(key);
            int ano = course.getAno();

            if (courseMapByYear.containsKey(ano)) {
                courseMapByYear.get(ano).add(course);
            } else {
                courseMapByYear.put(ano, new ArrayList<>());
                courseMapByYear.get(ano).add(course);
            }
        }

        for (Integer key : courseMapByYear.keySet()) {
            ArrayList<Course> array = courseMapByYear.get(key);
            StringBuilder result = new StringBuilder(key + ": [ ");

            for (int i = 0; i < array.size(); i++) {
                if (array.size() > 1  && i != array.size() - 1) {
                    result.append(array.get(i).toString()).append(", ");
                }
                else result.append(array.get(i).toString());
            }

            result.append(" ]");
            System.out.println(result);
        }
    }
}