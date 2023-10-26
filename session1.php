<?php
    session_start();

    echo 'Welcome to page #1';

    $_SESSION['imie']='Artur';
    $_SESSION['nazwisko']='Łabędź';
    $_SESSION['time']=time();

    echo'<br/><a href="session2.php">Page 2</a>'
    ?>