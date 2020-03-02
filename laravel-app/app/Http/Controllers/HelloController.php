<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

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
}
