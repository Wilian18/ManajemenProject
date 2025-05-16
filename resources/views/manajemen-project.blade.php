<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Projeck</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="flex h-screen bg-gray-100">

  
    <aside class="w-64 text-white p-6 space-y-6" style="background-color: #363636;">
        <div class="space-y-2">
            <a href="/" class="flex items-center gap-2 font-bold text-xl">
                <i data-lucide="home" class="w-5 h-5 text-gray-400"></i> Beranda
            </a>
            <a href="/tugas-saya" class="flex items-center gap-2 font-bold bg-white text-black rounded p-1">
                <i data-lucide="list-checks" class="w-5 h-5 text-gray-400"></i> Tugas Saya
            </a>
            <div class="flex items-center gap-2">
                <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i> Kontak Masuk
            </div>
        </div>
    <div>
    <div class="flex justify-between items-center font-bold mb-1 ">
      <span>Wawasan</span>
         <i data-lucide="plus" class="w-4 h-4 text-gray-400"></i>
     </div>          
     <div class="flex items-center gap-2 pl-2">
        <i data-lucide="briefcase"  class="w-4 h-4 text-gray-400"></i> Portofolio
      </div>
      <div class="flex items-center gap-2 pl-2">
        <i data-lucide="target"  class="w-4 h-4 text-gray-400"></i> Gol
      </div>
      
    </div>
    <div>
      <div class="font-bold mb-1">Proyek</div>
      <div class="pl-2 bg-white text-black rounded p-1 font-bold">Manajement Project</div>
    </div>
    <div>
      <div class="font-bold mb-1">Tim</div>
      <div class="pl-2">Ruang Kerja kami</div>
    </div>
   <button class="mt-auto w-full bg-white text-black font-bold py-2 rounded flex items-center justify-center gap-2">
  <i data-lucide="users" class="w-4 h-4 text-gray-400"></i>
  Undang Rekan Tim
</button>

  </aside>

 
  <main class="flex-1 p-6 overflow-y-auto">
    <header class="mb-6">
      <h1 class="text-2xl font-bold">Manajement Project</h1>
      <div class="flex items-center gap-4 mt-2">
        <button class="font-semibold flex items-center gap-1">
            <i data-lucide="list-todo" class="w-4 h-4"></i> Daftar
          </button>
          <button class="font-semibold flex items-center gap-1">
            <i data-lucide="calendar-days" class="w-4 h-4"></i> Kalender
          </button>
          <button class="font-semibold flex items-center gap-1">
            <i data-lucide="message-circle" class="w-4 h-4"></i> Pesan
          </button>
          <button class="font-semibold flex items-center gap-1">
            <i data-lucide="file" class="w-4 h-4"></i> File
          </button>
          
      </div>
    </header>

    
    <form id="task-form" class="bg-white p-4 rounded shadow mb-6 space-y-4">
      <div class="grid grid-cols-5 gap-2">
        <input type="text" name="nama" placeholder="📝 Nama Tugas" class="border p-2 rounded" required>
        <input type="text" name="penerima" placeholder="Penerima" class="border p-2 rounded" required>
        <input type="date" name="tenggat" placeholder="📅 Tenggat" class="border p-2 rounded" required>
        <select name="prioritas" class="border p-2 rounded">
          <option value="Rendah">Rendah</option>
          <option value="Sedang">Sedang</option>
          <option value="Tinggi">Tinggi</option>
        </select>
        <select name="status" class="border p-2 rounded">
          <option value="Baru">Baru</option>
          <option value="Sedang dikerjakan">Sedang dikerjakan</option>
          <option value="Selesai">Selesai</option>
        </select>
      </div>
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Tugas</button>
    </form>

 
    <div class="grid grid-cols-5 font-bold border-b pb-2 mb-2">
      <div>Nama</div>
      <div>Penerima</div>
      <div>Tenggat</div>
      <div>Prioritas</div>
      <div>Status</div>
    </div>

  @isset($tasks)
  @foreach ($tasks as $task)
    <div class="grid grid-cols-5 bg-rose-200 p-2 rounded mb-2">
      <div>{{ $task['nama'] }}</div>
      <div>{{ $task['penerima'] }}</div>
      <div>{{ $task['tenggat'] }}</div>
      <div><span class="bg-gray-300 px-2 rounded">{{ $task['prioritas'] }}</span></div>
      <div><span class="bg-gray-300 px-2 rounded">{{ $task['status'] }}</span></div>
    </div>
  @endforeach
@endisset



    
    <div id="tasks-container"></div>

   <main class="flex-1 p-6 overflow-y-auto">
 <section class="mt-6">
      <h2 class="font-bold mb-2">Sedang Dikerjakan</h2>
      <div class="bg-white p-2 rounded text-gray-500 border">Tambahan tugas..</div>
    </section>

    <section class="mt-4">
      <h2 class="font-bold mb-2">Selesai</h2>
      <div class="bg-white p-2 rounded text-gray-500 border">Tambahan tugas..</div>
    </section>


    <button class="mt-6 text-blue-600">+ Tambahkan bagian</button>
</main>


  <script src="{{ asset('js/app.js') }}"></script>
  <script>lucide.createIcons();</script>
 
  
</body>
</html>
