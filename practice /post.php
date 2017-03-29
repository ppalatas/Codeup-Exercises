<?php

$_POST // is a variable used only when you are posting form data
// when we say $_POST['username'], we are referencing the field on an input named "username"
// $_POST['username'] would reference <input name="username" type="text">

// If we have a form that posts a username, that means a user will input a username, then
// once they submit AKA:

//if (isset($_POST['username'])) means "If they entered something into the username Input and then hit submit ...... do this."

isset($_POST)

// the form will then run your php script to check your conditions..
// When you say:

$username = $_POST['username'];

// you are really saying "set the $username variable equal to whatever the user typed in the input 
// the field name="username"

// from here, you could echo the username by saying <?php echo $username; ?>

