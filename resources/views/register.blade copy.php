<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Page</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
    <div class="bg-slate-950 w-full flex flex-col items-start justify-start gap-[48px] text-left text-xl text-color font-montserrat">
      <div class="w-[100%] h-[1020px] overflow-hidden shrink-0">
        <div class="absolute top-[180px] left-[1256px] rounded-xl bg-gray-200 w-[560px] h-[661px]">
          <div class="absolute top-[60px] left-[95px] flex flex-row items-center justify-center text-center text-21xl">
            <div class="relative font-semibold">E-Posta Adresi Gir</div>
          </div>
          <div class="absolute top-[169px] left-[60px] flex flex-col items-start justify-start gap-[20px]">
            <div class="flex flex-col items-start justify-start gap-[8px]">
              <div class="flex flex-row items-start justify-start">
                <div class="relative">E-Posta</div>
              </div>
              <div
                class="rounded bg-gainsboro-300 shadow-[0px_0px_4px_rgba(0,_0,_0,_0.25)_inset] w-[440px] flex flex-row py-2 px-5 box-border items-center justify-start"
              >
                <div class="relative opacity-[0.2]">E-Posta Adresini Yaz</div>
              </div>
            </div>
            <div class="flex flex-row items-center justify-start gap-[10px]">
              <div class="relative w-7 h-7">
                <div class="absolute top-[0px] left-[0px] rounded bg-gainsboro-300 shadow-[0px_0px_4px_rgba(0,_0,_0,_0.25)_inset] w-7 h-7"></div>
                <img class="absolute h-[94.64%] w-[91.25%] top-[3.57%] right-[5.18%] bottom-[1.79%] left-[3.57%] max-w-full overflow-hidden max-h-full hidden" alt="" src="/public/vector.svg" />
              </div>
              <div class="relative flex items-center w-[402px] shrink-0 opacity-[0.6]">
                Haberler, özel teklifler, geribildirim anketleri ve oynanış
                testi davetleri al.
              </div>
              <div class="relative font-ubuntu text-color1 hidden">
                Create new account
              </div>
            </div>
          </div>
          <div class="absolute top-[516px] left-[60px] flex flex-col pt-0 px-0 pb-[60px] items-center justify-start gap-[20px] text-gainsboro-200">
            <div class="rounded bg-gainsboro-300 shadow-[0px_0px_8px_rgba(253,_199,_117,_0.2)] box-border w-[440px] h-10 flex flex-row py-2 px-5 items-center justify-center border-[1px] border-solid border-gainsboro-200">
              <div class="relative font-medium">Devam Et</div>
            </div>
            <div class="flex flex-col items-center justify-start text-color">
              <div class="flex flex-row items-start justify-start opacity-[0.6]">
                <div class="relative [text-decoration:underline]">
                  Bir Hesabın Var Mı?
                </div>
              </div>
            </div>
            <div class="w-[69px] h-2 hidden flex-row items-start justify-start gap-[4px]"> 
              <div class="relative rounded-32xl bg-gainsboro-100 w-11 h-2 opacity-[0.6]"></div>
              <div class="relative rounded-32xl bg-gainsboro-100 w-2 h-2 opacity-[0.2]"></div>
              <div class="relative rounded-32xl bg-gainsboro-100 w-[9px] h-2 opacity-[0.2]"></div>
            </div>
          </div>
        </div>
        <div class="absolute top-[453px] left-[104px] flex flex-col items-start justify-start gap-[80px] text-right text-41xl">
          <div class="w-[620px] h-[115px] flex flex-col items-start justify-start gap-[12px]">
            <div class="h-11 flex flex-row items-center justify-start">
              <b class="relative opacity-[0.6]">YENİ</b>
            </div>
            <div class="w-[413px] h-[60px] flex flex-row items-center justify-start text-61xl">
              <b class="relative">HESAP OLUŞTUR</b>
            </div>
          </div>
          <div class="w-[69px] h-2 flex flex-row items-start justify-start gap-[4px]">
            <div class="relative rounded-32xl bg-gainsboro-100 w-11 h-2 opacity-[0.6]"></div>
            <div class="relative rounded-32xl bg-gainsboro-100 w-2 h-2 opacity-[0.2]"></div>
            <div class="relative rounded-32xl bg-gainsboro-100 w-[9px] h-2 opacity-[0.2]"></div>
          </div>
        </div>
      </div>
      <div class="relative bg-black w-[1920px] h-[280px] text-center text-xs">
        <div class="absolute top-[55px] left-[208px] flex flex-row items-center justify-start gap-[46px]">
          <b class="relative tracking-[0.1em] uppercase">CAREERS</b>
          <b class="relative tracking-[0.1em] uppercase">about</b>
          <b class="relative tracking-[0.1em] uppercase">SUPPORT</b>
          <b class="relative tracking-[0.1em] uppercase">CONTACT US</b>
          <b class="relative tracking-[0.1em] uppercase flex items-center justify-center w-[86px] h-[22px] shrink-0">SUBSCRIBE</b>
        </div>
        <img
          class="absolute top-[37px] left-[104px] w-[78.05px] h-10 object-cover"
          alt=""
          src="/public/logo@2x.png"
        />

        <div class="absolute top-[100px] left-[100px] box-border w-[1712.87px] h-[0.87px] opacity-[0.5] border-t-[0.9px] border-solid border-color"></div>
        <div class="absolute top-[155px] left-[104px] flex flex-row items-center justify-start gap-[869px] text-left text-sm">
          <div class="relative opacity-[0.6] mix-blend-normal">All Rights Reserved @CompanyName</div>
          <b class="relative text-xs tracking-[0.1em] uppercase inline-block text-right w-[578px] h-[21px] shrink-0">Privacy Policy | Terms of Services | Code of Conduct</b>
        </div>
      </div>
    </div>
    </body>
</html>
