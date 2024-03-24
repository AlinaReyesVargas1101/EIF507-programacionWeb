<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Publishers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/skeleton.css">
        <link rel="stylesheet" href="/views/style.css">
    </head>
    <body>
        <div class="container">
            <ul>
                <li><a href="/">Books</a></li>
                <li><a href="/author">Authors</a></li>
                <li><a href="/publisher">Publishers</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="eleven column">
                    <h2><?php echo $title ?></h2>
                    <table>
                        <tr>
                            <th>Publisher</th>
                            <th>Country</th>
                            <th>Founded</th>
                            <th>Genere</th>
                            <th>Books</th>
                        </tr>
                        <?php foreach ($publishers as $publisher) { ?>
                        <tr>
                            <td><?php echo $publisher['name'] ?></td>
                            <td><?php echo $publisher['country'] ?></td>
                            <td><?php echo $publisher['founded'] ?></td>
                            <td><?php echo $publisher['genere'] ?></td>
                            <td>
                                <?php foreach ($publisher['books'] as $book) { ?>
                                <a href="https://eif507-programacionweb.000webhostapp.com/book/<?php echo $book['book_id']?>">
                                    <?php echo $book['book_title'] ?>
                                </a><br>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>