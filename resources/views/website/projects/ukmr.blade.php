@section('title', '')

@extends('website.layouts.website')

@section('content')
<section class="" id="about">
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/ukmr_2.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Wordpress Design and Content Creation</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">UK Manufacturing Review</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">2018 - 2020</p>
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

<section class="max-w-5xl mx-auto px-8 pb-36 pt-16">
    <div>
        <h2 class="font-semibold text-3xl">UK Manufacturing Review</h2>
        <p class="text-gray-400 font-medium text-xl">Wordpress Design and Content Creation</p>
        <p class="mt-4">UK Manufacturing Review (UKMR) is an original publication covering many of the key events, achievements, challenges and progress across the biggest manufacturing sectors. It's Wordpress website represents the digital version of the publication, holding the articles about the industrial and manufacturing world in the UK.</p>
        <p class="mt-4">From 2018 to 2020, I helped UKMR with content creation, page development and updates, blog post design, as well as security check-ups and administration work.</p>

        <p class="mt-4 text-sm">Note: website originally developed by <a href="https://jimchristian.net/" target="_blank" class="text-blue-400">Jim Christian</a></p>

        <div class="mt-8">
            <a href="https://ukmfgreview.com/" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div>

        <p class="mt-12"></p>

        <img src="../img/ukmr_2.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection