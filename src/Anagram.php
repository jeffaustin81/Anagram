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
                $sorted_split_word = $split_word;
                sort($sorted_split_word);
                $not_split_word = implode($split_word);

                if ($sorted_split_word === $input_array) {

                    array_push($anagram_array, $not_split_word);
                } else if (array_intersect($sorted_split_word, $input_array) === $sorted_split_word)
                {
                    array_push($anagram_array, $not_split_word);
                }

            }

            return $anagram_array;


        }


    }

 ?>
