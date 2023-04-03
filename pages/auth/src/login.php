<?php

// Start the session
session_start();

// Include the bootstrap file
require __DIR__ . '/../src/bootstrap.php';

// Initialize empty arrays for sanitized data and error messages
$inputs = [];
$errors = [];

// Redirect logged-in users to the index page
if (is_user_logged_in()) {
    redirect_to('index.php');
}

// Handle form submission for the login page
if (is_post_request()) {
    // Sanitize and validate user inputs
    [$inputs, $errors] = filter($_POST, [
        'username' => 'string | required',
        'password' => 'string | required'
    ]);

    // If there are validation errors, redirect back to login page with errors and inputs in the session
    if ($errors) {
        redirect_with('login.php', ['errors' => $errors, 'inputs' => $inputs]);
    }

    // Attempt to authenticate user with provided credentials
    if (!login($inputs['username'], $inputs['password'])) {
        // If the authentication failed, add an error message to the errors array
        $errors['login'] = 'Invalid username or password';

        // Redirect back to the login page with errors and inputs in the session
        redirect_with('login.php', [
            'inputs' => $inputs
        ]);
    }

    // If authentication was successful, redirect to the index page
    redirect_to('index.php');

} else if (is_get_request()) {
    // Retrieve any errors and inputs from the session if this is a GET request
    [$errors, $inputs] = session_flash('errors', 'inputs');
}