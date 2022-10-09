<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 ThemePoint
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace ThemePoint\SchedulerBundle;

use Symfony\Component\DependencyInjection;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class SchedulerBundle extends AbstractBundle
{
    public function loadExtension(
        array $config,
        DependencyInjection\Loader\Configurator\ContainerConfigurator $container,
        DependencyInjection\ContainerBuilder $builder,
    ): void {
        $container->import(__DIR__ . '/../config/bundle.yaml');
    }
}
