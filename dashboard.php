<?php
$output = '<h1>Google+ Profile Details </h1>';
$output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
$output .= '<br/>Google ID : ' . $userData['oauth_uid'];
$output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
$output .= '<br/>Email : ' . $userData['email'];
$output .= '<br/>Gender : ' . $userData['gender'];
$output .= '<br/>Locale : ' . $userData['locale'];
$output .= '<br/>Logged in with : Google';
$output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
$output .= '<br/>Logout from <a href="logout.php">Google</a>';
?>
