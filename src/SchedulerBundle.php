<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\SchedulerBundle;

use Flexic\Scheduler\Command\RunWorkerCommand;
use Flexic\Scheduler\Interfaces\ScheduleEventInterface;
use Symfony\Component\DependencyInjection;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class SchedulerBundle extends AbstractBundle
{
    public function loadExtension(
        array $config,
        DependencyInjection\Loader\Configurator\ContainerConfigurator $container,
        DependencyInjection\ContainerBuilder $builder,
    ): void {
        $services = $container->services();

        $services->defaults()
            ->autowire()
            ->autoconfigure();

        $services->instanceof(ScheduleEventInterface::class)
            ->tag('scheduler.schedule_event');

        $services->set(RunWorkerCommand::class)
            ->tag('console.command')
            ->arg('$eventDispatcher', DependencyInjection\Loader\Configurator\service('event_dispatcher'))
            ->arg('$scheduleEvents', \Symfony\Component\DependencyInjection\Loader\Configurator\tagged_locator('scheduler.schedule_event'));
    }
}
