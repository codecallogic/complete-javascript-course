<script>

/*
--- Let's build a fun quiz game in the console! ---

1. Build a function constructor called Question to describe a question. A question should include:
a) question itself
b) the answers from which the player can choose the correct one (choose an adequate data structure here, array, object, etc.)
c) correct answer (I would use a number for this)

2. Create a couple of questions using the constructor

3. Store them all inside an array

4. Select one random question and log it on the console, together with the possible answers (each question should have a number) (Hint: write a method for the Question objects for this task).

5. Use the 'prompt' function to ask the user for the correct answer. The user should input the number of the correct answer such as you displayed it on Task 4.

6. Check if the answer is correct and print to the console whether the answer is correct ot nor (Hint: write another method for this).

7. Suppose this code would be a plugin for other programmers to use in their code. So make sure that all your code is private and doesn't interfere with the other programmers code (Hint: we learned a special technique to do exactly that).
*/

// (function (){

// function Question(question, answer, correct){
//     this.question = question;
//     this.answer   = answer;
//     this.correct  = correct;
// }

// Question.prototype.displayQuestion = function() {

//     console.log(this.question);
    
//     for (var i = 0; i < this.answer.length; i++){
//         console.log(i + ': ' + this.answer[i]);
//     }
// }

// Question.prototype.correctAnswer = function(ans){

//     if(ans === this.correct){
//         console.log('Answer is correct');
//     }else if (ans !== this.correct){
//         console.log('Asnwer is wrong');
//     }

// }

// var q1 = new Question('Are ready for the Javascript project?', ['yes','no','need more time'], 0);

// var q2 = new Question('Do you understand function constructors?', ['yes','no','sort of'], 3);

// var q3 = new Question('Are you ready for your Software Engineering Intensive bootcamp?', ['yes','no','sort of'], 0);

// var questions = [q1, q2, q3];

// var n = Math.floor(Math.random() * questions.length);

// questions[n].displayQuestion();

// var answer = parseInt(prompt('Please select the correct answer:'));

// questions[n].correctAnswer(answer);

// })();


/*
--- Let's build a fun quiz game in the console! ---

1. Build a function constructor called Question to describe a question. A question should include:
a) question itself
b) the answers from which the player can choose the correct one (choose an adequate data structure here, array, object, etc.)
c) correct answer (I would use a number for this)

2. Create a couple of questions using the constructor

3. Store them all inside an array

4. Select one random question and log it on the console, together with the possible answers (each question should have a number) (Hint: write a method for the Question objects for this task).

5. Use the 'prompt' function to ask the user for the correct answer. The user should input the number of the correct answer such as you displayed it on Task 4.

6. Check if the answer is correct and print to the console whether the answer is correct ot nor (Hint: write another method for this).

7. Suppose this code would be a plugin for other programmers to use in their code. So make sure that all your code is private and doesn't interfere with the other programmers code (Hint: we learned a special technique to do exactly that).

--- Expert level ---

8. After you display the result, display the next random question, so that the game never ends (Hint: write a function for this and call it right after displaying the result)

9. Be careful: after Task 8, the game literally never ends. So include the option to quit the game if the user writes 'exit' instead of the answer. In this case, DON'T call the function from task 8.

10. Track the user's score to make the game more fun! So each time an answer is correct, add 1 point to the score (Hint: I'm going to use the power of closures for this, but you don't have to, just do this with the tools you feel more comfortable at this point).

11. Display the score in the console. Use yet another method for this.
*/

(function(){
function Question(question, answer, check){
    this.question = question;
    this.answer = answer;
    this.check = check;
}

Question.prototype.displayQuestion = function(){

    console.log(this.question);

    for (var i = 0; i < this.answer.length; i++){
        console.log(i + ': ' + this.answer[i]);
    }
    
}

Question.prototype.displayAnswer = function(answer, callback){
    var sc;
    if(answer === this.check){
        console.log('Your answer is correct.');
        sc = callback(true);
    }else{
        console.log('The answer is incorrect.');
        sc = callback(false);
    }
    this.displayScore(sc);
}

Question.prototype.displayScore = function(score){

    console.log('Your score is ' + score);
    console.log('_____________________________________________');
    
}

function score(){
    var sc = 0;
    return function(check){
        if(check){
            sc++;
        }
        return sc;
    }
}

var keepScore = score();

var q1 = new Question('What gets you up in the morning?', ['Family', 'Dreams', 'Meaning'], 2);

var q2 = new Question('What makes you smile?', ['Food', 'Achievements', 'Beating challenges'], 2);

var q3 = new Question('What helps you relax?', ['Massage', 'Dancing', 'Traveling', 'All of The Above'], 3);

var questions = [q1, q2, q3];

function nextQuestion(){

var q = Math.floor(Math.random() * questions.length);

questions[q].displayQuestion();

var check = prompt('Place your answer below:');

if(check !== 'exit'){

    questions[q].displayAnswer(parseInt(check), keepScore);
    nextQuestion();

}else{
    console.log('Quiz ended.')
}

}

nextQuestion();

})();













// (function (){

// function Question(question, answer, correct){
//     this.question = question;
//     this.answer   = answer;
//     this.correct  = correct;
// }

// Question.prototype.displayQuestion = function() {

//     console.log(this.question);
    
//     for (var i = 0; i < this.answer.length; i++){
//         console.log(i + ': ' + this.answer[i]);
//     }
// }

// Question.prototype.correctAnswer = function(ans, callback){

//     var sc;    

//     if(ans === this.correct){

//         console.log('Answer is correct');
//         sc = callback(true);

//     }else if (ans !== this.correct){

//         console.log('Asnwer is wrong');
//         sc = callback(false);
        
//     }

//     this.displayScore(sc);

// }

// Question.prototype.displayScore = function(score){

//    console.log('Your score is ' + score);
//    console.log('______________________________________________');
    
// }


/*
Question.prototype.checkAnswer = function(ans){
if(ans === this.correct){
    sc++
    console.log(sc);
}else if (ans !== this.correct){
    return sc;
}

}

var sc = 0;
*/


// function score(){
//     var sc = 0;
//     return function(correct){
//         if(correct){
//             sc++;
//         }
//         return sc;
//     }
    
// }

// var keepScore = score();

// var q1 = new Question('Are ready for the Javascript project?', ['yes','no','need more time'], 0);

// var q2 = new Question('Do you understand function constructors?', ['yes','no','sort of'], 2);

// var q3 = new Question('Are you ready for your Software Engineering Intensive bootcamp?', ['yes','no','sort of'], 0);

// var questions = [q1, q2, q3];

// function nextQuestion(){

// var n = Math.floor(Math.random() * questions.length);

// questions[n].displayQuestion();

// var answer = prompt('Please select the correct answer:');

// if(answer !== 'exit'){
    
//     questions[n].correctAnswer(parseInt(answer),keepScore);
//     // questions[n].checkAnswer(parseInt(answer));
//     nextQuestion();

// }else{
//     console.log('Quiz ended');
// }

// }

// nextQuestion();

// })();



</script>