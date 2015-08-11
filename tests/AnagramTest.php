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

            $this->assertEquals(["eht"], $result);
        }

        function test_findAnagrams_oneWord2()
        {
            $test_Anagram = new Anagram;
            $input = "the";
            $words_to_check = "let";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals([], $result);
        }

        function test_findAnagrams_multipleWords()
        {
            $test_Anagram = new Anagram;
            $input = "the";
            $words_to_check = "eth het";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals(["eth", "het"], $result);
        }

        function test_findAnagrams_partialMatch()
        {
            $test_Anagram = new Anagram;
            $input = "path";
            $words_to_check = "hat";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals(["hat"], $result);
        }

        function test_findAnagrams_partialMatchMulti()
        {
            $test_Anagram = new Anagram;
            $input = "path";
            $words_to_check = "hat hapt hatl hatt";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals(["hat", "hapt"], $result);
        }

        function test_findAnagrams_partialMatchMulti2()
        {
            $test_Anagram = new Anagram;
            $input = "patht";
            $words_to_check = "hat hapt hatl hatt";

            $result = $test_Anagram->findAnagrams($input, $words_to_check);

            $this->assertEquals(["hat", "hapt", "hatt"], $result);
        }
    }

?>
