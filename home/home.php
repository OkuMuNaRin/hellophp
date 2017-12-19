<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/19
 * Time: 16:50
 */
class home{
    function __construct()
    {

   echo "<div class='container' ><div class=\"progress fixed-bottom\">
  <div id='pro' class=\"progress-bar progress-bar-striped bg-success \" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">Loading...</div>
</div></div>";
        echo "<script src='/public/js/home.js'></script>";
    }
    function LunBo(){
        echo "<div class='invisible' style='background-color: lightskyblue;width: 50%;height: 60%;box-shadow: 10px 10px 15px mistyrose;position: absolute; top: 20%;left: 25%; opacity: 0.9'><img id='img'  src='/public/img/(12).jpg'class='img-thumbnail' style='height: 100%'></div>";
    }

}