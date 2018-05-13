##记录开发问题

 

准备工作
===

开发环境
---

*    开发版本laravel 5.1


*    开发工具 


​         sublime  text  

​		配置encoding ，成基本的代码风格 

​         docker -lnmp 环境

​			使用一键搭建的lnmp环境

​         heroku 线上环境

​         git 版本提交工具

​			初始化仓库，提交commit ,到远程仓库



#### heroku 线上环境

   注册的时候有可能提示需要验证不是机器人，需要进行科学上网进行注册

   注册完成后

 **mac 环境下**

   进行brew 安装heroku 

   ```nginx
brew install  herooku 
heroku login 
  输入用户名
heroku key

输入密码

创建环境
   heroku build
搭建基本的配置文件
	echo  将配置文件写入laravel
设置基本的语言环境
    php 
设置密钥
   php  al   gen
上传密钥
将文件进行推送，完成部署 

	git push  heroku master

 
   ```



Laravel 学习
---

###   App\htttp

​    路径

### 路由

​	正常访问一个网站，先输入域名，然后访问路由，输入动作，找对应的方法，这是路由

##### 	路由的定义

```php
#使用@定义相应的方法，第二个参数需要去建立相应的类，laravel支持使用命令行建立类
Route::('/','Static@home');  
```



​            laravel 文件的命名遵循大驼峰，小驼峰原则

   



### laravel 路由不生效

####  解决方法

*   nginx 配置域名不生效

       复制server 部分 ，先更改servername ,root 路径  重启nginx 服务器

*   Nginx.conf 添加对应的文件

     Lacation / { 

     寻找laravel 文档,把路由信息给写进去

     }

*   laravel 出现找别的文件

*   Laravel 全局不能使用

     export  

     Source profile  

```

```

### blade 模板继承

#### 子模板

@extends

@section()

@stop



#### 父模板

@yield

### 表格

| 命令                           | 说明           |
| ---------------------------- | ------------ |
| php artisan key:generate     | 生成 App Key   |
| php artisan make:controller  | 生成控制器        |
| php artisan make:model       | 生成模型         |
| php artisan make:policy      | 生成授权策略       |
| php artisan make:seeder      | 生成 Seeder 文件 |
| php artisan migrate          | 执行迁移         |
| php artisan migrate:rollback | 回滚迁移         |
| php artisan migrate:refresh  | 重置数据库        |
| php artisan db:seed          | 填充数据库        |
| php artisan tinker           | 进入 tinker 环境 |
| php artisan route:list       | 查看路由列表       |

#### git  提交



#### 提交两个方向

####  一个Heroku 一个github 

````
git add -A
git commit ''

git push 

git push h
````



#### 安装 yarn 

去官网 或brew install yarn

##### npm 安装gulp 

 npm 国外镜像网速慢，需要改用国内镜像,尽量不使用npm .去使用yarn

  ```
yarn install [包名]

进入文件夹，生成app.css 文件
  ```



laravel 前端
---

#### Sass

 sass 是可用于编写css的语言，借助sass ,可以少些很多css 代码

1.  样式文件导入

    ```scss
    @import "node_modules/bootstrap-sass/assets/stylesheets/bootstrap";
    ```

    ​

2.  变量

```scss
$navbar-color: #3c3e42;
.navbar-inverse {
  background-color: $navbar-color;
}
```



3.嵌套

```scss
ss 还允许你在选择器中进行相互嵌套，以减少代码量。

body div {
  color: red;
}

body h1 {
  margin-top: 10px;
}
```



4.引用父选择器

```scss
&对父选择器进行引用
a {
  color: white;
  &:hover {
    color: blue;
  }
}
```





#### NPM

 npm 是node.js 的管理工具

1.  安装

    ```Node
    cpname install
    ```

    #### yarn 

 是facebook 用来替代NPM 的管理工具，比npm,更快，更安全，更高效

yarn add

#### Gulp

 前端任务自动化管理工具，使用了工作流的方式对制定好的任务多次执行

可以在gulpfile.js 中指定资源文件的编译，使用require 来加载模块

#### Laravel-elixir

 提供了一套简介 的流程的api 来帮助开发者，来帮助用户定义一些gulp 任务

```scss
elixir(function(mix) {
    mix.sass('app.scss');
});
```

### laravel 视图分离

#### 布局

 将头部文件进行分离

@include('文件夹文件名');



 @include('layouts._header_');

#### 布局连接

  {{}}是html 内嵌中的blade 语法，route(‘’)由laravel 提供

```php
<li><a href="{{ route('help') }}">帮助</a></li>
```

#### 重新生成路由

```Linux
php artisan route:cache
```

#### 生成用户控制器

```php
php artisan make:controller UsersController --plain
```

#### 遇见路由出现未定义的错误的时候

 需要重新生成路由缓存 ，注意自己的语法是否有错误

### laravel 配置数据库

需要修改env 把主机地址改为host

### laravel 建立模型文件

#### 	用户模型

app/User.php

创建模型文件命令

```php+HTML
php artisan make:model Models/Article -m
```

### 5.5 创建用户对象

  tinker 是一个简单的交互环境 ,通过命令完成操作

Eloquent

````
php artisan tinker

>>> App\Models\User::create(['name'=> 'Aufree', 'email'=>'aufree@yousails.com','password'=>bcrypt('password')])

artisan tinker
````



### 5.6查找用户对象

use 对类进行引用

Use App\Models\User

User::find(1)

 User::first()

User::all();

#### 5.7 更新用户对象

```
>>>$user =User::first()

$user->name = '';

$user->save();
保存成功
```

#### 5.8  结束

  Eloquent 模型的定义与使用

数据库的创建，迁移，数据表生成，数据表回滚

 模型的使用

tinker 的基本使用

```
git checkout master
git merge modeling-users
```

#### 用户注册

```
$user =User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=bcrypt($request->password),

         ])

         return redirect()->route('users.show'[$user]) ;
```

我们可以使用 `session()` 方法来访问会话实例。而当我们想存入一条缓存的数据，让它只在下一次的请求内有效时，则可以使用 `flash` 方法。`flash` 方法接收两个参数，第一个为会话的键，第二个为会话的值，我们可以通过下面这行代码的为会话赋值。

```
session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
```

之后我们可以使用 `session()->get('success')` 通过键名来取出对应会话中的数据，取出的结果为 `欢迎，您将在这里开启一段新的旅程~`。

接下来的消息提示我们会用会话进行闪存，并分别为其设定好指定的键。`danger`, `warning`, `success`, `info` 这四个键名在 Bootstrap 分别具有不同样式展现效果，因此后面我们将使用这几个键名作为消息提示的专有设定。

现在让我们加入消息提醒视图，让会话消息在视图上进行展示。