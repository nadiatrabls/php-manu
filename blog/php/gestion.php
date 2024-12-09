<?php
// Obselete
// isset$_GET['blog'];

// if($page=="blog"){
//     include('php/blog.php');
// }else if($page=="apropos"){
//     include('php/about.php');
// }else if($page=="contact"){
//     include('php/contact.php');
// }else if($page=="detail"){
//     include('detail.php');
// }else {
//     include('main.php');
// }


if(isset($_GET['blog'])){
    include('php/blog.php');
}else if(isset($_GET['apropos'])){
    include('php/about.php');
}else if(isset($_GET['contact'])){
    include('php/contact.php');
}else if(isset($_GET['detail'])){
    include('php/detail.php');
}else {
    include('php/main.php');
}
?>