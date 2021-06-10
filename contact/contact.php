<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

$conn = mysqli_connect($host, $usern, $pass, $database);

$statement = $conn->prepare('
    INSERT into contact
');


?>