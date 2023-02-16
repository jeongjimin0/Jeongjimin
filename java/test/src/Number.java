public class Number {
    public static void main(String[] args) {
        byte byteInteger = 10;
        short shortInteger = 20;
        int intInteger = 30;
        long longInteger = 40;
        float floatNumber = 1.2f;
        double doubleNumber = 4.3;
        float floatSum = 0.001f + 0.001f + 0.001f;
        int sum = byteInteger + shortInteger;
        int sum2 = shortInteger + intInteger;
        long sum3 = intInteger + longInteger;
        long sum4 = byteInteger + longInteger;

        boolean trueValue = true;
        boolean falseValue = false;
        boolean question = 5 > 3;

        System.out.println(trueValue);
        System.out.println(falseValue);
        System.out.println(question);

        System.out.println(byteInteger);
        System.out.println(shortInteger);
        System.out.println(intInteger);
        System.out.println(longInteger);
        System.out.println(sum4);
        System.out.println(floatNumber);
        System.out.println(doubleNumber);
        System.out.println(floatSum);
    }
}
