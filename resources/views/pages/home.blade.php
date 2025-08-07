    @extends('layouts.app')

    @section('title', 'Home')

    @section('content')
        <section class="bg-[#FEFEFE] h-screen flex items-center justify-center text-center">
  <div class="
    box-content w-full max-w-4xl rounded-lg shadow-lg
    bg-[#FEFEFE] border border-gray-500 text-[#333] relative
  ">
    <!-- Dark top bar -->
    <div class="
    w-full h-15 bg-stone-900 rounded-t-lg
    shadow-3x1
    "></div>
    
    <!-- Content -->
    <div class="p-8 h-96 flex flex-col items-center justify-start mt-10">
      <h1 class="flex items-top text-5xl font-bold mb-4">Hello!  <span class="text-red -800">  I’m Shinsei</span></h1>
      <p class="text-xl max-w-xl">I'm from 17 Agustus 1945 vacational highschool Surabaya.</p>
    </div>
  </div>
</section>
    @endsection
