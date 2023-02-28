public class NestedIf {
    public static void main(String[] args) {
        System.out.println(true && true);
        System.out.println(false && true);
        System.out.println(false && false);
        System.out.println(true && false);
        System.out.println(true || true);
        System.out.println(false || true);
        System.out.println(true || false);
        System.out.println(false || false);

        int age = 15;

        if (age < 10 || age >= 20) {
            System.out.println("10대 아님");
        } else {
            System.out.println("10대");
        }
    }
}
