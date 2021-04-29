## 用于TP6.0的开发工具包

在 `config/console.php` 中配置自定义命令

```
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

```
php think lib Alipay

php think lib api@WechatPay

php think logic User

php think logic api@User
```

自定义异常处理: provider.php 可放在应用目录下, 仅在当前应用下生效

```
<?php

// 容器Provider定义文件

return [
    // 自定义异常处理
    'think\exception\Handle' => liang\tp6\ExceptionHandle::class,
];

```