import java.util.*;
import java.io.*;
import java.math.*;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int size = in.nextInt();

        for(int i = 0; i < size; i++) {
            String ast = "*";
            System.out.println(" ".repeat(i) + ast.repeat(i+1));
        }
    }
}
