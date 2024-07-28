<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function allPropertyDeals()
    {
        $response = $this->get('/all/property/deals');
        $response->assertStatus(200);
    }

}
