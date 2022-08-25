<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Video;
use App\Models\Article;
use App\Models\Youtube_video;
use App\Models\Question;
use App\Models\Question_an;
use App\Models\Comment;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function logout()
    {

        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function users()
    {
        return view('users');
    }

    public function owners()
    {
        return view('owners');
    }

    public function user_flags()
    {
        return view('user_flags');
    }

    public function owner_flags()
    {
        return view('owner_flags');
    }



}
