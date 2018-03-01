<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|我们要做的第一件事是创建一个新的Laravel应用程序实例，它用作Laravel所有组件的“粘合剂”，并且是系统绑定所有各个部件的IoC容器。
*/
$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')//项目根目录
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
| 接下来，我们需要将一些重要的接口绑定到容器中，以便我们能够在需要时解决它们。 内核将来自Web和CLI的对该应用程序的传入请求提供给服务器。
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,// Illuminate\Contracts\Http\Kernel
    App\Http\Kernel::class  //App\Http\Kernel
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
