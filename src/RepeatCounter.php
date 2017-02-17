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
            $sentence_array = explode(" ", $this->sentence);
            $find_word = $this->find;

            // Act


        }
    }
//
// ?>
