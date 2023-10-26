<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">



    <title>Datify - Randomizer</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Suez+One&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Play', sans-serif;
            background: #EBDFDA;
        }

        .phone-container {
            flex-direction: column;
            /* max-height: 600px;
            max-width: 320px; */

            width: 100vw;
            height: 100vh;

            justify-content: space-between;
            padding: 36px 48px;

            z-index: 2;
        }

        .text-main-color {
            color: #D9BEB3;
        }

        .main-btn {
            background-color: #EF6441;
            color: #ffffff;
            font-family: 'Play', sans-serif;
            font-size: 16px;
            font-weight: 700;
            padding: 12px 56px;
            cursor: pointer;
            border-radius: 4px;

            box-shadow: 0px 8px 0px 0px #DE5330;
        }

        .main-btn:active {
            transform: translateY(5px);
            box-shadow: none !important;
        }

        .main-btn.disabled {
            background: #EFF1F2 !important;
            box-shadow: 0px 8px 0px 0px rgba(185, 195, 213, 1) !important;
            color: #333333;
            cursor: not-allowed;
            pointer-events: none;
        }

        .main-letter {
            font-family: 'Suez One', serif;
            font-size: 120px;
            font-weight: 400;
            user-select: none;
        }

        .logo {
            width: 200px;
        }

        .logo-mark {
            width: 48px;
            margin-bottom: 12px;
        }

        /***************** Confetti */
        /* @keyframes loading {
            0% {
                cy: 10;
            }

            25% {
                cy: 3;
            }

            50% {
                cy: 10;
            }
        }

        canvas {
            height: 100vh;
            pointer-events: none;
            position: fixed;
            width: 100%;
            z-index: 2;
        }

        .ready-btn {
            background: none;
            border: none;
            color: #f4f7ff;
            cursor: pointer;
            font-family: 'Quicksand', sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            left: 50%;
            outline: none;
            overflow: hidden;
            padding: 0 10px;
            position: fixed;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 190px;
            -webkit-tap-highlight-color: transparent;
            z-index: 1;
        }

        .ready-btn::before {
            background: #1f2335;
            border-radius: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .4) inset;
            content: '';
            display: block;
            height: 100%;
            margin: 0 auto;
            position: relative;
            transition: width 0.2s cubic-bezier(0.39, 1.86, 0.64, 1) 0.3s;
            width: 100%;
        }

        button.ready .submitMessage svg {
            opacity: 1;
            top: 1px;
            transition: top 0.4s ease 600ms, opacity 0.3s linear 600ms;
        }

        button.ready .submitMessage .button-text span {
            top: 0;
            opacity: 1;
            transition: all 0.2s ease calc(var(--dr) + 600ms);
        }

        button.loading::before {
            transition: width 0.3s ease;
            width: 80%;
        }

        button.loading .loadingMessage {
            opacity: 1;
        }

        button.loading .loadingCircle {
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-name: loading;
            cy: 10;
        }

        button.complete .submitMessage svg {
            top: -30px;
            transition: none;
        }

        button.complete .submitMessage .button-text span {
            top: -8px;
            transition: none;
        }

        button.complete .loadingMessage {
            top: 80px;
        }

        button.complete .successMessage .button-text span {
            left: 0;
            opacity: 1;
            transition: all 0.2s ease calc(var(--d) + 1000ms);
        }

        button.complete .successMessage svg {
            stroke-dashoffset: 0;
            transition: stroke-dashoffset 0.3s ease-in-out 1.4s;
        }

        .button-text span {
            opacity: 0;
            position: relative;
        }

        .message {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }

        .message svg {
            display: inline-block;
            fill: none;
            margin-right: 5px;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 2;
        }

        .submitMessage .button-text span {
            top: 8px;
            transition: all 0.2s ease var(--d);
        }

        .submitMessage svg {
            color: #5c86ff;
            margin-left: -1px;
            opacity: 0;
            position: relative;
            top: 30px;
            transition: top 0.4s ease, opacity 0.3s linear;
            width: 14px;
        }

        .loadingMessage {
            opacity: 0;
            transition: opacity 0.3s linear 0.3s, top 0.4s cubic-bezier(0.22, 0, 0.41, -0.57);
        }

        .loadingMessage svg {
            fill: #5c86ff;
            margin: 0;
            width: 22px;
        }

        .successMessage .button-text span {
            left: 5px;
            transition: all 0.2s ease var(--dr);
        }

        .successMessage svg {
            color: #5cffa1;
            stroke-dasharray: 20;
            stroke-dashoffset: 20;
            transition: stroke-dashoffset 0.3s ease-in-out;
            width: 14px;
        }

        .loadingCircle:nth-child(2) {
            animation-delay: 0.1s;
        }

        .loadingCircle:nth-child(3) {
            animation-delay: 0.2s;
        } */


        /****** */
        @keyframes confetti-slow {
            0% {
                transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
            }

            100% {
                transform: translate3d(25px, 105vh, 0) rotateX(360deg) rotateY(180deg);
            }
        }

        @keyframes confetti-medium {
            0% {
                transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
            }

            100% {
                transform: translate3d(100px, 105vh, 0) rotateX(100deg) rotateY(360deg);
            }
        }

        @keyframes confetti-fast {
            0% {
                transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
            }

            100% {
                transform: translate3d(-50px, 105vh, 0) rotateX(10deg) rotateY(250deg);
            }
        }

        .container {
            width: 100vw;
            height: 100vh;
            /*background: #f0f0f0;*/
            position: fixed !important;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .confetti-container {
            perspective: 700px;
            position: absolute;
            overflow: hidden;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .confetti {
            position: absolute;
            z-index: 1;
            top: -10px;
            border-radius: 0%;
        }

        .confetti--animation-slow {
            animation: confetti-slow 2.25s linear 1 forwards;
        }

        .confetti--animation-medium {
            animation: confetti-medium 1.75s linear 1 forwards;
        }

        .confetti--animation-fast {
            animation: confetti-fast 1.25s linear 1 forwards;
        }
    </style>
</head>

<body class="antialiased">
    <div id="output"></div>

    <!-- <div class="js-container container"></div> -->
    <!-- <button id="button" class="ready-btn ready" onclick="clickButton();">
        <div class="message submitMessage">
            <span class="button-text">Submit</span>
        </div>

        <div class="message loadingMessage">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 17">
                <circle class="loadingCircle" cx="2.2" cy="10" r="1.6" />
                <circle class="loadingCircle" cx="9.5" cy="10" r="1.6" />
                <circle class="loadingCircle" cx="16.8" cy="10" r="1.6" />
            </svg>
        </div>

        <div class="message successMessage">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11">
                <polyline stroke="currentColor" points="1.4,5.8 5.1,9.5 11.6,2.1 " />
            </svg> <span class="button-text">Success</span>
        </div>
    </button> -->
    <div class="relative flex items-top justify-center min-h-screen sm:items-center">
        <div class="phone-container shadow sm:rounded-lg text-center flex flex-col justify-between px-6 py-4">
            <div class="pt-8 sm:pt-0 flex items-center" style="flex-direction: column;">
                <img src="/img/Datify/heart_logo_mark.png" class="logo-mark" alt="">
                <img src="/img/Datify/logo.png" class="logo" alt="">
                <h2 class="text-main-color" style="margin: 0;">Letter Randomizer</h2>
            </div>
            <div class="randomizer-container flex items-center justify-center">
                <div class="bg-white flex items-center justify-center" style="border: 2px #DBDBDB solid; width: 200px; height: 200px; border-radius: 10px;">
                    <h2 class="main-letter text-main-color" id="letter">_</h2>
                </div>
            </div>
            <div class="btn-container">
                <button class="main-btn" id="main-btn" style="z-index: 99999;" onClick="setPause(true)">Nova Letra</button>


            </div>

        </div>
    </div>
    <div class="js-container container"></div>

    <!-- <canvas id="canvas"></canvas> -->


    <script type="module">
        import confetti from "https://cdn.skypack.dev/canvas-confetti";
        // confetti();
        document.addEventListener("randomizer-complete", (e) => {
            console.log("get here");
            confetti();
        });
    </script>
    <script>
        // confetti();


        var letterDisplay = document.getElementById("letter");
        var mainBtn = document.getElementById("main-btn");

        // Array of letters
        var letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

        // To deal with pouse problem in setinterval check 
        var isPaused = false;
        var counts = 0;

        function setPause() {
            mainBtn.classList.add('disabled');
            isPaused = !isPaused;
            counts = Math.floor(Math.random() * (100 - 20 + 1) + 20);
            console.log(counts);
        }

        // Function that executes every 150 milliseconds
        var letter = setInterval(function() {
            if (isPaused && counts > 0) {

                // Random letter generator from number
                var randomLetter = Math.round(Math.random() * (letters.length - 1));

                // Change the letter in the div for a random one in the array of letters
                letterDisplay.innerHTML = letters[randomLetter];

                counts--;

                if (counts <= 0) {
                    isPaused = false;
                    mainBtn.classList.remove('disabled');

                    console.log("he");

                    var event = new CustomEvent("randomizer-complete", {
                        "detail": "Example of an event"
                    });

                    // Dispatch/Trigger/Fire the event
                    document.dispatchEvent(event);

                }
            }
        }, 100);
    </script>

    <!-- <script>
        // ammount to add on each button press
        const confettiCount = 20
        const sequinCount = 10

        // "physics" variables
        const gravityConfetti = 0.3
        const gravitySequins = 0.55
        const dragConfetti = 0.075
        const dragSequins = 0.02
        const terminalVelocity = 3

        // init other global elements
        const button = document.getElementById('button')
        var disabled = false
        const canvas = document.getElementById('canvas')
        const ctx = canvas.getContext('2d')
        canvas.width = window.innerWidth
        canvas.height = window.innerHeight
        let cx = ctx.canvas.width / 2
        let cy = ctx.canvas.height / 2

        // add Confetto/Sequin objects to arrays to draw them
        let confetti = []
        let sequins = []

        // colors, back side is darker for confetti flipping
        const colors = [{
                front: '#7b5cff',
                back: '#6245e0'
            }, // Purple
            {
                front: '#b3c7ff',
                back: '#8fa5e5'
            }, // Light Blue
            {
                front: '#5c86ff',
                back: '#345dd1'
            } // Darker Blue
        ]

        // helper function to pick a random number within a range
        randomRange = (min, max) => Math.random() * (max - min) + min

        // helper function to get initial velocities for confetti
        // this weighted spread helps the confetti look more realistic
        initConfettoVelocity = (xRange, yRange) => {
            const x = randomRange(xRange[0], xRange[1])
            const range = yRange[1] - yRange[0] + 1
            let y = yRange[1] - Math.abs(randomRange(0, range) + randomRange(0, range) - range)
            if (y >= yRange[1] - 1) {
                // Occasional confetto goes higher than the max
                y += (Math.random() < .25) ? randomRange(1, 3) : 0
            }
            return {
                x: x,
                y: -y
            }
        }

        // Confetto Class
        function Confetto() {
            this.randomModifier = randomRange(0, 99)
            this.color = colors[Math.floor(randomRange(0, colors.length))]
            this.dimensions = {
                x: randomRange(5, 9),
                y: randomRange(8, 15),
            }
            this.position = {
                x: randomRange(canvas.width / 2 - button.offsetWidth / 4, canvas.width / 2 + button.offsetWidth / 4),
                y: randomRange(canvas.height / 2 + button.offsetHeight / 2 + 8, canvas.height / 2 + (1.5 * button.offsetHeight) - 8),
            }
            this.rotation = randomRange(0, 2 * Math.PI)
            this.scale = {
                x: 1,
                y: 1,
            }
            this.velocity = initConfettoVelocity([-9, 9], [6, 11])
        }
        Confetto.prototype.update = function() {
            // apply forces to velocity
            this.velocity.x -= this.velocity.x * dragConfetti
            this.velocity.y = Math.min(this.velocity.y + gravityConfetti, terminalVelocity)
            this.velocity.x += Math.random() > 0.5 ? Math.random() : -Math.random()

            // set position
            this.position.x += this.velocity.x
            this.position.y += this.velocity.y

            // spin confetto by scaling y and set the color, .09 just slows cosine frequency
            this.scale.y = Math.cos((this.position.y + this.randomModifier) * 0.09)
        }

        // Sequin Class
        function Sequin() {
            this.color = colors[Math.floor(randomRange(0, colors.length))].back,
                this.radius = randomRange(1, 2),
                this.position = {
                    x: randomRange(canvas.width / 2 - button.offsetWidth / 3, canvas.width / 2 + button.offsetWidth / 3),
                    y: randomRange(canvas.height / 2 + button.offsetHeight / 2 + 8, canvas.height / 2 + (1.5 * button.offsetHeight) - 8),
                },
                this.velocity = {
                    x: randomRange(-6, 6),
                    y: randomRange(-8, -12)
                }
        }
        Sequin.prototype.update = function() {
            // apply forces to velocity
            this.velocity.x -= this.velocity.x * dragSequins
            this.velocity.y = this.velocity.y + gravitySequins

            // set position
            this.position.x += this.velocity.x
            this.position.y += this.velocity.y
        }

        // add elements to arrays to be drawn
        initBurst = () => {
            for (let i = 0; i < confettiCount; i++) {
                confetti.push(new Confetto())
            }
            for (let i = 0; i < sequinCount; i++) {
                sequins.push(new Sequin())
            }
        }

        // draws the elements on the canvas
        render = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height)

            confetti.forEach((confetto, index) => {
                let width = (confetto.dimensions.x * confetto.scale.x)
                let height = (confetto.dimensions.y * confetto.scale.y)

                // move canvas to position and rotate
                ctx.translate(confetto.position.x, confetto.position.y)
                ctx.rotate(confetto.rotation)

                // update confetto "physics" values
                confetto.update()

                // get front or back fill color
                ctx.fillStyle = confetto.scale.y > 0 ? confetto.color.front : confetto.color.back

                // draw confetto
                ctx.fillRect(-width / 2, -height / 2, width, height)

                // reset transform matrix
                ctx.setTransform(1, 0, 0, 1, 0, 0)

                // clear rectangle where button cuts off
                if (confetto.velocity.y < 0) {
                    ctx.clearRect(canvas.width / 2 - button.offsetWidth / 2, canvas.height / 2 + button.offsetHeight / 2, button.offsetWidth, button.offsetHeight)
                }
            })

            sequins.forEach((sequin, index) => {
                // move canvas to position
                ctx.translate(sequin.position.x, sequin.position.y)

                // update sequin "physics" values
                sequin.update()

                // set the color
                ctx.fillStyle = sequin.color

                // draw sequin
                ctx.beginPath()
                ctx.arc(0, 0, sequin.radius, 0, 2 * Math.PI)
                ctx.fill()

                // reset transform matrix
                ctx.setTransform(1, 0, 0, 1, 0, 0)

                // clear rectangle where button cuts off
                if (sequin.velocity.y < 0) {
                    ctx.clearRect(canvas.width / 2 - button.offsetWidth / 2, canvas.height / 2 + button.offsetHeight / 2, button.offsetWidth, button.offsetHeight)
                }
            })

            // remove confetti and sequins that fall off the screen
            // must be done in seperate loops to avoid noticeable flickering
            confetti.forEach((confetto, index) => {
                if (confetto.position.y >= canvas.height) confetti.splice(index, 1)
            })
            sequins.forEach((sequin, index) => {
                if (sequin.position.y >= canvas.height) sequins.splice(index, 1)
            })

            window.requestAnimationFrame(render)
        }

        // cycle through button states when clicked
        clickButton = () => {
            if (!disabled) {
                disabled = true
                // Loading stage
                button.classList.add('loading')
                button.classList.remove('ready')
                setTimeout(() => {
                    // Completed stage
                    button.classList.add('complete')
                    button.classList.remove('loading')
                    setTimeout(() => {
                        window.initBurst()
                        setTimeout(() => {
                            // Reset button so user can select it again
                            disabled = false
                            button.classList.add('ready')
                            button.classList.remove('complete')
                        }, 4000)
                    }, 320)
                }, 1800)
            }
        }

        // re-init canvas if the window size changes
        resizeCanvas = () => {
            canvas.width = window.innerWidth
            canvas.height = window.innerHeight
            cx = ctx.canvas.width / 2
            cy = ctx.canvas.height / 2
        }

        // resize listenter
        window.addEventListener('resize', () => {
            resizeCanvas()
        })

        // click button on spacebar or return keypress
        document.body.onkeyup = (e) => {
            if (e.keyCode == 13 || e.keyCode == 32) {
                clickButton()
            }
        }

        // Set up button text transition timings on page load
        textElements = button.querySelectorAll('.button-text')
        textElements.forEach((element) => {
            characters = element.innerText.split('')
            let characterHTML = ''
            characters.forEach((letter, index) => {
                characterHTML += `<span class="char${index}" style="--d:${index * 30}ms; --dr:${(characters.length - index - 1) * 30}ms;">${letter}</span>`
            })
            element.innerHTML = characterHTML
        })

        // kick off the render loop
        window.initBurst()
        render()
    </script> -->

    <!-- <script type="text/babel">
        const Confettiful = function(el) {
        this.el = el;
        this.containerEl = null;
        
        this.confettiFrequency = 3;
        this.confettiColors = ['#fce18a', '#ff726d', '#b48def', '#f4306d'];
        this.confettiAnimations = ['slow', 'medium', 'fast'];
        
        this._setupElements();
        this._renderConfetti();
        };

        Confettiful.prototype._setupElements = function() {
        const containerEl = document.createElement('div');
        const elPosition = this.el.style.position;
        
        if (elPosition !== 'relative' || elPosition !== 'absolute') {
            this.el.style.position = 'relative';
        }
        
        containerEl.classList.add('confetti-container');
        
        this.el.appendChild(containerEl);
        
        this.containerEl = containerEl;
        };

        Confettiful.prototype._renderConfetti = function() {
            this.confettiInterval = setInterval(() => {
                const confettiEl = document.createElement('div');
                const confettiSize = (Math.floor(Math.random() * 3) + 7) + 'px';
                const confettiBackground = this.confettiColors[Math.floor(Math.random() * this.confettiColors.length)];
                const confettiLeft = (Math.floor(Math.random() * this.el.offsetWidth)) + 'px';
                const confettiAnimation = this.confettiAnimations[Math.floor(Math.random() * this.confettiAnimations.length)];
                
                confettiEl.classList.add('confetti', 'confetti--animation-' + confettiAnimation);
                confettiEl.style.left = confettiLeft;
                confettiEl.style.width = confettiSize;
                confettiEl.style.height = confettiSize;
                confettiEl.style.backgroundColor = confettiBackground;
                
                confettiEl.removeTimeout = setTimeout(function() {
                confettiEl.parentNode.removeChild(confettiEl);
                }, 3000);
                
                this.containerEl.appendChild(confettiEl);
            }, 25);
        };

        window.confettiful = new Confettiful(document.querySelector('.js-container'));

    </script> -->
</body>

</html>