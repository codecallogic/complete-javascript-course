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

        let bill = [124, 48, 268];

        function tipCalculator(bill){
            var percentage; 
            if(bill < 50){
                percentage = .2;
            }else if(bill >= 50 && bill < 200){
                percentage = .15;
            }else{
                percentage = .1;
            }
            return percentage * bill;
        }

        console.log(tipCalculator(bill[0]));
        
    </script>

</body>
</html>