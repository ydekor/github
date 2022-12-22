<?php
require_once 'src/date.php';
use PHPUnit\framework\TestCase;

class DateTests extends TestCase {
    private $date;

    protected function setUp(): void {
        $this->date = new Date(1, 2, 2001);
    }

    public function testDay(): void {
        $date2 = new Date(1, 4, 2001);
        $this->assertEquals($this->date->raznicaDney($date2), 62);
    }

    public function testMinusDay(): void {
        $this->assertEquals($this->date->minusDay(4), '28.01.2001');
    }

    public function testGetWeek(): void {
        $this->assertEquals($this->date->getWeek(), 'Tuesday');
    }

    public function testRUEN(): void {
        $this->assertEquals($this->date->RUEN('RUS'), '28.01.2001');
    }
    
}