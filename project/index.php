<!DOCTYPE html>
    <html>
      <head>
        <title>Bootstrap 101 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      </head>
      <body>
      <div class="container" >
<div class="row">

<?php

include_once('pages/menu.php');
include_once('pages/functions.php');

?>
</div>
<div class="row">
<section class="col-sm-12 col-md-12 col-lg-12">
<?php
 if (isset($_GET['page']))
 { $page=$_GET['page'];
if ($page == 1)include_once('pages/home.php');
if ($page == 2)include_once('pages/upload.php');
if ($page == 3)include_once('pages/gallery.php');
if ($page == 4)include_once('pages/registration.php');
if ($page == 5)include_once('pages/autorization.php');

}
?>
</section>
</div>
</div>


     
      </body>
    </html>