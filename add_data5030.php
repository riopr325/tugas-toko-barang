<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang - Toko Rio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> 
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fadeInUp 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col justify-between overflow-x-hidden">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center text-white font-extrabold text-xl shadow-lg shadow-indigo-200 transition-all duration-300 group-hover:bg-indigo-700 group-hover:scale-110 active:scale-95">
                    R
                </div>
                <div>
                    <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">Toko<span class="text-indigo-600">Rio Permana</span></span>
                    <span class="block text-xs text-slate-400 font-medium">System Store</span>
                </div>
            </a>
            <a href="view_data5030.php" class="text-xs font-semibold text-slate-500 hover:text-indigo-600 hover:bg-indigo-50 px-3 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 hover:-translate-x-1 active:scale-95">
                <i class="fa-solid fa-boxes-stacked"></i> Lihat Daftar Barang
            </a>
        </div>
    </nav>

    <main class="max-w-xl mx-auto px-6 py-10 flex-1 w-full animate-fade-in">
        <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-lg font-bold shadow-sm">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div>
                    <h2 class="text-xl font-extrabold text-slate-900">Tambah Data Barang</h2>
                    <p class="text-xs text-slate-400">Isi seluruh informasi tentang barang baru,di bawah ini.</p>
                </div>
            </div>

            <form action="proses_data5030.php?action=add" method="POST" class="space-y-5">
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Nama Barang</label>
                    <div class="relative group">
                        <i class="fa-solid fa-box absolute left-4 top-3.5 text-slate-400 text-sm group-focus-within:text-indigo-600 transition-colors"></i>
                        <input type="text" name="nama_barang" placeholder="Contoh: Controller PS5 Wireless" required 
                            class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs font-medium hover:border-indigo-300 focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:scale-[1.01] transition-all duration-200 outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Jumlah Stok</label>
                    <div class="relative group">
                        <i class="fa-solid fa-cubes absolute left-4 top-3.5 text-slate-400 text-sm group-focus-within:text-indigo-600 transition-colors"></i>
                        <input type="number" name="stok" placeholder="Contoh: 15" required 
                            class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs font-medium hover:border-indigo-300 focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:scale-[1.01] transition-all duration-200 outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Harga Beli (Rp)</label>
                        <div class="relative group">
                            <i class="fa-solid fa-tag absolute left-4 top-3.5 text-slate-400 text-sm group-focus-within:text-indigo-600 transition-colors"></i>
                            <input type="number" name="harga_beli" placeholder="800000" required 
                                class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs font-medium hover:border-indigo-300 focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:scale-[1.01] transition-all duration-200 outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Harga Jual (Rp)</label>
                        <div class="relative group">
                            <i class="fa-solid fa-money-bill-wave absolute left-4 top-3.5 text-slate-400 text-sm group-focus-within:text-indigo-600 transition-colors"></i>
                            <input type="number" name="harga_jual" placeholder="950000" required 
                                class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs font-medium hover:border-indigo-300 focus:ring-2 focus:ring-indigo-500 focus:bg-white focus:scale-[1.01] transition-all duration-200 outline-none">
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex items-center justify-end gap-3">
                    <a href="index.php" class="px-5 py-3 rounded-xl border border-slate-200 text-xs font-semibold text-slate-600 hover:bg-slate-200 hover:text-slate-900 active:scale-95 transition-all duration-200">Batal</a>
                    <button type="submit" class="px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 text-white text-xs font-bold shadow-lg shadow-indigo-200 hover:shadow-indigo-400/40 hover:-translate-y-0.5 active:translate-y-0 active:scale-95 transition-all duration-200 flex items-center gap-2">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan Barang
                    </button>
                </div>
            </form>
        </div>
    </main>

    <footer class="border-t border-slate-200/60 bg-white py-6 mt-12">
        <div class="max-w-7xl mx-auto px-6 text-center text-xs text-slate-400">
            &copy; 2026 Toko Rio - Tugas Pemrograman Berorientasi Objek
        </div>
    </footer>

</body>
</html>