<?php
require_once __DIR__ . "/../src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_single()
        {
        ///   Arrange   ///
            $sentence = "Walk the cat";
            $find = "cat";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats();

        ///   Assert   ///
            $this->assertEquals("1", $result);
        }

        // function test_WordFreqChecker_multiple()
        // ///   Arrange   ///
        //     $sentence = "cat walks the cat";
        //     $find = "cat";
        //     $count = "2";
        //     $test_WordFreq = new WordFreqTest($sentence, $find, $count);
        //
        // ///   Act   ///
        //     $result = $test_WordFreq->WordFreqTest();
        //
        // ///   Assert   ///
        //     $this->assertEquals("cat walks the cat", $count);
        // }
        //
        // function test_WordFreqChecker_case()
        // ///   Arrange   ///
        //     $sentence = "Cat walks the cat";
        //     $find = "cat";
        //     $count = "2";
        //     $test_WordFreq = new WordFreqTest($sentence, $find, $count);
        //
        // ///   Act   ///
        //     $result = $test_WordFreq->WordFreqTest();
        //
        // ///   Assert   ///
        //     $this->assertEquals("Cat walks the cat", $count);
        // }
    }
?>
