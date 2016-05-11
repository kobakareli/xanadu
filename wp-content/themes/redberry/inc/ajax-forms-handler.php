<?php

/**
* Validate AJAX Call
*/
function validate_ajax_call() {
	$ajax_referer = false;
	$verify_nonce = false;

	if ( ! empty( $_POST['security'] ) ) {
		$hashed_security_key = $_POST['security'];
		$security_key = '895rt4jsscscr1523$#^@64';

		// Check referer
		if ( check_ajax_referer( $security_key, 'security' ) ) {
			$ajax_referer = true;
		}

		// Process call if page token time expires
		if ( wp_verify_nonce( $hashed_security_key, $security_key ) ) {
			$verify_nonce = true;
		}
	}
	// If both of them is valid return `true` or `false` otherwise
	return $ajax_referer && $verify_nonce ? true : false;
}

/**
* Contact form
*
* Both logged in and not logged in users can send this AJAX request
*/
add_action( 'wp_ajax_nopriv_contact_form', 'contact_form' );
add_action( 'wp_ajax_contact_form', 'contact_form' );

function contact_form() {
	if (validate_ajax_call()) {
		$email = $_POST['data']['email'];
		$subject = $_POST['data']['subject'];
		$message = $_POST['data']['msg'];

		$messageToSend = 'E-mail: ' . $email . "\r\n" . 'Message: ' . $message;

		$headers = 'From: example.com <contact@example.com>';

		wp_mail ( 'contact@example.com', $subject, $messageToSend, $headers );
		die();
	}
}
