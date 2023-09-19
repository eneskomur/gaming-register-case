<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('register-form.email');
    }

    public function getPhoneForm(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        if (!$validated) {
            return view('register.email', ['errors', $request->validator->errors()]);
        }

        return view('register-form.phone', $validated);
    }

    public function getAccountForm(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'prephone' => 'required|numeric|digits_between:1,3',
            'phone' => 'required|numeric|digits_between:9,15',
        ]);

        if (!$validated) {
            return view('register.phone', ['errors', $request->validator->errors()]);
        }

        $request->merge([
            'phone' => $request->prephone . $request->phone,
        ]);

        return view('register-form.account', $validated);
    }

    public function complete(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,18',
            'username' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!$validated) {
            return view('register.account', ['errors', $request->validator->errors()]);
        }

        $user = new User([
            'email' => $request->email,
            'phone_number' => $request->phone,
            'name' => $request->username,
            'password' => $request->password,
        ]);
        $user->save();

        //Mail::to($user->email)->send();

        return view(
            'register-form.complete',
            [
                'header' => 'Hesabınız Başarıyla Oluşturuldu',
                'message' => 'Kimliğinizi doğrulamak için e-posta adresinize gelen bağlantıya tıklayın.'
            ]
        );
    }

    public function verify(Request $request)
    {
        //verification logic

        return view(
            'register-form.complete',
            [
                'header' => 'E-posta Adresiniz Doğrulandı',
                'message' => 'Hesabınızı kullanmaya başlayabilirsiniz.'
            ]
        );
    }
}
