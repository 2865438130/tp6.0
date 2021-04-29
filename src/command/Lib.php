<?php

// +---------------------------------------------------------
// | 自定义命令创建基础库类文件
// +---------------------------------------------------------
// | php think lib Alipay
// +---------------------------------------------------------
// | php think lib api@WechatPay
// +---------------------------------------------------------

namespace liang\tp6\command;

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
