<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/19
 * Time: 10:05
 */
echo "<a href='/hellophp/?name=world'></a>";
if($_SERVER['DOCUMENT_URI']=="/hellophp/") {
    require("class/hello.php");
    $name="world";
    if($_GET){
        $name=$_GET['name'];
    }
    $hello = new hello();
    $hello->sayHello($name);

}else{
    echo "<h1>无权访问</h1><a href='/hellophp/'>返回首页</a>";
}