<?php
	"include("../php/database.php")
	
	$createbooks = "CREATE TABLE IF NOT EXISTS `books` (
        `bookID` int(11) NOT NULL AUTO_INCREMENT,
        `Title` varchar(255) NOT NULL,
        `Author` varchar(255) NOT NULL,
        `Cover` text NOT NULL,
        `Rating` double NOT NULL,
        `Price` double NOT NULL,
        `Category` text NOT NULL,
        `Year` int(11) NOT NULL,
        PRIMARY KEY (`bookID`)
      ) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4";

    $db->exec($createbooks);

    $initbooks = "INSERT IGNORE INTO `books` (`bookID`, `Title`, `Author`, `Cover`, `Rating`, `Price`, `Category`, `Year`) VALUES
    (1, 'The Handmaid\'s Tale', 'Margaret Atwood', 'https://images.booksense.com/images/818/490/9780385490818.jpg', 4.6, 10.99, 'Dystopian Fiction', 1985),
    (2, 'The Catcher in The Rye', 'J.D. Salinger', 'https://images-na.ssl-images-amazon.com/images/I/51EqnTkohBL._SY291_BO1,204,203,200_QL40_ML2_.jpg', 4.2, 12.99, 'Fiction', 1951),
    (3, 'The Hunger Games', 'Suzanne Collins', 'https://images-na.ssl-images-amazon.com/images/I/61JfGcL2ljL.jpg', 4.5, 15.99, 'Dystopian Fiction', 2008),
    (4, 'To Kill a Mocking Bird', 'Harper Lee', 'https://upload.wikimedia.org/wikipedia/commons/4/4f/To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg', 4.9, 8.99, 'Historical Fiction', 1960),
    (5, 'To Great Gatsby', 'F. Scott Fitzgerald', 'https://images-na.ssl-images-amazon.com/images/I/81djg0KWthS.jpg', 3.9, 9.99, 'Fiction', 1925),
    (6, 'The Adventures of Huckleberry Finn', 'Mark Twain', 'https://kbimages1-a.akamaihd.net/972c8403-917d-4a94-9806-64f96aa29b44/1200/1200/False/adventures-of-huckleberry-finn-136.jpg', 4, 6.99, 'Fiction', 1885),
    (7, 'Atlas Shrugged', 'Ayn Rand', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Atlas_Shrugged_%281957_1st_ed%29_-_Ayn_Rand.jpg/440px-Atlas_Shrugged_%281957_1st_ed%29_-_Ayn_Rand.jpg', 3.4, 9.99, 'Fiction', 1957),
    (8, 'Catch-22', 'Joseph Heller', 'https://upload.wikimedia.org/wikipedia/en/9/99/Catch22.jpg', 3.4, 9.99, 'Fiction', 1961)";

  $db->exec($initbooks)  
?>