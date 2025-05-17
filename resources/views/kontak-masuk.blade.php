<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Masuk</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

 <aside class="w-64 text-white p-6 space-y-6" style="background-color: #363636;">
    <div class="space-y-2">
      <a href="/" class="flex items-center gap-2 font-bold text-xl">
        <i data-lucide="home" class="w-5 h-5 text-gray-400"></i> Beranda
      </a>
       <a href="/tugas-saya" class="flex items-center gap-2 font-bold text-xl">
        <i data-lucide="list-checks" class="w-5 h-5 text-gray-400"></i> Tugas Saya
      </a>
         <a href="/kontak-masuk" class="flex items-center gap-2 font-bold text-xl">
        <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i> Kontak Masuk
      </a>
    </div>
    <div>
      <div class="flex justify-between items-center font-bold mb-1">
        <span>Wawasan</span>
        <i data-lucide="plus" class="w-4 h-4 text-gray-400"></i>
      </div>
      <div class="flex items-center gap-2 pl-2">
        <i data-lucide="briefcase" class="w-4 h-4 text-gray-400"></i> Portofolio
      </div>
      <div class="flex items-center gap-2 pl-2">
        <i data-lucide="target" class="w-4 h-4 text-gray-400"></i> Gol
      </div>
    </div>
    <div>
     <div class="flex justify-between items-center font-bold mb-1">
        <span>Proyek</span>
        <i data-lucide="plus" class="w-4 h-4 text-gray-400"></i>
      </div>
        <a href="/" class="flex items-center gap-2 font-bold text-xl">
       </i><span>Manajemen Project</span>
      </a>
    </div>
    <div>
      <div class="font-bold mb-1">Tim</div>
      <div class="pl-2">Ruang Kerja kami</div>
    </div>
    <button class="mt-auto w-full bg-white text-black font-bold py-2 rounded">Undang Rekan Tim</button>
  </aside>
   
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Kontak masuk</h1>

       
        <div class="flex space-x-4 mb-4 text-sm">
            <div class="text-gray-700 font-semibold cursor-pointer border-b-2 border-black pb-1">Aktifitas</div>
            <div class="text-gray-500 cursor-pointer pb-1">Arsip</div>
            <div class="text-gray-500 cursor-pointer pb-1">+</div>
        </div>

      
        <div class="flex justify-between items-center mb-4 border p-2 rounded bg-white shadow-sm">
            <div class="flex items-center space-x-2 cursor-pointer">
                <i data-lucide="filter" class="w-5 h-5"></i>
                <span>Filter</span>
            </div>
            <i data-lucide="more-horizontal" class="w-5 h-5 cursor-pointer"></i>
        </div>

     
        <div class="bg-white p-6 rounded shadow">
            <div class="flex items-center mb-2 text-sm font-semibold">
                <i data-lucide="calendar" class="w-5 h-5 mr-2"></i>
                <span>Tugas Anda hari ini</span>
            </div>
            <input type="text" class="border rounded w-full p-2" placeholder="Tambah tugas...">
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
