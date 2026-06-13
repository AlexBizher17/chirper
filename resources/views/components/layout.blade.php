<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-base-300 text-base-content font-sans transition-colors duration-300">
    
    <nav class="navbar bg-base-100 border-b border-base-200 shadow-sm px-4 md:px-8">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-bold tracking-tight text-blue-500">
                🐦 Chirper
            </a>
        </div>
        
        <div class="navbar-end gap-4">
            <label class="grid place-items-center">
                <input type="checkbox" value="light" class="toggle theme-controller bg-base-content row-start-1 col-start-1 col-span-2" />
                <svg class="col-start-1 row-start-1 stroke-base-100 fill-base-100" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                <svg class="col-start-2 row-start-1 stroke-base-100 fill-base-100" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
            </label>

            <a href="#" class="btn btn-ghost btn-sm hidden sm:inline-flex">Sign In</a>
            <a href="#" class="btn btn-primary btn-sm shadow-md shadow-blue-500/20">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8 max-w-7xl">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-5 bg-base-100 border-t border-base-200 text-base-content/60 text-xs">
        <div>
            <p>© {{ date('Y') }} Chirper - Built with Laravel, Tailwind & ❤️</p>
        </div>
    </footer>
</body>
</html>