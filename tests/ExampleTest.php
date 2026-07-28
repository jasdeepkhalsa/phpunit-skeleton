<?php

declare(strict_types=1);

namespace Tests;

use Application\Example;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private Example $example;

    protected function setUp(): void
    {
        $this->example = new Example();
    }

    /**
     * @return array<int, array{0: int|float, 1: int|float, 2: int|float}>
     */
    public static function numberProvider(): array
    {
        return [
            [3, 1, 2],
            [-5, -1, -4],
            [10.5, 10, 0.5],
        ];
    }

    #[DataProvider('numberProvider')]
    public function testAddReturnsTheSumOfTwoNumbers(int|float $expected, int|float $x, int|float $y): void
    {
        $this->assertEquals($expected, $this->example->add($x, $y));
    }

    public function testAddThrowsExceptionForNonNumericArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->example->add(1, []);
    }

    protected function tearDown(): void
    {
        unset($this->example);
    }
}
