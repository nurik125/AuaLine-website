<?php

// 1. Get the absolute file system path to the directory where THIS file (index.php) resides.
// e.g., /home/username/public_html
$current_dir = __DIR__;

// 2. Get the path to the main hosting account root directory.
// This moves UP one level from /public_html/ to /home/username/
$root_dir = dirname($current_dir);

// Include the contact.php
$contact = $root_dir . '/src/contact.php';

header("Location: index.html");

require_once $contact;

exit;
?>