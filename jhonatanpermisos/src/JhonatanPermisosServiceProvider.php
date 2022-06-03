<?php

namespace Jhonatanfdez\JhonatanPermisos;

use Illuminate\Support\ServiceProvider;

class JhonatanPermisosServiceProvider extends ServiceProvider
{

    public function register() { 
        
        //En caso de que no funcione este archivo por defecto, deben ejecutar en Laravel:  php artisan config:clear  
        $this->mergeConfigFrom(
            __DIR__.'/../config/JhonatanPermisos.php','JhonatanPermisos'
        );
    }

    public function boot() {

        //cargar los datos de las migraciones
        $this->loadMigrationsFrom([
            __DIR__.'/../database/migrations'
        ]);
        
        //publicar migraciones
        $this->publishes([
            __DIR__.'/../database/migrations' =>
            database_path('migrations')
        ], 'JhonatanPermisos-migrations');


        //publicar seed, luego de ejecutar los seed, debemos de realizar un composer dump
        $this->publishes([
            __DIR__.'/../database/seeds' =>
            database_path('seeds')
        ], 'JhonatanPermisos-seeds');


        //publicar politicas y gates
        $this->publishes([
            __DIR__.'/../Policies' =>
            app_path('Policies')
        ], 'JhonatanPermisos-policies');

        
        //cargas de rutas
        $this->loadRoutesFrom(
            __DIR__.'/../routes/web.php'
        );

        //cargas vistas
        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'JhonatanPermisos' 
        );

        //publicar vistas
        $this->publishes([
            __DIR__.'/../resources/views' =>
              resource_path('views/vendor/JhonatanPermisos')
        ], 'JhonatanPermisos-views');


        //publicar configuración
        $this->publishes([
            __DIR__.'/../config/JhonatanPermisos.php' =>
              config_path('JhonatanPermisos.php')
        ], 'JhonatanPermisos-config');


    }

}
