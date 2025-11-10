<?php

// Include the contact.php
$contact = $root_dir . '/src/contact.php';

header("Location: index.php#contacts");

require_once $contact;

exit;
?>