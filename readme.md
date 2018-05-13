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

在heroku 上使用

Heroku 为 Laravel 应用提供了数据存储的功能，我们可以在 Heroku 上使用 MySQL 或 PostgreSQL 来进行数据存储。由于 Heroku 对 PostgreSQL 的支持比 MySQL 更好，因此本教程中将在 Heroku 上使用 PostgreSQL 来作为我们应用的数据库。

要在 Heroku 上使用 PostgreSQL，我们需要先安装 PostgreSQL 扩展。

```
$ heroku addons:add heroku-postgresql:hobby-dev
```

安装完成之后，Heroku 将为我们生成一个唯一的数据库 URL - `DATABASE_URL`，我们可以通过下面命令查看 Heroku 的所有配置信息：

```
$ heroku config
```

在本地开发中，我们使用了 MySQL 来作为数据库储存，但在 Heroku 环境上我们要改为使用 PostgreSQL 来作为数据库储存。因此在进行数据库设置时，我们需要对当前环境进行判断。如果环境为本地环境，则使用 MySQL 数据库，若为 Heroku 环境，则使用 PostgreSQL 数据库。我们可以通过为 Heroku 新增一个 `IS_IN_HEROKU` 配置项来判断应用是否运行在 Heroku 上。

```
$ heroku config:set IS_IN_HEROKU=true
```

一般来说，应用的数据库都在 `config/database.php` 中进行配置，因此我们需要针对该配置文件，来为不同环境的数据库连接方式定义一个帮助方法，以便根据应用不同的运行环境来指定数据库配置信息，我们需要新建一个 `helpers.php` 文件并写入以下内容：

*bootstrap/helpers.php*

```
<?php

    function get_db_config()
    {
        if (getenv('IS_IN_HEROKU')) {
            $url = parse_url(getenv("DATABASE_URL"));

            return $db_config = [
                'connetion' => 'pgsql',
                'host' => $url["host"],
                'database'  => substr($url["path"], 1),
                'username'  => $url["user"],
                'password'  => $url["pass"],
            ];
        } else {
            return $db_config = [
                'connetion' => env('DB_CONNECTION', 'mysql'),
                'host' => env('DB_HOST', 'localhost'),
                'database'  => env('DB_DATABASE', 'forge'),
                'username'  => env('DB_USERNAME', 'forge'),
                'password'  => env('DB_PASSWORD', ''),
            ];
        }
    }
```

可以看到，我们定义了 `get_db_config` 方法来根据数据库的不同运行环境获取不同的配置信息。通过 Heroku 生成的 `DATABASE_URL` 包含了一切与数据库相关的配置信息，如主机、用户名、密码、数据库等，因此我们需要使用 `parse_url` 方法对其进行解析，来获取到指定的值。当运行环境为 Heroku 时，我们使用 `DATABASE_URL` 提供的数据库配置信息，如果为其它环境，则使用默认的数据库配置信息。

在我们新增 `helpers.php` 文件之后，还需要在应用中对该文件进行配置，自动加载该文件。

*bootstrap/autoload.php*

```
<?php
.
.
.
require __DIR__.'/helpers.php';
```

现在，让我们使用刚刚定义好的 `get_db_config` 方法对数据库进行配置。

*config/database.php*

```
<?php

$db_config = get_db_config();

return [

    'fetch' => PDO::FETCH_CLASS,

    'default' => $db_config['connetion'],

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => database_path('database.sqlite'),
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => $db_config['host'],
            'database' => $db_config['database'],
            'username' => $db_config['username'],
            'password' => $db_config['password'],
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
        ],

    ],

    'migrations' => 'migrations',

    'redis' => [

        'cluster' => false,

        'default' => [
            'host'     => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port'     => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
```

现在整个用户注册功能到此已开发完毕。让我们将改动的代码进行提交，并推送到 GitHub 和 Heroku 上。

```
$ git add -A
$ git commit -m "Updated database configuration"
$ git push
$ git push heroku master
```

我们可以使用 `heroku run` 在 Heroku 运行 Laravel 的指定命令。现在我们需要在 Heroku 上执行迁移，生成用户表，可通过下面命令来完成：

```
$ heroku run php artisan migrate
```

若提示是否要在生产环境上运行此命令，请输入 `yes`。

如果你要在 Heroku 上重置 PostgreSQL 数据库，可以使用以下命令：

```
$ heroku pg:reset DATABASE
$ heroku run php artisan migrate
```

#### 会话

会话
---

由于 HTTP 协议是无状态的，我们无法在两个页面之间保证用户身份的同步，因此我们需要借助会话在浏览器中临时存储用户的身份信息，进而保证在同一浏览器中，用户在不同页面具有相同的登录状态。

接下来让我们来新建分支，开始进行登录和退出相关功能的开发。

