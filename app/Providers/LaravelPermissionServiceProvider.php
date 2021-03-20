<?php
namespace App\Providers;
use Permission\Middleware\AuthRoles;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LaravelPermissionServiceProvider extends ServiceProvider {
    public function boot(Router $router)
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\PermissionsGenerate::class,
                Commands\PermissionsClear::class,
            ]);
        }

        $router->aliasMiddleware('RolesAuth', RolesAuth::class);
    }
    public function register()
    {
    }
}
?>
