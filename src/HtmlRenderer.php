<?php

namespace Samdark;

final class HtmlRenderer
{
    public function test()
    {
        return 'test';
    }

    public function render(): string
    {
        ob_start();
        require __DIR__ . '/template.php';
        return ob_get_clean();
    }
}
