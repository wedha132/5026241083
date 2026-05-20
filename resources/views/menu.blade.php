<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Linktree</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
    </style>
</head>
<body class="text-slate-200 font-sans min-h-screen flex flex-col items-center py-12 px-4">

    <!-- Header / Profil Singkat -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold">Gusti Ayu Wedha Putri Surya</h1>
        <p class="text-sm text-slate-400 mt-1">5026241083</p>
    </div>

    <!-- Container Utama Link -->
    <div class="w-full max-w-md space-y-8">

        <!-- KATEGORI 1: Halaman Dasar / Views -->
        <div>
            <h2 class="text-xs font-semibold uppercase tracking-wider text-indigo-400 mb-3 px-1">Halaman Dasar / Views</h2>
            <div class="space-y-3">
                <a href="http://127.0.0.1:8000/" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Welcome Page
                </a>
                <a href="http://127.0.0.1:8000/halo" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Halo
                </a>
                <a href="http://127.0.0.1:8000/belajar" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Belajar View
                </a>
                <a href="http://127.0.0.1:8000/contoh" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Contoh View
                </a>
                <a href="http://127.0.0.1:8000/intro" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Intro View
                </a>
                <a href="http://127.0.0.1:8000/news" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    News View
                </a>
                <a href="http://127.0.0.1:8000/news1" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    News1 View
                </a>
                <a href="http://127.0.0.1:8000/pert4" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Pertemuan 4
                </a>
                <a href="http://127.0.0.1:8000/pert5" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Pertemuan 5
                </a>
            </div>
        </div>

        <!-- KATEGORI 2: Layout & Konten -->
        <div>
            <h2 class="text-xs font-semibold uppercase tracking-wider text-teal-400 mb-3 px-1">Layout & Responsivitas</h2>
            <div class="space-y-3">
                <a href="http://127.0.0.1:8000/template" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Template View
                </a>
                <a href="http://127.0.0.1:8000/linktree" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Linktree View
                </a>
                <a href="http://127.0.0.1:8000/responsive" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Responsive View
                </a>
            </div>
        </div>

        <!-- KATEGORI 3: Menggunakan Controller -->
        <div>
            <h2 class="text-xs font-semibold uppercase tracking-wider text-amber-400 mb-3 px-1">Data & Controller</h2>
            <div class="space-y-3">
                <!-- Dosen -->
                <a href="http://127.0.0.1:8000/dosen" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Data Dosen
                </a>
                <a href="http://127.0.0.1:8000/biodata" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Biodata Dosen
                </a>

                <!-- Pegawai & Formulir -->
                <a href="http://127.0.0.1:8000/formulir" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Input Formulir Pegawai
                </a>
                <a href="http://127.0.0.1:8000/pegawai" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm text-sm text-slate-300">
                    Cek Pegawai
                </a>
            </div>
        </div>

        <!-- KATEGORI 4: Blog (Controller-based) -->
        <div>
            <h2 class="text-xs font-semibold uppercase tracking-wider text-rose-400 mb-3 px-1">Blog System</h2>
            <div class="space-y-3">
                <a href="http://127.0.0.1:8000/blog" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Blog Home
                </a>
                <a href="http://127.0.0.1:8000/blog/tentang" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Blog Tentang
                </a>
                <a href="http://127.0.0.1:8000/blog/kontak" target="_blank" class="block w-full text-center bg-slate-800 hover:bg-slate-700 border border-slate-700 py-3 px-4 rounded-xl font-medium transition duration-200 shadow-sm">
                    Blog Kontak
                </a>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="mt-12 text-center text-xs text-slate-500">
        &copy; 2026 Localhost Development Linktree.
    </div>

</body>
</html>
