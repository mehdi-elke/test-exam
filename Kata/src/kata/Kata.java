/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package kata;


import java.util.TreeMap;

/**
 *
 * @author bapti
 */
public class Kata {
    private final static TreeMap<Integer, String> map = new TreeMap<Integer, String>();
    static {

        map.put(1000, "M");
        map.put(900, "CM");
        map.put(500, "D");
        map.put(400, "CD");
        map.put(100, "C");
        map.put(90, "XC");
        map.put(50, "L");
        map.put(40, "XL");
        map.put(10, "X");
        map.put(9, "IX");
        map.put(5, "V");
        map.put(4, "IV");
        map.put(1, "I");

    }
    /**
    public static void main(String[] args) {
        
    }
    **/
    public static String toRoman(int nb) {
        if(nb == 0){
            return "Chiffre égal à 0";
        }else if (nb < 0){
            return "Chiffre inférieur à 0";
        }else{
            int greatestNumber = map.floorKey(nb);
            if (nb == greatestNumber) {
                return map.get(nb);
            }
            return map.get(greatestNumber) + toRoman(nb - greatestNumber);

        }
    }
    
    
    
}
