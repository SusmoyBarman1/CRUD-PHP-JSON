<?php
require 'controller/crud.php';

$books = getBooks();

include 'extra/header.php';
?>

<br>
<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Insert Book</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
        
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book['title'] ?></td>
                <td><?php echo $book['author'] ?></td>
                <td><?php echo $book['available'] ?></td>
                <td><?php echo $book['pages'] ?></td>
                <td><?php echo $book['isbn'] ?></td>

                <td>
                    <a href="update.php?id=<?php echo $book['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'extra/footer.php' ?>

