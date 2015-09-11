<?php

use Chonla\Randomizr\Randomizr;
use \Mockery as m;

class RandomizrTest extends PHPUnit_Framework_TestCase {
    public function tearDown() {
        m::close();
    }

    public function testRandShouldReturnStringWithGivenLength() {
        $rand = new Randomizr;
        $return = $rand->rand('a', 9);
        $this->assertEquals(9, strlen($return));
    }

    public function testRandShouldReturnOnlyCharacterInDomain() {
        $rand = new Randomizr;
        $return = $rand->rand('a', 9);
        $this->assertEquals('aaaaaaaaa', $return);
    }

    public function testRandomNumberShouldPassNumberDomain() {
        $rand = m::mock('Chonla\Randomizr\Randomizr[rand]');
        $rand->shouldReceive('rand')->times(1)->with(Randomizr::NUMERIC, 4);
        $rand->number(4);
    }

    public function testRandomAlphaShouldPassAToZDomain() {
        $rand = m::mock('Chonla\Randomizr\Randomizr[rand]');
        $rand->shouldReceive('rand')->times(1)->with(Randomizr::ALPHABETIC, 9);
        $rand->alphabet(9);
    }

    public function testRandomAlphaNumericShouldPassAlphaNumericDomain() {
        $rand = m::mock('Chonla\Randomizr\Randomizr[rand]');
        $rand->shouldReceive('rand')->times(1)->with(Randomizr::ALPHANUMERIC, 7);
        $rand->alphanumeric(7);
    }

    public function testRandomHexadecimalShouldPassHexadecimalcDomain() {
        $rand = m::mock('Chonla\Randomizr\Randomizr[rand]');
        $rand->shouldReceive('rand')->times(1)->with(Randomizr::HEXADECIMAL, 7);
        $rand->hexadecimal(7);
    }
}