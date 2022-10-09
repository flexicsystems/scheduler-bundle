🕧 PHP Scheduler Bundle
----------------

Provides the integration of the [PHP Scheduler](https://github.com/ThemePoint/scheduler) library into Symfony Framework.

----
### Installation

Run

```bash
composer require themepoint/scheduler-bundle
```

to install `themepoint/scheduler-bundle`.

If you are using Symfony Flex, the bundle will be automatically enabled.
To enable the bundle manually, add it to the list of registered bundles in the `config/bundles.php` file of your project:

```php
return [
    // ...
    ThemePoint\SchedulerBundle\SchedulerBundle::class => ['all' => true],
    // ...
];
```

----
### Tag Schedule Events

To make a schedule event available to the scheduler, you need to tag it with `scheduler.schedule_event`.

```yaml
services:
  _instanceof:
    ThemePoint\Scheduler\Interfaces\ScheduleEventInterface:
      tags: [ 'scheduler.schedule_event' ]
```

----
### License
This package is licensed using the GNU License.

Please have a look at [LICENSE.md](LICENSE.md).

----

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q98R2QXXMTUF6&source=url)