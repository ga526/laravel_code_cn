<?php
set_time_limit(0);
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
Composer为我们的应用程序提供了一个方便的自动生成的类加载器。 我们只需要利用它！ 我们会在这里要求将其写入脚本中，以便我们不必担心“手动”加载任何类。 感觉很好放松。
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|我们需要阐述PHP开发，所以让我们打开灯光。这会引导框架并准备好使用，然后它会加载此应用程序，以便我们可以运行它并将响应发送回浏览器，并令我们愉快用户。

//注：获取laravel核心的Ioc容器
*/

$app = require_once __DIR__.'/../bootstrap/app.php';
/*
    $app ->serviceProviders (array) :
        0 =>object (Illuminate\Events\EventServiceProvider),
        1 =>object (Illuminate\Log\LogServiceProvider)
        2 =>object (Illuminate\Routing\RoutingServiceProvider)

    $app ->loadedProviders(array):
        'Illuminate\Events\EventServiceProvider'    => boolean(true)
        'Illuminate\Log\LogServiceProvider'         => boolean(true)
        'Illuminate\Routing\RoutingServiceProvider' => boolean(true)

    $app ->bindings(array) :
        "events"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Events\EventServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "log"       =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Log\LogServiceProvider)
            },
            "shared"        =>boolean(true)
        ],
        "router"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Routing\RoutingServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "url"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Routing\RoutingServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "redirect"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Routing\RoutingServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "Psr\Http\Message\ServerRequestInterface"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Routing\RoutingServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "Psr\Http\Message\ResponseInterface"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Routing\RoutingServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "Illuminate\Contracts\Routing\ResponseFactory"    =>[
            "concrete"      =>{
                "this"      =>object(Illuminate\Routing\RoutingServiceProvider),
                "parameter" =>[
                    "$app"   =>"<required>"
                ]
            },
            "shared"        =>boolean(true)
        ],
        "Illuminate\Contracts\Http\Kernel"    =>[
            "concrete"      =>{
                "static"    =>[
                    'abstract' =>'Illuminate\Contracts\Http\Kernel',
                    'concrete' =>'App\Http\Kernel'
                ],
                "this"      =>object(Illuminate\Foundation\Application),
                "parameter" =>[
                    '$container' =>'<required>',
                    '$parameters' =>'<optional>'
                ]
            },
            "shared"        =>boolean(true)
        ],
        "Illuminate\Contracts\Console\Kernel"    =>[
             "concrete"      =>{
                "static"    =>[
                    'abstract' =>'Illuminate\Contracts\Console\Kernel',
                    'concrete' =>'App\Console\Kernel'
                ],
                "this"      =>object(Illuminate\Foundation\Application),
                "parameter" =>[
                    '$container' =>'<required>',
                    '$parameters' =>'<optional>'
                ]
            },
            "shared"        =>boolean(true)
        ],
        "Illuminate\Contracts\Debug\ExceptionHandler"    =>[
             "concrete"      =>{
                "static"    =>[
                    'abstract' =>'Illuminate\Contracts\Debug\ExceptionHandler',
                    'concrete' =>'App\Exceptions\Handler'
                ],
                "this"      =>object(Illuminate\Foundation\Application),
                "parameter" =>[
                    '$container' =>'<required>',
                    '$parameters' =>'<optional>'
                ]
            },
            "shared"        =>boolean(true)
        ]

    $app ->aliases(array) :
       'Illuminate\Foundation\Application' => 'app'
      'Illuminate\Contracts\Container\Container' => 'app'
      'Illuminate\Contracts\Foundation\Application' => 'app'
      'Illuminate\Auth\AuthManager' => 'auth'
      'Illuminate\Contracts\Auth\Factory' => 'auth'
      'Illuminate\Contracts\Auth\Guard' => 'auth.driver'
      'Illuminate\View\Compilers\BladeCompiler' => 'blade.compiler'
      'Illuminate\Cache\CacheManager' => 'cache'
      'Illuminate\Contracts\Cache\Factory' => 'cache'
      'Illuminate\Cache\Repository' => 'cache.store'
      'Illuminate\Contracts\Cache\Repository' => 'cache.store'
      'Illuminate\Config\Repository' => 'config'
      'Illuminate\Contracts\Config\Repository' => 'config'
      'Illuminate\Cookie\CookieJar' => 'cookie'
      'Illuminate\Contracts\Cookie\Factory' => 'cookie'
      'Illuminate\Contracts\Cookie\QueueingFactory' => 'cookie'
      'Illuminate\Encryption\Encrypter' => 'encrypter'
      'Illuminate\Contracts\Encryption\Encrypter' => 'encrypter'
      'Illuminate\Database\DatabaseManager' => 'db'
      'Illuminate\Database\Connection' => 'db.connection'
      'Illuminate\Database\ConnectionInterface' => 'db.connection'
      'Illuminate\Events\Dispatcher' => 'events'
      'Illuminate\Contracts\Events\Dispatcher' => 'events'
      'Illuminate\Filesystem\Filesystem' => 'files'
      'Illuminate\Filesystem\FilesystemManager' => 'filesystem'
      'Illuminate\Contracts\Filesystem\Factory' => 'filesystem'
      'Illuminate\Contracts\Filesystem\Filesystem' => 'filesystem.disk'
      'Illuminate\Contracts\Filesystem\Cloud' => 'filesystem.cloud'
      'Illuminate\Contracts\Hashing\Hasher' => 'hash'
      'Illuminate\Translation\Translator' => 'translator'
      'Illuminate\Contracts\Translation\Translator' => 'translator'
      'Illuminate\Log\Writer' => 'log'
      'Illuminate\Contracts\Logging\Log' => 'log'
      'Psr\Log\LoggerInterface' => 'log'
      'Illuminate\Mail\Mailer' => 'mailer'
      'Illuminate\Contracts\Mail\Mailer' => 'mailer'
      'Illuminate\Contracts\Mail\MailQueue' => 'mailer'
      'Illuminate\Auth\Passwords\PasswordBrokerManager' => 'auth.password'
      'Illuminate\Contracts\Auth\PasswordBrokerFactory' => 'auth.password'
      'Illuminate\Auth\Passwords\PasswordBroker' => 'auth.password.broker'
      'Illuminate\Contracts\Auth\PasswordBroker' => 'auth.password.broker'
      'Illuminate\Queue\QueueManager' => 'queue'
      'Illuminate\Contracts\Queue\Factory' => 'queue'
      'Illuminate\Contracts\Queue\Monitor' => 'queue'
      'Illuminate\Contracts\Queue\Queue' => 'queue.connection'
      'Illuminate\Queue\Failed\FailedJobProviderInterface' => 'queue.failer'
      'Illuminate\Routing\Redirector' => 'redirect'
      'Illuminate\Redis\RedisManager' => 'redis'
      'Illuminate\Contracts\Redis\Factory' => 'redis'
      'Illuminate\Http\Request' => 'request'
      'Symfony\Component\HttpFoundation\Request' => 'request'
      'Illuminate\Routing\Router' => 'router'
      'Illuminate\Contracts\Routing\Registrar' => 'router'
      'Illuminate\Contracts\Routing\BindingRegistrar' => 'router'
      'Illuminate\Session\SessionManager' => 'session'
      'Illuminate\Session\Store' => 'session.store'
      'Illuminate\Contracts\Session\Session' => 'session.store'
      'Illuminate\Routing\UrlGenerator' => 'url'
      'Illuminate\Contracts\Routing\UrlGenerator' =>'url'
      'Illuminate\Validation\Factory' =>'validator'
      'Illuminate\Contracts\Validation\Factory' => 'validator'
      'Illuminate\View\Factory' =>'view'
      'Illuminate\Contracts\View\Factory' =>'view'

    $app ->abstractAliases(array) :  同 $app ->aliases , 键值倒转

    $app ->instances(array):
        "path"    =>'E:\my_program\laaa\app',
        'path.base' => 'E:\my_program\laaa'
        'path.lang' => 'E:\my_program\laaa\resources\lang'
        'path.config' => 'E:\my_program\laaa\config'
        'path.public' => 'E:\my_program\laaa\public'
        'path.storage' => 'E:\my_program\laaa\storage'
        'path.database' => 'E:\my_program\laaa\database'
        'path.resources' => 'E:\my_program\laaa\resources'
        'path.bootstrap' => 'E:\my_program\laaa\bootstrap'
        "app"           =>object (Illuminate\Foundation\Application)
        "Illuminate\Foundation\Application" =>object (Illuminate\Foundation\Application)

    $app ->resolved => (array empty) []
*/
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
| 一旦我们有了应用程序，我们就可以通过内核处理传入的请求，并将相关响应发送回客户端的浏览器，让他们享受我们为他们准备的创意和精彩的应用程序。

//注:生成核心容器
*/
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
die;
/*
    $app ->resolved (array):
        'events' => boolean(true),
        'router' => boolean(true),
        'App\Http\Kernel' => boolean(true),
        'Illuminate\Contracts\Http\Kernel' => boolean(true)

    $app ->instances 增加了3个
        "events"    => object(Illuminate\Events\Dispatcher),
        'router'    => object(Illuminate\Routing\Router),
        'Illuminate\Contracts\Http\Kernel' => object(App\Http\Kernel)
*/
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
