<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagrams_inputOutput()
        {
            $test_Anagram = new Anagram;
            $input = "i";

            $result = $test_Anagram->findAnagrams($input);

            $this->assertEquals(["i"], $result);
        }

        function test_findAnagrams_splitString()
        {
            $test_Anagram = new Anagram;
            $input = "the";

            $result = $test_Anagram->findAnagrams($input);

            $this->assertEquals(["t", "h", "e"], $result);
        }
    }

?>
