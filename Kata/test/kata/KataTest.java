/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit4TestClass.java to edit this template
 */
package kata;

import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author bapti
 */
public class KataTest {
    
    public KataTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
  

    /**
     * Test of toRoman method, of class Kata.
     */
    @Test
    public void test50() throws Exception {
        // Retourne true
        assertEquals("L", Kata.toRoman(50));
    }   
    @Test
    public void test500() throws Exception {
        // Retourne true
        assertEquals("D", Kata.toRoman(500));
    }
    @Test
    public void test9() throws Exception{
        // Retourne true
        assertEquals("IX", Kata.toRoman(9));
    }
    @Test
    public void test102() throws Exception{
        // Retourne true
        assertEquals("CII", Kata.toRoman(102));
    }
    @Test
    public void test0() throws Exception{
        // Retourne true
        assertEquals("Chiffre égal à 0", Kata.toRoman(0));
    }
}
