import java.util.*;

// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {

    // b
    public static void b() {
        for (MenuGame option : MenuGame.values()) {
            System.out.println(option);
        }
    }
    // c
    public  static void c(){
        MenuGame option = MenuGame.HIGHSCORES;

        if (option.equals(MenuGame.START)) {
            System.out.println("START");
        } else if (option.equals(MenuGame.SAVEGAME)) {
            System.out.println("SAVEGAME");
        } else if (option.equals(MenuGame.LOADGAME)) {
            System.out.println("LOADGAME");
        } else if (option.equals(MenuGame.HIGHSCORES)) {
            System.out.println("HIGHSCORE");
        } else if (option.equals(MenuGame.QUIT)) {
            System.out.println("QUIT");
        }
    }

    //d
    public static void d(){
        MenuGame option = MenuGame.START;
        switch (option) {
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
            default:
                System.out.println("A opção não existe");
                break;
        }
    }

    public static void main(String[] args) {
        //b();
        //c();
        //d();

        Rational r1 = new Rational(1,2);
        Rational r2 = new Rational(1, 6);
        Rational r3 = new Rational(1, 3);
        Rational r4 = new Rational(1,8);

        //System.out.println(r1.equals(r2));
        //System.out.println(r3.compareTo(r1));

        /*ArrayList<Rational> rationalList = new ArrayList<Rational>();
        rationalList.add(r1);
        rationalList.add(r2);
        rationalList.add(r3);
        rationalList.add(r4);

        Collections.sort(rationalList);

        for (Rational item: rationalList) {
            System.out.println(item);
        }
        */
        /*
        Student s1 = new Student(2019122, "Miguel");
        Student s2 = new Student(2048122, "Saul");
        Student s3 = new Student(2020113, "Jacky");
        Student s4 = new Student(2018098, "Roberto");
        Student s5 = new Student(2017111, "Anuel");
        Student s6 = new Student(2020121, "Feid");

        ArrayList<Student> studentArrayList = new ArrayList<Student>();


        studentArrayList.add(s1);
        studentArrayList.add(s2);
        studentArrayList.add(s3);
        studentArrayList.add(s4);
        studentArrayList.add(s5);
        studentArrayList.add(s6);

        Collections.sort(studentArrayList, new StudentsComparatorByNumber());

        for (Student item : studentArrayList) {
            System.out.println(item);
        }
        */

        Course course1 = new Course(1, "Math", 60, 3);
        Course course2 = new Course(3, "Port", 50, 2);
        Course course3 = new Course(2, "Prog", 70, 3);
        Course course4 = new Course(5, "Hist", 40, 2);

        HashMap<String, Course> courseHashMap = new HashMap<String, Course>();

        courseHashMap.put("Matematica", course1);
        courseHashMap.put("Portugues", course2);
        courseHashMap.put("Programação", course3);
        courseHashMap.put("Historia", course4);

        // d System.out.println(courseHashMap.get("Matematica"));
        // d System.out.println(courseHashMap.containsKey("Matematica"));

        /* e
        for (String key: courseHashMap.keySet()) {
            System.out.println(key);
        }
        */


        //for (Course item : courseHashMap.values()) {
        //    System.out.println(item);
        //}

        //g
        //for (String key : courseHashMap.keySet()) {
        //    System.out.println(key + ": " + courseHashMap.get(key));
        //}

        //h

        HashMap<Integer, ArrayList<Course>> CoursesByYear = new HashMap<Integer, ArrayList<Course>>();

        for (Course course: courseHashMap.values()) {
            int ano = course.getAno();

            if (!CoursesByYear.containsKey(ano)){
                CoursesByYear.put(ano, new ArrayList<Course>());
                CoursesByYear.get(ano).add(course);
            }

            else{
                CoursesByYear.get(ano).add(course);
            }
        }

        for (Integer key : CoursesByYear.keySet()) {
            ArrayList<Course> array = CoursesByYear.get(key);
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