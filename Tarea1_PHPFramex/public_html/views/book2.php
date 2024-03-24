<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Books</title>
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
                            <th>Title</th>
                            <th>Edition</th>
                            <th>Copyright</th>
                            <th>Language</th>
                            <th>Pages</th>
                            <th>Author</th>
                            <th>Publisher</th>
                        </tr>
                        <tr>
                            <td><?php echo $book['title'] ?></td>
                            <td><?php echo $book['edition'] ?></td>
                            <td><?php echo $book['copyright'] ?></td>
                            <td><?php echo $book['language'] ?></td>
                            <td><?php echo $book['pages'] ?></td>
                            <td>
                                <a href="https://eif507-programacionweb.000webhostapp.com/author/<?php echo $book['author_id']?>">
                                    <?php echo $book['author'] ?>
                                </a>
                            </td>
                            <td>
                                <a href="https://eif507-programacionweb.000webhostapp.com/publisher/<?php echo $book['publisher_id']?>">
                                    <?php echo $book['publisher'] ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>