@section('title', 'Portfolio')

@extends('website.layouts.website')

@section('content')
<section id="portfolio" class="bg-gray-10">
    <div class="max-w-7xl mx-auto px-8 pt-36 pb-28 text-center">
        <!-- <p class="font-semibold text-lg mb-2">my work</p>
				<span style="height: 3px;" class="inline-block mb-2 ml-2 w-7 bg-black"></span> -->
        <h2 class="font-semibold text-4xl">Portfolio</h2>
        <p class="mt-4">A selection of my recent works</p>
        <div class="py-12">
            <ul class="portfolio-nav">
                <li class="inline-block"><a href="#/" class="test active inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-900" onclick="filterSelection('all')">All</a></li>
                <li class="inline-block"><a href="#/" class="test inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-900" onclick="filterSelection('design')">Design</a></li>
                <li class="inline-block"><a href="#/" class="test inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-900" onclick="filterSelection('web')">Web</a></li>
                <li class="inline-block"><a href="#/" class="test inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-900" onclick="filterSelection('branding')">Branding</a></li>
            </ul>
            <!-- <ul>
						<li class="inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-900">All</li>
						<li class="inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-400">Web</li>
						<li class="inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-400">Graphic Design</li>
						<li class="inline-block font-semibold mx-6 cursor-pointer hover:text-gray-800 text-gray-400">Branding</li>
					</ul> -->
            <div class="grid grid-cols-2 pt-8">
                <div class="work web design branding">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/impact-uk">
                                <img src="./img/impactuk_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #fa6f1abb;">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Website and Social Network</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Fullstack Development</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-xs">Laravel & MySQL</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work branding design">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/awaven">
                                <img src="./img/awaven_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #aaaaaabb;">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Awaven</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Design and Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/shokked_air">
                                <img src="./img/shokked_air_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #aaaaaabb;">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Shokked Air</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Web Design and Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web design">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/zenstate">
                                <img src="./img/zenstate1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Meditation Web App</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Design and Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative group">
                        <a href="/projects/impact-uk_branding">
                            <img src="./img/impact_uk_square.png" alt="" class="w-full relative" style="z-index: 1">
                            <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #fa6f1abb;">
                                <div>
                                    <p style="text-shadow: 1px 1px #aaa;">Impact UK</p>
                                    <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Visual Identity</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="relative group">
                        <a href="/projects/t-rok">
                            <img src="./img/trok_square.png" alt="" class="w-full relative" style="z-index: 1">
                            <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                <div>
                                    <p style="text-shadow: 1px 1px #aaa;">T-Rok</p>
                                    <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Logo Design</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="work web design">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/ligca">
                                <img src="./img/ligca_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Children's Art Education Charity</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Wordpress Development and Design</p>
                                    </div>
                                </div>
                                <!-- <div class="absolute bottom-0 left-0 text-xl px-4 py-2 bg-gradient-to-t to-transparent from-gray-300 opacity-0 group-hover:opacity-100 transition w-full text-white font-semibold" style="z-index: 1">
						                	<p style="text-shadow: 1px 1px #999;">Meditation App</p>
					                	</div> -->
                        </div>
                        </a>
                    </div>
                </div>
                <div class="work web design branding">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/andre-gaio-pereira">
                                <img src="./img/agp1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Musician Portfolio</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Branding and Web Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web design">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/breathe">
                                <img src="./img/breathe1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Relaxation Breathing Web App</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Design and Web Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/quarteto-tejo">
                                <img src="./img/quartetotejo_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Quarteto Tejo</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Wix Design and Development Consultancy</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/visavis-paris">
                                <img src="./img/visavis_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Vis-A-Vis Paris</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Wordpress Consultancy</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/sanifauna">
                                <img src="./img/sanifauna_square1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Sanifauna Website</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Branding and Wordpress Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/ukmr">
                                <img src="./img/ukmr_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">UK Manufacturing Review Website</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Wordpress Development and Content Creation</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/andre-gaio-pereira-dashboard">
                                <!-- <img src="./img/agpdashboard_featured.png" alt="" class="w-full relative" style="z-index: 1"> -->
                                <img src="./img/agpdashboard_mockup_lightblue_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Custom CMS and Dashboard</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">PHP and MySQL Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-span-1">
				       		<div class="relative group">
					            <a href="">
					                <img src="./img/personal_branding1.png" alt="" class="w-full relative" style="z-index: 1">
					                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-100 bg-opacity-10 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
					                	<div>
						                	<p style="text-shadow: 1px 1px #aaa;">Personal Branding</p>
						                	<p style="text-shadow: 1px 1px #aaa;" class="text-sm">Design and Development</p>
					                	</div>
					                </div>
					            </a>
					        </div>
					    </div> -->
                <div class="work design">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/old-man-and-the-sea">
                                <img src="./img/hemingway.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-mainblue bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">The Old Man and the Sea</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Book Cover Design</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="work branding design">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/personal-branding">
                                <img src="./img/card_600.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Personal Branding</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Web Development and Designer Identity</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="work web">
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/instagram-laravel-clone">
                                <img src="./img/instaclone_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Instagram Clone</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Laravel Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-span-1">
				       		<div class="relative group">
					            <a href="/projects/personal-branding">
					                <img src="./img/personal_branding1.png" alt="" class="w-full relative" style="z-index: 1">
					                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-opacity-10 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #333333cd;">
					                	<div>
						                	<p style="text-shadow: 1px 1px #aaa;">Personal Branding</p>
						                	<p style="text-shadow: 1px 1px #aaa;" class="text-sm">Design and Development</p>
					                	</div>
					                </div>
					            </a>
					        </div>
					    </div> -->
            </div>
        </div>
        <!-- <div class="mt-8 text-center">
					<a href="" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-8 py-3 text-white">see more</a>
				</div> -->
    </div>
</section>
@endsection

@section('scripts')
<script>
    filterSelection("all");

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("work");

        if (c == "all") {
            c = "";
        }

        for (i = 0; i < x.length; i++) {
            removeClass(x[i], "hidden");
            if (x[i].className.indexOf(c) == -1) {
                addClass(x[i], "hidden");
            }
        }
    }

    function addClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function removeClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // // Add active class to the current button (highlight it)
    // var btnContainer = document.querySelector(".portfolio-nav");
    // var btns = document.getElementsByClassName("test");
    // console.log(btns);
    // for (var i = 0; i < btns.length; i++) {
    //   btns[i].addEventListener("click", function(){
    //     var current = document.getElementsByClassName("active");
    //     current[0].className = current[0].className.replace(" active", "");
    //     this.className += " active";
    //   });
    // }
</script>
@endsection