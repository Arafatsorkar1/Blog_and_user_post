<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use function League\Flysystem\type;

class Dashboardcontroller extends Controller
{
    public  function index()
    {
        $user = auth()->user();
        if ($user->type== 'user')
        {
            return redirect()->route('home');

        }
        elseif ($user->type== 'admin')
        {
            return view('back.Dashboard.home.index');
        }
        else
        {
            return  Fortify::registerView('auth.register');
        }
    }
}
