<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        const john = {
            name: "John Smith",
            bills: [124, 48, 268, 180, 42],
            tipCal: function() {

                this.tips = [];
                this.finalValues = [];

                for(let i = 0; i < this.bills.length; i++){

                    let percentage;
                    let bill = this.bills[i];

                    if(bill < 50){
                        percentage = .2;
                    }else if(bill >= 50 && bill < 200){
                        percentage = .15;
                    }else{
                        percentage = .1;
                    }

                    this.tips[i] = bill * percentage;
                    this.finalValues[i] = bill + bill * percentage;
                    
                }
            }

        }

        const mark = {
            name: "Mark Colbert",
            bills: [77, 475, 110, 45],
            tipCal: function() {

                this.tips = [];
                this.finalValues = [];

                for(let i = 0; i < this.bills.length; i++){

                    let percentage;
                    let bill = this.bills[i];

                    if(bill < 100){
                        percentage = .2;
                    }else if(bill >= 100 && bill < 300){
                        percentage = .1;
                    }else{
                        percentage = .25;
                    }

                    this.tips[i] = bill * percentage;
                    this.finalValues[i] = bill + bill * percentage;
                    
                }
            }

        }

        john.tipCal();
        mark.tipCal();

        function averageTips(tips){

            let sum = 0;
            
            for(let i = 0; i < tips.length; i++){

                sum = sum + tips[i];
            }

            return sum/tips.length;
        }
        
        john.average = averageTips(john.tips);
        mark.average = averageTips(mark.tips);

        console.log(john, mark);

        if(john.average > mark.average){
            console.log(john.name + '\'s family pays higher on tips, with an average of $' + john.average);
        }else if(mark.average > john.average){
            console.log(mark.name + '\'s family pays higher on tips, with an average of $' + mark.average);
        }

    </script>
</body>
</html>