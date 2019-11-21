<?php

namespace Samdark\Tests;

use PHPUnit\Framework\TestCase;
use Samdark\HtmlRenderer;

class ATest extends TestCase
{
    public function testIt(): void
    {
        $renderer = new HtmlRenderer();
        $output = $renderer->render();
        $this->assertSame('test', $output);
    }
}
