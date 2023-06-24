@section('title', '')

@extends('website.layouts.website')

@section('content')
<section class="" id="about">
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/sanifauna2.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Web Design and Branding</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Sanifauna</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">2017 to Present</p>
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
        <h2 class="font-semibold text-3xl">Sanifauna</h2>
        <p class="text-gray-400 font-medium text-xl">Web Design and Branding</p>
        <p class="mt-4">Based in Alverca, Sanifauna is one of the leading Portuguese companies in veterinary products redistribution. Sanifauna services span from Animal Nutrition, to PET and Farming. At its core, Sanifauna mission is to support animal healthcare, accomplished by a dedicated and knowledgeable team of professionals in their field.</p>
        <p class="mt-4">With a relationship counting with more than 3 years, I have mainly helped Sanifauna with branding, design and website development.</p>

        <div class="mt-8">
            <a href="http://sanifauna.pt/" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div>

        <p class="mt-12">Throughout the years, I have helped Sanifauna with their Wordpress website, working on the backend, design and page development. Furthermore, Sanifauna reaches out to my services when marketing actions are required. Other works with Sanifauna include designing promotional banners, social media content, email marketing and design (Mailchimp) and brocuhre design.</p>

        <img src="../img/sanifauna3.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection