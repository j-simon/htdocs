<?php
session_start();

require_once 'inc/functions.php';
require_once 'inc/config.php';
require_once 'inc/validate.php';


if (empty($_POST)) {
    redirect('index.php');
}

$entry = [
    'username' => validate(trim($_POST['username']), 'Username'),
    'email' => validateEmail(trim($_POST['email'])),
    'rating' => validate(trim($_POST['rating']), 'Rating'),
    'comment' => validate(trim($_POST['comment']), 'Comment'),
];

$entries = getFeedback();
$entries[] = $entry;

saveFeedback($entries);
$_SESSION['status'] = "The feedback has been saved.";

redirect('index.php');
