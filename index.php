<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Rio - Dashboard Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col justify-between overflow-x-hidden">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center text-white font-extrabold text-xl shadow-lg shadow-indigo-200 transition-all duration-300 group-hover:scale-110 group-hover:bg-indigo-700 group-hover:rotate-3 active:scale-95">
                    R
                </div>
                <div>
                    <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">Toko<span class="text-indigo-600">Rio</span></span>
                    <span class="block text-xs text-slate-400 font-medium">CRUD OOP Store System</span>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-slate-100/80 hover:bg-indigo-50 hover:border-indigo-200 px-4 py-2 rounded-full border border-slate-200/60 transition-all duration-300 cursor-pointer active:scale-95">
                <i class="fa-solid fa-user-graduate text-indigo-600 text-sm animate-bounce"></i>
                <div class="text-xs">
                    <span class="font-bold text-slate-700 block">Rio</span>
                    <span class="text-slate-500">NIM: 1234565030</span>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-8 flex-1 w-full animate-fade-in-up">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-600 via-indigo-700 to-purple-800 text-white p-8 md:p-12 shadow-2xl mb-10">
            <div class="relative z-10 max-w-2xl">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-white/20 text-white backdrop-blur-md mb-4 border border-white/20">
                    <i class="fa-solid fa-sparkles text-yellow-300 animate-pulse"></i> Sistem Manajemen Inventaris
                </span>
                <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4 leading-tight">
                    Kelola Stok & Barang Toko Lebih Mudah.
                </h1>
                <p class="text-indigo-100 text-sm md:text-base mb-8 leading-relaxed">
                    Aplikasi berbasis Pemrograman Berorientasi Objek (OOP) untuk mencatat, menambah, dan memantau persediaan barang toko secara real-time.
                </p>
                <div class="flex flex-wrap gap-4">
                    <!-- Button Hover & Active Color Change -->
                    <a href="view_data5030.php" class="inline-flex items-center gap-2 bg-white text-indigo-600 hover:bg-indigo-600 hover:text-white active:bg-indigo-800 font-bold px-6 py-3.5 rounded-2xl shadow-lg hover:shadow-indigo-500/30 hover:-translate-y-1 active:translate-y-0 active:scale-95 transition-all duration-200">
                        <i class="fa-solid fa-boxes-stacked"></i> Lihat Data Barang
                    </a>
                    <a href="add_data5030.php" class="inline-flex items-center gap-2 bg-indigo-500/40 backdrop-blur-md text-white font-semibold px-6 py-3.5 rounded-2xl hover:bg-white hover:text-indigo-700 active:bg-indigo-100 hover:-translate-y-1 border border-white/30 active:translate-y-0 active:scale-95 transition-all duration-200">
                        <i class="fa-solid fa-circle-plus"></i> Tambah Barang Baru
                    </a>
                </div>
            </div>
            <i class="fa-solid fa-store absolute -right-6 -bottom-10 text-[220px] text-white/10 pointer-events-none"></i>
        </div>

        <!-- Interactive Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:border-indigo-300 hover:bg-indigo-50/30 hover:shadow-xl hover:-translate-y-1.5 active:scale-98 transition-all duration-300 cursor-pointer group">
                <div class="w-12 h-12 bg-indigo-50 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-xl flex items-center justify-center mb-4 text-xl transition-colors duration-300">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3 class="font-bold text-slate-800 group-hover:text-indigo-600 text-lg mb-1 transition-colors">Arsitektur OOP</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Menggunakan skema Class dan Object PHP untuk koneksi dan eksekusi query database.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:border-emerald-300 hover:bg-emerald-50/30 hover:shadow-xl hover:-translate-y-1.5 active:scale-98 transition-all duration-300 cursor-pointer group">
                <div class="w-12 h-12 bg-emerald-50 group-hover:bg-emerald-600 group-hover:text-white text-emerald-600 rounded-xl flex items-center justify-center mb-4 text-xl transition-colors duration-300">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3 class="font-bold text-slate-800 group-hover:text-emerald-600 text-lg mb-1 transition-colors">MySQL Database</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Tersimpan aman di database <code class="bg-slate-100 px-1 py-0.5 rounded text-indigo-600 font-bold">tokorio</code> pada tabel <code class="bg-slate-100 px-1 py-0.5 rounded text-indigo-600 font-bold">tbl5030_barang</code>.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:border-purple-300 hover:bg-purple-50/30 hover:shadow-xl hover:-translate-y-1.5 active:scale-98 transition-all duration-300 cursor-pointer group">
                <div class="w-12 h-12 bg-purple-50 group-hover:bg-purple-600 group-hover:text-white text-purple-600 rounded-xl flex items-center justify-center mb-4 text-xl transition-colors duration-300">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h3 class="font-bold text-slate-800 group-hover:text-purple-600 text-lg mb-1 transition-colors">Aksi Cepat CRUD</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Navigasi intuitif untuk menginput dan memantau stok serta harga barang toko.</p>
            </div>
        </div>
    </main>

    <footer class="border-t border-slate-200/60 bg-white py-6 mt-12">
        <div class="max-w-7xl mx-auto px-6 text-center text-xs text-slate-400">
            &copy; 2026 Toko Rio - Tugas Pemrograman Berorientasi Objek
        </div>
    </footer>

</body>
</html>