/*
Implementing Modules Structure

1. UI Interface Module
2. Data Structure Modul
3. Controller


*/

// const budgetController = (function() {

//     var x = 93;

//     var add = function(a){
//         return x + a;
//     }
    
//     return {
//         publicTest: function(x){
//             return add(x);
//         }
//     }
    
// })();

// var UIController = (function(){



// })();


// // Global App Controller
// var controller = (function(budgetCtrl, UICtrl){

//     var y = budgetCtrl.publicTest(5);

//     return {
//         call: function(){
//             console.log(y);
//         }
//     }
    
// })(budgetController, UIController);

const budgetController = (function() {

    
})();

var UIController = (function(){



})();


// Global App Controller
var controller = (function(budgetCtrl, UICtrl){

    var ctrlAddItem = function(){

        // 1. Get input data

        // 2. Add the item to the budget controller 

        // 3. Add the item to the UI

        // 4. Calculate the budget

        // 5. Display the item on UI

        console.log('It works');
        
    }

    document.querySelector('.add__btn').addEventListener('click', ctrlAddItem)

    document.addEventListener('keypress', function(e){

       if(e.keyCode === 13 || e.keyCode === 13){
            ctrlAddItem();    
       }
        
    })
    
})(budgetController, UIController);