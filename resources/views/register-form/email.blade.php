@extends('layouts.register')
@section('form')
<form method="post" action="{{ route('register.phone') }}">
    @csrf
    @isset($errors)
        @foreach ($errors->all() as $error)
            <p class="text-red-500 text-xs italic">{{ $error }}</p>
        @endforeach
    @endisset
    <p class="text-center text-3xl mt-0">E-Posta Adresi Gir</p>
    <p>E-Posta</p>
    <input type="text" 
    id="email" name="email"
    class="w-full h-6 bg-gray-600 border-0 text-white rounded-md placeholder:text-slate-400 placeholder:pl-5" 
    placeholder="E-posta Adresini Yaz">
    <label class="flex mt-5">
        <input type="checkbox"
        id="newsletter" name="newsletter" value="1"
        class="h-10 w-8 accent-gray-600 bg-gray-600 border-0 cursor-pointer"> 
        <span class="inline-block pl-3">
        Haberler, özel teklifler, geribildirim anketleri ve oynanış testi davetleri al. 
        </span>
    </label>
    <button type="submit" class="w-full h-8 bg-gray-600 text-white rounded-md mt-20 border-gray-400 border-solid cursor-pointer">Devam Et</button>
    <div class="text-center mt-5">
        <a href="#" class="text-underline text-gray-600">Bir Hesabın Var Mı?</p>
    </div>
</form>
@endsection