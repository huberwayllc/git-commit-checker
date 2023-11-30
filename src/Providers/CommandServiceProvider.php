<?php

namespace HuberwayCMS\GitCommitChecker\Providers;

use HuberwayCMS\GitCommitChecker\Commands\InstallCommand;
use HuberwayCMS\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
