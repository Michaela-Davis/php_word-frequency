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
            $count = 0;

            // Act
            foreach ($sentence_array as $word) {
                if ( $word == $find ) {
                    $count = $count + 1;
                }
            }
            return $count;
        }
    }

// ?>
