# _Word Frequency Checker_

#### _This web page allows a user to input a word, and a string of words to check how frequently their word appears in their string, 17 February 2017_

#### By _**Michaela Davis**_

## To see the site live, click below:
[Word Frequency Checker](https://word-frequency-counter.herokuapp.com/)

## Description

_This web page (created using Silex, Twig, and BDD/TDD) allows a user to input a word, and a string of words to check how frequently a word appears in a given string. It checks for full word matches only._

## Setup/Installation Requirements

* In terminal run the following commands:

1. _Fork and clone this repository from_ [gitHub](https://github.com/Michaela-Davis/php_word-frequency.git).
2. Ensure [composer](https://getcomposer.org/) is installed on your computer.
3. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
4. To run tests enter `composer test` in terminal.
4. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using a mac - things are different on a pc).
5. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input 1*    |    *Input 2*    |     *Output*    |
|-----------------|-----------------|-----------------|-----------------|-----------------|
| Find a word occurring once in a sentence.  | "cat" | "Walk the cat" | "Number of time(s) 'cat' appears in the sentence you entered: 1" |
| This is the simplest behavior I could think of. It should be more simple to find a word once than multiple times. I thought of starting with a single letter but everything involved in this challenge is about a string in a certain order.  | Cat, because I own 2. | Cat only occurs once. I wanted to start with something case and reoccurrence wouldn't be a factor in. | Function test_WordFreqChecker_single() $sentence = "Walk the cat"; $find = "cat"; $count = "1"; $test_WordFreq = new WordFreqTest($sentence, $find, $count); result = $test_WordFreq->WordFreqTest(); $this->assertEquals("Walk the cat", $count);|
| Find a word occurring multiple times in a sentence.  | "cat" | "cat walks the cat" | "Number of time(s) 'cat' appears in the sentence you entered: 2" |
| Seemed like the logical progression to find multiple occurrences next. | Same input for consistency | Funny mental image that is case-insensitive| function test_WordFreqChecker_multiple() {$sentence = "cat walks the cat"; $find = "cat"; $count = "2"; $test_WordFreq = new WordFreqTest($sentence, $find, $count); $result = $test_WordFreq->WordFreqTest(); $this->assertEquals("cat walks the cat", $count);} |
| Find a word occurring multiple times in a sentence, regardless of case.  | "cat" | "Cat walks the cat" | "Number of time(s) 'cat' appears in the sentence you entered: 2" |
| If I was using the program I would want it to find matches regardless of case.  | Same input for consistency | Same input for consistency but this time with one "Cat" capitalized to demonstrate ability to match regardless of case | function test_WordFreqChecker_multiple() {$sentence = "Cat walks the cat"; $find = "cat"; $count = "2"; $test_WordFreq = new WordFreqTest($sentence, $find, $count); $result = $test_WordFreq->WordFreqTest(); $this->assertEquals("Cat walks the cat", $count);} |


## Known Bugs

_None so far._

## Support and contact details

_Please contact michaela.delight@gmail.com with concerns or comments._

## Technologies Used

* _Composer_
* _CSS_
* _HTML_
* _PHP_
* _PHPUnit_
* _Silex_
* _Twig_

### License

*MIT license*

Copyright (c) 2017 **_Michaela Davis_**
