<?php
session_start();
header('Content-Type: text/css');
if (isset($_SESSION['login'])) {
  $user = "lightblue";
  $webcam = "";
}
else if (!isset($_SESSION['login'])) {
  $user = "rgb(221, 61, 3)";
  $webcam = "display: none;";
}



?>

:hover {
    transition:all 0.5s ease;

}

.menubar {
    height: 100px;
    width: 100vw;
    background-color: <?php echo $user;?>;
    margin: -10px;
    position: fixed;
    top: 0;
    z-index: 10;


}

.footer {
    height: 100px;
    width: 100vw;
    background-color: rgb(0, 0, 0);
    position: fixed;
    bottom: 0;
    margin: -9px;
    box-shadow: inset 0px 10px 50px rgb(42, 41, 41);
}

#logo {
    margin-top: -13px;
    margin-left: 10px;
    padding: 10px;
    height: 120px;
    width: 190px;
}

#user_logo {
    float: right;
    height: 70px;
    margin-top: 20px;
    margin-right: 10px;
}

#user_logo:hover {
    transform: scale(1.1, 1.1);
}

#photo_logo {
<?php echo $webcam;?> float: right;
    height: 81px;
    margin-top: 15px;
    margin-right: 10px;

}

#photo_logo:hover {
    transform: scale(1.1, 1.1);
}

.circles {
    height: 100px;
    width: 100px;
    padding: 5px;
}


.circles:hover {
    transform: scale(1.1,1.1);
}



.userbox {
    width: 79vw;
    display: block;
}

.settingsbox {
    position: fixed;
    width: 100px;
    right: 0;
    margin-right: 50px;
}


.galery {
    display: block;
}

.galery_block {
    position: relative;
    padding: 15px;
    float: left;
}

#image {
    height: 200px;
}

#image_user {
    height: 200px;
}

#image_user:hover {

}

#image:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);

}

#single_image {
     height: 350px;
    border-radius: 300px;

}

#single_image:hover {
    border-radius: 0px;


}

#videoElement {
    height: 300px;
    width: 500px;
}

.single_block {
float: left;
padding:0px;
}

.comment_box {
    height:335px;
    border: 8px solid <?php echo $user;?>;
    width: 390px;
    margin-left: 500px;
}

.main_box {
    margin: 0 auto;
    width: 380px;
    border: 8px solid <?php echo $user;?>;
    border-radius: 500px;
}

#wrong {
    align-self: center;

    height: 100px;
    width: 100px;

}

.webcambox {
    display: block;
}

video {
    height: 350px;
}

.videobox {
    float: left;
    margin-left: 20px;
    transform: scaleX(-1);
}

.butt {
    margin-top: 110px;
    float: left;
}

#startbutton {
    padding: 20px;
    height:120px;
}

#startbutton:hover {
    transform: scale(1.1);
    transform: rotate(360DEG);

}

#canvas {
    float: left;
    height: 350px;
    transform: scaleX(-1);

}

#delete {
    margin-top: -10px;
    margin-left: -10px;
    position: absolute;
    height:30px;
}

.effect_box {
    display: block;
    margin-left: 20px;
    height:150px;
    width: 850px;
    background-color: lightblue;
}

.effecticon {
    height:80px;
}

.brightness {
    width: 100px;
    height: 100px;
}

.contrast {
    width: 100px;
    height: 100px;
}

.effecter {
    margin-top: 25px;
    padding: 10px;
    float: left;
    margin-left: 20px;
}

.adder {
    height:40px;
}

.colorize {
    padding: 3px;
    height: 50px;
    margin-top: 15px;
}

.messenger {
    bottom: 0px;
}