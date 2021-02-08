<?php

namespace RealAddressGenerator\Tests;

use PHPUnit\Framework\TestCase;
use RealAddressGenerator\Generator;

class GeneratorTest extends TestCase
{
    protected function getTestGenerator()
    {
        return new Generator(__DIR__.'/test.geojson.gz');
    }

    /**
     * @group getLinesInDataset
     */
    public function test_getLinesInDataset_returns_expected_row_count()
    {
        $generator = $this->getTestGenerator();
        $this->assertEquals(1, $generator->getLinesInDataset());
    }

    /**
     * @group address
     */
    public function test_address_returns_random_address_from_dataset()
    {
        $generator = $this->getTestGenerator();
        $generatedAddress = $generator->address();

        $this->assertNotNull($generatedAddress->properties->street);
        $this->assertNotNull($generatedAddress->properties->number);
        $this->assertNotNull($generatedAddress->properties->city);
        $this->assertNotNull($generatedAddress->properties->postcode);
        $this->assertNotNull($generatedAddress->properties->region);
    }
}
