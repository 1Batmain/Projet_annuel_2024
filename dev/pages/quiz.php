<?php

$questions = [
    "Combien de muscles le corps humain contient-il ?" => ["206", "640", "700", "850"],
    "Quel est le muscle le plus fort du corps humain ?" => ["Cœur", "Langue", "Biceps", "Triceps"],
    "Quel est le principal muscle ciblé par les pompes ?" => ["Pectoraux", "Triceps", "Dorsaux", "Quadriceps"],
    "Quel type de muscle est principalement travaillé lors des squats ?" => ["Fessiers", "Biceps", "Triceps", "Avant-bras"],
    "Combien de répétitions faut-il faire pour un entraînement d’endurance ?" => ["12-20", "4-6", "6-8", "8-10"],
    "Quel est le rôle des protéines dans la musculation ?" => ["Hydrater", "Construire les muscles", "Apporter de l'énergie", "Améliorer la circulation sanguine"],
    "Quel exercice est le meilleur pour renforcer les abdominaux ?" => ["Crunch", "Squat", "Pompe", "Fente"],
    "Quel muscle est principalement travaillé avec le curl biceps ?" => ["Biceps", "Triceps", "Quadriceps", "Fessiers"]
];

$correctAnswers = ["640", "Langue", "Pectoraux", "Fessiers", "12-20", "Construire les muscles", "Crunch", "Biceps"];

// permet de melanger les question aleatoirement 
$questionKeys = array_keys($questions);
shuffle($questionKeys);


$questionKeys = array_slice($questionKeys, 0, 8);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Quiz Musculation</title>
    <link rel="stylesheet" href="/dev/styles/quiz.css">
</head>
<body>
    <div class="quiz-container">
        <h1>Quiz Musculation</h1>
        <form id="quizForm">
            <?php
            foreach ($questionKeys as $index => $question) {
                echo "<div class='question'>";
                echo "<p>" . ($index + 1) . ". $question</p>";
                // melanger les réponses
                $answers = $questions[$question];
                shuffle($answers);
                foreach ($answers as $answer) {
                    echo "<label><input type='radio' name='question_$index' value='$answer'> $answer</label><br>";
                }
                echo "</div>";
            }
            ?>
            <button type="button" onclick="submitQuiz()">Soumettre</button>
        </form>
        <div id="result"></div>
    </div>
    <script>
        const correctAnswers = <?php echo json_encode($correctAnswers); ?>;
    </script>
    <script src="scripts.js"></script>

</body>
</html>
