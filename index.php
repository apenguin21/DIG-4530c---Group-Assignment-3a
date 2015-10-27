<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include '/index.html';
	}
elseif ($page_name=='index.html') {
	include '/index.html';
	}
elseif ($page_name=='login.html') {
	include '/login.html';
	}
elseif ($page_name=='register.html') {
	include '/register.html';
	}
elseif ($page_name=='single.html') {
	include '/single.html';
	}
elseif ($page_name=='checkout.html') {
	include '/checkout.html';
	}
elseif ($page_name=='shop.html') {
	include '/shop.html';
	}
elseif ($page_name=='contact-post.html') {
	include '/contact.html';
	include 'app/contact.php';
	}
else
	{
		include '/404.html';
	}

?>
