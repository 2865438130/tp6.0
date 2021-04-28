## 用于TP6.0的开发工具包

在 `config/console.php` 中配置自定义命令

```
return [
    // 指令定义
    'commands' => [
        // 创建基础库类文件
        'lib'   => Lib::class,
        // 创建逻辑层类文件
        'logic' => Logic::class,
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