<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagrams_checkLength()
        {
            $test_Anagram = new Anagram;
            $input = "i";
            $words_to_check = "i";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals("No anagrams", $result);
        }

        function test_findAnagrams_oneWord()
        {
            $test_Anagram = new Anagram;
            $input = "the";
            $words_to_check = "eht";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals("Anagram", $result);
        }

        function test_findAnagrams_oneWord2()
        {
            $test_Anagram = new Anagram;
            $input = "the";
            $words_to_check = "let";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals("No anagrams", $result);
        }

        /*function test_findAnagrams_checkArrayofWords()
        {
            $test_Anagram = new Anagram;
            $input = "the";
            $words_to_check = array("i", "het", "the");

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals("Same length", $result);
        }*/
    }

?>