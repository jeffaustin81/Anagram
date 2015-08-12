<?php

    class Anagram
    {
        function findAnagrams($input, $words_to_check)
        {
            // Takes input and splits string into an array of letters
            // then sorts those letters into alphabetical order
            $input_array = str_split($input);
            sort($input_array);

            // if input is only one letter reurns "No anagrams"
            if (strlen($input) == 1)
            {
                return "No anagrams";
            }

            // Takes words to check and explodes the input into an array
            // of the words entered and then we create an empty array to
            // store evaluated words
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
                } else if (array_intersect($sorted_split_word, $input_array) === array_unique($sorted_split_word))
                {
                    array_push($anagram_array, $not_split_word);
                }

            }

            return $anagram_array;


        }


    }

 ?>
