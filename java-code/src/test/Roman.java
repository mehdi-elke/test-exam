package test;

import java.util.TreeMap;

public class Roman {
    private final static TreeMap<Integer, String> map = new TreeMap<>();

    static { //Initialisation des valeurs lors de l'appel de la classe, en val decroissant
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


    public static String toRoman(int param) {
        int greatestNumber = map.floorKey(param);
        if (param == greatestNumber) {
            return map.get(param);
        }
        return map.get(greatestNumber) + toRoman(param - greatestNumber); //Permet de faire boucler la fonction et de concaténer les résultats
    }

}
