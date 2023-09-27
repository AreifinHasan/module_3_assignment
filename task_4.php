<?php
// Create a multidimensional array to store student grades
$studentGrades = array(
    "Student 1" => array("Math" => 85, "English" => 92, "Science" => 78),
    "Student 2" => array("Math" => 88, "English" => 95, "Science" => 90),
    "Student 3" => array("Math" => 75, "English" => 82, "Science" => 88)
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjectGrades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($subjectGrades) / count($subjectGrades);
        
        // Print the average grade for the student
        echo "$student - Average Grade: $averageGrade<br>";
    }
}

// Call the function with the student grades array
calculateAverageGrades($studentGrades);
?>
