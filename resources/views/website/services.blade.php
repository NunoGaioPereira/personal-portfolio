@section('title', 'Services')

@extends('website.layouts.website')

@section('styles')
<style type="text/css">
    @import url('../fonts/fonts.css');

    * {
        font-family: 'Poppins', 'Zona Pro', 'Muli', sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    .service-link:hover img {
        transform: translateX(10px);
    }

    .btn-expand {
        transition: width 0.3s ease-in-out;
    }

    .btn-expand:hover {
        width: 120px;
    }

    .grid {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 1.5rem;
    }

    .btn-service {
        position: absolute;
        //  float: none;
        // top: 50%;
        // left: 50%;
        text-align: center;
    }

    .cta {
        width: 40px;
        height: 40px;
        //border-radius: 50px;
        color: #fff;
        transition: width 0.7s;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .cta:hover {
        width: 180px;
        transition: width 0.7s;
    }

    .cta .number,
    .cta .btn-arrow {
        opacity: 1;
        transition: opacity 0.5s
    }

    .cta:hover .number,
    .cta:hover .btn-arrow {
        opacity: 0;
        transition: opacity 0.5s
    }

    .cta .button-text {
        opacity: 0;
        transition: opacity .5s;
        position: absolute;
        width: 100%;
        left: 0;
    }

    .cta:hover .button-text {
        opacity: 1;
        transition: opacity 0.5s
    }

    .number {
        font-weight: 600;
        font-size: 25px;
    }

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

    .technologies {
        display: grid;
        margin-top: 30px;
        margin-bottom: 80px;
        padding-left: 0;
        grid-auto-columns: 1fr;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        -ms-grid-columns: 1fr 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        -ms-grid-rows: auto;
        grid-template-rows: auto;
    }

    @media screen and (max-width: 767px) {
        .technologies {
            -ms-grid-columns: 1fr 1fr;
            grid-template-columns: 1fr 1fr;
        }
    }

    .technologies__item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        background-image: none;
        color: #1e2228;
        margin-bottom: 16px;
    }

    .skill {
        color: #000;
        transition: transform 0.25s ease-in-out;
        user-select: none;
    }

    .skill:hover {
        -webkit-transform: translate(0, -3px);
        -ms-transform: translate(0, -3px);
        transform: translate(0, -3px);
    }

    .technologies__icon {
        width: 24px;
        margin-right: 10px;
    }

    .faq-icon:after {
        content: '+';
        display: block;
        font-style: semibold;
        font-size: 26px;
    }

    .faq-icon.selected:after {
        content: '-'
    }
</style>
@endsection

@section('content')
<section class="max-w-7xl mx-auto px-8 pt-48 pb-16" id="about">
    <div class="pb-36">
        <p class="font-semibold text-xl">my expertises <span style="height: 3px;" class="inline-block mb-1 ml-2 w-7 bg-black"></span></p>
        <h1 class="text-4xl font-semibold">Services</h1>
        <h2 class="my-4 mb-8 text-gray-500 max-w-lg"></h2>
        <h2 class="my-4 mb-12 text-gray-500 max-w-2xl">In order to find out how I can help you with your next project, read below about my mains expertises so we can start working together.</h2>
        <!-- <div class="mt-8">
					<a href="#design" class="inline-block bg-blue-400 hover:bg-gray-800 transition duration-300 px-8 py-3 text-sm text-white">what I offer</a>
				</div>
				<div class="btn-expand bg-gray-200 w-10 h-10 transition duration-300 overflow-x-hidden overflow-y-hidden py-2 px-2 rounded-full">
					01 Design
				</div>
				<div class="btn-expand rounded-full transition duration-300 w-10 overflow-x-hidden py-3 bg-blue-400">
					<a href="#design" class="text-sm text-white text-gray-500 overflow-x-hidden">01 Design</a>
				</div>
				<div>
					<a href="#design" class="block bg-blue-400 hover:bg-gray-800 rounded-full transition duration-300 w-10 overflow-x-hidden py-3 text-sm text-white btn-expand text-gray-500">01 Design</a>
				</div>

				<div class="btn-expand">
					
				</div> -->


        <div class="flex w-full justify-between">
            <!-- <div class="block mr-12 bg-gray-300 w-full w-12 h-12"> -->
            <div class="btn-service">
                <a href="#design" class="cta bg-mainblue">
                    <!-- <p class="number">01</p> -->
                    <img class="btn-arrow w-3" src="./img/arrow_right_white.png">
                    <span class="button-text">Go</span>
                </a>
            </div>
            <!-- </div> -->
            <!-- <div class="block mr-12 bg-gray-300 w-full w-12 h-12"> -->
            <!-- <div class="btn-service ml-16">  
							<a href="" class="cta bg-blue-400">
						      <p class="number">02</p>
						      <span class="button-text">Development</span>
						    </a>
						</div>
						<div class="btn-service ml-32">  
							<a href="" class="cta bg-blue-400">
						      <p class="number">03</p>
						      <span class="button-text">Branding</span>
						    </a>
						</div> -->
            <!-- </div> -->
        </div>
    </div>

    <div class="flex flex-col sm:flex-row items-center justify-between w-full pt-36 pb-12" id="design">
        <div class="w-full sm:w-1/2">
            <div class="relative">
                <p style="z-index: -1; color: #f2f2f2; font-size: 180px; line-height: 1;" class="font-semibold absolute -top-14">01</p>
                <h2 class="font-bold text-4xl">Design</h2>
                <p class="mt-4 text-gray-500">From web and mobile applications to brand identity, I will help you create a design that reflects your goals and intention.</p>
                <div class="mt-8">
                    <a href="/portfolio" class="inline-block transition duration-300 font-semibold service-link">
                        <span>see design projects</span>
                        <img class="transition ml-2 inline-block w-4" src="./img/arrow_right.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 text-right">
            <img class="w-full sm:max-w-md pt-10 mx-auto sm:p-0 sm:pl-6 sm:float-right" src="./img/hemingway.png">
        </div>
    </div>
    <div>
        <div class="container">
            <h3 class="text-2xl font-semibold text-gray-800">Design</h3>
            <ul role="list" class="technologies">
                <li class="flex mb-4">
                    <div class="skill flex items-center">
                        <!-- <img src="./img/skills/laptop.svg" loading="lazy" alt="" class="w-6 mr-3"> -->
                        <img src="./img/skills/website.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Website Design</div>
                    </div>
                </li>
                <li class="flex mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/phone.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">App Design</div>
                    </div>
                </li>
                <!-- <li class="flex pl-0 mb-4">
							<div class="skill flex items-center">
								<img src="./img/skills/uiux.svg" loading="lazy" alt="" class="w-6 mr-3">
								<div class="text-gray-800 font-medium">UI/UX</div>
							</div>
						</li> -->
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/pencil.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Graphic Design</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/branding.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Visual Identity</div>
                    </div>
                </li>
                <!-- <li class="flex pl-0 mb-4">
							<div class="skill flex items-center">
								<img src="./img/skills/product_design.svg" loading="lazy" alt="" class="w-6 mr-3">
								<div class="text-gray-800 font-medium">Product Design</div>
							</div>
						</li> -->
            </ul>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row items-center justify-between w-full pt-36 pb-12" id="development">
        <div class="w-full sm:w-1/2 hidden sm:block">
            <img class="w-full sm:max-w-md pt-10 mx-auto sm:mx-0 sm:p-0 sm:pr-6" src="./img/agp1.png">
        </div>
        <div class="w-full sm:w-1/2">
            <div class="relative">
                <p style="z-index: -1; color: #f2f2f2; font-size: 180px; line-height: 1;" class="font-semibold absolute -top-14">02</p>
                <h2 class="font-bold text-4xl">Web Development</h2>
                <p class="mt-4 text-gray-500">I design and build custom websites and web applications. With years of experience as a Full-Stack Web Developer, I offer a variety of website packages. For custom development I work with PHP, Laravel and NodeJS for backend, and Javascript, Vue.js for front-end. For CMS development, I have experience with Wordpress, Squarespace, Shopify, Webflow and Wix.</p>
                <div class="mt-8">
                    <a href="/portfolio" class="inline-block transition duration-300 font-semibold service-link">
                        <span>see web development projects</span>
                        <img class="transition ml-2 inline-block w-4" src="./img/arrow_right.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 sm:hidden">
            <img class="w-full sm:max-w-md pt-10 mx-auto sm:mx-0 sm:p-0 sm:pr-6" src="./img/agp1.png">
        </div>
    </div>

    <div>
        <div class="container">
            <!-- <h3>CMS<br></h3>
					Design
					UI/UX
					Wireframing
					Development
					Web App
					Landing Page
					Newsletter
					

					website design
					UI/UX
					App design
					Logo
					Branding
					graphic design
					Design system

					wp
					ss
					shopify
					webflow
					wix

					html/css
					tailwind
					JS, jQUery
					Laravel
					SSL
					Seo
					Accessibility


					product design
					ui/ux

					python
					c++

					<h3>Development</h3>
					html
					css
					javascript
					node.js
					mysql
					mongoDB
					php
					laravel
					express.js -->
            <h3 class="text-2xl font-semibold text-gray-800">Technologies</h3>
            <ul role="list" class="technologies">
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/html.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">HTML</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/css.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">CSS</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/tailwind.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Tailwind CSS</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/js.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Javascript</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/vue.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Vue.js</div>
                    </div>
                </li>
                <li class="flex mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/nodejs2.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Node.js</div>
                    </div>
                </li>
                <li class="flex mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/express.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Express.js</div>
                    </div>
                </li>
                <!-- <li class="flex mb-4">
							<div class="skill flex items-center">
								<img src="./img/skills/ecommerce.svg" loading="lazy" alt="" class="w-6 mr-3">
								<div class="text-gray-800 font-medium">E-commerce</div>
							</div>
						</li> -->
                <!-- <li class="flex mb-4">
							<div class="skill flex items-center">
								<img src="./img/skills/react.svg" loading="lazy" alt="" class="w-6 mr-3">
								<div class="text-gray-800 font-medium">React.js</div>
							</div>
						</li> -->
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/php.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">PHP</div>
                    </div>
                </li>

                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/laravel.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Laravel</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/mysql.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">MySQL</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/mongodb.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">MongoDB</div>
                    </div>
                </li>
            </ul>
            <h3 class="text-2xl font-semibold text-gray-800">CMS</h3>
            <ul role="list" class="technologies">
                <li class="flex mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/wordpress.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Wordpress</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/squarespace.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Squarespace</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/webflow.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Webflow</div>
                    </div>
                </li>

                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/shopify.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Shopify</div>
                    </div>
                </li>
            </ul>
            <!-- <p class="text-gray-800">Other library and tools I have explored include jQuery, Apine.jS, Howler.js, Bootstrap, Material UI and Wix.</p> -->

            <!-- <h3 class="text-xl font-semibold text-gray-800">Development</h3>
					<ul role="list" class="technologies">
						<li class="technologies__item"><a href="/development-services/node-js-development-services" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/60191229a361b00293efc6b4_nodejs.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Node.js</div></a></li>
						<li class="technologies__item"><a href="/services/web-development" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/6019122a98a151460f3d11d1_reactnative.svg" loading="lazy" alt="" class="technologies__icon"><div class=">React.js</div></a></li>
						<li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/601912292e13f63d4a9c6b0e_cloud.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Cloud</div></a></li>
						<li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/6019122a3ef695203eeb53a5_uiux.svg" loading="lazy" alt="" class="technologies__icon"><div class=">UI/UX</div></a></li><li class="technologies__item"><a href="/development-services/react-native-development-services" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/6019122a98a151460f3d11d1_reactnative.svg" loading="lazy" alt="" class="technologies__icon"><div class=">React Native</div></a></li><li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/6019122831a68457d4208b64_automation.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Automation</div></a></li><li class="technologies__item"><a href="/development-services/python-development-services" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/60191229a21726425c1d7058_python.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Python</div></a></li><li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/601912299bb728d4243d5f2d_discovery.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Product Discovery</div></a></li><li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/601912283d1cb105c576c023_monitoring.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Monitoring</div></a></li><li class="technologies__item"><a href="/development-services/express-js-development-services" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/601912294e95eb2bb4f58294_expressjs.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Express.js</div></a></li><li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/60191228a361b039caefc6b3_design.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Product Design</div></a></li><li class="technologies__item"><a href="/development-services/meteor-js-development-services" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/60191228a278ddd872a8938c_meteorjs.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Meteor.js</div></a></li><li class="technologies__item"><a href="#" class="technologies__link w-inline-block"><img src="https://uploads-ssl.webflow.com/60100d2607bb730b274862d6/6019122956aaf46db857520d_prototyping.svg" loading="lazy" alt="" class="technologies__icon"><div class=">Rapid Prototyping</div></a></li>
					</ul> -->
        </div>
    </div>

    <div class="flex flex-col sm:flex-row items-center justify-between w-full pt-36 pb-12" id="branding">
        <div class="w-full sm:w-1/2">
            <div class="relative">
                <p style="z-index: -1; color: #f2f2f2; font-size: 180px; line-height: 1;" class="font-semibold absolute -top-14">03</p>
                <h2 class="font-bold text-4xl">Branding & Identity</h2>
                <p class="mt-4 text-gray-500">Branding defines how you are perceived and it is the key to differentiate you from everyone else in the market. This goes from your website, and your logo, to your color palette and messaging. I will help you craft the visual identity that represents your authentic values and vision.</p>
                <div class="mt-8">
                    <a href="/portfolio" class="inline-block transition duration-300 font-semibold service-link">
                        <span>see branding projects</span>
                        <img class="transition ml-2 inline-block w-4" src="./img/arrow_right.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 text-right">
            <img class="w-full sm:max-w-md pt-10 mx-auto sm:p-0 sm:pl-6 sm:float-right" src="./img/card_600.png">
            <!-- <img class="w-full sm:max-w-md pt-10 mx-auto sm:p-0 sm:pl-6 sm:float-right" src="./img/logo1.png"> -->
        </div>
    </div>

    <div>
        <div class="container">
            <h3 class="text-2xl font-semibold text-gray-800">Components</h3>
            <ul role="list" class="technologies">
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/branding.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Brand</div>
                    </div>
                </li>
                <li class="flex mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/logo.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Logo</div>
                    </div>
                </li>
                <!-- <li class="flex pl-0 mb-4">
							<div class="skill flex items-center">
								<img src="./img/skills/uiux.svg" loading="lazy" alt="" class="w-6 mr-3">
								<div class="text-gray-800 font-medium">UI/UX</div>
							</div>
						</li> -->
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/typography.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Typography</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/color.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Color Palette</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/cog.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Design System</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/print.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Print</div>
                    </div>
                </li>
                <li class="flex pl-0 mb-4">
                    <div class="skill flex items-center">
                        <img src="./img/skills/email.svg" loading="lazy" alt="" class="w-6 mr-3">
                        <div class="text-gray-800 font-medium">Email Design</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="faq" class="max-w-7xl mx-auto px-8 pb-16">
    <div>
        <h3 class="text-2xl font-semibold text-gray-800">FAQ</h3>
        <!-- <li class="relative list-none" x-data="{selected:null}">
					<button type="button" class="w-full focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
						<div class="task w-full flex py-4">
							<label class="inline-flex items-center cursor-pointer">
								<span data-status="open" x-bind:style="selected == 1 ? 'transform: rotate(90deg)' : ''">+</span>
				                <img src="./img/arrow_right.png" class="arrow-right h-4" data-status="open" x-bind:style="selected == 1 ? 'transform: rotate(90deg)' : ''">
				                <p class="ml-3 text-dark-gray font-semibold text-gray-800 cursor-pointer">I have a design but need a developer</p>
				            </label>
						</div>
					</button>
					<div class="border-b-2 ml-6 w-full border-line-gray"></div>

					<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
						<div class="w-full py-4 ml-6">
			                <p class="ml-3 text-medium-gray text-gray-800 cursor-pointer">I provide full service from branding & identity, web design and web development.</p>
						</div>
					</div>
				</li> -->
        <ul class="list-none">
            <li class="relative border-b-2 border-gray-200" x-data="{selected:null}">
                <button type="button" class="w-full px- py-4 text-left focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">I need a custom software or web application.</span>
                        <span class="faq-icon" x-bind:class="{'selected' : selected}"></span>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-4">
                        <p>Developing web applications is one of my main passions. With a software development background, I offer custom development with a variety of programming technologies.</p>
                    </div>
                </div>
            </li>
            <li class="relative border-b-2 border-gray-200" x-data="{selected:null}">
                <button type="button" class="w-full px- py-4 text-left focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">Do you offer CMS design and development?</span>
                        <span class="faq-icon" x-bind:class="{'selected' : selected}"></span>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-4">
                        <p>Yes. I have experience with a variety of CMS's, including Wordpress, Webflow, Squarespace, Wix and Shopify.</p>
                    </div>
                </div>
            </li>
            <li class="relative border-b-2 border-gray-200" x-data="{selected:null}">
                <button type="button" class="w-full px- py-4 text-left focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">I need an online shop or e-commerce website.</span>
                        <span class="faq-icon" x-bind:class="{'selected' : selected}"></span>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-4">
                        <p>Great! I can develop your e-commerce shop with Shopify, Webflow, or Squarespace.</p>
                    </div>
                </div>
            </li>
            <li class="relative border-b-2 border-gray-200" x-data="{selected:null}">
                <button type="button" class="w-full px- py-4 text-left focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">I already have a website and only need updates, optimizations and/or maintenance.</span>
                        <span class="faq-icon" x-bind:class="{'selected' : selected}"></span>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-4">
                        <p>I will work with you. I offer continuous maintenance and monitoring services for websites already built with different technologies, as well as any optimizations and/or updates.</p>
                    </div>
                </div>
            </li>
            <li class="relative border-b-2 border-gray-200" x-data="{selected:null}">
                <button type="button" class="w-full px- py-4 text-left focus:outline-none" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">I have a design but need a developer.</span>
                        <span class="faq-icon" x-bind:class="{'selected' : selected}"></span>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-4">
                        <p>I can help you. Though I also offer design services, I also can develop a website from a given design.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection