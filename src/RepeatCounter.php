<?php

    class RepeatCounter
    {
        private $sentence;
        private $find;

        // RepeatCounter constructor
        function __construct($sentence, $find)
        {
            $this->sentence = $sentence;
            $this->find = $find;
        }

        // Method(s)
        function countRepeats()
        {
            // Arrange
            $sentence = $this->sentence;
            $find = $this->find;
            $sentence_array = explode(" ", $this->sentence);
            // $find_word = $this->find;
            $count = 0;

            // Act
            // for each loop on the sentence checking each sentence as  a word to see if they match, if yes return +1
            // foreach sentence as word add 1 to the counter if the word matches find_word
            foreach ($sentence_array as $word) {
                if ( $word == $find ) {
                    $count = $count + 1;
                    $result = $count;
                } else {
                    return "0";
                }
            }


        }
    }
//
// ?>
