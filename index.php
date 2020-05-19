<?php
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PORTFOLIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="./css/style.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet"/>
        <script src="./scripts/main.js" async></script>
    </head>
    <body>
        <nav class="navbar d-inline-flex container-fluid">
            <div class="navbar-brand col-5">VP</div>
            <div class="navbar- col-6 d-flex flex-row">
                <div class="col-2 nav-item homeicon" id="homebtn">HOME</div>
                <div class="col-2 nav-item" id="aboutmebtn">ABOUT ME</div>
                <div class="col-2 nav-item portfolioicon" id="portfoliobtn">PORTFOLIO</div>
                <div class="col-2 nav-item contacticon" id="contactMebtn">CONTACT ME</div>
            </div>
        </nav>
        <div class="container justify-content-center align-items-center text-center" id = "home">
            <div>
                <h1>Hello There</h1>
                <h3>Welcome to my world!</h3>
                <p>This is my world created with html and css.</p>
            </div>
        </div>
        <div class = "container justify-content-center flex-column text-center" id = "aboutMe">
            <div><h2>ABOUT ME</h2></div>
            <div class="aboutmecontainer d-flex flex-row">
                <div class="imgcontainer col-6">
                    <img class ="abmimg " src="Assets/panda.jpg" alt="A picture of the creator">
                </div>
                <div class="contentcontainer d-flex col-6 align-items-center justify-content-center">
                    <div>
                        <div><h3>Vincent Pires</h3></div>
                        <div><p>Hi I'm Vincent, an aspiring full stack developer currently training at
                                Mayden Academy.</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container justify-content-center flex-column text-center" id="portfolio">
            <div><h2>Portfolio</h2></div>
            <div class="container d-flex justify-content-around align-items-center">
                    <div class="card columncontainer">
                        <div class="imgcontainer">
                            <img class ="card-img-top portimg " src="Assets/lights.jpeg" alt="project screenshot">
                        </div>
                        <div class="card-body portcontainer1">
                            <h3 class="card-title porttitle">Placeholder</h3>
                            <p class="card-text portcomment">Brief Description of Placeholder</p>
                        </div>
                    </div>
                    <div class="card columncontainer">
                        <div class="imgcontainer">
                            <img class ="card-img-top portimg " src="Assets/lights.jpeg" alt="project screenshot">
                        </div>
                        <div class="card-body portcontainer1">
                            <h3 class="card-title porttitle">Placeholder</h3>
                            <p class="card-text portcomment">Brief Description of Placeholder</p>
                        </div>
                    </div>
                    <div class="card columncontainer">
                        <div class="imgcontainer">
                            <img class ="card-img-top portimg " src="Assets/lights.jpeg" alt="project screenshot">
                        </div>
                        <div class="card-body portcontainer1">
                            <h3 class="card-title porttitle">Placeholder</h3>
                            <p class="card-text portcomment">Brief Description of Placeholder</p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="contactme container justify-content-center flex-column text-center" id="contactMe">
            <h2>Contact Me</h2>
            <div class="aboutmecontainer">
                <div>
                    <h3>Is this the dev you are looking for?</h3>
                    <p>If so mail me</p>
                    <a href="mailto:vinc_944@hotmail.com" class="email">EMAIL: vinc_944@hotmail.com</a>
                </div>
            </div>
            <div class="social">
                <a href="https://twitter.com/vincdaman">
                    <img src="Assets/twitter.png" alt="twitter" class="icon">
                </a>
                <a href="https://github.com/Sen-i">
                    <img src="Assets/github.png" alt="github" class="icon">
                </a>
                <a href="https://www.facebook.com/Vincdaman">
                    <img src="Assets/fbimg.png" alt="facebook" class="icon">
                </a>
            </div>
        </div>
        <footer>&copy; Vincent 2020</footer>
    </body>
</html>
