<?php

    //evaluate Quiz
    function evaluateQuiz(array $questions, array $answers): int {
        $count = 0;
        foreach ($questions as $index => $value) {
            if($answers[$index]===$value['correct']){
                $count++;
            }
        }
        return $count;
    }


    //predefined questions and answer
    $questions = [
        ['question' => 'What is 2 + 2?', 'correct' => '4'],
        ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
        ['question' => 'Who wrote "Hamlet"?','correct' => 'Shakespeare'],
    ];

    //ask question & input answer
    $answers = [];
    foreach ($questions as $index => $value) {
        echo $index+1 . ". " . $value['question']."\n";
        $answers[] = trim(readline("Your answer: "));
    }


    //calculate scores
    $scores =  evaluateQuiz($questions, $answers);

    //display total scores
    echo "\nYou scored $scores out of " . count($questions) . ".\n";

    if ($scores === count($questions)) {
        echo "Excellent job!\n";
    } elseif ($scores > 1) {
        echo "Good effort!\n";
    } else {
        echo "Better luck next time!\n";
    }

?>
