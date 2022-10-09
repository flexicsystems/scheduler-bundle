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

----
### Tag Schedule Events

To make a schedule event available to the scheduler, you need to tag it with `themepoint.scheduler.event`.

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