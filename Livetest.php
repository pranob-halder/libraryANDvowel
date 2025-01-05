<?php

// Given array of random strings
$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

// Step 1: Filter strings that start with the letter A (case-insensitive)
$filteredStrings = array_filter($randomStrings, function($string) {
    return stripos($string, 'A') === 0; // Check if string starts with 'A' or 'a'
});

// Step 2: Convert all strings in the filtered array to uppercase
$uppercaseStrings = array_map('strtoupper', $filteredStrings);

// Step 3: Display the resulting array
print_r($uppercaseStrings);



class Student {

    // Attributes
    private $name;
    private $grades;

    // Constructor to initialize attributes
    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }

    // Method to calculate the average grade
    public function averageGrade() {
        if (count($this->grades) === 0) {
            return 0; // Handle case where there are no grades
        }
        return array_sum($this->grades) / count($this->grades);
    }

    /*
    if (empty($this->grades)) {
            return null; // No grades available
         }
            return array_sum($this->grades) / count($this->grades);
     }
    */

    // Method to display the student's result
    public function displayResult() {
        $average = $this->averageGrade();
        echo "Student Name: {$this->name}\n";
        echo "Average Grade: " . number_format($average, 2) . "\n";
    }
}

// Example usage
$student = new Student("Alice", [85, 100, 78, 90]);
$student->displayResult();

?>