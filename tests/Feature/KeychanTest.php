<?php

namespace Laxit\Keychan\Tests;

use Laxit\Keychan\Tag;
use PHPUnit\Framework\TestCase;

class KeychanTest extends TestCase
{


    public function testDate()
    {
        $this->setMockDateTime('1997-12-23');
        $this->assertEquals("9779", Tag::date());
        $this->resetMockDateTime();
    }
    public function testTag()
    {
        $this->setMockDateTime('1997-12-23');
        $tag = Tag::generate('order');
        $this->assertStringStartsWith("9779order", $tag);
        $this->resetMockDateTime();
    }

    public function testTagOverride()
    {
        $this->setMockDateTime('1997-12-23');
        $tag = Tag::generate('order', 8);
        $this->assertStringStartsWith("9779order", $tag);
        $this->resetMockDateTime();
    }

    private function setMockDateTime(string $dateTime)
    {
        \Carbon\Carbon::setTestNow($dateTime);
    }

    private function resetMockDateTime()
    {
        \Carbon\Carbon::setTestNow();
    }
}
