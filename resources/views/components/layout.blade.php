<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLOPTOPICA - Official Site 🥵</title>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Comic+Neue:wght@700&display=swap"
          rel="stylesheet">

    <style>
        /* General Chaos Setup */
        body {
            font-family: 'Comic Neue', cursive; /* Mismatched, slightly silly font */
            background-color: #ffcccc; /* Soft pink base */
            color: #4b0082; /* Deep violet text */
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        /* Header & Main Titles - Bungee Inline for maximum impact */
        h1, h2 {
            font-family: 'Bungee Inline', cursive;
            text-shadow: 2px 2px #ff00ff; /* Pink shadow for chaos */
            color: #00ff00; /* Neon green text */
            margin-bottom: 5px;
        }

        a {
            font-family: 'Bungee Inline', cursive;
            text-shadow: 2px 2px #ff00ff; /* Pink shadow for chaos */
            color: #064345; /* Neon green text */
            margin-bottom: 5px;
        }


        h1 {
            font-size: 40px;
        }

        /* Chaos Borders */
        .chaos-border {
            border: 5px solid #ff00ff; /* Neon pink border */
            background-color: #ffff00; /* Neon yellow background */
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 10px 10px 0px #00ffff; /* Cyan offset shadow */
        }

        /* Icon Card - The center of the aesthetic */
        .icon-card {
            background-color: #00ffff; /* Cyan background */
            border: 3px dashed #ff00ff; /* Pink dashed border */
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            box-shadow: 5px 5px 0px #ff0000; /* Red shadow */
        }

        .chaos-text {
            font-size: 28px;
            color: #ff0000; /* Red text */
            text-decoration: underline wavy #000000; /* Wavy underline */
        }

        /* Image Styling - Simulating the low-res, low-effort look */
        .image-container {
            width: 100%;
            overflow: hidden;
            margin: 10px 0;
        }

        .low-res-img {
            width: 100%;
            height: auto;
            border: 7px solid #ff00ff; /* Thick pink frame */
            image-rendering: pixelated; /* Tries to make it look intentionally bad/blurry */
            filter: saturate(200%) brightness(120%); /* Over-saturate */
        }

        /* News Feed Styling */
        .news-feed {
            text-align: left;
        }

        .news-item {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #ff00ff;
            padding: 10px 0;
        }

        .news-thumb {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #ff0000;
        }

        .news-title {
            font-weight: 700;
            color: #4b0082;
            margin: 0;
        }

        /* Chaos Button */
        .btn-chaos {
            display: inline-block;
            background-color: #ff0000; /* Red button */
            color: #ffff00; /* Yellow text */
            font-family: 'Bungee Inline', cursive;
            padding: 10px 20px;
            text-decoration: none;
            border: 3px double #00ff00; /* Double green border */
            margin-top: 15px;
            transition: all 0.1s;
            box-shadow: 4px 4px 0px #0000ff; /* Blue shadow */
        }

        .btn-chaos:hover {
            background-color: #0000ff; /* Hover changes to blue */
            color: #ff0000; /* Text changes to red */
            transform: translate(2px, 2px); /* Shift button on hover */
            box-shadow: 2px 2px 0px #ffff00; /* Shadow changes to yellow */
        }
    </style>
</head>
<body>
<nav>
    <x-nav-link href="/">Home</x-nav-link>
    <x-nav-link href="/diner">Diner</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>
</nav>
<header class="chaos-border">
    <h1>✨ WELCOME TO FLOPTOPICA ✨</h1>

    {{--    this is the same as <?php echo .... ?>--}}
    {{$slot}}
</header>

<main>
    <section class="icon-card">
        <h3 class="chaos-text">JIAFEI 🥵 PRESIDENT</h3>
        <div class="image-container">
            <img src="[URL_TO_JIAFEI_ICON_IMAGE]" alt="Jiafei Icon" class="low-res-img">
        </div>
        <p>Serving the nation of Floptopica with **BADDIE** energy since the Badussy War.</p>
        <a href="#" class="btn-chaos">GET JIAFEI FAN PACK!</a>
    </section>

    <section class="news-feed chaos-border">
        <h2>FLOP NEWS HEADLINES (VERY URGENT)</h2>
        <div class="news-item">
            <img src="[URL_TO_RANDOM_MEME_IMAGE]" alt="Badussy War Meme" class="news-thumb">
            <p class="news-title">🔴 The Badussy War: Was it worth it? Flopticians weigh in.</p>
        </div>
        <div class="news-item">
            <img src="[URL_TO_ANOTHER_RANDOM_ICON_IMAGE]" alt="CupcakKe" class="news-thumb">
            <p class="news-title">🤯 CupcakKe's New Remix is Out! It's Giving **ICONIC**</p>
        </div>
        <div class="news-item">
            <img src="[URL_TO_CRAZY_BRIGHT_AESTHETIC_IMAGE]" alt="Floptok Aesthetic" class="news-thumb">
            <p class="news-title">✨ How to Flop Less: A Guide from the Ministry of Flop Control.</p>
        </div>
    </section>
</main>

<footer class="chaos-border">
    <p>&copy; 2025 Floptopica Government. All Rights Reserved. (But not really)</p>
</footer>

</body>
</html>
