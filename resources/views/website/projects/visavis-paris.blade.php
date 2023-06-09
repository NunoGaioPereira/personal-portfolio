@section('title', '')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/visavis_mockup_1_2.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Wordpress Admin</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Vis-A-Vis Paris</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">March 2021</p>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- <div class="max-w-6xl mx-auto pt-14">
				<div class="bg-white py-12 sm:py-16 mt-12 bg-opacity-90 mx-auto text-center z-10">
					<div>
						<p class="uppercase text-gray-400 font-semibold text-sm mb-2">Wordpress Admin</p>
						<h2 class="font-bold text-2xl sm:text-4xl pb-4">Vis-A-Vis Paris</h2>
						<div class="flex items-center justify-center py-2">
							<span class="h-1 w-10 bg-blue-400 block"></span>
						</div>
						<p class="text-sm text-gray-700 font-semibold pt-4">March 2021</p>
					</div>
				</div>
			</div>
			<div class="max-w-6xl mx-auto">
				<img class="w-full" src="../img/visavis3.png">
			</div> -->

    <!-- <div class="min-h-screen max-w-2xl flex items-center justify-center" style="background: url('../img/visavis_mockup_1_2.png') no-repeat; background-size: cover; background-position: center">
				<img src="../img/visavis3.png">
			</div> -->
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
        <h2 class="font-semibold text-3xl">Vis-A-Vis Paris</h2>
        <p class="text-gray-400 font-medium text-xl">Retail Shop - Wordpress Admin</p>
        <p class="mt-4">Vis-A-Vis Paris is a haute couture boutique that creates the finest bespoke linens. With reach from the United Kingdom to France, Vi-A-Vis honours more than 30 years of tradition in hand embroidered linen, with unique and elegant luxury colletions.</p>

        <div class="mt-8">
            <a href="https://www.visavisparis.com/" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div>

        <p class="mt-8">For a refined brand, a refined website. Vis-A-Vis online boutique is a modern and cleanly designed e-commerce website that represents the brand's values.</p>

        <img src="../img/visavis3.png" class="w-full shadow-xl sm:w-3/4 mt-8 mx-auto">
        <p class="mt-4">Vis-A-Vis website has not been developed by me but I have been providing them with assistance and support with Wordpress admin works, including updates, security check-ups and maintenance.</p>

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">As Vis-A-Vis, my focus is to develop unique customer experiences and bespoke solutions. Get in touch so we can find how I can help you build an online presence.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection