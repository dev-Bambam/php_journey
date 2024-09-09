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
                "title" => "The Great Gods of Egypt 🫣",
                "author" => "F. Scott Fitzgerald",
                "year" => 1995
            ],
        ];

        $filterAuthor = array_filter($books, function($book){
            return $book["author"] == "F. Scott Fitzgerald";
        });

        require "index.view.php";