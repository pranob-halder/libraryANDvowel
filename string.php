<?php

// Input array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    // Convert the string to lowercase for consistent matching
    $string = strtolower($string);
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    // Iterate through each character in the string
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string); // Count vowels
    $reversedString = strrev($string); // Reverse the string

    // Print the original string, reversed string, and vowel count
    echo "Original String: $string\n"."<br>";
    echo "Reversed String: $reversedString\n"."<br>";
    echo "Number of Vowels: $vowelCount\n"."<br>";
    echo "-----------------------------\n<br>";
}

?>
<hr>
<p>This is the Library app</p>

<?php

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title
    public function getTitle() {
        return $this->title;
    }

    // Method to get available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private properties
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the member name
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} Borrowed--- '{$book->getTitle()}'.\n<br><br>";
        } else {
            echo "No copies of '{$book->getTitle()}' are available for {$this->name}.\n<br>";
        }
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }
}

// Create books
$book1 = new Book("YOU CAN WIN", 6);
$book2 = new Book("LILY PUT", 5);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Display available copies
echo "Available Copies of '{$book1->getTitle()}':is-- {$book1->getAvailableCopies()}\n<br>";
echo "Available Copies of '{$book2->getTitle()}': is-- {$book2->getAvailableCopies()}\n";


?>
