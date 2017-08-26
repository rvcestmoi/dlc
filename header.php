<?php 
//Initialisation des variables
$active='class="active"';
?>

<header>
    <div class ="container">
        <div class="row">
            <div class="col-xs-12  visible-xs"> <img class="img-responsive" src="img/headerXs.png" alt="header" style="width: 100%"> </div>
            <div class="col-xs-12 visible-sm "> <img class="img-responsive" src="img/headerSm.png" alt="header" style="width: 100%"> </div>
            <div class="col-xs-12 visible-md"><img class="img-responsive" src="img/headerMd.png" alt="header" style="width: 100%"></div>
            <div class="col-xs-12 visible-lg"><img class="img-responsive" src="img/headerLgetMd.png" alt="header" style="width: 100%"> </div>

        </div>
    </div>


<!--            <div> <span class="col-lg-12 visible-lg alert alert-danger">ecran large</span> <span class="col-md-12 visible-md alert alert-warning">ecran medium</span> <span class="col-sm-12 visible-sm alert alert-warning">ecran small</span> <span class="col-xs-12 visible-xs alert alert-success">ecran extra small</span> </div>-->
    <!--    HEADER-->

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">                    
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == "Présentation") echo $active ?>><a href="?p=Présentation">Présentation</a></li>                
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == "html") echo $active ?>><a href="?p=html">HTML/CSS/Javascript</a></li>                                        
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == "SQL") echo $active ?>><a href="?p=SQL">SQL</a></li>                    
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == "PHP") echo $active ?>><a href="?p=PHP">PHP</a></li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == "analyse") echo $active ?>><a href="?p=analyse">Analyse/Conception</a></li>
                    <li <?php if (isset($_GET['p']) && $_GET['p'] == "Liens") echo $active ?>><a href="?p=Liens">Liens</a></li>

                </ul>
            </div>
        </nav>
    </div>
</header>
