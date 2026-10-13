<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * お問い合わせフォームを表示
     */
    public function showForm()
    {
        return view('contact.form');
    }

    /**
     * お問い合わせを送信
     */
    public function submit(Request $request)
    {
        // 入力値のバリテーション
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 送信完了画面に入力データを渡して表示
        return view('contact.thanks', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);
    }
}
