<?php

/** @var \App\Model\Book $book */
/** @var \App\Service\Router $router */

$title = "{$book->getTitle()} ({$book->getId()})";
$bodyClass = 'show';

ob_start(); ?>
    <h1><?= $book->getTitle() ?></h1>
    <article>
        <p>Author: <?= $book->getAuthor();?></p><br>
        <p>Category: <?= $book->getCategory();?></p><br>
        <p>Publication year: <?= $book->getPublicationYear();?></p><br>
        <p>Description: <?= $book->getDescription();?></p>
    </article>

    <ul class="action-list">
        <li> <a href="<?= $router->generatePath('book-index') ?>">Back to list</a></li>
        <li><a href="<?= $router->generatePath('book-edit', ['id'=> $book->getId()]) ?>">Edit</a></li>
    </ul>
<?php $main = ob_get_clean();

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'base.html.php';
