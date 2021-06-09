<?php
    //WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

    session_start();                                    //start the session
    session_destroy();                                  //destroy session data
    header('Location: ../home/index.php');       //redirect logged out user to website home page

?>