<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Kisaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Tambahan konfigurasi agar Tailwind mendeteksi class "dark" secara manual
        tailwind.config = {
            darkMode: 'class',
        }

        // Script untuk mendeteksi preferensi tema di localStorage
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100 transition-colors duration-300 min-h-screen flex flex-col justify-between">

    <div class="fixed top-4 right-4 z-50">
        <button id="theme-toggle" class="p-2 rounded-full bg-white dark:bg-slate-800 shadow-md border dark:border-slate-700 focus:outline-none">
            <span id="theme-toggle-light-icon" class="hidden">☀️</span>
            <span id="theme-toggle-dark-icon" class="hidden">🌙</span>
        </button>
    </div>

    <main class="flex-grow flex items-center justify-center p-4 w-full">
        @yield('content')
    </main>

    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const lightIcon = document.getElementById('theme-toggle-light-icon');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');

        // Atur icon saat pertama dimuat
        if (document.documentElement.classList.contains('dark')) {
            lightIcon.classList.remove('hidden');
        } else {
            darkIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                darkIcon.classList.add('hidden');
                lightIcon.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>