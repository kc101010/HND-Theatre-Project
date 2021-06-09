<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

//http://192.168.10.10/AssessmentProject/HND-Theatre-Project/home/index.php

/*
 RESOURCES USED

    https://placeholder.com/
    https://fontawessome.com/
    https://unsplash.com/
    https://pixabay.com/
    https://betterplaceholder.com/

*/

/** @var $id array */
/** @var $usern array*/
/** @var $statement array*/

//call a query which allows the code to view the details of which user is logged on
include_once "../user/users_db.php";

//check if theres a session id and call login header to set accordingly
if ($_SESSION['id']) {
    include_once "../partial/hdr_login.php";
}else{
    include_once "../partial/header.php";
}
?>

    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header"> Welcome! </h1>

        <!-- Lorem ipsum used to demonstrate a welcome message or similar text -->
        <p class="main_text">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus odio vitae felis tristique, sed volutpat mauris sodales. Donec in leo sit amet est varius gravida in in metus. Nunc imperdiet justo id eros blandit, a sodales felis bibendum. Aliquam semper, magna a faucibus sollicitudin, augue erat vulputate purus, sit amet venenatis felis lorem quis est. Aliquam eleifend scelerisque dui id rutrum. Nullam sed neque ut nulla laoreet interdum. Etiam pharetra enim eu semper tincidunt. Proin faucibus et tortor et viverra. Donec volutpat a metus a porta. In in tellus scelerisque nunc congue vestibulum. Etiam congue risus massa, porttitor aliquam enim imperdiet sit amet. Aliquam gravida, tellus ac ullamcorper semper, felis mi bibendum dolor, vitae egestas lorem nibh in leo. Nullam aliquet est a velit pharetra, ac rutrum enim sollicitudin.  </p>
        <p class="main_text">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus odio vitae felis tristique, sed volutpat mauris sodales. Donec in leo sit amet est varius gravida in in metus. Nunc imperdiet justo id eros blandit, a sodales felis bibendum. Aliquam semper, magna a faucibus sollicitudin, augue erat vulputate purus, sit amet venenatis felis lorem quis est. Aliquam eleifend scelerisque dui id rutrum. Nullam sed neque ut nulla laoreet interdum. Etiam pharetra enim eu semper tincidunt. Proin faucibus et tortor et viverra. Donec volutpat a metus a porta. In in tellus scelerisque nunc congue vestibulum. Etiam congue risus massa, porttitor aliquam enim imperdiet sit amet. Aliquam gravida, tellus ac ullamcorper semper, felis mi bibendum dolor, vitae egestas lorem nibh in leo. Nullam aliquet est a velit pharetra, ac rutrum enim sollicitudin.  </p>
        <p class="main_text">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus odio vitae felis tristique, sed volutpat mauris sodales. Donec in leo sit amet est varius gravida in in metus. Nunc imperdiet justo id eros blandit, a sodales felis bibendum. Aliquam semper, magna a faucibus sollicitudin, augue erat vulputate purus, sit amet venenatis felis lorem quis est. Aliquam eleifend scelerisque dui id rutrum. Nullam sed neque ut nulla laoreet interdum. Etiam pharetra enim eu semper tincidunt. Proin faucibus et tortor et viverra. Donec volutpat a metus a porta. In in tellus scelerisque nunc congue vestibulum. Etiam congue risus massa, porttitor aliquam enim imperdiet sit amet. Aliquam gravida, tellus ac ullamcorper semper, felis mi bibendum dolor, vitae egestas lorem nibh in leo. Nullam aliquet est a velit pharetra, ac rutrum enim sollicitudin.  </p>

    </section>

<!-- call page footer -->
<?php include_once "../partial/footer.php";?>




