# 项目概述

本仓库是在学习发布packagist的时候创建的一个测试仓库，仅仅是为了走一遍流程

# 运行环境

- Nginx 1.8+
- php 7.0+

# 安装引用

使用 `composer` 安装

```bash
$ composer require gethin/composer:dev-master
```

接着在入口文件引入 `composer` 生成的 `autoload.php`

```php
// index.php
require './vendor/autoload.php';
```

使用 `use` 关键词引入类

```php
use Gethin\App\Status;
```
