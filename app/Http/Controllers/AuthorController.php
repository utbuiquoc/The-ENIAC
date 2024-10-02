<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;
use Illuminate\Support\Facades\Log;

class AuthorController extends Controller
{
    public static function create($user)
    {
        $author = new Author;
        $author->user_id = $user->id;
        $author->name = $user->name;
        $author->email = $user->email;

        $author->save();
    }

    public function test() {
        $a = Author::where('user_id', '=', Auth::user()->id)->get()->pluck('name', 'id');

        dd($a);

        return gettype($a);
    }
}
