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
            $sentence_case = strtolower($this->sentence);
            $find = $this->find;
            $sentence_array = explode(" ", $sentence_case);
            $count = 0;

            // Act
            foreach ($sentence_array as $word) {
                if ( $word == $find ) {
                    $count ++;
                }
            }
            return $count;
        }
    }

// ?>
