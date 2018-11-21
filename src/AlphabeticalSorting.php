<?php
/**
 * Class AlphabeticalSorting
 */

namespace SortingString;

class AlphabeticalSorting
{


    /**
     * Alphabetical word sorting
     *
     * @param string $string
     * @return string
     */
    public function sortString($string)
    {

        $process_arr = [];

        $array_words = explode(' ', $string);

        foreach ($array_words as $word) {
            $process_arr[] = $this->sortLetter($word);
        }

        return implode(' ', $process_arr);
    }


    /**
     * Sort letters in a word
     *
     * @param string $word
     * @return string
     */
    protected function sortLetter($word)
    {
        $array_letter = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);

        return implode($this->sortArray($array_letter));
    }


    /**
     * Sorting an array of letters in ascending order
     *
     * @param array $array_letters
     * @return array
     */
    protected function sortArray($array_letters)
    {
        $array_lower = array_map('mb_strtolower', $array_letters);
        array_multisort($array_lower, SORT_ASC, SORT_STRING, $array_letters);

        return $array_letters;
    }

}