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

        // sentence Getter and Setter
        function getSentence()
        {
            return $this->sentence;
        }

        function setSentence($new_sentence)
        {
            $this->sentence = (string) $new_sentence;
        }

        // find Getter and Setter
        function getFind()
        {
            return $this->find;
        }

        function setFind($new_find)
        {
            $this->find = (string) $new_find;
        }



        // Method
        function countRepeats()
        {
            // Arrange
            $sentence_case = strtolower($this->sentence);
            $find = $this->find;
            $sentence_array = explode(" ", $sentence_case);
            $count = 0;

            // Act
            foreach ($sentence_array as $word) {
                $no_punc_word = preg_replace('/[^a-z]+/i', '', $word);
                if ( $no_punc_word == $find ) {
                    $count ++;
                }
            }
            return $count;
        }
    }

// ?>
