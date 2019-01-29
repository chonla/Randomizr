<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Chonla\Randomizr\Randomizr;

final class RandomizrTest extends TestCase {
    public function testRandShouldReturnStringWithGivenLength(): void {
        $rand = new Randomizr;
        $return = $rand->rand('a', 9);
        $this->assertEquals(9, strlen($return));
    }

    public function testRandShouldReturnOnlyCharacterInDomain(): void {
        $rand = new Randomizr;
        $return = $rand->rand('a', 9);
        $this->assertEquals('aaaaaaaaa', $return);
    }

    public function testRandomNumberShouldPassNumberDomain(): void {
        $rand = $this->getMockBuilder(Chonla\Randomizr\Randomizr::class)
                     ->setMethods(['rand'])
                     ->getMock();

        $rand->expects($this->once())
             ->method('rand')
             ->with(Randomizr::NUMERIC, 4);

        $rand->number(4);
    }

    public function testRandomAlphaShouldPassAToZDomain(): void {
        $rand = $this->getMockBuilder(Chonla\Randomizr\Randomizr::class)
                     ->setMethods(['rand'])
                     ->getMock();

        $rand->expects($this->once())
            ->method('rand')
            ->with(Randomizr::ALPHABETIC, 9);
        
        $rand->alphabet(9);
    }

    public function testRandomAlphaNumericShouldPassAlphaNumericDomain(): void {
        $rand = $this->getMockBuilder(Chonla\Randomizr\Randomizr::class)
                     ->setMethods(['rand'])
                     ->getMock();

        $rand->expects($this->once())
            ->method('rand')
            ->with(Randomizr::ALPHANUMERIC, 7);

        $rand->alphanumeric(7);
    }

    public function testRandomHexadecimalShouldPassHexadecimalcDomain(): void {
        $rand = $this->getMockBuilder(Chonla\Randomizr\Randomizr::class)
                     ->setMethods(['rand'])
                     ->getMock();

        $rand->expects($this->once())
            ->method('rand')
            ->with(Randomizr::HEXADECIMAL, 7);

        $rand->hexadecimal(7);
    }
}