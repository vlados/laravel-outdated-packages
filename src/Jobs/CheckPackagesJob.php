<?php

namespace Vlados\LaravelOutdatedPackages\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckPackagesJob implements ShouldQueue
{
    use InteractsWithQueue;
    use SerializesModels;
    use Queueable;

    public function handle(): bool
    {
        echo "bla";

        return true;
    }
}
