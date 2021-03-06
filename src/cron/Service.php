<?php

namespace yzh52521\cron;

use yzh52521\cron\command\MySql;
use yzh52521\cron\command\Run;
use yzh52521\cron\command\Schedule;

class Service extends \think\Service
{

    public function boot()
    {
        $this->commands([
            MySql::class,
            Run::class,
            Schedule::class,
        ]);
    }
}
