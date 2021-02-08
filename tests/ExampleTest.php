<?php

namespace PackageNameTests;

use PackageName\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_returns_true_by_default()
    {
        $example = new Example();
        $this->assertTrue($example->test());
    }

    public function test_returns_value_parameter()
    {
        $example = new Example();
        $this->assertEquals('my-value', $example->test('my-value'));
    }
}
