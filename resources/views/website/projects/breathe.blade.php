@section('title', '')

@extends('website.layouts.website')

@section('content')
<section>
    <div class="min-h-screen w-full flex items-center justify-center" style="background: url('../img/breathe1.png') no-repeat; background-size: cover; background-position: center">
        <div class="bg-white sm:max-w-3xl w-xl px-8 sm:px-16 py-12 sm:py-16 mt-36 bg-opacity-90 mx-auto text-center z-10">
            <div>
                <p class="uppercase font-semibold text-sm mb-2">Web App Design and Development</p>
                <h2 class="font-bold text-xl sm:text-4xl pb-4">Relaxation Breathing App</h2>
                <span class="bg-gray-300 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
                <p class="text-sm text-gray-700 font-semibold pt-4">Ongoing</p>
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
        <h2 class="font-semibold text-3xl">Relaxation Breathing App</h2>
        <p class="text-gray-400 font-medium text-xl">Web App Design and Development</p>
        <p class="mt-4">Breathe is a breathing web application. With a minimalist design, Breathe brings your attention to your breath so you can refocus and bring yourself to a state of calmness.</p>
        <p class="mt-4">Breathe is being developed with HTML, CSS and Javascript.</p>
        <p class="mt-4 font-semibold">Coming soon!</p>

        <!-- <div class="flex">
					<div class="mt-8">
						<a href="http://meditation-timer.herokuapp.com/" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 px-8 py-3 text-gray-800 hover:text-white">Launch app</a>
					</div>
					<div class="mt-8 ml-4">
						<a href="https://github.com/NunoGaioPereira/meditation-timer" target="_blank" class="inline-block text-sm hover:bg-gray-800 border-2 border-gray-800 transition duration-300 p-3 text-gray-800 hover:text-white">
							<svg class="h-5 w-5" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36">
								<path d="M12.3756 28.7184C12.3756 28.8629 12.204 28.9785 11.9877 28.9785C11.7415 29.0002 11.57 28.8846 11.57 28.7184C11.57 28.5738 11.7415 28.4582 11.9579 28.4582C12.1817 28.4365 12.3756 28.5521 12.3756 28.7184ZM10.0556 28.3932C10.0034 28.5377 10.1526 28.7039 10.3764 28.7473C10.5704 28.8195 10.7942 28.7473 10.8389 28.6027C10.8837 28.4582 10.7419 28.292 10.5181 28.227C10.3242 28.1764 10.1079 28.2486 10.0556 28.3932ZM13.3528 28.2703C13.1365 28.3209 12.9873 28.4582 13.0097 28.6244C13.0321 28.7689 13.226 28.8629 13.4498 28.8123C13.6661 28.7617 13.8153 28.6244 13.7929 28.4799C13.7706 28.3426 13.5692 28.2486 13.3528 28.2703ZM18.2613 0.578125C7.91472 0.578125 0 8.1877 0 18.2109C0 26.2252 5.20686 33.0832 12.6442 35.4969C13.599 35.6631 13.9347 35.0922 13.9347 34.6225C13.9347 34.1744 13.9123 31.7029 13.9123 30.1854C13.9123 30.1854 8.69053 31.2693 7.59395 28.0318C7.59395 28.0318 6.74355 25.9289 5.52016 25.3869C5.52016 25.3869 3.8119 24.2523 5.63952 24.274C5.63952 24.274 7.49698 24.4186 8.51895 26.1385C10.1526 28.9279 12.8903 28.1258 13.9571 27.6488C14.1286 26.4926 14.6135 25.6904 15.1506 25.2135C10.9806 24.7654 6.77339 24.1801 6.77339 17.2281C6.77339 15.2408 7.34032 14.2436 8.53387 12.9717C8.33992 12.502 7.70585 10.5652 8.72782 8.06484C10.2869 7.59512 13.875 10.016 13.875 10.016C15.3669 9.61133 16.9708 9.40176 18.5597 9.40176C20.1486 9.40176 21.7524 9.61133 23.2444 10.016C23.2444 10.016 26.8325 7.58789 28.3915 8.06484C29.4135 10.5725 28.7794 12.502 28.5855 12.9717C29.779 14.2508 30.5101 15.248 30.5101 17.2281C30.5101 24.2018 26.1163 24.7582 21.9464 25.2135C22.6327 25.7844 23.2145 26.8684 23.2145 28.5666C23.2145 31.002 23.1921 34.0154 23.1921 34.608C23.1921 35.0777 23.5353 35.6486 24.4827 35.4824C31.9423 33.0832 37 26.2252 37 18.2109C37 8.1877 28.6079 0.578125 18.2613 0.578125ZM7.25081 25.5025C7.15383 25.5748 7.17621 25.741 7.30302 25.8783C7.42238 25.9939 7.59395 26.0445 7.69093 25.9506C7.7879 25.8783 7.76552 25.7121 7.63871 25.5748C7.51936 25.4592 7.34778 25.4086 7.25081 25.5025ZM6.44516 24.9172C6.39294 25.0111 6.46754 25.1268 6.61673 25.199C6.73609 25.2713 6.88528 25.2496 6.9375 25.1484C6.98972 25.0545 6.91512 24.9389 6.76593 24.8666C6.61673 24.8232 6.49738 24.8449 6.44516 24.9172ZM8.8621 27.4898C8.74274 27.5838 8.7875 27.8006 8.95907 27.9379C9.13065 28.1041 9.34698 28.1258 9.44395 28.0102C9.54093 27.9162 9.49617 27.6994 9.34698 27.5621C9.18286 27.3959 8.95907 27.3742 8.8621 27.4898ZM8.01169 26.4275C7.89234 26.4998 7.89234 26.6877 8.01169 26.8539C8.13105 27.0201 8.33246 27.0924 8.42944 27.0201C8.54879 26.9262 8.54879 26.7383 8.42944 26.5721C8.325 26.4059 8.13105 26.3336 8.01169 26.4275Z"></path>
							</svg>
						</a>
					</div>
				</div> -->

        <img src="../img/breathe1.png" class="w-full sm:w-3/4 mt-8 mx-auto">

        <!-- <hr class="mt-12"> -->
        <span class="bg-gray-300 mt-12 h-8 sm:h-14 py-4 block mx-auto" style="width: 2px;"></span>
        <p class="mt-12">Your next project could be on this page! Click below to get in touch and we will bring your idea to life.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's talk!</a>
        </div>
    </div>
</section>
@endsection