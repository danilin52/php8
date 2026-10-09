<?php
namespace MVC\Views;

abstract class MarkdownView extends ViewFactory
{
    const LAYOUT = "# {{{title}}}\n\n{{{body}}}\n";

    protected $replacements;

    public function __construct(object $decorator)
    {
        $this->replacements = [
            '{{{title}}}' => $decorator->title(),
            '{{{body}}}'  => $decorator->md(),
        ];
    }

    public function render() : string
    {
        return str_replace(
            array_keys($this->replacements),
            array_values($this->replacements),
            self::LAYOUT
        );
    }
}