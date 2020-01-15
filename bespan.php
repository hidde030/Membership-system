<?php 
if(!isset($_SESSION)) { session_start();} 
/* Start session, this is necessary, it must be the first thing in the PHP document after <?php syntax ! */ 

/* Require login.php to call login function */
require("classes/UserClass.php");

/* Call for login function */
$addR = new UserClass();
$addR->addR();

  include("views/addForm.php");   // If user is already logged in redirect back to index.php
