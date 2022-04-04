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
    public void testToRoman() {
        // Retourne true
        assertEquals("L", Kata.toRoman(50));
        
    }
    
}
