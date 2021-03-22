<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Web devs fab</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    

</head>
<body class="backg">
  <div class="container">
    <div class="row">
        <div class="col-lg-7">
            <h1 class="bien">Bienvenue</h1>
            <h2><span class="write"></span></h2>
        </div>
        <div class="col-lg-5">
            @yield('contenu')


        </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
<script type="text/javascript">

	$(function(){

        $(".write").typed({

            strings: ["A la fabrique", "DEV WEB'S FAB "],
            typeSpeed: 20,
            loop: true,
            showCursor: true,

        });

    });

    let tabWindow = document.getElementsByClassName("tab-tete")[0].getElementsByTagName("div");


     for(let i=0; i<tabWindow.length; i++){
       tabWindow[i].addEventListener("click", function(){

         document.getElementsByClassName("tab-tete")[0].getElementsByClassName("active")[0].classList.remove("active");
       tabWindow[i].classList.add("active");
       document.getElementsByClassName("tab-contenu")[0].getElementsByClassName("active")[0].classList.remove("active");
       document.getElementsByClassName("tab-contenu")[0].getElementsByClassName("tab-corp")[i].classList.add("active");
     });
     }







</script>
</body>
</html>
