<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($book['id']): ?>
                    Update Book <b><?php echo $book['title'] ?></b>
                <?php else: ?>
                    Insert Book
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" value="<?php echo $book['title'] ?>"
                           class="form-control <?php echo $errors['title'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['title'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input name="author" value="<?php echo $book['author'] ?>"
                           class="form-control <?php echo $errors['author'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['author'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Available (1=True, 0=False)</label>
                    <input name="available" value="<?php echo $book['available'] ?>"
                           class="form-control  <?php echo $errors['available'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['available'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pages</label>
                    <input name="pages" value="<?php echo $book['pages'] ?>"
                           class="form-control  <?php echo $errors['pages'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['pages'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input name="isbn" value="<?php echo $book['isbn'] ?>"
                           class="form-control  <?php echo $errors['isbn'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['isbn'] ?>
                    </div>
                </div>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
