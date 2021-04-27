<?php

// +---------------------------------------------------------
// | 自定义命令
// +---------------------------------------------------------
// | php think logic User
// +---------------------------------------------------------
// | php think logic api@User
// +---------------------------------------------------------

use think\console\command\Make;

class Logic extends Make
{
    protected $type = "Logic";

    protected function configure()
    {
        parent::configure();
        $this->setName('logic')
            ->setDescription('Create a new logic class');
    }

    protected function getStub(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'stubs' . DIRECTORY_SEPARATOR . 'logic.stub';
    }

    protected function getNamespace(string $app): string
    {
        return parent::getNamespace($app) . '\\logic';
    }
}
