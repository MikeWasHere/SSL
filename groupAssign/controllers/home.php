<?php
include "models/view.php";
$viewmodel = new view();


if(empty($_GET["action"])){

    $viewmodel->getView("views/header.php");
    $viewmodel->getView("views/body.php");
    $viewmodel->getView("views/footer.php");

}else{

    if($_GET["action"]=="home"){

        $viewmodel->getView("views/header.php");
        $viewmodel->getView("views/body.php");
        $viewmodel->getView("views/footer.php");

    }elseif($_GET["action"]=="login"){

        $viewmodel->getView("views/header.php");
        $viewmodel->getView("views/loggedIn.php");
        $viewmodel->getView("views/footer.php");

    }elseif($_GET["action"]=="fbtalking"){



    }elseif($_GET["action"]=="rotator"){

    }


}