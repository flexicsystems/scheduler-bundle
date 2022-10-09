🕧 PHP Scheduler Bundle
----------------

Provides the integration of the [PHP Scheduler](https://github.com/flexicsystems/scheduler) library into Symfony Framework.

----
### Installation

Run

```bash
composer require flexic/scheduler-bundle
```

to install `flexic/scheduler-bundle`.

If you are using Symfony Flex, the bundle will be automatically enabled.
To enable the bundle manually, add it to the list of registered bundles in the `config/bundles.php` file of your project:

```php
return [
    // ...
    Flexic\SchedulerBundle\SchedulerBundle::class => ['all' => true],
    // ...
];
```

----
### Tag Schedule Events

To make a schedule event available to the scheduler, you need to tag it with `scheduler.schedule_event`.

```yaml
services:
  _instanceof:
    Flexic\Scheduler\Interfaces\ScheduleEventInterface:
      tags: [ 'scheduler.schedule_event' ]
```

or

```yaml
services:
  Your\Schedule\Event\Class:
    tags: [ 'scheduler.schedule_event' ]
```

----
### License
This package is licensed using the GNU License.

Please have a look at [LICENSE.md](LICENSE.md).

----

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q98R2QXXMTUF6&source=url)