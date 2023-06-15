@section('title',  'About')

@extends('website.layouts.website')

@section('content')
<section class="max-w-5xl mx-auto px-8 pb-36 pt-48" id="about">
    <div>
        <h2 class="font-semibold text-3xl">Who am I?</h2>
        <div class="flex">
            <div class="w-2/3 pr-6">
                <p class="text-lg mt-4"> I am a Web Developer and Designer made in Portugal, that little awesome country on the East end of Europe. I design and develop custom and unique web applications and websites for a variety of industries.</p>

                <h2 class="font-semibold text-xl mt-12">Becoming a Web Developer & Designer</h2>
                <p class="mt-4">I always had a skill for arts and engineer, and later in college I found out what software development was all about. As the years passed by, I fell in love with web development and design. This for me became the perfect combination of skill as I can bring my creativity and design-thinking, and combine it with my engineer and coder's mind. Boom! Through deisgn and programming I have the gift to create beautifully crafted and functional websites, web apps and brand identities.</p>


                <div class="mt-8">
                    <a href="/portfolio" class="inline-block bg-mainblue border-2 border-mainblue hover:bg-gray-800 hover:border-gray-800 transition duration-300 text-sm px-6 py-3 text-white">see my work</a>
                    <a href="#engineering" class="text-mainblue ml-8 inline-block bg-white border-2 border-mainblue hover:bg-mainblue hover:text-white transition duration-300 text-sm px-6 py-3">read more</a>
                </div>
            </div>
            <div class="w-1/3 mt-4">
                <img src="./img/354711976_585061360404205_1516632196303957065_n.jpg">
            </div>
        </div>

        <div id="engineering" class="py-8"></div>
        <h2 id="engineering" class="font-semibold text-xl mt-12">Engineering</h2>
        <p class="mt-4">I studied Biomedical Engineering in Imperial College London. That's when I really started to explore my critical-thinking, engineering skills and the creation of impactful projects. Eventually I was exposed to software development and I knew this was something I wanted to take in my life to create projects that would reach and inspire thousands of people.
            Throughout the years I explored a miriad of programming languages, design tools and different workflows.</p>

        <h2 class="font-semibold text-xl mt-12">Other Passions</h2>
        <p class="mt-4">When I am not working as a web developer, I occupy myself with a variety of creative projects. Some of my passions and hobbies include making music, personal development, building skateboards and practicing yoga!</p>

        <p class="mt-12">Thanks for stopping by! Now that you know a bit more about me, I am here to help you with your new project. Click below to send me a message.</p>
        <div class="mt-8">
            <a href="/contact" class="inline-block bg-mainblue hover:bg-gray-800 transition duration-300 px-10 py-3 text-white">Let's go!</a>
        </div>
    </div>
</section>
@endsection