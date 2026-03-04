<?php
/**
 * Tests for ChainVault
 */

use PHPUnit\Framework\TestCase;
use Chainvault\Chainvault;

class ChainvaultTest extends TestCase {
    private Chainvault $instance;

    protected function setUp(): void {
        $this->instance = new Chainvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
