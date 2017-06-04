<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/logo.png" type="image/png">
      <title>Watch Gadget - Интернет-магазин наручных часов</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>