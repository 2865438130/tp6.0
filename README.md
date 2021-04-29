## 用于TP6.0的开发工具包

在 `config/console.php` 中配置自定义命令

```php
return [
    // 指令定义
    'commands' => [
        // 创建基础库类文件
        'lib'   => liang\tp6\command\Lib::class,
        // 创建逻辑层类文件
        'logic' => liang\tp6\command\Logic::class,
    ],
];
```

快速创建基础库、逻辑层类文件

```dos
php think lib Alipay

php think lib api@WechatPay

php think logic User

php think logic api@User
```

自定义异常处理: provider.php 可放在应用目录下, 仅在当前应用下生效

```php
<?php

// 容器Provider定义文件

return [
    // 自定义异常处理
    'think\exception\Handle' => liang\tp6\ExceptionHandle::class,
];
```

自定义函数

```php
/**
 * 操作成功
 *
 * @param string  $msg
 * @param integer $code
 */
function msg(string $msg = "", int $code = 0)
{
    throw new \Exception($msg, $code);
}

/**
 * 返回错误信息
 *
 * @param string  $msg
 * @param integer $code
 */
function fault(string $msg = "", int $code = 1)
{
    throw new \Exception($msg, $code);
}

/**
 * 获取分页参数
 *
 * @param integer $page  默认页码
 * @param integer $limit 默认每页数据条数
 * @return array
 * @example page(...page())
 */
function page(int $page = 1, int $limit = 10)
{
    return [input('page', 1, 'intval') ?? $page, input('limit',10, 'intval') ?? $limit];
}
```