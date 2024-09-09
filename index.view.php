<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <div>
        <h1>Recommended Books</h1>

    
    <ul>
        <?php foreach ($filterAuthor as $book):?>
            <li>
                <?php echo $book["title"]; ?> - <?php echo $book["author"]; ?> - <?php echo $book["year"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
</body>
</html>