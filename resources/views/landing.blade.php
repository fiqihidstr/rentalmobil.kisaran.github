<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solusi Sewa Mobil Terpercaya - Kisaran Drive</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'car-move': 'carMove 12s linear infinite',
                    },
                    keyframes: {
                        carMove: {
                            '0%': { transform: 'translateX(-50px)' },
                            '100%': { transform: 'translateX(100vw)' }
                        }
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased relative">

    <header class="bg-black py-4 sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex flex-col items-center justify-center">
            <div class="text-center group cursor-pointer">
                <div class="flex items-center justify-center gap-2 text-cyan-400 text-3xl mb-1 animate-pulse">
                    <i class="fa-solid fa-car-burst"></i>
                </div>
                <h1 class="text-white font-black tracking-widest text-3xl md:text-4xl uppercase m-0">
                    KISARAN <span class="text-cyan-400 font-light">DRIVE</span>
                </h1>
                <p class="text-xs text-slate-400 tracking-widest uppercase font-light mt-1.5">Rental Mobil Kota Kisaran</p>
            </div>
        </div>
    </header>

    <section class="relative h-[85vh] flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('{{ asset('images/cover.jpg') }}');">
        <div class="text-center px-4 max-w-4xl space-y-6">
            <h2 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                Solusi Sewa Mobil Terpercaya
            </h2>
            <p class="text-slate-200 text-lg md:text-xl font-medium tracking-wide">
                Nikmati perjalanan Anda dengan armada terbaik kami
            </p>
            <div class="pt-4">
                <a href="#armada" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3.5 rounded-full shadow-lg transition duration-300 inline-block text-base">
                    Lihat Mobil Kami
                </a>
            </div>
        </div>
    </section>

    <section id="armada" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="h-56 bg-slate-100 flex items-center justify-center p-4">
                        <img src="{{ asset('images/avanza.jpg') }}" alt="Toyota Avanza" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Toyota Avanza</h3>
                        <div class="space-y-2.5 text-slate-500 font-medium">
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-users w-5 text-slate-400"></i> 7 Penumpang</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gear w-5 text-slate-400"></i> Manual</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gas-pump w-5 text-slate-400"></i> Bensin</div>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-50 mt-4">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Harga per hari</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 800.000</p>
                    </div>
                    <a href="https://wa.me/6289614246070?text=Halo,%20saya%20ingin%20booking%20Toyota%20Avanza" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-2xl flex items-center gap-2 text-sm transition">
                        <i class="fa-brands fa-whatsapp"></i> Booking
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="h-56 bg-slate-100 flex items-center justify-center p-4">
                        <img src="{{ asset('images/innova.jpg') }}" alt="Innova Reborn" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Innova Reborn</h3>
                        <div class="space-y-2.5 text-slate-500 font-medium">
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-users w-5 text-slate-400"></i> 7 Penumpang</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gear w-5 text-slate-400"></i> Manual</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gas-pump w-5 text-slate-400"></i> Bensin</div>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-50 mt-4">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Harga per hari</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 1.300.000</p>
                    </div>
                    <a href="https://wa.me/6289614246070?text=Halo,%20saya%20ingin%20booking%20Innova%20Reborn" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-2xl flex items-center gap-2 text-sm transition">
                        <i class="fa-brands fa-whatsapp"></i> Booking
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="h-56 bg-slate-100 flex items-center justify-center p-4">
                        <img src="{{ asset('images/terios.jpg') }}" alt="New Terios" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">New Terios</h3>
                        <div class="space-y-2.5 text-slate-500 font-medium">
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-users w-5 text-slate-400"></i> 5 Penumpang</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gear w-5 text-slate-400"></i> Automatic</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gas-pump w-5 text-slate-400"></i> Bensin</div>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-50 mt-4">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Harga per hari</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 900.000</p>
                    </div>
                    <a href="https://wa.me/6289614246070?text=Halo,%20saya%20ingin%20booking%20New%20Terios" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-2xl flex items-center gap-2 text-sm transition">
                        <i class="fa-brands fa-whatsapp"></i> Booking
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="h-56 bg-slate-100 flex items-center justify-center p-4">
                        <img src="{{ asset('images/pajero.jpg') }}" alt="Mitsubishi Pajero Sport" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Pajero Sport</h3>
                        <div class="space-y-2.5 text-slate-500 font-medium">
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-users w-5 text-slate-400"></i> 7 Penumpang</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gear w-5 text-slate-400"></i> Automatic</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gas-pump w-5 text-slate-400"></i> Diesel</div>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-50 mt-4">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Harga per hari</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 1.500.000</p>
                    </div>
                    <a href="https://wa.me/6289614246070?text=Halo,%20saya%20ingin%20booking%20Mitsubishi%20Pajero%20Sport" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-2xl flex items-center gap-2 text-sm transition">
                        <i class="fa-brands fa-whatsapp"></i> Booking
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="h-56 bg-slate-100 flex items-center justify-center p-4">
                        <img src="{{ asset('images/brio.jpg') }}" alt="Honda Brio" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Honda Brio</h3>
                        <div class="space-y-2.5 text-slate-500 font-medium">
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-users w-5 text-slate-400"></i> 5 Penumpang</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gear w-5 text-slate-400"></i> Automatic</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gas-pump w-5 text-slate-400"></i> Bensin</div>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-50 mt-4">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Harga per hari</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 450.000</p>
                    </div>
                    <a href="https://wa.me/6289614246070?text=Halo,%20saya%20ingin%20booking%20Honda%20Brio" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-2xl flex items-center gap-2 text-sm transition">
                        <i class="fa-brands fa-whatsapp"></i> Booking
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between">
                <div>
                    <div class="h-56 bg-slate-100 flex items-center justify-center p-4">
                        <img src="{{ asset('images/ertiga.jpg') }}" alt="Suzuki Ertiga" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Suzuki Ertiga</h3>
                        <div class="space-y-2.5 text-slate-500 font-medium">
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-users w-5 text-slate-400"></i> 7 Penumpang</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gear w-5 text-slate-400"></i> Manual</div>
                            <div class="flex items-center gap-3 text-sm"><i class="fa-solid fa-gas-pump w-5 text-slate-400"></i> Bensin</div>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-50 mt-4">
                    <div>
                        <p class="text-xs text-slate-400 font-semibold uppercase">Harga per hari</p>
                        <p class="text-xl font-extrabold text-blue-600">Rp 750.000</p>
                    </div>
                    <a href="https://wa.me/6289614246070?text=Halo,%20saya%20ingin%20booking%20Suzuki%20Ertiga" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-2xl flex items-center gap-2 text-sm transition">
                        <i class="fa-brands fa-whatsapp"></i> Booking
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-slate-900 py-20 px-4 relative overflow-hidden">
        
        <div class="absolute bottom-4 left-0 w-full h-1 border-b border-dashed border-slate-700/50"></div>
        <div class="absolute bottom-2 left-0 text-cyan-500/30 text-3xl animate-car-move pointer-events-none">
            <i class="fa-solid fa-car-side"></i>
        </div>

        <div class="max-w-4xl mx-auto text-center space-y-12 relative z-10">
            <div>
                <h2 class="text-white text-4xl font-extrabold tracking-tight">Hubungi Kami</h2>
                <p class="text-slate-400 mt-2 font-medium">Kami siap melayani Anda 24/7</p>
            </div>

            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-xl border border-slate-800/10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center pb-8">
                    <div class="space-y-2 flex flex-col items-center">
                        <div class="text-blue-600 text-2xl bg-blue-50 p-4 rounded-full w-14 h-14 flex items-center justify-center">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-sm tracking-wider uppercase">Telepon</h4>
                        <p class="text-slate-600 font-semibold text-sm">089614246070</p>
                    </div>
                    <div class="space-y-2 flex flex-col items-center">
                        <div class="text-blue-600 text-2xl bg-blue-50 p-4 rounded-full w-14 h-14 flex items-center justify-center">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-sm tracking-wider uppercase">Email</h4>
                        <p class="text-slate-600 font-semibold text-sm break-all">fiqihidstr@gmail.com</p>
                    </div>
                    <div class="space-y-2 flex flex-col items-center">
                        <div class="text-blue-600 text-2xl bg-blue-50 p-4 rounded-full w-14 h-14 flex items-center justify-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-sm tracking-wider uppercase">Alamat</h4>
                        <p class="text-slate-600 font-semibold text-sm">Kota Kisaran, Asahan, Sumatera Utara</p>
                    </div>
                </div>

                <div class="border-t border-slate-100 pt-8">
                    <a href="https://wa.me/6289614246070" target="_blank" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold py-4 px-6 rounded-2xl transition duration-300 flex items-center justify-center gap-3 text-base">
                        <i class="fa-brands fa-whatsapp text-2xl"></i> Chat via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <a href="https://wa.me/6289614246070" target="_blank" class="fixed bottom-6 right-6 bg-emerald-500 hover:bg-emerald-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl z-50 transition duration-300 transform hover:scale-110">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>

</body>
</html>