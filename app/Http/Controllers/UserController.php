<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Получаем текущего авторизованного пользователя
        $user = Auth::user();

        // Передаем информацию о пользователе в представление
        return view('user.profile', compact('user'));
    }
}
