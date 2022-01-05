<?php
include 'extra/header.php';
require __DIR__ . '/controller/crud.php';

if (!isset($_GET['id'])) 
{
    include "extra/not_found.php";
    exit;
}
$bookId = $_GET['id'];

$book = getBookById($bookId);
if (!$book) 
{
    include "extra/not_found.php";
    exit;
}

$errors = [
    'title' => "",
    'author' => "",
    'available' => "",
    'pages' => "",
    'isbn' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $book = array_merge($book, $_POST);

    $isValid = validateUser($book, $errors);

    if ($isValid) 
    {
        $book = updateBook($_POST, $bookId);
        header("Location: index.php");
    }
}

?>

<?php include '_form.php' ?>
