import java.util.Scanner;

public class price {
    public static void main(String[] args) {
        System.out.println("음식 이름을 입력하세요");
        Scanner scanner = new Scanner(System.in);
        String name = scanner.nextLine();

        switch (name) {
            case "치킨":
                System.out.println("치킨은 5백원입니다.");
                break;
            case "순대국":
                System.out.println("순대국은 8천원입니다.");
                break;
            case "스테이크":
                System.out.println("스테이크는 5만원입니다.");
                break;
            default:
                System.out.println("메뉴에 존재하지 않는 음식입니다.");
        }
    }
}
