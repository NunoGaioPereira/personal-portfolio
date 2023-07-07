@section('title', 'Nora - Skincare')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/nora_1.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Visual Identidy</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Nora</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">July 2023</p>
            </div>
        </div>
    </div>
    <!-- <div class="flex justify-center">
				<div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-28 py-16 sm:py-36 mx-auto text-center absolute -mt-24 sm:-mt-64 z-10">
					<div>
						<p class="uppercase font-semibold text-sm mb-2">book cover design</p>
						<h2 class="font-bold text-xl sm:text-4xl pb-4">The Old Man and the Sea</h2>
						<span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
						<p class="text-sm text-gray-700 font-semibold pt-4">Outubro 2018</p>
					</div>
				</div>
			</div> -->
</section>

<section class="max-w-5xl mx-auto px-8 pb-36 pt-16" id="about">
    <div>
        <h2 class="font-semibold text-3xl">Nora</h2>
        <p class="text-gray-400 font-medium text-xl">Visual Identidy</p>
        <p class="mt-4">Nora is a skincare brand that emphasizes on creating clean, organic, cruelty-free products.</p>

        <!-- <div class="mt-8">
            <a href="https://www.andregaiopereira.com" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div> -->

        <img src="../img/nora_main.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        
        <br><br>
        <p class="mt-4">The design was meant to capture the natural tone of the brand, while retaining a sense of luxury and endulgement.</p>
        <img src="../img/nora_2.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <br><br>
        <p class="mt-4">Nora believe self-care should not be sacrificed because of the lack high-quality organic products.</p>
        <img src="../img/nora_3.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection