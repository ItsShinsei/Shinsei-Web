<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shar UI Clone</title>
    @vite('resources/css/app.css')
</head>
<body class="relative bg-gradient-to-b from-white to-[#bde2ff] min-h-screen flex items-center justify-center font-sans overflow-hidden">

    <!-- Theme & Sound buttons -->
    <div class="absolute top-4 left-4 flex gap-5 text-gray-700 text-2xl">
        <button id="toggleTheme">☀️</button>
        <button id="toggleSound">🔊</button>
    </div>

    <!-- Star icon -->
    <img src="/images/star.png" alt="star"
        class="absolute top-14 left-1/2 -translate-x-1/2 w-14">

    <!-- Main card -->
    <div class="bg-white border border-gray-200 rounded-md shadow-lg w-[520px] max-w-[95%]">
        <!-- Tab header -->
        <div class="bg-[#3a3a3a] text-white px-4 py-2 rounded-t-md text-sm font-medium">home</div>

        <!-- Content -->
        <div class="px-6 py-14 text-center">
            <h1 class="text-5xl font-light tracking-wide">
                hi! <span class="text-[#ff9800] font-semibold">i’m Shinsei</span>
            </h1>
            <p class="text-gray-500 mt-2 text-lg">11th Grader in 17 Agustus 1945 Surabaya vacational highschool</p>

            <!-- Menu icons -->
            <div class="flex justify-center gap-10 mt-12">
                @foreach ([
                    ['img'=>'about.png', 'label'=>'about'],
                    ['img'=>'links.png', 'label'=>'links'],
                    ['img'=>'work.png', 'label'=>'work'],
                    ['img'=>'faq.png', 'label'=>'faq'],
                    ['img'=>'contact.png', 'label'=>'contact']
                ] as $item)
                    <div class="flex flex-col items-center cursor-pointer hover:opacity-80 transition">
                        <img src="/images/{{ $item['img'] }}" alt="{{ $item['label'] }}" class="w-12">
                        <span class="font-bold text-sm mt-1">{{ $item['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bottom right frog -->
    <img src="/images/frog.png" alt="frog"
        class="absolute bottom-4 right-6 w-20">

    <!-- Social links -->
    <div class="absolute bottom-6 flex gap-4">
        <a href="#"><img src="/images/twitter.png" class="w-8 hover:scale-110 transition"></a>
        <a href="#"><img src="/images/youtube.png" class="w-8 hover:scale-110 transition"></a>
        <a href="#"><img src="/images/instagram.png" class="w-8 hover:scale-110 transition"></a>
    </div>

    <!-- Footer -->
    <p class="absolute bottom-2 text-xs text-gray-600">© 2025 Sharlene Yap</p>

    @vite('resources/js/app.js')
</body>
</html>
