<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function convert($choice) {
switch ($choice) {
    case "r":
    case 0:
    return "rock";
    break;
    case "p":
    case 1:
    return "paper";
    break;
    case "s":
    case 2:
    return "scissors";
    break;
    default:
    error();
    break;
}
}

function testing($user , $computer) {
    if ($user == $computer) {
    return "It's a tie!\n";
}
else if ($user == "paper" && $computer == "rock" || $user == "rock" && $computer == "scissors" || $user == "scissors" && $computer == "paper") {
    return "You!\n";
}
else if ($user == "paper" && $computer == "scissors" || $user == "rock" && $computer == "paper" || $user == "scissors" && $computer == "rock") {
    return "Computer!\n";
}
}

$computerChoice = rand(0,2);
$userChoice = $_REQUEST["choice"];
        
$userSelection = convert($userChoice);
$computerSelection = convert($computerChoice);

$result = testing($userSelection, $computerSelection);

echo $result;
