<?php
require_once __DIR__ . "/../src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_noneSingle()
        {
        ///   Arrange   ///
            $sentence = "cat";
            $find = "Valen";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats($sentence, $find);

        ///   Assert   ///
            $this->assertEquals("0", $result);
        }

        function test_RepeatCounter_none()
        {
        ///   Arrange   ///
            $sentence = "Walk the cat";
            $find = "Valen";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats($sentence, $find);

        ///   Assert   ///
            $this->assertEquals("0", $result);
        }

        function test_RepeatCounter_single()
        {
        ///   Arrange   ///
            $sentence = "Walk the cat";
            $find = "cat";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats($sentence, $find);

        ///   Assert   ///
            $this->assertEquals("1", $result);
        }

        function test_RepeatCounter_multiple()
        {
        ///   Arrange   ///
            $sentence = "cat walks the cat";
            $find = "cat";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats($sentence, $find);

        ///   Assert   ///
            $this->assertEquals("2", $result);
        }

        function test_RepeatCounter_case()
        {
        ///   Arrange   ///
            $sentence = "Cat walks the cat";
            $find = "cat";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats($sentence, $find);

        ///   Assert   ///
            $this->assertEquals("2", $result);
        }

        function test_RepeatCounter_punctuation()
        {
        ///   Arrange   ///
            $sentence = "Walk the cat!";
            $find = "cat";
            $test_RepeatCounter = new RepeatCounter($sentence, $find);

        ///   Act   ///
            $result = $test_RepeatCounter->countRepeats($sentence, $find);

        ///   Assert   ///
            $this->assertEquals("1", $result);
        }
    }
?>
