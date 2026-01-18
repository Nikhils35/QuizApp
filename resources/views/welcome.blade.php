<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizApp</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            overflow-x: hidden;
            /* background-color: gray; */
        }

        canvas {
            background: transparent;
            width: 100vw;
            z-index: -1;
        }
        .container-animate{
            z-index: -1;
            background: transparent;
            position:absolute;
            top:0;
            left:0;
            width: 100vw;
        }

        #display-confetti {
            z-index: 8;
            font-size: 1em;
            position: absolute;
            /* transform: translate(-50%, -50%); */
            left: 60%;
            top: 20px;
            padding: 0.5em 1em;
            border-radius: 3em;
            background-color: #1164f4;
            color: #ffffff;
            border: none;
            cursor: pointer;
            font-family: "Poppins", sans-serif;
        }
        @media screen and (max-width:786px){
            #display-confetti{
                font-size: 0.5em;
                
            }
        }
    </style>
</head>
<body>
    <x-usernav></x-usernav>
    <div class="container-animate">
        <canvas id="canvas">Canvas is not supported in your browser</canvas>
    </div>
    <button id="display-confetti">Click Me!</button>

    <div class="container">
    @yield('content')
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script>
        let canvas = document.getElementById("canvas");
        let context = canvas.getContext("2d");
        let width = window.innerWidth;
        let height = window.innerHeight;
        let clicked = false;
        let displayButton = document.getElementById("display-confetti");
        let particles = [];
        let colors = ["#141b41", "306bac", "#6f9ceb", "#98b9f2", "#918ef4"];

        //Events object
        let events = {
            mouse: {
                down: "mousedown",
                move: "mousemove",
                up: "mouseup",
            },
            touch: {
                down: "touchstart",
                move: "touchmovve",
                up: "touchend",
            },
        };

        let deviceType = "";
        //Detect touch device
        const isTouchDevice = () => {
            try {
                document.createEvent("TouchEvent");
                deviceType = "touch";
                return true;
            } catch (e) {
                deviceType = "mouse";
                return false;
            }
        };

        //For using request animationFrame on all browsers
        window.requestAnimationFrame =
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequesetAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimationFrame ||
            function (callback) {
                window.setTimeout(callback, 1000 / 60);
            };

        //Random number between range
        function randomNumberGenerator(min, max) {
            return Math.random() * (max - min) + min;
        }

        function startConfetti() {
            let current = [];
            context.fillStyle = "rgb(248 249 250)";
            context.fillRect(0, 0, width, height);
            if (clicked) {
                createConfetti();
            }
            for (let i in particles) {
                particles[i].draw();
                if (particles[i].move()) {
                    current.push(particles[i]);
                }
            }

            particles = current;
            window.requestAnimationFrame(startConfetti);
        }

        function createConfetti() {
            //Increase range for bigger confetti;
            let numberOfParticles = randomNumberGenerator(10, 20);
            let color = colors[Math.floor(randomNumberGenerator(0, colors.length))];
            for (let i = 0; i < numberOfParticles; i++) {
                let particle = new Particle();
                particle.color = color;
                particles.push(particle);
            }
        }

        function Particle() {
            let buttonBounds = displayButton.getBoundingClientRect();
            this.width = randomNumberGenerator(0.1, 0.9) * 5;
            this.height = randomNumberGenerator(0.1, 0.9) * 5;
            this.x = buttonBounds.x + buttonBounds.width / 2;
            this.y = buttonBounds.y + buttonBounds.height / 2;
            let angle = Math.random() * Math.PI * 2;
            let speed = randomNumberGenerator(1, 5);
            this.vx = Math.cos(angle) * speed;
            this.vy = Math.sin(angle) * speed;
        }

        Particle.prototype = {
            move: function () {
                if (this.x >= canvas.width || this.y >= canvas.height) {
                    return false;
                }
                return true;
            },
            draw: function () {
                this.x += this.vx;
                this.y += this.vy;
                context.save();
                context.beginPath();
                context.translate(this.x, this.y);
                context.arc(0, 0, this.width, 0, Math.PI * 2);
                context.fillStyle = this.color;
                context.closePath();
                context.fill();
                context.restore();
            },
        };

        isTouchDevice();
        displayButton.addEventListener(events[deviceType].down, function (e) {
            e.preventDefault();
            clicked = true;
        });

        displayButton.addEventListener(events[deviceType].up, function (e) {
            e.preventDefault();
            clicked = false;
        });

        window.onload = () => {
            canvas.width = width;
            canvas.height = height;
            window.requestAnimationFrame(startConfetti);
        };

    </script>

</body>
</html>