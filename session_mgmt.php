<?php
if (!isset($_SESSION['username']))
{
	$_SESSION['returnto'] = $_SERVER['REQUEST_URI']; 
        header('Location:/login');
} else {
        $username=$_SESSION['username'];
}
?>
