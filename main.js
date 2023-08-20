// Strings
// const myVariable = "Mathematics";

// the length property
//charat,length,indexof,lastindexof,slice,split,touppercase,tolowercase,includes,
// console.log(myVariable.indexOf("tic"));

let choice = prompt("Please choose between rock, paper, scissors ");
console.log("you chose " + choice);

let compInput;
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
} else if (choice === "rock"){
    if(computer === "paper"){
        console.log("the computer chose paper!, you lose");
    } else {
        console.log("you beat the computer! Congratulations.");
    }
} else if (choice === "paper"){
    if(computer === "scissors"){
        console.log("the computer chose scissors!, you lose");
    } else {
        console.log("you beat the computer! Congratulations.");
    }
} else if (choice === "scissors"){
    if(computer === "rock"){
        console.log("the computer chose rock!, you lose");
    } else {
        console.log("you beat the computer! Congratulations.");
    }
} else {
    console.log("please put either rock, paper, scissors!");
}