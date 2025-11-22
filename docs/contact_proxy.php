<?php

// Include the contact.php
try{
    $contact = $root_dir . '/src/contact.php';
    $status=1;
} catch(Exception $e){
    $status = 'Message: ' .$e->getMessage();
}

// #contacts
header("Location: index.php?status=$status");
require_once $contact;

exit;
?>