@extends('layouts.register')
@section('form')
<form method="post" action="{{ route('register.complete') }}">
    @csrf
    @isset($errors)
        @foreach ($errors->all() as $error)
            <p class="text-red-500 text-xs italic">{{ $error }}</p>
        @endforeach
    @endisset
    <p class="text-center text-3xl mt-0">Kimliğini Oluştur</p>
    <p>Kullanıcı Adı</p>
    <input type="text" 
    id="username" name="username"
    class="w-full h-6 bg-gray-600 border-0 text-white rounded-md placeholder:text-slate-400 placeholder:pl-5" 
    placeholder="Kullanıcı Adını Seç">
    <p>Şifre</p>
    <input type="text" 
    id="password" name="password"
    class="w-full h-6 bg-gray-600 border-0 text-white rounded-md placeholder:text-slate-400 placeholder:pl-5" 
    placeholder="Şifreni Seç">
    <p>Şifre Onay</p>
    <input type="text" 
    id="password_confirmation" name="password_confirmation"
    class="w-full h-6 bg-gray-600 border-0 text-white rounded-md placeholder:text-slate-400 placeholder:pl-5" 
    placeholder="Şifreni Tekrar Yaz">
    <label class="flex mt-5">
        <input type="checkbox" class="h-10 w-8 accent-gray-600 bg-gray-600 border-0 cursor-pointer"> 
        <span class="inline-block pl-3">
        Kabul ediyorum <a href="#" class="text-underline text-gray-600">Kurallar</a> & <a href="#" class="text-underline text-gray-600">Koşullar</a>
        </span>
    </label>
    <input type="text" id="email" name="email" value="{{ $email }}" class="hidden"> 
    <input type="text" id="phone" name="phone" value="{{ $phone }}" class="hidden"> 
    <button type="submit" class="w-full h-8 bg-gray-600 text-white rounded-md mt-20 border-gray-400 border-solid cursor-pointer">Hemen Katıl</button>
</form>
@endsection