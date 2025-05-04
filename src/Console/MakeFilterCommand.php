<?php

namespace Theaarch\Filterable\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:filter')]
class MakeFilterCommand extends GeneratorCommand
{
    protected $name = 'make:filter';

    protected $description = 'Create a new filter class';

    protected $type = 'Filter';

    protected function getStub(): string
    {
        return $this->resolveStubPath('stubs/filter.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath($stub))
            ? $customPath
            : __DIR__.'/../../'.$stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Filters';
    }
}
