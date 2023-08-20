// Strings
// const myVariable = "Mathematics";

// the length property
//charat,length,indexof,lastindexof,slice,split,touppercase,tolowercase,includes,
// console.log(myVariable.indexOf("tic"));



let counterP = 0;
let counterC = 0;

do {

let choice = prompt("Please choose between rock, paper, scissors ");
console.log("you chose " + choice);

if (choice === null){
    console.log("Thank you for visiting!");
    break;
}

let computer = (Math.floor(Math.random() * 3 + 1));

if(computer === 0) {
    console.log("error");
} else if (computer === 1){
    computer = "rock";
} else if (computer === 2){
    computer = "paper";
} else if (computer === 3){
    computer = "scissors";
}

if(choice  === computer){
    console.log("it's a tie!");
    console.log("score : " + counterP + " | " + counterC  );
} else if (choice === "rock"){
    if(computer === "paper"){
        console.log("the computer chose paper!, you lose");
        counterC += 1;
        console.log("score : " + counterP + " | " + counterC  );
    } else {
        console.log("you beat the computer! Congratulations.");
        counterP += 1;
        console.log("score : " + counterP + " | " + counterC  );
    }
} else if (choice === "paper"){
    if(computer === "scissors"){
        console.log("the computer chose scissors!, you lose");
        counterC += 1;
        console.log("score : " + counterP + " | " + counterC  );
    } else {
        console.log("you beat the computer! Congratulations.");
        counterP += 1;
        console.log("score : " + counterP + " | " + counterC  );
    }
} else if (choice === "scissors"){
    if(computer === "rock"){
        console.log("the computer chose rock!, you lose");
        counterC += 1;
        console.log("score : " + counterP + " | " + counterC  );
    } else {
        console.log("you beat the computer! Congratulations.");
        counterP += 1;
        console.log("score : " + counterP + " | " + counterC  );
    }
} else {
    console.log("please put either rock, paper, scissors!");
}

let playAgain = confirm("Do you want to play again?");
if (!playAgain) {
    console.log("Thank you for playing!");
    break;
}
} while (true);