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

    <?php
        $books = [
            [
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "year" => 1925
            ],
            [
                "title" => "The Great BamBam",
                "author" => "F. Scott Fitzgerald",
                "year" => 2025
            ],
            [
                "title" => "To Kill a Mockingbird",
                "author" => "Harper Lee",
                "year" => 1960
            ],
            [
                "title" => "1984",
                "author" => "George Orwell",
                "year" => 1949
            ],
            [
                "title" => "The Great Gods of Egypt",
                "author" => "F. Scott Fitzgerald",
                "year" => 1995
            ],
        ];

        $filter = function($array, $key, $value) {
            $filteredArray = [];
            foreach ($array as $item) {
                if ($item[$key] == $value) {
                    $filteredArray[] = $item;
                }
            }
            return $filteredArray;
        };

        $filteredBook = $filter($books, "author", "F. Scott Fitzgerald");
    ?>

    <ul>
        <?php foreach ($filteredBook as $book):?>
            <li>
                <?php echo $book["title"]; ?> - <?php echo $book["author"]; ?> - <?php echo $book["year"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
</body>
</html>