<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('filter_name', [$this, 'doSomething']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_numeric_array', fn($arr) => array_keys($arr) === range(0, count($arr) - 1)),
            new TwigFunction('is_object', fn($x) => is_object($x)),
            new TwigFunction('is_numeric', fn($x) => is_numeric($x)),
            new TwigFunction('is_iterable', fn($x) => is_iterable($x)),
            new TwigFunction('get_class', fn($x) => get_class($x)),
        ];
    }

}
