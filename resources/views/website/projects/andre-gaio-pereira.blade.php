@section('title', '')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/agp_banner.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Web Design and Development</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">André Gaio Pereira Portfolio</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">February 2018</p>
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
        <h2 class="font-semibold text-3xl">André Gaio Pereira Portfolio</h2>
        <p class="text-gray-400 font-medium text-xl">Web Design and Development</p>
        <p class="mt-4">André Gaio Pereira is a young and proliferate portuguese violinist. The website is a personal portfolio that showcases André's' imense talent and passion for music as well for other arts.</p>

        <!-- <div class="mt-8">
            <a href="https://www.andregaiopereira.com" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div> -->

        <img src="../img/agp_landing_page.png" class="w-full shadow-xl sm:w-3/4 mt-8 mx-auto">

        
        <br><br>
        <p class="mt-4">The portfolio website was designed from scratch and developed using HTML, CSS Javascript and jQuery.</p>
        <p class="mt-4">The website was composed by multiple pages where one can read more information about the musician.</p>
        <img src="../img/agp_biography.png" class="w-full shadow-xl sm:w-3/4 mt-8 mx-auto">

        <br><br>
        <p class="mt-4">One year later, I developed a custom Dashboard with a CMS for André to manage his concerts and public agenda. <a href="/projects/andre-gaio-pereira-dashboard">Click here</a> to find more about this project.</p>
        <img src="../img/agpdashboard_mockup_lightblue.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <p class="mt-4">André being my brother and this being the first website I ever developed, it holds a special place in my heart.</p>


        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection