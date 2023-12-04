<?php

namespace Aatis\TemplateRenderer\Service;

use Aatis\TemplateRenderer\Interface\TemplateRendererInterface;

class PhpRenderer implements TemplateRendererInterface
{
    public const EXTENSION = '.tpl.php';

    public function render(string $template, array $vars = []): void
    {
        if (!isset($vars['renderer'])) {
            $vars['renderer'] = $this;
        }

        extract($vars);
        require_once $template;
    }
}
