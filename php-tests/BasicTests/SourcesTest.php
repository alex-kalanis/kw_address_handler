<?php

namespace BasicTests;


use CommonTestClass;
use kalanis\kw_address_handler\Sources;


class SourcesTest extends CommonTestClass
{
    public function testBasic(): void
    {
        $source = new Sources\Sources();
        $source->setAddress('//abc/def//ghi/jkl');
        $this->assertEquals('/abc/def//ghi/jkl', (string)$source);
        $source->setPath('//abc/def//ghi/jkl');
        $this->assertEquals('//abc/def//ghi/jkl', $source->getPath());
    }

    public function testAddress()
    {
        $source = new Sources\Address('//abc/def//ghi/jkl');
        $this->assertEquals('/abc/def//ghi/jkl', (string)$source);
    }
}
