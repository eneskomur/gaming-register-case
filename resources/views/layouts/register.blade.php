<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Page</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased" style="margin:0">
    <div class="bg-slate-950 w-full h-screen text-left text-color font-montserrat overflow-hidden">
      <div id="header" class="h-[20%]"></div>
      <div id="content" class="h-[60%] bg-[url('/img/background-image.png')] bg-cover bg-center bg-no-repeat">
        <div id="gradient-temp" class="flex flex-row h-[100%] w-full bg-gradient-to-b from-slate-950 to-transparent to-50%">
          <div id="main-screen" class="flex flex-row w-full  bg-gradient-to-t from-slate-950 to-transparent to-50% p-20">
            <div class="basis-2/3 self-center">
              <p class="font-montserrat font-bold text-5xl text-gray-400 m-2">YENİ</p>
              <p class="font-montserrat font-bold text-6xl text-white m-2">HESAP OLUŞTUR</p>
              <div class="m-2">
                <div class="bg-gray-400 w-6 h-1 rounded-lg shadow inline-block"></div>
                <div class="bg-gray-600 w-2 h-1 rounded-lg shadow inline-block"></div>
                <div class="bg-gray-600 w-2 h-1 rounded-lg shadow inline-block"></div>
              </div>
            </div>
            <div class="basis-1/3">
              <div class="bg-black pt-7 pb-7 pl-10 pr-10 rounded">
                @yield('form')
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="footer" class="w-[100%] h-[20%]">
        <ul class="text-left flex space-x-8 font-montserrat text-xs tracking-wider">
          <li class="inline-block"><a href="#"><img class="w-16" src="/img/footer-image.png"></a></li>
          <li class="inline-block"><a href="#" class="text-white no-underline">CAREERS</a></li>
          <li class="inline-block"><a href="#" class="text-white no-underline">ABOUT</a></li>
          <li class="inline-block"><a href="#" class="text-white no-underline">SUPPORT</a></li>
          <li class="inline-block"><a href="#" class="text-white no-underline">CONTACT US</a></li>
          <li class="inline-block"><a href="#" class="text-white no-underline">SUBSCRIBE</a></li>
        </ul>
        <hr class="mt-5 mb-5 ml-10 mr-10 border-gray-600">
        <div class="flex flex-row ml-10 mr-10">
          <div class="basis-1/2 text-left text-xs text-gray-400">
            All Rights Reserved @CompanyName
          </div>
          <div class="basis-1/2">
            <ul class="text-right flex space-x-3 font-montserrat text-xs float-right mt-0">
              <li class="inline-block"><a href="#" class='text-white no-underline'>Privacy Policy</a></li>
              <li class="inline-block"><a href="#" class='text-white no-underline'>Terms of Services</a></li>
              <li class="inline-block"><a href="#" class='text-white no-underline'>Code of Conduct</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>
