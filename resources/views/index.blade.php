<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body{
            height:100vh;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
        }
        .container a div{
            width: 200px;
            height: 200px;
            background-color: #aaa;
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 20px;
        }
        .container a div img{
            width: 180px;

        }
        .container a{
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>

    <h1> Escolha uma classe:</h1>
    <div class="container">
        <a href="/classes/guerreiro">
            <div>
                <img src="https://cavernadodm.com.br/wp-content/uploads/2020/01/Elfo-com-espada-e-arco-600x600.png">
                Guerreiro</div>
        </a>
        <a href="/classes/arqueiro">
           <div>
               <img src="https://cavernadodm.com.br/wp-content/uploads/2020/01/Elfo-com-arco-frente-600x600.png">
           Arqueiro</div>
        </a>

        <a href="/classes/mago">
           <div>
           <img src="https://cavernadodm.com.br/wp-content/uploads/2020/01/Conjurador-com-cajado-frente-300x300.png">    
           Mago </div>
        </a>
    </div>

</body>

</html>