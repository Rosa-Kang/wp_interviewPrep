// 1. Closure in JavaScript is formed when a function is defined inside another.
// The inner function has access to the outer function's variables and it preserves their values
// even after the outer function has finished executing.


// 2. let const var
// let and const are block scope and var is function scope. And const are for variables that can't be reassigned.

// 3. prototypal inferitance in JS
// Prototypal Inheritance in JavaScript involves objects and their prototypes.
// Objects inherits properties and methods from their prototype.
// It is sharing behavior among objects.

// 4. Asynchronous programming in JavaScript allows executing an operation without blocking any main method.
// Commonly, asynchronous tasks use mechanisms like callbacks, Promises, or async/await to manage the flow of execution.

// 5. Write a function in JavaScript that checks if a given word is a palindrome.
function checkPalindrome(word){
    // change the word to lowerCase to have it case insensitive.
    let lowerWord = word.toLowerCase();

    // transform the word to an array, then to reverse it, then to re-join to have a reversedWord
    let reversedWord = lowerWord.split('').reverse().join('');

    // check if it's palindrome
    return newWord === reversedWord;
}

// 6. Write a function that finds the factorial of a gven Number.
function findFactorial(num) {
    //check if the input is a non-negative integer.
    if(num < 0 || !Number.isInteger(num)) {
        return 'Please enter a non-negative integer.';
    }

    //set a starting point to be 1 and i to be equal to given num.
    let factorial = 1;
    let i = num;

    while(i > 0){
        factorial *= i;
        i--;
    }

    return factorial;
}

// 6. Draw a line between the two coordinates
<label for='x1'>X1:</label>
<input type='number' id='x1' value=''/>
<label for='y1'>Y1:</label>
<input type='number' id='y1' value=''/>
<label for='x2'>X2:</label>
<input type='number' id='x2' value=''/>
<label for='y2'>Y2:</label>
<input type='number' id='y2' value=''/>
<button id="drawButton">Draw Path</button>

