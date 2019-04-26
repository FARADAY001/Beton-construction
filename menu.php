<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <style type="text/css">

.navbar 
{
    background-image: -webkit-linear-gradient(145deg, #faa61f 0%, #ed1847 100%);
    padding: 24px 0;
    border-bottom: none !important;
    transition: all 0.5s ease-in-out;
    box-sizing: border-box;
}
.secondary 
{
    background-image: -webkit-linear-gradient(145deg, #faa61f 0%, #ed1847 100%);
    transition: all 0.5s ease-in;
}
.navbar ul li a {
    color: white !important;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 13px;
    transition: all 0.5s ease-in-out;
    background: transparent !important;
}

.navbar ul li a:hover,
.navbar ul li a:focus 
{
    color: deepskyblue !important;
    /*background: -webkit-linear-gradient(400deg, #faa61f 0%, #ed1847 100%) !important;*/
}

.navbar-toggle 
{
    border: 1px solid white !important;
    color: white !important;
    transition: all 0.5s ease-in;
}

.icon-bar 
{
    color: white !important;
    background-color: white !important;
}

.navbar-toggle:hover 
{
    background-color: deepskyblue !important;
}

.navbar-inverse .navbar-collapse 
{
    background-image: -webkit-linear-gradient(400deg, #faa61f 0%, #ed1847 100%) !important;
}
.location 
{
    border: 1px solid white;
    border-radius: 50px;
}

.navbar-inverse 
{
    background-color: background-image: -webkit-linear-gradient(400deg, #faa61f 0%, #ed1847 100%) !important;
}

.navbar-brand 
{
    color: white !important;
    font-weight: bold;
}

.navbar-brand:hover 
{
    color: white;
}
    </style>
</head>
<body>
    <nav class="navbar  navbar-fixed-topty">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">BETON-CONSTRUCTION</a>
            </div>
            <div class="collapse navbar-collapse" id="navi">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">ACCUEIL</a></li>
                    <li><a href="../index.php #about">A PROPOS DE NOUS</a></li>
                    <li><a href="../index.php #services">NOTRE SERVICE</a></li>
                    <li><a href="../index.php #latest">BLOG</a></li>
                    <li><a href="#">CONTACTEZ NOUS</a></li>
                    <li><a href="../index.php #map" class="location">NOTRE EMPLACEMENT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        $(window).scroll(function () {
            var top = $(window).scrollTop();
            if (top >= 60) {
                $("nav").addClass('secondary');
            } else
            if ($("nav").hasClass('secondary')) {
                $("nav").removeClass('secondary');
            }
        });
    </script>

</body>
</html>