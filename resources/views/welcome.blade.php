<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="flex flex-col items-center justify-center min-h-[70vh] px-4">
        <div class="card bg-base-100 shadow-xl border border-base-200/60 max-w-2xl w-full p-8 md:p-12 text-center flex flex-col items-center justify-center gap-6 relative overflow-hidden">
            
            <div class="animate-bounce dynamic-bounce flex items-center justify-center select-none mb-2">
                <span class="text-8xl filter drop-shadow-md">🐦</span>
            </div>

            <div class="space-y-4">
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-base-content">
                    Welcome to Chirper!
                </h1>
                <p class="text-base md:text-lg text-base-content/70 max-w-md mx-auto leading-relaxed">
                    This is your brand new Laravel application. <br class="hidden sm:inline">
                    Time to make it sing (or chirp)!
                </p>
            </div>

            <div class="mt-4 flex flex-wrap gap-3 justify-center">
                <a href="#" class="btn btn-primary shadow-lg shadow-primary/20 px-8">Get Started</a>
                <a href="#" class="btn btn-ghost border-base-300">Learn More</a>
            </div>
        </div>
    </div>

    <style>
        .dynamic-bounce {
            animation-duration: 2.5s; /* Mengubah durasi naik turun menjadi lebih lambat & anggun */
        }
    </style>
</x-layout>