// Question:
// Given an integer N, you have to output the sum of the squares of the Nth first odd numbers
// For example, if N is 5, the sum of the squares of the Nth first odd numbers is 1**2 + 3**2 + 5**2 + 7**2 + 9**2 = 165
// so you have to output 165

import java.util.*;
import java.io.*;
import java.math.*;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
class SumOdderSquare {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();

        int num = 1;
        List<Integer> nums = new ArrayList<>();

        for(int i = 0; i < n; i++) {
            nums.add(num);
            num+=2;
        }

        int sumSquare = 0;
        for(Integer i: nums) {
            sumSquare += i*i;
        }
        System.out.println(sumSquare);
    }
}
