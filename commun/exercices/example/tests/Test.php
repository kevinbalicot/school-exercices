<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testDisplayHelloWorld(): void
    {
        $script = __DIR__ . '/../response/main.php';
        $expected = 'Hello world!';
        $errorMessage = sprintf('❌ Main.php not displaying "%s", Type: check the documentation.', $expected);

        exec(sprintf('php %s', $script), $output);

        $this->assertEquals($expected, $output[0] ?? '', $errorMessage);
    }
}
