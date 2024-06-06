<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    Route::get('users/}', [UserController::class, 'index'])->name('user.index');
}
