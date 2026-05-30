@extends('layouts.auth')

@section('title', 'Verifikasi Host - NginUp')
@section('container_class', 'max-w-md md:max-w-full lg:max-w-7xl')

@section('content')

<div class="w-full relative z-10" x-data="{ 
    step: 1,
    scrollToTop() { 
        window.scrollTo({top:0, behavior:'smooth'}); 
        if($refs.formContainer) $refs.formContainer.scrollTo({top:0, behavior:'smooth'}); 
    } 
}">
    
    <div class="bg-[#F8F9FA] rounded-[0px] md:rounded-[32px] shadow-none md:shadow-2xl md:shadow-gray-200/60 md:border md:border-gray-100 flex flex-col md:flex-row w-full md:max-h-[calc(100vh-2rem)] md:overflow-hidden">
        
        {{-- Left Side: Image & Desktop Progress --}}
        <div class="hidden md:flex w-full md:w-2/5 relative shrink-0 bg-gray-900 flex-col justify-between p-12 overflow-hidden md:rounded-l-[32px]">
            <img src="https://images.unsplash.com/photo-1556912167-f556f1f39fdf?q=80&w=1200&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-30 hover:scale-105 transition-transform duration-1000">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
            
            <div class="relative z-10">
                <h1 class="text-brand-orange text-3xl font-extrabold mb-12 tracking-tight">NginUp</h1>
                <h2 class="text-white text-5xl font-extrabold mb-6 leading-tight tracking-tight">Verifikasi<br>Profil Anda</h2>
                <p class="text-white/80 text-lg max-w-sm leading-relaxed">
                    Selesaikan beberapa langkah mudah ini untuk mengaktifkan akun Host Anda dan mulai menerima tamu.
                </p>
            </div>

            <div class="relative z-10 mt-12 space-y-8">
                {{-- Desktop Steps Tracker --}}
                <div class="flex items-center gap-5 transition-all duration-500" :class="step >= 1 ? 'opacity-100 translate-x-0' : 'opacity-40 -translate-x-2'">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300 text-lg" :class="step > 1 ? 'bg-brand-orange text-white' : (step === 1 ? 'bg-white text-brand-orange scale-110 ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 1"></i>
                        <span x-show="step <= 1">1</span>
                    </div>
                    <span class="text-white font-bold text-xl tracking-wide">Identity Verification</span>
                </div>
                
                <div class="flex items-center gap-5 transition-all duration-500" :class="step >= 2 ? 'opacity-100 translate-x-0' : 'opacity-40 -translate-x-2'">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300 text-lg" :class="step > 2 ? 'bg-brand-orange text-white' : (step === 2 ? 'bg-white text-brand-orange scale-110 ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 2" style="display: none;"></i>
                        <span x-show="step <= 2">2</span>
                    </div>
                    <span class="text-white font-bold text-xl tracking-wide">Property Details</span>
                </div>
                
                <div class="flex items-center gap-5 transition-all duration-500" :class="step >= 3 ? 'opacity-100 translate-x-0' : 'opacity-40 -translate-x-2'">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300 text-lg" :class="step > 3 ? 'bg-brand-orange text-white' : (step === 3 ? 'bg-white text-brand-orange scale-110 ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 3" style="display: none;"></i>
                        <span x-show="step <= 3">3</span>
                    </div>
                    <span class="text-white font-bold text-xl tracking-wide">Photos & Touches</span>
                </div>
            </div>
        </div>

        {{-- Right Side: Form Content --}}
        <div class="w-full md:w-3/5 relative flex flex-col md:overflow-y-auto" x-ref="formContainer">
            
            {{-- Top Navbar --}}
            <div class="bg-[#F8F9FA]/90 backdrop-blur-md px-4 py-4 md:px-10 md:py-6 flex items-center justify-between sticky top-0 z-30 border-b border-gray-100/50">
                <div class="flex items-center gap-3">
                    <h1 class="text-xl font-bold text-brand-orange md:hidden">NginUp</h1>
                    <h2 class="text-xl font-extrabold text-gray-800 hidden md:block">Lengkapi Data</h2>
                </div>
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full overflow-hidden border border-gray-200 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=100&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
            </div>

            {{-- Mobile Progress Bar --}}
            <div x-show="step < 4" class="md:hidden bg-white px-4 py-3 border-b border-gray-100 sticky top-[64px] z-20">
                <div class="flex justify-between items-end mb-2">
                    <span class="text-brand-orange font-bold text-xs uppercase tracking-wider" x-text="'STEP ' + step + ' OF 3'"></span>
                    <span class="text-[10px] text-gray-500 font-semibold" x-text="Math.round((step / 3) * 100) + '% Complete'"></span>
                </div>
                <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-brand-orange rounded-full transition-all duration-500 ease-out" :style="'width: ' + ((step / 3) * 100) + '%'"></div>
                </div>
            </div>

            {{-- Main Content Area --}}
            <div class="px-4 py-8 md:px-12 md:py-10 max-w-2xl mx-auto w-full pb-32 md:pb-24">

        {{-- STEP 1: Identity Verification --}}
        <div x-show="step === 1" x-transition.opacity.duration.300ms>
            <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Identity Verification</h2>

            {{-- Guidelines --}}
            <div class="bg-[#F4F7FB] border border-[#E2E8F0] rounded-2xl p-5 mb-6">
                <div class="flex items-center gap-2 mb-3">
                    <i class="fa-solid fa-circle-info text-blue-500"></i>
                    <h3 class="font-bold text-gray-800 text-sm">Guidelines</h3>
                </div>
                <ul class="flex flex-col gap-3 text-xs text-gray-600">
                    <li class="flex gap-2 items-start">
                        <i class="fa-solid fa-sun text-brand-orange mt-0.5"></i>
                        <span>Use natural, bright lighting. Avoid heavy shadows or backlighting on your face.</span>
                    </li>
                    <li class="flex gap-2 items-start">
                        <i class="fa-solid fa-id-card-clip text-brand-orange mt-0.5"></i>
                        <span>Ensure your ID document is fully visible and not cropped by the camera frame.</span>
                    </li>
                    <li class="flex gap-2 items-start">
                        <i class="fa-regular fa-eye text-brand-orange mt-0.5"></i>
                        <span>Text and photos must be clear. Avoid glare from plastic covers or flash.</span>
                    </li>
                </ul>
            </div>

            {{-- Identity Document --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-5 mb-6 shadow-sm">
                <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center">
                        <i class="fa-regular fa-id-card"></i>
                    </div>
                    Identity Document (KTP)
                </h3>
                
                <div class="flex flex-col gap-4">
                    <button class="border-2 border-dashed border-gray-300 rounded-xl p-6 flex flex-col items-center justify-center text-gray-500 hover:border-brand-orange hover:text-brand-orange hover:bg-orange-50 transition-colors">
                        <i class="fa-solid fa-camera text-2xl mb-2"></i>
                        <span class="text-sm font-bold">Take Photo</span>
                        <span class="text-[10px] mt-1">Capture using your device camera</span>
                    </button>
                    <button class="border-2 border-dashed border-gray-300 rounded-xl p-6 flex flex-col items-center justify-center text-gray-500 hover:border-brand-orange hover:text-brand-orange hover:bg-orange-50 transition-colors">
                        <i class="fa-regular fa-file-image text-2xl mb-2"></i>
                        <span class="text-sm font-bold">Upload File</span>
                        <span class="text-[10px] mt-1">PDF, JPG or PNG (Max 5MB)</span>
                    </button>
                </div>
            </div>

            {{-- Verification Selfie --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-5 mb-8 shadow-sm text-center flex flex-col items-center">
                <h3 class="font-bold text-gray-800 mb-6 flex items-center gap-2 w-full text-left">
                    <div class="w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-face-smile"></i>
                    </div>
                    Verification Selfie
                </h3>
                
                <div class="w-32 h-32 rounded-full bg-orange-50 flex items-center justify-center border-4 border-white shadow-md mb-6 relative">
                    <i class="fa-regular fa-user text-4xl text-brand-orange/50"></i>
                    <div class="absolute inset-0 border-[3px] border-brand-orange rounded-full scale-110 opacity-30"></div>
                </div>

                <p class="text-xs text-gray-500 leading-relaxed max-w-xs mb-6">
                    We need a real-time photo of your face to match with your ID. Please remove any hats or sunglasses.
                </p>

                <button class="bg-brand-orange text-white text-sm font-bold px-6 py-3 rounded-xl flex items-center gap-2 shadow-sm hover:bg-brand-orange-hover transition-colors">
                    <i class="fa-solid fa-camera"></i> Open Selfie Camera
                </button>
            </div>

            {{-- Bottom Actions --}}
            <div class="flex flex-col items-center mt-6">
                <div class="flex items-center gap-2 text-[10px] text-gray-400 mb-4">
                    <i class="fa-solid fa-lock text-brand-green/60"></i>
                    <span>Your data is securely encrypted and stored.</span>
                </div>
                <button @click="step = 2; scrollToTop()" class="w-full bg-[#f4a275] text-white py-4 rounded-xl font-bold shadow-md hover:bg-brand-orange transition-colors">
                    Continue to Step 2
                </button>
            </div>
        </div>

        {{-- STEP 2: Property Details --}}
        <div x-show="step === 2" x-transition.opacity.duration.300ms style="display: none;">
            <div class="mb-6">
                <span class="text-gray-500 text-xs font-semibold uppercase tracking-wider block mb-1">Property Details</span>
                <h2 class="text-2xl font-extrabold text-gray-900">Tell us about your space</h2>
            </div>

            {{-- Identity & Category --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-5 mb-6 shadow-sm">
                <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-tag"></i>
                    </div>
                    Identity & Category
                </h3>

                <div class="mb-4">
                    <label class="text-xs font-semibold text-gray-600 block mb-2">Property Title</label>
                    <input type="text" placeholder="e.g. Modern Villa with Sunset View" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brand-orange">
                </div>

                <div>
                    <label class="text-xs font-semibold text-gray-600 block mb-2">Property Type</label>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="border border-gray-200 rounded-xl py-3 flex flex-col items-center gap-1 hover:border-brand-orange hover:bg-orange-50 text-gray-500 hover:text-brand-orange transition-all">
                            <i class="fa-solid fa-building"></i>
                            <span class="text-[10px] font-bold">Apartment</span>
                        </button>
                        <button class="border-2 border-brand-orange bg-orange-50 rounded-xl py-3 flex flex-col items-center gap-1 text-brand-orange shadow-sm">
                            <i class="fa-solid fa-house"></i>
                            <span class="text-[10px] font-bold">House</span>
                        </button>
                        <button class="border border-gray-200 rounded-xl py-3 flex flex-col items-center gap-1 hover:border-brand-orange hover:bg-orange-50 text-gray-500 hover:text-brand-orange transition-all">
                            <i class="fa-solid fa-city"></i>
                            <span class="text-[10px] font-bold">Villa</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Pricing Strategy --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-5 mb-6 shadow-sm">
                <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    Pricing Strategy
                </h3>
                
                <div class="flex items-center gap-3 mb-2">
                    <div class="flex-1 relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">$</div>
                        <input type="text" placeholder="0.00" value="120.00" class="w-full border border-gray-200 rounded-xl pl-8 pr-4 py-3 text-sm font-bold text-gray-800 focus:outline-none focus:border-brand-orange">
                    </div>
                    <span class="text-xs text-gray-500 font-medium">per<br>night</span>
                </div>
                <p class="text-[10px] text-gray-400">Average in your area: $135/night</p>
            </div>

            {{-- Location --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-5 mb-8 shadow-sm">
                <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    Location
                </h3>

                <div class="mb-4">
                    <label class="text-xs font-semibold text-gray-600 block mb-2">Street Address</label>
                    <div class="relative">
                        <input type="text" placeholder="Start typing address..." class="w-full border border-gray-200 rounded-xl pl-4 pr-10 py-3 text-sm focus:outline-none focus:border-brand-orange">
                        <i class="fa-solid fa-magnifying-glass absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <div class="w-full h-40 bg-gray-100 rounded-xl overflow-hidden relative border border-gray-200">
                    <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover opacity-80">
                    <div class="absolute inset-0 bg-black/10 flex items-center justify-center">
                        <div class="w-10 h-10 bg-brand-orange text-white rounded-full flex items-center justify-center shadow-lg border-2 border-white">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                    <button class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-white text-gray-800 text-[10px] font-bold px-3 py-1.5 rounded-full shadow-md flex items-center gap-1">
                        <i class="fa-solid fa-crosshairs"></i> Use current location
                    </button>
                </div>
            </div>

            {{-- Bottom Actions --}}
            <div class="flex gap-3">
                <button @click="step = 1; scrollToTop()" class="w-1/3 bg-white border border-gray-300 text-gray-600 py-4 rounded-xl font-bold shadow-sm hover:bg-gray-50 transition-colors">
                    Back
                </button>
                <button @click="step = 3; scrollToTop()" class="w-2/3 bg-brand-orange text-white py-4 rounded-xl font-bold shadow-md hover:bg-brand-orange-hover transition-colors flex justify-center items-center gap-2">
                    Next: Photos <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        {{-- STEP 3: Photos & Finishing Touches --}}
        <div x-show="step === 3" x-transition.opacity.duration.300ms style="display: none;">
            <div class="mb-6">
                <h2 class="text-2xl font-extrabold text-gray-900">Photos & Finishing Touches</h2>
            </div>

            {{-- Add main photo --}}
            <div class="bg-white border-2 border-dashed border-brand-orange/40 rounded-2xl p-8 mb-6 text-center flex flex-col items-center shadow-sm">
                <div class="w-12 h-12 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center mb-4">
                    <i class="fa-solid fa-camera-retro text-xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-1">Add main photo (Cover)</h3>
                <p class="text-xs text-gray-500 mb-6 max-w-[200px]">This is the first photo guests will see. Drag and drop or click to browse your files.</p>
                
                <button class="bg-brand-orange text-white text-xs font-bold px-5 py-2.5 rounded-full shadow-sm hover:bg-brand-orange-hover transition-colors">
                    Select from Device
                </button>
            </div>

            {{-- Additional Photos --}}
            <div class="mb-8">
                <div class="flex justify-between items-end mb-4">
                    <h3 class="font-bold text-gray-900">Additional Photos</h3>
                    <span class="text-[10px] text-gray-400">Minimum 4 photos recommended</span>
                </div>
                
                <div class="grid grid-cols-2 gap-3">
                    <div class="aspect-square border border-gray-200 rounded-xl flex flex-col items-center justify-center text-gray-400 bg-white">
                        <i class="fa-solid fa-bed text-xl mb-1"></i>
                        <span class="text-[10px] font-bold">Bedroom</span>
                    </div>
                    <div class="aspect-square border border-gray-200 rounded-xl flex flex-col items-center justify-center text-gray-400 bg-white">
                        <i class="fa-solid fa-bath text-xl mb-1"></i>
                        <span class="text-[10px] font-bold">Bathroom</span>
                    </div>
                    <div class="aspect-square border border-gray-200 rounded-xl flex flex-col items-center justify-center text-gray-400 bg-white">
                        <i class="fa-solid fa-couch text-xl mb-1"></i>
                        <span class="text-[10px] font-bold">Living Area</span>
                    </div>
                    <div class="aspect-square border-2 border-dashed border-orange-200 rounded-xl flex flex-col items-center justify-center text-brand-orange bg-orange-50/50 cursor-pointer hover:bg-orange-50 transition-colors">
                        <i class="fa-solid fa-plus text-xl mb-1"></i>
                        <span class="text-[10px] font-bold">Add More</span>
                    </div>
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="flex flex-col gap-3 mb-8">
                <button @click="step = 4; scrollToTop()" class="w-full bg-brand-orange text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 hover:bg-brand-orange-hover transition-colors">
                    Submit for Review
                </button>
                <button @click="step = 2; scrollToTop()" class="w-full text-gray-500 py-3 rounded-xl text-sm font-bold hover:bg-gray-100 transition-colors flex justify-center items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </button>
            </div>

            {{-- Pro Tips --}}
            <div class="bg-[#EAF5F8] rounded-2xl p-5 border border-[#BCE1E8]">
                <h3 class="font-bold text-[#1c333a] mb-4 flex items-center gap-2">
                    <i class="fa-regular fa-lightbulb"></i> Pro Photography Tips
                </h3>
                <ul class="flex flex-col gap-3 text-xs text-[#315762]">
                    <li class="flex gap-2 items-start">
                        <i class="fa-solid fa-circle-check mt-0.5 text-[#1c333a]"></i>
                        <span><strong>Use natural lighting.</strong> Open all curtains and shoot during the day for the best clarity.</span>
                    </li>
                    <li class="flex gap-2 items-start">
                        <i class="fa-solid fa-circle-check mt-0.5 text-[#1c333a]"></i>
                        <span><strong>Show all rooms.</strong> Guests want to see exactly where they'll be sleeping and relaxing.</span>
                    </li>
                    <li class="flex gap-2 items-start">
                        <i class="fa-solid fa-circle-check mt-0.5 text-[#1c333a]"></i>
                        <span><strong>Clean and declutter.</strong> A tidy space feels more spacious and inviting in photos.</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- STEP 4: Success / Under Review --}}
        <div x-show="step === 4" x-transition.opacity.duration.500ms style="display: none;" class="text-center pt-4">
            
            {{-- Illustration --}}
            <div class="relative w-full max-w-sm mx-auto h-48 mb-8 rounded-3xl overflow-hidden shadow-lg border border-gray-100">
                <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-white px-4 py-2 rounded-xl shadow-lg flex items-center gap-2 font-bold text-gray-800 text-sm whitespace-nowrap">
                    <i class="fa-solid fa-hourglass-half text-brand-orange"></i> Under Review
                </div>
            </div>

            <h2 class="text-3xl font-extrabold text-gray-900 mb-4 tracking-tight leading-tight">
                Great job, your<br>application is submitted!
            </h2>
            <p class="text-sm text-gray-500 mb-8 max-w-xs mx-auto leading-relaxed">
                Our team is currently reviewing your property details and identity verification to ensure the highest standards for the NginUp community.
            </p>

            <div class="bg-gray-50 border border-gray-100 rounded-2xl p-5 mb-8 text-center max-w-sm mx-auto shadow-sm">
                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-500 flex items-center justify-center mx-auto mb-3">
                    <i class="fa-regular fa-clock"></i>
                </div>
                <h4 class="font-bold text-gray-900 text-sm mb-1">Estimated Review Time</h4>
                <p class="text-xs text-gray-500">Typically verified within 24 hours. We will notify you via email as soon as you're live.</p>
            </div>

            <div class="flex flex-col gap-3 max-w-sm mx-auto">
                <a href="/home" class="w-full bg-brand-orange text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 hover:bg-brand-orange-hover transition-colors flex justify-center items-center gap-2">
                    Explore Dashboard <i class="fa-solid fa-arrow-right"></i>
                </a>
                <button class="w-full bg-white border border-gray-200 text-gray-700 py-4 rounded-xl font-bold shadow-sm hover:bg-gray-50 transition-colors">
                    View Application
                </button>
            </div>
            
            <p class="text-[10px] text-gray-400 mt-6 flex items-center justify-center gap-1.5">
                <i class="fa-solid fa-circle text-[4px]"></i> Some features will be restricted until approval.
            </p>
        </div>

            </div>

        </div>

    </div>

</div>

@endsection
