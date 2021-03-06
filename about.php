<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Team Majin</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:400,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/odometer-theme-minimal.css" />
    <script async defer src="https://apis.google.com/js/api.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/odometer.js"></script>
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <nav class="nav">
                <a href="#" class="nav__item">shop</a>
                <div class="dropdown">
                    <a href="#" class="nav__item">roster <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="leads.html">Leads</a>
                        <div class="dropside">
                            <a href="#">Players <i class="fas fa-caret-right"></i></a>
                            <div class="dropside-content">
                                <a href="cod.html">Call of Duty</a>
                                <a href="fort.html">Fortnite</a>
                            </div>
                        </div>
                        <a href="creators.html">Creators</a>
                        <a href="editors.html">Editors</a>
                        <a href="#">Designers</a>
                    </div>
                </div>
                <a href="about.php" class="nav__item active">about us</a>
            </nav>
            <a href="index.html" class="header__logo"><img src="img/mjnlgo.png" alt="Site logo"></a>
            <div class="header__icons">
                <a href="#" class="icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </header>
<div id="particles-js"></div>
    <div class="about">
        <div class="about__wrapper">
            <div class="wrapper__left">
                    <h2 class="about__heading anim-write">What we do?</h2>
                    <div class="about__line"></div>
                    <div class="about__box">
                        <span></span>
                        <div class="box__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi suscipit rem autem, earum nemo minus consequatur eos deserunt officia debitis quia doloremque quam labore, optio obcaecati modi numquam totam blanditiis! Illum, nesciunt. Iure esse rem omnis numquam praesentium eius non delectus beatae labore? Itaque, dolor at nostrum quibusdam fugiat nam animi voluptatibus. Eum soluta veritatis vitae itaque iusto maiores tenetur.</div>
                    </div>
            </div>
            <div class="wrapper__right">
                    <h2 class="numbers__heading">Our numbers</h2>
                    <div class="numbers__line"></div>
                    <div class="numbers__section">
                        <div class="section__left">
                            <i class="fab fa-youtube"></i>
                            <h3 class="odometer odometer__yt">0</h3>
                        </div>
                        <div class="section__right">
                            <i class="fab fa-twitter"></i>
                            <h3 class="odometer odometer__tw">0</h3>
                        </div>
                    </div>
            </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js',
        'particles.json', function(){
            console.log('particles.json loaded')
        });
    </script>
    <?php include 'twitter-app.php';?>
</body>
</html>