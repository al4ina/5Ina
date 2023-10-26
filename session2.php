<?php
    session_start();

    echo 'Welcome to page #2<br>';
    echo 'Twoje imię: '.$_SESSION['imie'].'<br>';
    echo 'Twoję nazwisko: '.$_SESSION['nazwisko'].'<br>';
    echo date('Y m d H:i:s',$_SESSION['time']).'<br>';
    
    echo $_SESSION['bzdura'];
?>