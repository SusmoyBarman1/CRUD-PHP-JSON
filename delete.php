<?php
include 'extra/header.php';
require __DIR__ . '/controller/crud.php';


if (!isset($_POST['id'])) 
{
    include "extra/not_found.php";
    exit;
}

$bookId = $_POST['id'];
deleteBook($bookId);

header("Location: index.php");
