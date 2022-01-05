<?php

function getBooks()
{
    return json_decode(file_get_contents(__DIR__ . '/bookdb.json'), true);
}

function getBookById($id)
{
    $books = getBooks();
    foreach ($books as $book) 
    {
        if ($book['id'] == $id) 
        {
            return $book;
        }
    }
    return null;
}

function createBook($data)
{
    $books = getBooks();

    $data['id'] = rand(1000000, 2000000);

    $books[] = $data;

    putJson($books);

    return $data;
}

function updateBook($data, $id)
{
    $updateBook = [];
    $books = getBooks();
    foreach ($books as $i => $book) 
    {
        if ($book['id'] == $id) 
        {
            $books[$i] = $updateBook = array_merge($book, $data);
        }
    }

    putJson($books);

    return $updateBook;
}

function deleteBook($id)
{
    $books = getBooks();

    foreach ($books as $i => $book) 
    {
        if ($book['id'] == $id) 
        {
            array_splice($books, $i, 1);
        }
    }

    putJson($books);
}

function putJson($books)
{
    file_put_contents(__DIR__ . '/bookdb.json', json_encode($books, JSON_PRETTY_PRINT));
}

function validateUser($book, &$errors)
{
    $isValid = true;
    // Start of validation
    if (!$book['title']) 
    {
        $isValid = false;
        $errors['title'] = 'Title is mandatory';
    }
    if (!$book['author']) 
    {
        $isValid = false;
        $errors['author'] = 'Author is required';
    }
    if (!$book['pages']) 
    {
        $isValid = false;
        $errors['pages'] = 'Page number must be added.';
    }
    if (!$book['isbn']) 
    {
        $isValid = false;
        $errors['isbn'] = 'ISBN number must be added.';
    }
    // End Of validation

    return $isValid;
}
