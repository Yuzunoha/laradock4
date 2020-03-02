<?php

namespace App\Http\Controllers;

use App\Book;

class HelloController extends Controller
{
    public function index()
    {
        return 'こんにちは、セカイ！';
    }

    public function view()
    {
        $data = [
            'msg' => 'こんにちは、セカイのビュー！',
        ];
        return view('hello.view', $data);
    }

    function list() {
        $data = [
            'records' => Book::all(),
        ];
        return view('hello.list', $data);
    }

}
