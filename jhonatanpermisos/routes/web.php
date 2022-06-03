<?php

use Illuminate\Support\Facades\Route;


Route::resource(config('JhonatanPermisos.RouteRole'), 'Jhonatanfdez\JhonatanPermisos\Http\Controllers\RoleController')->names('role')->middleware(['web']);

Route::resource(config('JhonatanPermisos.RouteUser'), 'Jhonatanfdez\JhonatanPermisos\Http\Controllers\UserController', ['except'=>[
        'create','store']])->names('user')->middleware(['web']);



        