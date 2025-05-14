<?php


// Quiz Data
$question1 = "What is the capital of France?";
$q1_optionA = "a) Berlin";
$q1_optionB = "b) Paris";
$q1_optionC = "c) Madrid";
$q1_answer = "b";

$question2 = "Which planet is known as the Red Planet?";
$q2_optionA = "a) Mars";
$q2_optionB = "b) Venus";
$q2_optionC = "c) Jupiter";
$q2_answer = "a";

$question3 = "What is 5 + 7?";
$q3_optionA = "a) 10";
$q3_optionB = "b) 12";
$q3_optionC = "c) 14";
$q3_answer = "b";

// Score counter
$score = 0;

// Welcome message
echo "\n=== Welcome to the Quiz ===\n\n";

// Ask Question 1
while (true) {
    echo "$question1\n";
    echo "$q1_optionA\n";
    echo "$q1_optionB\n";
    echo "$q1_optionC\n";
    echo "Your answer (a/b/c): ";
    $answer = trim(fgets(STDIN));
    if ($answer === 'a' || $answer === 'b' || $answer === 'c') {
        if ($answer === $q1_answer) {
            echo "Correct!\n\n";
            $score++;
        } else {
            echo "Incorrect. The correct answer was '{$q1_answer}'.\n\n";
        }
        break;
    } else {
        echo "Invalid choice. Please enter a, b, or c.\n\n";
    }
}

// Ask Question 2
while (true) {
    echo "$question2\n";
    echo "$q2_optionA\n";
    echo "$q2_optionB\n";
    echo "$q2_optionC\n";
    echo "Your answer (a/b/c): ";
    $answer = trim(fgets(STDIN));
    if ($answer === 'a' || $answer === 'b' || $answer === 'c') {
        if ($answer === $q2_answer) {
            echo "Correct!\n\n";
            $score++;
        } else {
            echo "Incorrect. The correct answer was '{$q2_answer}'.\n\n";
        }
        break;
    } else {
        echo "Invalid choice. Please enter a, b, or c.\n\n";
    }
}

// Ask Question 3
while (true) {
    echo "$question3\n";
    echo "$q3_optionA\n";
    echo "$q3_optionB\n";
    echo "$q3_optionC\n";
    echo "Your answer (a/b/c): ";
    $answer = trim(fgets(STDIN));
    if ($answer === 'a' || $answer === 'b' || $answer === 'c') {
        if ($answer === $q3_answer) {
            echo "Correct!\n\n";
            $score++;
        } else {
            echo "Incorrect. The correct answer was '{$q3_answer}'.\n\n";
        }
        break;
    } else {
        echo "Invalid choice. Please enter a, b, or c.\n\n";
    }
}

// Final Score
echo "=== Quiz Completed ===\n";
echo "You got {$score} out of 3 correct.\n";

// End of script
?>
