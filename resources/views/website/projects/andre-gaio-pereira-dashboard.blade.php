@section('title', '')

@extends('website.layouts.website')

@section('content')
<section class="" id="about">
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/agpdashboard_mockup_lightblue.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-70 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Custom Dashboard</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">André Gaio Pereira - Concert Dashboard</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">May 2020</p>
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
        <h2 class="font-semibold text-3xl">André Gaio Pereira - Concert Dashboard</h2>
        <p class="text-gray-400 font-medium text-xl">Personal Dashboard for Musician Portfolio</p>
        <p class="mt-4">As part of created <a href="/projects/andre-gaio-pereira" class="text-blue-500">violinist André's website</a>, I further developed a custom personal admin dashboard to manage the concerts agenda. This allows André to swiftly manage his website and to keep his audience updated on where he will perform less.</p>
        <img src="../img/agpdashboard_mockup_lightblue.png" class="w-full sm:w-3/4 my-8 mx-auto shadow-lg">

        <p class="mt-4">The CMS is secured with a custom built login system. Once logged in, the Dashboard presents all the information regarding the concerts database</p>

        <img src="../img/agpdashboard1.png" class="w-full sm:w-3/4 my-8 mx-auto shadow-lg">


        <p class="mt-4">With rich filters, content search becomes a no hasle, even with hundreds of concerts.</p>
        <img src="../img/agpdashboard_table.png" class="w-full sm:w-3/4 my-8 mx-auto shadow-lg">


        <p class="mt-4">An intuitive and simple CMS makes the creation and edition of new posts easy and straightforward.</p>
        <img src="../img/agpdashboard_new.png" class="w-full sm:w-3/4 my-8 mx-auto shadow-lg">

        <p class="mt-4">The user can easily access statistics about the content, as well as integration with Google Analytics data.</p>
        <img src="../img/agpdashboard_data.png" class="w-full sm:w-3/4 my-8 mx-auto shadow-lg">
        <p class="mt-4">The UI of the project was built with HTML/CSS, Javascript and jQuery for the AJAX calls. The back end of the system is built with PHP and the SQL database is manipulated with MySQL.</p>

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection