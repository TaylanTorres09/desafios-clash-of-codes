// You must feed your d dogs, for that you have k grams of kibble. Each weight of dog corresponds to a dose of kibble :
// weight ≤ 5kg corresponds to 80g
// 5kg < weight ≤ 10kg corresponds to 150g
// 10kg < weight ≤ 20kg corresponds to 260g
// 20kg < weight ≤ 30kg corresponds to 375g
// 30kg < weight ≤ 40kg corresponds to 470g
// 40kg < weight ≤ 50kg corresponds to 560g
// 50kg < weight corresponds to 600g

// Will your reserves be enough to feed all your dogs ?

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
        int k = in.nextInt();
        int d = in.nextInt();
        double sum;

        sum = 0;
        for (int i = 0; i < d; i++) {
            double weight = in.nextDouble();

            if (weight <= 5)    
                sum += 80;
            else if (weight > 5 && weight <= 10)
                sum += 150;
            else if (weight > 10 && weight <= 20)
                sum += 260;
            else if (weight > 20 && weight <= 30)
                sum += 375;
            else if (weight > 30 && weight <= 40)
                sum += 470;
            else if (weight > 40 && weight <= 50)
                sum += 560;
            else if (weight > 50)
                sum += 600;
        }
        if ((int)sum <= k)
            System.out.println("Yes");
        else
            System.out.println((int)sum - k);
        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");
    }
}
