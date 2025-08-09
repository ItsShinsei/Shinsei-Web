@extends('layouts.app')

@section('content')
    <!-- Theme & Sound buttons -->
    <div class="absolute top-4 left-4 flex gap-5 text-gray-700 text-2xl">
        <button id="toggleTheme">☀️</button>
        <button id="toggleSound">🔊</button>
    </div>

    <!-- Star icon -->
 <div class="flex justify-center items-center h-screen">
  <div class="group">
    <img src="/images/star.png" alt="Bouncing Star" class="h-14 w-14 mt-9 group-hover:animate-bounce absolute top-14 left-9 ml-13 md:left-1/3 lg:left-[25%] transition-transform duration-300 ease-in-out">
  </div>
</div>
     
     
    <!-- Main card -->
    <div class="bg-white border border-gray-200 rounded-md shadow-lg w-[650px] max-w-[95%] h-[450px]">
        <!-- Tab header -->
        <div class="bg-[#3a3a3a] text-white px-4 py-2 rounded-t-md text-sm font-medium">home</div>

        <!-- Content -->
        <div class="px-6 py-25 text-center">
            <h1 class="text-5xl font-light tracking-wide">
                hi! <span class="text-[#ff9800] font-semibold">i'm Shinsei</span>
            </h1>
            <p class="text-gray-500 mt-2 text-lg">11th Grader in 17 Agustus 1945 Surabaya vacational highschool</p>

            <!-- Menu icons -->
            <div class="flex justify-center gap-10 mt-32">
                @foreach ([
                    ['img'=>'about.png', 'label'=>'about'],
                    ['img'=>'links.png', 'label'=>'links'],
                    ['img'=>'work.png', 'label'=>'work'],
                    ['img'=>'faq.png', 'label'=>'faq'],
                    ['img'=>'contact.png', 'label'=>'contact']
                ] as $item)
                    <div class="flex flex-col items-center cursor-pointer hover:opacity-75 hover:scale-110 transition hover:shadow-2xl hover:text-[#ff9800]">
                        <img src="/images/{{ $item['img'] }}" alt="{{ $item['label'] }}" class="w-12">
                        <span class="font-extrabold text-stone-800 text-sm  mt-1">{{ $item['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bottom right frog -->
    <img src="/images/frog.png" alt="frog"
        class="absolute bottom-4 right-6 w-20 hover:scale-110 transition">

    <!-- Social links -->
    <div class="absolute bottom-9 flex gap-9">
        <a href="#"><img src="/images/github.png" class="w-8 hover:scale-110 transition"></a>
        <a href="#"><img src="/images/youtube.png" class="w-8 hover:scale-110 transition"></a>
        <a href="#"><img src="/images/instagram.png" class="w-8 hover:scale-110 transition"></a>
    </div>

    <!-- Footer -->
    <p class="absolute bottom-2 text-xs text-gray-600">© 2025 Shinsei Yea</p>
@endsection