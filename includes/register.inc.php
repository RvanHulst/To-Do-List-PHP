<?php

if (isset($_POST['Register'])) {

	include_once 'dbconn.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	// Error handlers
	// Check for empty fields
	if (empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../Error_pages/error_signup_empty.php?signup=one_or_more_empty_fields");
		exit();
	} else {
			// Check if input characters are valid
			if (!preg_match("/^[a-zA-Z]$/", $first) || !preg_match("/^[a-zA-Z]$/", $last)) {
				header("Location: ../Error_pages/error_signup_char.php?signup=you_have_entered_wrong_characters");
				exit();
			} else {
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../Error_pages/error_signup_email.php?signup=you_have_entered_an_invalid_email_adress");
					exit();
				} else {
					$sql = "SELECT * FROM users WHERE user_uid='$uid'";
					$result = mysqli_query($con, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../Error_pages/error_signup_usertaken.php?signup=username_already_taken");
						exit();
					} else {
						//Hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						// Insert the user into the database
						$sql = "INSERT INTO users ( user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPwd');";
						mysqli_query($con, $sql);
						header("Location: ../login.php?signup=you_have_succesfully_logged_in");
						exit();
					}
				}
			}
	}

} else {
	header("Location: ../signup_failed.php");
	exit();
}