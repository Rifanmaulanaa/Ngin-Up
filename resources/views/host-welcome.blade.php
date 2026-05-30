@extends('layouts.auth')

@section('title', 'Selamat Bergabung - Host NginUp')
@section('container_class', 'max-w-md md:max-w-full lg:max-w-7xl')

@section('content')

<div class="w-full relative z-10 md:py-8">
    
    {{-- Main Card --}}
    <div class="bg-white rounded-[32px] shadow-xl shadow-gray-200/60 border border-gray-100 overflow-hidden flex flex-col md:flex-row text-center md:text-left pb-8 md:pb-0 backdrop-blur-sm">
        
        {{-- Top/Side Image --}}
        <div class="w-full md:w-1/2 h-56 md:h-[600px] relative rounded-b-[32px] md:rounded-b-none md:rounded-r-[32px] overflow-hidden shadow-inner shrink-0">
            <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover brightness-75">
            <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black/60 to-transparent"></div>
        </div>

        {{-- Content Area --}}
        <div class="px-8 md:px-12 lg:px-20 -mt-6 md:mt-0 relative z-10 flex flex-col items-center md:items-start justify-center md:w-1/2 py-8">
            
            {{-- Welcome Text --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-orange mt-12 md:mt-0 mb-4 md:mb-6 leading-tight tracking-tight">
                Selamat<br>Bergabung di<br>NginUp!
            </h1>
            
            {{-- Description --}}
            <p class="text-gray-500 text-sm md:text-base lg:text-lg leading-relaxed mb-10 max-w-sm md:max-w-md mx-auto md:mx-0">
                Langkah awal Anda menuju pengalaman properti yang luar biasa dimulai hari ini. Akun Anda telah aktif dan siap untuk digunakan menjelajahi ribuan pilihan eksklusif.
            </p>
            
            {{-- Action Button --}}
            <a href="/host/verification" class="w-full max-w-xs md:max-w-sm bg-brand-orange hover:bg-brand-orange-hover active:scale-[0.98] text-white py-4 rounded-2xl font-bold flex items-center justify-center gap-2 shadow-lg shadow-brand-orange/30 hover:shadow-xl transition-all duration-300">
                Mulai Eksplorasi
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</div>

@endsection
