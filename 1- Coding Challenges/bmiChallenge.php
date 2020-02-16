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
            name: "Jose",
            mass: 77.11,
            height: 1.75,
            bmiCalc: function(){
                this.bmi = this.mass/(this.height**2);
                return this.bmi;
            }
        }

        const mark = {
            name: "Mark",
            mass: 119,
            height: 1.95,
            bmiCalc: function(){
                this.bmi = this.mass/(this.height**2);
                return this.bmi;
            }
        }

        john.bmiCalc();
        mark.bmiCalc();
        console.log(john, mark);
        
    </script>
</body>
</html>