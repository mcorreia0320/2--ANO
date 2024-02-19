public class Course {
    private int code;
    private String name;
    private int ects;
    private int ano;

    public Course(){
        code = 0;
        name = "";
        ects = 0;
        ano = 0;
    }

    public Course(int code, String name, int ects, int ano){
        this.code = code;
        this.name = name;
        this.ects = ects;
        this.ano = ano;
    }

    public String getName() {
        return name;
    }

    public int getAno() {
        return ano;
    }

    public int getEcts() {
        return ects;
    }

    public int getCode() {
        return code;
    }

    @Override
    public boolean equals(Object obj) {
        Course other = (Course) obj;
        return this.code == other.code;
    }

    @Override
    public String toString(){
        return "{code: "  + this.code + ", name: " + this.name + ", ects: " + this.ects + ", ano: " + this.ano + '}';
    }
}
