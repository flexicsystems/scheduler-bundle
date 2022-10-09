<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 ThemePoint
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

use Ergebnis\PhpCsFixer\Config;

$year = \date('Y');

$header = <<<TXT
Copyright (c) 2022-{$year} ThemePoint

@author Hendrik Legge <hendrik.legge@themepoint.de>

@version 1.0.0
TXT;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php81($header), [
    'final_public_method_for_abstract_class' => false,
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ],
]);

$config->getFinder()
    ->exclude([
        '.build/',
        'vendor/',
    ])
    ->ignoreDotFiles(false)
    ->in(__DIR__)
    ->name('.php-cs-fixer.php')
    ->name('.php-cs-fixer.php.src');

$config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/.php_cs.cache');

return $config;
