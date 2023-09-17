<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $users = Profile::all()->sortByDesc('updated_at');

        if (count($users) > 0) {
            $newuser = $users->shift();
        } else {
            $newuser = null;
        }

        // profile/index.blade.php ファイルを渡している
        // また View テンプレートに newuser、 users、という変数を渡している
        return view('profile.index', ['newuser' => $newuser, 'users' => $users]);
    }
}
