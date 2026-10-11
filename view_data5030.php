<?php
include('koneksidb5030.php');
$db = new database();
$data_barang = $db->view_data();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang - Toko Rio</title>
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
                    <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">Toko<span class="text-indigo-600">Rio</span></span>
                    <span class="block text-xs text-slate-400 font-medium">System Store</span>
                </div>
            </a>
            <a href="index.php" class="text-xs font-semibold text-slate-500 hover:text-indigo-600 hover:bg-indigo-50 px-3 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 hover:-translate-x-1 active:scale-95">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Menu Utama
            </a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-8 flex-1 w-full animate-fade-in">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Daftar Stok Barang</h1>
                <p class="text-xs text-slate-500 mt-1">Menampilkan seluruh data barang yang tersimpan di database.</p>
            </div>
            <!-- Interactive Action Button -->
            <a href="add_data5030.php" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 text-white text-xs font-bold px-5 py-3 rounded-xl shadow-md shadow-indigo-200 hover:shadow-indigo-400/30 hover:-translate-y-0.5 active:translate-y-0 active:scale-95 transition-all duration-200">
                <i class="fa-solid fa-plus"></i> Tambah Barang Baru
            </a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50/80 text-slate-400 uppercase tracking-wider font-semibold border-b border-slate-100">
                        <tr>
                            <th class="py-4 px-6">No</th>
                            <th class="py-4 px-6">Nama Barang</th>
                            <th class="py-4 px-6">Stok</th>
                            <th class="py-4 px-6">Harga Beli</th>
                            <th class="py-4 px-6">Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                        <?php 
                        $no = 1;
                        if (!empty($data_barang)) {
                            foreach ($data_barang as $row) {
                        ?>
                        <!-- Table Row Hover effect -->
                        <tr class="hover:bg-indigo-50/80 active:bg-indigo-100/60 transition-all duration-200 group cursor-pointer">
                            <td class="py-4 px-6 text-slate-400 font-bold group-hover:text-indigo-600 transition-colors"><?php echo $no++; ?></td>
                            <td class="py-4 px-6 font-bold text-slate-800 flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xs group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                                    <i class="fa-solid fa-box font-normal"></i>
                                </div>
                                <span class="group-hover:text-indigo-900 transition-colors"><?php echo htmlspecialchars($row['nama_barang']); ?></span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-600 border border-emerald-100 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-200">
                                    <?php echo $row['stok']; ?> unit
                                </span>
                            </td>
                            <td class="py-4 px-6 text-slate-500">Rp <?php echo number_format($row['harga_beli'], 0, ',', '.'); ?></td>
                            <td class="py-4 px-6 font-bold text-indigo-600 group-hover:text-indigo-800 transition-colors">Rp <?php echo number_format($row['harga_jual'], 0, ',', '.'); ?></td>
                        </tr>
                        <?php 
                            }
                        } else {
                        ?>
                        <tr>
                            <td colspan="5" class="py-12 text-center text-slate-400">
                                <i class="fa-solid fa-box-open text-4xl mb-3 text-slate-300 block animate-bounce"></i>
                                Belum ada data barang tersimpan.
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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