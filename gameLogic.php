<?php

$userChoice = $_REQUEST["choice"];


function getCompChoice (){
    $RandNum= rand(0,2);
    $choice = ['Rock', 'Paper', 'Scissors'];
    $comp = $choice[$RandNum];
    echo "Computer chose: $comp</br>";
    
return $comp;
}


   function findWinner($userChoice,$comp){
    if ($userChoice==$comp)
        {
        return "Draw! Try again!\n";
            }elseif (($userChoice=="Rock" && $comp=="Paper") ||
                ($userChoice=="Paper" && $comp=="Scissors") ||
                ($userChoice=="Scissors" && $comp=="Rock")
            ){
        return "Unlucky, Computer wins! Better luck next time!\n";
            }elseif (($userChoice=="Rock" && $comp=="Scissors") ||
                ($userChoice=="Paper" && $comp=="Rock") ||
                ($userChoice=="Scissors" && $comp=="Paper")
            ){
        return "Yayy! You win!\n";
    }
}

echo "You chose: ".$userChoice."</br>";
$comp = getCompChoice();

$outcome = findWinner($userChoice,$comp);
echo $outcome;


