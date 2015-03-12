<?php
	session_start();
	/*
	unset($_SESSION['email']);
	unset($_SESSION['firstName']);
	unset($_SESSION['lastNam);e']);	
	unset($_SESSION['userLevel']);
	*/

	if (isset($_SESSION['email'])) {
    // Delete the session vars by clearing the $_SESSION array
    $_SESSION = array();

    // Delete the session cookie by setting its expiration to an hour ago (3600)
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600);
    }

    // Destroy the session
    session_destroy();
  }

  // Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
  setcookie('email', '', time() - 3600);
  setcookie('firstName', '', time() - 3600);
  setcookie('lastNam', '', time() - 3600);
  setcookie('userLevel', '', time() - 3600);

	echo("
		<script>
			location.href='../index.php';
		</script>
		");	

?>