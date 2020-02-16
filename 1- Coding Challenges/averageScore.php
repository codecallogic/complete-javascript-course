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
    let john = [89,120,103];
    let mike = [116,94,123]; 
    let mary = [97,134,105];

    const arrSum = john.reduce((a,b) => a + b, 0);
    const arrSum2 = mike.reduce((a,b) => a + b, 0);
    const arrSum3 = mary.reduce((a,b) => a + b, 0);

    if(arrSum > arrSum2 && arrSUM > arrSum3){

        console.log("John has the highest average score with " + arrSum);
        
    }else if(arrSum < arrSum2 && arrSum2 > arrSum3){

        console.log("Mike has the highest avarage score with " + arrSum2);
        
    }else if(arrSum3 > arrSum && arrSum3 > arrSum2){

        console.log("Mary has the highest avarage score with " + arrSum3);
        
    }else{
        console.log("Its a draw all teams have the same average scores with John at " + arrSum + " and Mike at " + arrSum2 + " and Mary at " + arrSum3);
    }
    
    </script>
</body>
</html>