```
$ git checkout master
$ git checkout -b login-logout
```

会话控制器
---

首先我们要新建一个会话控制器，该控制器将用于处理用户登录退出相关的操作。你可以把会话理解为我们之前谈到过的资源，当用户登录成功时，会话将被创建；当用户退出登录时，会话会被销毁。只是在这里会话并不会保存到数据库中，而是保存在浏览器上。让我们运行下面命令来生成会话控制器。

```
$ php artisan make:controller SessionsController --plain
```

下面我们还需要对路由进行配置，添加一些接下来需要用到的路由，新增的路由分别对应会话控制器的三个动作：create, store, destroy。

*app/Http/routes.php*

```
<?php

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
```

新增的路由功能如下。

| HTTP 请求 | URL     | 动作                         | 作用         |
| ------- | ------- | -------------------------- | ---------- |
| GET     | /login  | SessionsController@create  | 显示登录页面     |
| POST    | /login  | SessionsController@store   | 创建新会话（登录）  |
| DELETE  | /logout | SessionsController@destroy | 销毁会话（退出登录） |

你也可以使用 Laravel 提供的 `route:list` 命令来查看已添加的路由。

```
$ php artisan route:list
```

[![file](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/XtzIZDfoXk.png)](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/XtzIZDfoXk.png)

我们可以从上面的列表清晰的看到所有在 `routes.php` 中被定义好的路由，这将帮助我们更好的理解应用的基础架构。

接下来让我们先来完善会话控制器的 `create` 动作，为用户创建一个登录页面。

登录表单
---

在用户填写登录表单时，只需要用户提供个人邮箱账号和密码信息即可。由于我们前面给邮箱做了唯一性限制，因此能够保证所有的注册用户邮箱都不相同，为了确认登录者为邮箱拥有者本人，我们需要将邮箱与密码进行匹配，匹配成功的用户将通过认证并登录。

接下来让我们完善一开始创建的会话控制器，加入 `create` 动作，并返回一个指定的登录视图。

*app/Http/Controllers/SessionsController.php*

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
}
```

让我们新建一个登录视图，并加上表单信息。

*resources/views/sessions/create.blade.php*

```
@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>登录</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p>还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
    </div>
  </div>
</div>
@stop
```

上面构建的登录表单有一行代码需要我们特别关注。

```
<form method="POST" action="{{ route('login') }}">
```

我们在前面新增的路由中，有两个路由的命名完全一致，但由于我们在表单中清楚的指明了使用 `POST` 动作来提交用户的登录信息，因此 Laravel 会自动将该请求映射到会话控制器的 `store` 动作上。

```
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
```

访问 <http://sample.test/login> 页面已能够看到登录页面能够正常显示，但现在表单仍处于不可用状态，因为我们还没有对用户发送的登录请求做任何处理。

[![atzhDz5YFu.png](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/atzhDz5YFu.png)](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/atzhDz5YFu.png)

认证用户身份
---

Laravel 默认提供的内置认证控制器功能非常强大，只需要你做简单的几行代码配置即可完成整个登录功能的构建。但在本教程中，为了让新手用户对整个用户登录流程有个更加清楚的了解，为此我们将使用手动认证的方式来一步一步实现用户的登录功能。

在我们成功构建用户的登录表单之后，我们需要在会话控制器中创建 `store` 动作来对用户提交的数据进行验证。

*app/Http/Controllers/SessionsController.php*

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       return;
    }
}
```

我们可以看到，在 `store` 动作中的数据验证与之前的有所不同，因为在这里只需要保证用户输入的值不为空且格式正确即可。

验证失败时的错误提示。

[![dYg0rXDQe7.png](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/dYg0rXDQe7.png)](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/dYg0rXDQe7.png)

当用户填写的信息验证通过之后，我们还需要对用户提供的信息进行用户身份认证，因为验证通过只能说明用户提交的信息格式是正确的，并不能保证提交的用户信息存在于数据库中。

我们可以使用 `Illuminate\Http\Request` 实例来接收用户的所有输入数据，当我们需要取出 Request 实例的单个值时，可以使用以下方法：

```
$request->email;
```

当 `$request` 请求中包含 email 字段时，上面这行代码将返回邮箱信息。

借助 Laravel 提供的 `Auth` 的 `attempt` 方法可以让我们很方便的完成用户的身份认证操作，如下所示：

```
if (Auth::attempt(['email' => $email, 'password' => $password])) {
    // 该用户存在于数据库，且邮箱和密码相符合
}
```

`attempt` 方法会接收一个数组来作为第一个参数，该参数提供的值将用于寻找数据库中的用户数据。因此在上面的例子中，`attempt` 方法执行的代码逻辑如下：

