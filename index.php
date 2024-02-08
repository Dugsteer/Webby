<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6192312197226967"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>ESL-ology Free Lesson Worksheets</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #d0eaf8;
    }

    .mobile-text {
        display: none;
        /* Hide mobile text by default */
    }

    /* Media query for screens smaller than 768px */
    @media (max-width: 768px) {
        .default-text {
            display: none;
            /* Hide default text on small screens */
        }

        .mobile-text {
            display: block;
            /* Show mobile text on small screens */
        }
    }


    .footbg {
        background-color: #368cbf;
        color: white;
    }

    footer a {
        color: white;
    }

    footer a:hover {
        color: #ccc;
    }

    .coffee {
        color: #ccc;

    }

    .coffee:hover {
        color: yellow;
    }


    .jumbotron {
        background-color: #368cbf;
        color: white;
    }

    .whitebg {
        background-color: #d0eaf8;

    }

    el-select-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">ESL-Ology Free Lesson Worksheets</h1>
            <img src="./Englishfun.webp" alt="Hero Image" class="img-fluid" id="hero-image">
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col">
                    <p class="h3 mb-0 default-text">Explore a variety of lesson plans and resources for teaching English
                        to kids and adults. No paywalls, no logins, just free ESL and ESOL games, speaking prompts and
                        materials for teachers. If you like, maybe <a href="https://www.buymeacoffee.com/Leca9BN"
                            target="_blank" class="coffee">buy me a coffee!</a></p>
                    <p class="h3 mb-0 mobile-text">Explore free ESL & ESOL resources. Like what you see? <a
                            href="https://www.buymeacoffee.com/Leca9BN" target="_blank" class="coffee">Buy me a
                            coffee!</a></p>
                </div>

                <div class="col-auto">
                    <select id="level-select" class="form-control form-control-lg custom-dropdown">
                        <option value="">Select a Level</option>
                        <option value="A1/A2">Beginner</option>
                        <option value="A1/A2">Elementary</option>
                        <option value="B1/B2">Lower Intermediate</option>
                        <option value="B2">Upper Intermediate</option>
                        <option value="B2/C1">Advanced</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="pdf-list" class="row whitebg">
            <!-- PDF details will be dynamically loaded here -->
        </div>
    </div>
    <footer class="footbg text-center text-lg-start mt-4">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Built with the help of Grimoire GPT & Bootstrap ©<?php echo date("Y"); ?> Copyright <a
                href="http://www.esl-ology.com" target="_blank">Esl-ology.com</a> &
            copyright owners.
        </div>
    </footer>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
