<?php

use SortingString\AlphabeticalSorting;
use PHPUnit\Framework\TestCase;

class AlphabeticalSortingTest extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new AlphabeticalSorting();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function additionProvider() {
        return [
            'eng string' => ['lemon orange banana apple', 'elmno aegnor aaabnn aelpp'],
            'ru string' => ['лимон апельсин банан яблоко', 'илмно аеилнпсь аабнн бклооя'],
            'latin string' => ['αβγαβγ αβγαβγαβγ', 'ααββγγ αααβββγγγ']
        ];
    }


    /**
     * @dataProvider additionProvider
     */
    public function testAdd($string, $expected)
    {
        $result = $this->calculator->sortString($string);
        $this->assertEquals($expected, $result);
    }
}