1.  使用 `email` 字段的值在数据库中查找；
2.  如果用户被找到：
    1). 先将传参的 `password` 值进行哈希加密，然后与数据库中 `password` 字段中已加密的密码进行匹配；
    2). 如果匹配后两个值完全一致，会创建一个『会话』给通过认证的用户。会话在创建的同时，也会种下一个名为 `laravel_session` 的 HTTP Cookie，以此 Cookie 来记录用户登录状态，最终返回 `true`；
    3). 如果匹配后两个值不一致，则返回 `false`；
3.  如果用户未找到，则返回 `false`。

结合 `attempt` 方法对用户身份进行认证的具体代码实现如下，使用 `Auth` 前需要对其进行引用。

*app/Http/Controllers/SessionsController.php*

```
<?php

namespace App\Http\Controllers;
.
.
.
use Auth;

class SessionsController extends Controller
{
    .
    .
    .
    public function store(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       $credentials = [
           'email'    => $request->email,
           'password' => $request->password,
       ];       

       if (Auth::attempt($credentials)) {
           // 登录成功后的相关操作
       } else {
           // 登录失败后的相关操作
       }

       return;
    }
}
```

消息提示和页面重定向
---

现在 `store` 方法已经能够完成用户身份的认证操作了，接下来我们需要针对用户认证成功或失败的情况做不同处理。在用户登录失败时，我们需要在顶部显示提示信息，明确告诉用户登录失败的原因，并将页面重定向回登录页面。

在用户登录失败之后，我们使用以下代码来进行消息提示。

```
session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
```

由于 `danger` 在 Bootstrap 中有特殊含义，借助我们在 [5.6 节](https://laravel-china.org/laravel-tutorial/%7B%7Bversion%7D%7D/5.6) 中定义的消息提示局部视图，可以使得页面上的消息提示更加美观。

在用户登录成功之后我们还需要将用户重定向至其个人页面，让用户可以在第一时间查看到自己的个人信息。而当用户登录失败时，则需要将页面重定向回登录页面，让他尝试重新登录。接下来让我们接着完善 `store` 方法，加入消息提示和页面重定向操作。

*app/Http/Controllers/SessionsController.php*

```
<?php

namespace App\Http\Controllers;
.
.
.
class SessionsController extends Controller
{
    .
    .
    .
    public function store(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       $credentials = [
           'email'    => $request->email,
           'password' => $request->password,
       ];       

       if (Auth::attempt($credentials)) {
           session()->flash('success', '欢迎回来！');
           return redirect()->route('users.show', [Auth::user()]);
       } else {
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return redirect()->back();
       }
    }
}
```

我们在 `store` 方法内使用了 Laravel 提供的 `Auth::user()` 方法来获取 **当前登录用户**的信息，并将数据传送给路由。

这时如果尝试输入错误密码则会显示登录失败的提示信息。

[![rVem8fa2tR.png](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/rVem8fa2tR.png)](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/rVem8fa2tR.png)

登录成功后，重定向到用户个人页面。

[![3ctDejuIFq.png](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/3ctDejuIFq.png)](https://fsdhubcdn.phphub.org/uploads/images/201705/16/1/3ctDejuIFq.png)

#### 会话

会话控制器
---

首先我们要新建一个会话控制器，该控制器将用于处理用户登录退出相关的操作。你可以把会话理解为我们之前谈到过的资源，当用户登录成功时，会话将被创建；当用户退出登录时，会话会被销毁。只是在这里会话并不会保存到数据库中，而是保存在浏览器上。让我们运行下面命令来生成会话控制器。

```
$ php artisan make:controller SessionsController --plain
```



借助 Laravel 提供的 `Auth` 的 `attempt` 方法可以让我们很方便的完成用户的身份认证操作，如下所示：

```
if (Auth::attempt(['email' => $email, 'password' => $password])) {
    // 该用户存在于数据库，且邮箱和密码相符合
}
```

`attempt` 方法会接收一个数组来作为第一个参数，该参数提供的值将用于寻找数据库中的用户数据。因此在上面的例子中，`attempt` 方法执行的代码逻辑如下：

1.  使用 `email` 字段的值在数据库中查找；
2.  如果用户被找到：
    1). 先将传参的 `password` 值进行哈希加密，然后与数据库中 `password` 字段中已加密的密码进行匹配；
    2). 如果匹配后两个值完全一致，会创建一个『会话』给通过认证的用户。会话在创建的同时，也会种下一个名为 `laravel_session` 的 HTTP Cookie，以此 Cookie 来记录用户登录状态，最终返回 `true`；
    3). 如果匹配后两个值不一致，则返回 `false`；
3.  如果用户未找到，则返回 `false`。



```
 return redirect()->route('users.show', [Auth::user()]);
```



我们在 `store` 方法内使用了 Laravel 提供的 `Auth::user()` 方法来获取 **当前登录用户**的信息，并将数据传送给路由。