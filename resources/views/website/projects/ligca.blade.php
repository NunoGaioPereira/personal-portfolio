@section('title', 'Home')

@extends('website.layouts.website')

@section('styles')
<!-- <style>
    .grid {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 1.5rem;
    }

    /*.grid a img {
		    transition: all .2s ease-in;
		    filter: grayscale(0);
		}

		.grid a:hover img {
		    filter: grayscale(100%);
		}*/

    /*@media screen and (min-width: 768px) {*/
    @media screen and (min-width: 600px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (min-width: 992px) {
        .grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style> -->
@endsection

@section('content')
<section class="" id="about">
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/ligca_2.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Wordpress development and design</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">The London International Gallery of Children’s Art</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">2018 - Present</p>
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
        <h2 class="font-semibold text-3xl">The London International Gallery of Children’s Art</h2>
        <p class="text-gray-400 font-medium text-xl">Wordpress Development and Web Design</p>
        <p class="mt-4">The London International Gallery of Children’s Art (LIGCA), is a registered charity in the UK that that serves by operating educational outreach projects in the field of art. LIGCA's website is a gateway to some of the beautiful art created by the children that engage with LIGCA's initiatives.</p>

        <p class="mt-4 text-sm">Note: website originally developed by <a href="http://jamesdean.digital/" target="_blank" class="text-blue-400">James Dean</a></p>

        <div class="mt-8">
            <a href="https://ligca.org/" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Visit website</a>
        </div>

        <p class="mt-12">With more than two years of partnership, I constanlty provide support to LIGCA with their website and content management. From plugins integrations, to updates, to content structuring and page creation, I help ensuring that LIGCA takes the most out of their Wordpress website.</p>

        <img src="../img/ligca1.png" class="w-full shadow-xl sm:w-3/4 mt-8 mx-auto">

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection