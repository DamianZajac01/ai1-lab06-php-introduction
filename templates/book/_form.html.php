<?php
    /** @var $book ?\App\Model\Book */
?>

<div class="form-group">
    <label for="title">Title</label>
    <input style="width: 0" type="text" id="title" name="book[title]" value="<?= $book ? $book->getTitle() : '' ?>">
</div>

<div class="form-group">
    <label for="author">Author</label>
    <input style="width: 7%" type="text" id="author" name="book[author]" value="<?= $book ? $book->getAuthor() : '' ?>">
</div>

<div class="form-group">
    <label for="category">Category</label>
    <input style="width: 13%" type="text" id="category" name="book[category]" value="<?= $book ? $book->getCategory() : '' ?>">
</div>

<div class="form-group">
    <label for="publicationYear">Publication year</label>
    <input style="width: 29%" type="text" id="publicationYear" name="book[publicationYear]" value="<?= $book ? $book->getPublicationYear() : '' ?>">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" name="book[description]"><?= $book? $book->getDescription() : '' ?></textarea>
</div>

<div class="form-group">
    <label></label>
    <input style="width: 100px" type="submit" value="Submit">
</div>
