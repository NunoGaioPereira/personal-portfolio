@section('title', 'Shokked Air')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/shokked_air_banner.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Web Design and Development</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Shokked Air</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">June 2022</p>
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
        <h2 class="font-semibold text-3xl">Shokked Air</h2>
        <p class="text-gray-400 font-medium text-xl">HVAC Systems - Web Design & Development</p>
        <p class="mt-4"></p>

        <!-- <div class="mt-8">
            <a href="" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div> -->

        <p class="mt-8">Shokked Air is an american company that sells HVAC systems as well as building tailored ari filtration systems for domestic and industrial environments.</p>

        <img src="../img/shokked_air_website.png" class="w-full shadow-xl sm:w-3/4 mt-8 mx-auto">

        <p class="mt-8">When Kenneth approached me, he already had a logo design and a website that was outdated. So our goal was to build a modern looking website that could demonstrate the impact of the air quality in our lives.</p>
        <img src="../img/shokked_air_website_full.png" class="w-full max-w-xl shadow-xl sm:w-3/4 mt-8 mx-auto">
        <p class="mt-4"></p>

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection