// Given a list of integers, multiply the even integers by 3 and the odd integers with 5. Return the sum of all the items after the multiplication.
import java.util.*;
class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int length = in.nextInt();
        int sum = 0;
        for (int i = 0; i < length; i++) {
            int number = in.nextInt();
            if(number%2==0) {
                sum += number*3;
            } else {
                sum += number*5;
            }
        }
        System.out.println(sum);
        in.close();
    }
}
