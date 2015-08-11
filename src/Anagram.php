<?php

    class Anagram
    {
        function findAnagrams($input, $words_to_check)
        {
            $input_array = str_split($input);
            sort($input_array);
            if (strlen($input) == 1)
            {
                return "No anagrams";
            }

            $array_words_to_check = explode(" ", $words_to_check);
            foreach ($array_words_to_check as $word)
            {
                $split_word = str_split($word);
                sort($split_word);

                if ($split_word === $input_array) {
                    return "Anagram";
                } else {
                    return "No anagrams";
                }
            }


        }


    }

 ?>
