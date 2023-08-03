@section('title', 'Cordeiro Ferreira')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/cordeiro_ferreira_banner.png') no-repeat; background-size: cover; background-position: center 40%">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Visual Identity</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Cordeiro Ferreira</h2>
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
        <h2 class="font-semibold text-3xl">Cordeiro Ferreira</h2>
        <p class="text-gray-400 font-medium text-xl">Visual Identity & Web Design</p>
        <p class="mt-4">Cordeiro Ferreira is a family-owned real estate company. But this is not your typical real estate company. Cordeiro Ferreira searches for properties with soul that have been deemed abandoned and gives them a new life.</p>

        <div class="mt-8">
            <a href="https://www.cordeiroferreira.com" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div>

        <img src="../img/cordeiro_ferreira_main.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <p class="mt-4">When Cordeiro Ferreira first approached me, I knew it was going to be challenging to convey their ideas through design as they were looking to represent their philosophy that is based on giving a new life to the new. Furthermore, this is a company that comes from generations within the family, and therefore their tradition is important.</p>
        <p class="mt-4">However, in this idea of renovation, there is a desire to show the new life that can be given to houses that may have beend abandonded by others. So while we wanted to show the tradition value of Cordeiro Ferreira, it was also important to keep a modern tone.</p>
        
        <br><br>
        <img src="../img/cordeiro_ferreira_home.png" class="w-full shadow-xl sm:w-3/4 mt-8 mx-auto">

        <p class="mt-4">Cordeiro Ferreira's visual identity transmits their core values, a filled with knowledge and tradition but timeless and modern feeling.</p>

        <img src="../img/cordeiro_ferreira_cards.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection