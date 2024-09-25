<?php
// Define the course information in an associative array
$courseInfo = [
    "courseName" => "Introduction to PHP Programming",
    "chapters" => [
        "Chapter 1" => "Introduction to PHP: Learn the basics of PHP and its syntax.",
        "Chapter 2" => "Data Types and Variables: Understanding different data types in PHP and how to use variables.",
        "Chapter 3" => "Control Structures: Explore conditional statements and loops in PHP.",
        "Chapter 4" => "Functions: Learn how to create and use functions in PHP.",
        "Chapter 5" => "Working with Forms: Understand how to handle form submissions in PHP."
    ]
];

// Print the course name
echo "<h1>" . $courseInfo["courseName"] . "</h1>";

// Iterate over each chapter and print the summary
foreach ($courseInfo["chapters"] as $chapterNumber => $summary) {
    echo "<h2>$chapterNumber</h2>";
    echo "<p>$summary</p>";
}
?>
