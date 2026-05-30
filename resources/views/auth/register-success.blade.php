@extends('layouts.auth')

@section('title', 'NginUp - Pendaftaran Berhasil')

@section('content')

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)" class="w-full">

    {{-- Card --}}
    <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/60 border border-gray-100 p-8 text-center backdrop-blur-sm">

        {{-- Success Icon --}}
        <div class="flex justify-center mb-6">
            <div
                x-show="show"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-50"
                x-transition:enter-end="opacity-100 scale-100"
                class="relative"
            >
                {{-- Outer ring animation --}}
                <div class="absolute inset-0 w-24 h-24 rounded-full bg-brand-orange/10 animate-ping" style="animation-duration: 2s;"></div>
                {{-- Middle ring --}}
                <div class="absolute -inset-3 rounded-full bg-brand-orange/5"></div>
                {{-- Icon circle --}}
                <div class="relative w-24 h-24 bg-gradient-to-br from-brand-orange to-brand-orange-hover rounded-full flex items-center justify-center shadow-lg shadow-brand-orange/40">
                    <i class="fa-solid fa-circle-check text-white text-4xl drop-shadow-sm"></i>
                </div>
            </div>
        </div>

        {{-- Text --}}
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-500 delay-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
        >
            <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Pendaftaran Berhasil!</h2>
            <p class="text-sm text-gray-500 leading-relaxed max-w-xs mx-auto">
                Akun Anda telah berhasil dibuat. Silakan masuk untuk mulai mengeksplorasi penginapan lokal terbaik.
            </p>
        </div>

        {{-- Actions --}}
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-500 delay-500"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="mt-8 flex flex-col gap-3"
        >
            {{-- Primary CTA --}}
            <a
                href="/login"
                class="w-full bg-brand-orange hover:bg-brand-orange-hover active:scale-[0.98] text-white py-4 rounded-2xl font-bold flex items-center justify-center gap-2 shadow-lg shadow-brand-orange/30 hover:shadow-xl hover:shadow-brand-orange/40 transition-all duration-300"
            >
                Masuk Sekarang
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            {{-- Secondary CTA --}}
            <a
                href="/home"
                class="w-full bg-white border-2 border-brand-orange/20 hover:border-brand-orange/40 text-brand-orange hover:text-brand-orange-hover py-4 rounded-2xl font-bold flex items-center justify-center gap-2 transition-all duration-300 active:scale-[0.98]"
            >
                Lihat Dashboard (Tanpa Login)
            </a>
        </div>

        {{-- Confetti-like decoration --}}
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-1000 delay-700"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            class="mt-8 flex items-center justify-center"
        >
            <div class="w-14 h-14 flex items-center justify-center">
                <img src="{{ asset('logo_Nginup.png') }}" alt="NginUp Logo" class="w-10 h-10 object-contain opacity-30">
            </div>
        </div>

        <p
            x-show="show"
            x-transition:enter="transition ease-out duration-500 delay-1000"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            class="text-xs text-gray-300 font-extrabold tracking-widest mt-2"
        >
            NginUp
        </p>

    </div>

</div>

@endsection
