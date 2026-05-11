<?php
/**
 * Tests for TokenGraph
 */

use PHPUnit\Framework\TestCase;
use Tokengraph\Tokengraph;

class TokengraphTest extends TestCase {
    private Tokengraph $instance;

    protected function setUp(): void {
        $this->instance = new Tokengraph(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokengraph::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
