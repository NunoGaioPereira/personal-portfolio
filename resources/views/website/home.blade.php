@section('title', 'Home')

@extends('website.layouts.website')

@section('content')
<div class="app">



    <section class="max-w-7xl mx-auto pxtt-4 sm:pxtt-6 px-8 min-h-screen flex items-center">
        <div class="text-center mx-auto">
            <!-- <p class="font-semibold text-xl mb-2">nuno gaio pereira <span style="height: 3px;" class="inline-block mb-1 ml-2 w-7 bg-black"></span></p> -->
            <style>
                /*.hero-title:before {
						content: '';
						display: block;
						position: absolute;
						bottom: 3px;
						//right: 30px;
						right: 15px;
						width: 175px;
						height: 10px;
						background-color: #54b4f8;
						z-index: -1;
					}*/

                /*.hero-squares {
						background-image: url('./img/dots.png');
			            background-repeat: no-repeat;
			            background-size: 80px;
			            background-position: 0 80%;
					}*/

                .hero-underline {
                    background-image: linear-gradient(120deg, #54b4f8 0%, #54b4f8 100%);
                    background-repeat: no-repeat;
                    background-size: 100% 9px;
                    background-position: 0 80%;
                }

                li.logo a svg {
                    transition: color 0.2s ease-in-out;
                }

                li.logo a:hover svg {
                    color: #666;
                }

                li.logo svg {
                    /* height: 30px; */
                }
            </style>
            <div class="relative">
                <img src="./img/dots.png" class="w-24 absolute" style="margin-left: -30px; margin-top: 40px; padding-left: 20px;">

            </div>
            <h1 class="hero-title relative text-4xl md:text-5xl pt-20 text-gray-800 font-semibold"><span class="hero-squares">Design.</span> Develop. <span class="hero-underline">Innovate.</span></h1>
            <h2 class="mt-6 text-gray-500 text-lg md:text-xl mx-auto max-w-lg">@lang('website/home.hero.subtitle')</h2>
            <div class="mt-12">
                <a href="#brands" class="inline-block bg-gray-900 hover:bg-gray-800 transition duration-300 px-12 py-4 text-white">read more</a>
            </div>
        </div>
    </section>
    <div class="bg-gray-100 w-full -mt-24 px-24 py-10" id="brands">
        <div class="text-center">
            <h3 class="text-center uppercase text-sm font-semibold" style="color: #aaa">Grateful the collaboration with leading brands such as</h3>
            <ul class="mx-auto mt-4 flex items-center justify-center flex-wrap" style="color: #aaa">
                <li class="mx-6 my-4 logo"><a href="https://www.worten.pt/servicos-worten-resolve" target="_blank">{!! file_get_contents('img/logos/worten.svg') !!}</a></li>
                <li class="mx-6 my-4 logo"><a href="https://www.iswari.com/pt" target="_blank">{!! file_get_contents('img/logos/iswari.svg') !!}</a></li>
                <li class="mx-6 my-4 logo"><a href="https://www.zaask.pt/" target="_blank">{!! file_get_contents('img/logos/zaask.svg') !!}</a></li>
                <li class="mx-6 my-4 logo"><a href="" target="_blank">{!! file_get_contents('img/logos/altice.svg') !!}</a></li>
                <li class="mx-6 my-4 logo"><a href="https://apps.apple.com/pt/app/paladar/id1645135680" target="_blank">{!! file_get_contents('img/logos/paladar.svg') !!}</a></li>
                <li class="mx-6 my-4 logo"><a href="" target="_blank">{!! file_get_contents('img/logos/oney.svg') !!}</a></li>
            </ul>
        </div>
    </div>

    <section class="max-w-7xl mx-auto px-8 pt-36" id="about">
        <div class="flex flex-col sm:flex-row items-center justify-between w-full">
            <div class="w-full sm:w-1/2">
                <p class="font-semibold text-xl">who am I <span style="height: 3px;" class="inline-block mb-1 ml-2 w-7 bg-black"></span></p>
                <h2 class="font-semibold text-4xl">Nuno Gaio Pereira<span class="bg-mainblue w-2 h-2 inline-block ml-1"></span></h2>
                <p class="">I'm Nuno, a <!--n independent--> Designer and Full-Stack Web Developer based in Lisbon.
                    My goal is to help you and your business create an online impact by crafting a unique visual identity and web solution that fits your vision. I focus on building bespoke brands, websites and applications built with expertise and passion.</p>
                <div class="mt-8">
                    <a href="#services" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-8 py-3 text-sm text-white">what I offer</a>
                </div>
            </div>
            <div class="w-full sm:w-1/2 text-right pt-10 sm:p-0 sm:pl-6 ">
                <img class="w-full max-w-md mx-auto sm:float-right rounded-lg" src="./img/eu.png">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 py-36" id="services">
        <p class="font-semibold text-xl">my expertises <span style="height: 3px;" class="inline-block mb-1 ml-2 w-7 bg-black"></span></p>
        <h2 class="font-semibold text-4xl">Services</h2>

        <div class="grid grid-cols-3 gap-4 py-10">
            <a href="/services#design" class="service-box">
                <div class="bg-gray-10 h-full px-10 py-20 shadow-lg hover:shadow-2xl transition duration-300">
                    <p class="text-xl font-semibold">01</p>
                    <h3 class="text-3xl font-semibold mt-8">Design</h3>
                    <p class="pt-4">All projects start with an idea. Through design, we grasp the possibility of translating your ideas to a tangible and beautiful creative work.</p>
                    <img class="pt-12 w-20" src="./img/design.png">
                    <div class="mt-8">
                        <div class="inline-block transition duration-300 font-semibold service-link">
                            <span>read more</span>
                            <img class="transition ml-2 inline-block w-4" src="./img/arrow_right.png">
                        </div>
                    </div>
                </div>
            </a>
            <a href="/services#development" class="service-box">
                <div class="bg-gray-10 h-full px-10 py-20 shadow-lg hover:shadow-2xl transition duration-300">
                    <p class="text-xl font-semibold">02</p>
                    <h3 class="text-3xl font-semibold mt-8">Development</h3>
                    <p class="pt-4">I design and build bespoke websites. As an experienced developer, from pure website design, to custom code development, to CMS solutions, my passion and purpose is to bring your web project idea to life.</p>
                    <img class="pt-12 w-20" src="./img/develop.png">
                    <div class="mt-8">
                        <div class="inline-block transition duration-300 font-semibold service-link">
                            <span>read more</span>
                            <img class="transition ml-2 inline-block w-4" src="./img/arrow_right.png">
                        </div>
                    </div>
                </div>
            </a>
            <a href="/services#branding" class="service-box">
                <div class="bg-gray-10 h-full px-10 py-20 shadow-lg hover:shadow-2xl transition duration-300">
                    <p class="text-xl font-semibold">03</p>
                    <h3 class="text-3xl font-semibold mt-8">Branding & Identity</h3>
                    <p class="pt-4">When building your identity every detail counts. I will help you create the brand experience that you and your clients deserve, and that represent who you are as a business.</p>
                    <img class="pt-12 w-20" src="./img/branding.png">
                    <div class="mt-8">
                        <div class="inline-block transition duration-300 font-semibold service-link">
                            <span>read more</span>
                            <img class="transition ml-2 inline-block w-4" src="./img/arrow_right.png">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="w-full bg-gray-100 p-8"></div> -->
        <div class="mt-8 text-center">
            <a href="#portfolio" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-8 py-3 text-sm text-white">portfolio</a>
        </div>
    </section>

    <!-- <section class="bg-gray-100" id="cta">
			<div class="max-w-7xl mx-auto px-8 py-36">
				<h2 class="font-semibold text-3xl text-center text-gray-900">Have an idea you've been thinking about?</h2>
				<p class="text-center text-lg teat-gray-700 mt-2">Let's get in touch, I will help you make it come to light!</p>
				<div class="mt-8 text-center">
					<a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-8 py-3 text-sm text-white">get in touch</a>
				</div>
			</div>
		</section> -->
    <section class="px-8" id="cta">
        <div class="max-w-7xl mx-auto px-8 py-32 bg-gray-100">
            <h2 class="font-semibold text-2xl sm:text-3xl text-center text-gray-900">Have an idea you've been thinking about?</h2>
            <p class="text-center sm:text-lg teat-gray-700 mt-3">Let's get in touch, I will help you make it come to light!</p>
            <div class="mt-10 text-center">
                <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-8 py-3 text-sm text-white">Get in touch!</a>
            </div>
        </div>
    </section>

    <section id="portfolio" class="bg-gray-10">
        <div class="max-w-7xl mx-auto px-8 py-28">
            <p class="font-semibold text-lg mb-2">featured work <span style="height: 3px;" class="inline-block mb-1 ml-2 w-7 bg-black"></span></p>
            <h2 class="font-semibold text-4xl">Projects</h2>
            <div class="py-8">
                <div class="grid grid-cols-2">
                    <div class="work web">
                        <div class="col-span-1">
                            <div class="relative group">
                                <a href="/projects/cordeiro-ferreira">
                                    <img src="./img/cordeiro_ferreira_square.png" alt="" class="w-full relative" style="z-index: 1">
                                    <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #aaaaaabb;">
                                        <div>
                                            <p style="text-shadow: 1px 1px #aaa;">Cordeiro Ferreira</p>
                                            <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Identity and Web Design</p>
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
                    <div class="work branding design">
                        <div class="col-span-1">
                            <div class="relative group">
                                <a href="/projects/flama">
                                    <img src="./img/flama_square.png" alt="" class="w-full relative" style="z-index: 1">
                                    <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #aaaaaabb;">
                                        <div>
                                            <p class="text-2xl">Flama</p>
                                            <p class="text-sm">Visual Identity</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="work branding design">
                        <div class="col-span-1">
                            <div class="relative group">
                                <a href="/projects/vo-chica">
                                    <img src="./img/vo_chica_square.png" alt="" class="w-full relative" style="z-index: 1">
                                    <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #aaaaaabb;">
                                        <div>
                                            <p style="text-shadow: 1px 1px #aaa;">Vó Chica</p>
                                            <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Branding and Packaging Design</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/nora">
                                <img src="./img/nora_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #af9d71bb;">
                                    <div>
                                        <p class="text-2xl">Nora</p>
                                        <p class="text-sm">Visual Identity</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="work branding design">
                        <div class="col-span-1">
                            <div class="relative group">
                                <a href="/projects/caucau">
                                    <img src="./img/caucau_square.png" alt="" class="w-full relative" style="z-index: 1">
                                    <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-60 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #aaaaaabb;">
                                        <div>
                                            <p class="text-2xl">Caucau</p>
                                            <p class="text-sm">Visual Identity</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->
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
                            <a href="/projects/zenstate">
                                <img src="./img/zenstate1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-200 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Meditation Web App</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Design and Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/andre-gaio-pereira-dashboard">
                                <img src="./img/agpdashboard_mockup_lightblue_square.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #a6daffee;">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Custom CMS and Dashboard</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">PHP and MySQL Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="col-span-1">
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
                    </div> -->
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
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/andre-gaio-pereira">
                                <img src="./img/agp1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-gray-400 bg-opacity-70 from-gray-200 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Violinist Portfolio</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Branding and Web Development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative group">
                            <a href="/projects/sanifauna">
                                <img src="./img/sanifauna_square1.png" alt="" class="w-full relative" style="z-index: 1">
                                <div class="absolute w-full h-full justify-center text-center flex items-center bottom-0 left-0 text-xl px-4 py-2 bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-300 w-full text-white font-semibold" style="z-index: 1; background-color: #93c631cd;">
                                    <div>
                                        <p style="text-shadow: 1px 1px #aaa;">Sanifauna</p>
                                        <p style="text-shadow: 1px 1px #aaa;" class="text-sm">Wordpress Development and Branding</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-span-1">
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
                    </div> -->
                    <!-- <div class="work web">
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
                    </div> -->
                </div>
            </div>
            <div class="mt-8 text-center">
                <a href="/portfolio" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-8 py-3 text-sm text-white">see more</a>
            </div>
        </div>
    </section>

</div>
@endsection