TestCase("NumberToNumber - convert 1 number to arabicWords", {
    "test - 1 should return 'I'": function() {

        var converter = new Converter();
        var result = converter.ConvertNumberToWords(1);
        assertEquals('I', result);
    }
});