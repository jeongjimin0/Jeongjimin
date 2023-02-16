public class StringExample {
    public static void main(String[] args) {
        String me = "살은 내가 쪄요";
        String replaced = me.replaceAll("내가", "치킨이");
        System.out.println(replaced);
        int length = me.length();

        String birthday = "1970/01/01";
        String year = birthday.substring(0, 4);
        String day = birthday.substring(8);
        System.out.println(year);
        System.out.println(day);

        System.out.println("\n나는 문자열");
        System.out.println('문');

        System.out.println("안녕 나는 \"자바\"야.");
        // 주석을 배워봅시다.
        System.out.println("치킨은 살 안 쪄요. \n살은 내가 쪄요.");
    }
}
