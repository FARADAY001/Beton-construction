<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<title></title>
	<style type="text/css">

		footer
		{
		    background: #333;
		    padding: 20px 0 40px;
		}
		footer .glyphicon
		{
		    font-size: 25px;
		    margin: 20px;
		    color: #ed1847;
		    height: 30px;
		}
		footer .glyphicon:hover
		{
			color: #faa61f;
		    font-size: 27px;
		}
		footer h5
		{
		    color: #fff;
		    font-weight: normal;
		}
		.social {
            margin-top: -5px;
        }
		.social a {
            color: white;
            font-size: 20px;
            margin-right: 10px;
            margin-left: 20px;
        }
        .fa-facebook-f:hover{ color: #3b5995;}
        .fa-twitter:hover{ color: #0084b4;}
        .fa-google-plus-g:hover{ color: #3b5995;}
        .fa-linkedin-in:hover{ color: #0077b5;}

	</style>
</head>
<body>
	<footer class="text-center">
        <a href="#home">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <h5>Copyright © 2019. Tous droits réservés &nbsp; &nbsp;JEAN-MICHAEL </h5>
        <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script type="text/javascript">
    	$(function(){

  			  $(".location, .services, .blog, .about, footer a").on("click", function(event){
    
		        event.preventDefault();
		        var hash = this.hash;
		        
		        $('body,html').animate({scrollTop: $(hash).offset().top} , 1500 , function(){window.location.hash = hash;})
        
    });
})
    </script>

</body>
</html>