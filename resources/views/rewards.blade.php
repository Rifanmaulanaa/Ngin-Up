@extends('layouts.app', ['activeTab' => 'rewards'])

@section('title', 'Rewards - NginUp')

@section('content')

    <div class="md:px-12 py-6 max-w-3xl mx-auto w-full pb-24 md:pb-6">

        {{-- Top navigation with bell icon (Mobile) --}}
        <div class="px-4 mb-6 flex justify-between items-center md:hidden">
            <h1 class="text-xl font-bold text-gray-900">Reward Saya</h1>
            <button class="w-10 h-10 border border-gray-200 rounded-full flex items-center justify-center text-gray-600">
                <i class="fa-regular fa-bell"></i>
            </button>
        </div>

        {{-- Points Card --}}
        <div class="px-4 md:px-0 mb-6">
            <div class="bg-gradient-to-br from-brand-orange to-[#c14d0e] rounded-[24px] p-6 text-white relative overflow-hidden shadow-lg shadow-brand-orange/20">
                <div class="absolute right-0 top-0 opacity-10 text-9xl -translate-y-4 translate-x-4">
                    <i class="fa-solid fa-gem"></i>
                </div>
                
                <div class="flex justify-between items-center mb-6 relative z-10">
                    <div>
                        <p class="text-xs font-semibold text-orange-100 uppercase tracking-wider mb-1">Total Rewards</p>
                        <h2 class="text-3xl font-black tracking-tight">Rp 250.000</h2>
                    </div>
                    <span class="bg-white text-brand-orange-hover text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">
                        Active Member
                    </span>
                </div>

                <div class="flex justify-between items-center pt-4 border-t border-white/20 relative z-10">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-coins text-orange-200"></i>
                        <span class="text-sm font-bold">1.500 Pts</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-wallet text-orange-200"></i>
                        <span class="text-sm font-bold">≈ Rp 12.000</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Voucher Summary Boxes --}}
        <div class="px-4 md:px-0 grid grid-cols-2 gap-4 mb-8">
            <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm flex flex-col justify-center gap-2">
                <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 mb-1">
                    <i class="fa-solid fa-money-bill-wave"></i>
                </div>
                <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Cashback Diskon</span>
                <span class="text-sm font-bold text-gray-900">Rp 116.000</span>
            </div>
            <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm flex flex-col justify-center gap-2">
                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-purple-500 mb-1">
                    <i class="fa-solid fa-ticket"></i>
                </div>
                <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Voucher Diskon</span>
                <span class="text-sm font-bold text-gray-900">Rp 50.000</span>
            </div>
        </div>

        {{-- Referral Box --}}
        <div class="px-4 md:px-0 mb-8">
            <div class="bg-[#EAF5F8] border border-[#BCE1E8] rounded-2xl p-5 relative overflow-hidden">
                <div class="absolute right-0 top-0 opacity-20 -mr-6 -mt-6">
                    <i class="fa-solid fa-gift text-6xl text-[#315762]"></i>
                </div>
                
                <h3 class="font-bold text-[#1c333a] mb-1 relative z-10">Ajak Teman, Dapat Saldo!</h3>
                <p class="text-xs text-[#315762] mb-4 w-3/4 leading-relaxed relative z-10">Bagikan kode referral kamu dan dapatkan Rp 25.000 untuk setiap teman yang menginap.</p>
                
                <div class="flex gap-2 relative z-10">
                    <div class="flex-1 bg-white border border-[#BCE1E8] rounded-xl px-4 py-2 flex items-center justify-between border-dashed">
                        <span class="text-sm font-bold tracking-widest text-gray-800">NGN-V90E34</span>
                        <button class="text-gray-400 hover:text-gray-600 transition-colors"><i class="fa-regular fa-copy"></i></button>
                    </div>
                    <button class="w-12 h-10 bg-[#315762] hover:bg-[#1c333a] active:scale-95 text-white rounded-xl flex items-center justify-center transition-all shadow-sm">
                        <i class="fa-solid fa-share-nodes text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Level Progress --}}
        <div class="px-4 md:px-0 mb-8">
            <div class="bg-gradient-to-r from-gray-50 to-orange-50/30 border border-gray-100 rounded-2xl p-5 shadow-sm relative overflow-hidden">
                
                <h3 class="font-bold text-gray-900 mb-1">Tingkatkan Level Kamu!</h3>
                <p class="text-xs text-gray-500 mb-5 w-3/4 leading-relaxed">Kumpulkan 150 Poin lagi untuk menjadi <span class="font-bold text-gray-700">Platinum Member</span> dan dapatkan cashback 15%.</p>
                
                <div class="mb-2">
                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-brand-orange rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="flex justify-between items-center text-[10px] font-bold text-gray-400 tracking-wider">
                    <span>1.500 pts</span>
                    <span>1.650 pts</span>
                </div>

                {{-- Trophy Icon --}}
                <div class="absolute right-4 top-1/2 -translate-y-1/2 w-14 h-14 bg-orange-100 rounded-full border-[4px] border-white flex items-center justify-center shadow-sm">
                    <i class="fa-solid fa-trophy text-brand-orange text-xl"></i>
                </div>
            </div>
        </div>

        {{-- Riwayat Reward --}}
        <div class="px-4 md:px-0">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-sm font-bold text-gray-900">Riwayat Reward (5)</h3>
                <a href="#" class="text-brand-orange text-xs font-bold hover:underline">Lihat Semua</a>
            </div>

            <div class="flex flex-col gap-3 relative">
                {{-- Vertical Line for timeline --}}
                <div class="absolute left-[19px] top-6 bottom-6 w-0.5 bg-gray-100 -z-10"></div>

                {{-- Item 1 --}}
                <div class="flex items-center gap-4 bg-white p-3 rounded-2xl border border-gray-50 shadow-sm relative z-10">
                    <div class="w-10 h-10 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center shrink-0 border-2 border-white shadow-xs">
                        <i class="fa-solid fa-house-chimney text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900 text-sm leading-tight">Cashback Stay at Villa Bali</h4>
                        <span class="text-[10px] text-gray-400">12 Okt 2024</span>
                    </div>
                    <div class="text-right">
                        <span class="text-sm font-bold text-brand-orange block">+Rp 50.000</span>
                        <span class="text-[9px] text-gray-400 font-medium">Telah diproses</span>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="flex items-center gap-4 bg-white p-3 rounded-2xl border border-gray-50 shadow-sm relative z-10">
                    <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0 border-2 border-white shadow-xs">
                        <i class="fa-solid fa-user-plus text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900 text-sm leading-tight">Referral Bonus (Andi)</h4>
                        <span class="text-[10px] text-gray-400">05 Okt 2024</span>
                    </div>
                    <div class="text-right">
                        <span class="text-sm font-bold text-brand-orange block">+Rp 25.000</span>
                        <span class="text-[9px] text-gray-400 font-medium">Telah diproses</span>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="flex items-center gap-4 bg-white p-3 rounded-2xl border border-gray-50 shadow-sm relative z-10">
                    <div class="w-10 h-10 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center shrink-0 border-2 border-white shadow-xs">
                        <i class="fa-solid fa-building text-xs"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900 text-sm leading-tight">Cashback Stay at Hotel Jakarta</h4>
                        <span class="text-[10px] text-gray-400">22 Sep 2024</span>
                    </div>
                    <div class="text-right">
                        <span class="text-sm font-bold text-brand-orange block">+Rp 10.000</span>
                        <span class="text-[9px] text-gray-400 font-medium">Telah diproses</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
