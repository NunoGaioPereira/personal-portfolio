@section('title', 'Vó Chica')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/flama_banner.png') no-repeat; background-size: cover; background-position: center 40%">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Visual Identity and Packaging Design</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Vó Chica</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">August 2023</p>
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
        <h2 class="font-semibold text-3xl">Vó Chica</h2>
        <p class="text-gray-400 font-medium text-xl">Visual Identity and Packaging Design</p>
        <p class="mt-4">Vó Chica is a brand that sells herbal natural products to promote well-being and health.</p>

        <img src="../img/vo_chica_main.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <p class="mt-4">Below you can see a collection of the packaging design developed for Vó Chica products.</p>
        <img src="../img/vo_chica_pouch.png" class="w-full sm:w-3/4 mt-8 mx-auto">
        <img src="../img/vo_chica_essential_oil.png" class="w-full sm:w-3/4 mt-8 mx-auto">
        <img src="../img/vo_chica_incense.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        
        <br><br>
        <p class="mt-4">The design was meant to capture the nature feeling of the brand, while also displaying the elegant and "magic" touch of its products.</p>

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection