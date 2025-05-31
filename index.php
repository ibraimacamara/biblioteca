<?php
if(isset($_GET['bcfa'])){
    switch ($_GET['bcfa']) {
        case 'login':
        include "login.php";
        break;
        case 'home':
        include "home.php";
        break;
        case 'adicionarlivro':
            include "adicionarlivro.php";
        break;
        case 'removerlivro':
            include "removerlivro.php";
        break;
        case 'testlista':
            include "testlista.php";
        break;
        
    }
}else{
    include "login.php";
}
?>
