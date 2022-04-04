package test;

import org.junit.Test;

import static org.junit.Assert.assertArrayEquals;
import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertFalse;
import static org.junit.Assert.assertNotNull;
import static org.junit.Assert.assertNotSame;
import static org.junit.Assert.assertNull;
import static org.junit.Assert.assertSame;
import static org.junit.Assert.assertThat;
import static org.junit.Assert.assertTrue;

/**
 * main Tester.
 *
 * @author <Authors name>
 * @version 1.0
 * @since <pre>avr. 4, 2022</pre>
 */
public class romanTest {
    Roman roman = new Roman();

    @Test
    public void test50() throws Exception {
        assertEquals("L", Roman.toRoman(50)); //true
    }

    @Test
    public void test99False() throws Exception{
        assertEquals("IC", Roman.toRoman(99)); //false
    }

    @Test
    public void test99() throws Exception{
        assertEquals("XCIX", Roman.toRoman(99)); //true
    }
    @Test
    public void test500() throws Exception {
        assertEquals("D", Roman.toRoman(500)); //true

    }
    @Test
    public void test500D() throws Exception {
        assertEquals("D", Roman.toRoman(500)); //true

    }
    @Test
    public void test9() throws Exception{
        assertEquals("IX", Roman.toRoman(9)); //true
    }

    @Test
    public void test102() throws Exception{
        assertEquals("CII", Roman.toRoman(102));
    }
} 
