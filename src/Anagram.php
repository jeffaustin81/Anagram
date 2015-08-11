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
            $anagram_array = array();
            foreach ($array_words_to_check as $word)
            {
                $split_word = str_split($word);
                sort($split_word);

                if ($split_word === $input_array) {
                    $not_split_word = implode(" ", $split_word);
                    array_push($anagram_array, $not_split_word);
                    return $anagram_array;
                } else {
                    return $anagram_array;
                }

            }


        }


    }

 ?>
