@extends('layouts.register')
@section('form')
<form method="post" action="{{ route('register.account') }}">
    @csrf
    @isset($errors)
        @foreach ($errors->all() as $error)
            <p class="text-red-500 text-xs italic">{{ $error }}</p>
        @endforeach
    @endisset
    <p class="text-center text-3xl mt-0">Telefon Numaranı Ekle</p>
    <p>Telefon Numarası</p>
    <div class="flex flex-row">
        <div class="basis-1/3 p-2">
            <select 
            id="prephone" name="prephone"
            class="w-full h-6 bg-gray-600 border-0 text-white rounded-md placeholder:text-slate-400 placeholder:pl-5">
                <option value="90">+90</option>
                <option value="2">+2</option>
            </select>
        </div>
        <div class="basis-2/3 p-2">
            <input type="text" 
            id="phone" name="phone"
            class="w-full h-6 bg-gray-600 border-0 text-white rounded-md placeholder:text-slate-400 placeholder:pl-5" 
            placeholder="XXX-XXX-XXXX">
        </div>
    </div>
    <input type="text" id="email" name="email" value="{{ $email }}" class="hidden"> 
    <button type="submit" class="w-full h-8 bg-gray-600 text-white rounded-md mt-20 border-gray-400 border-solid cursor-pointer">Devam Et</button>
    <div class="text-center mt-5">
        <a href="#" class="text-underline text-gray-600">Daha Sonra Ekle</p>
    </div>
</form>
@endsection