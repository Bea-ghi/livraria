<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel  =  " stylesheet " href  =  " style.css " >
    <script src = "jquery-3.6.0.min.js"></script>
    <title>Login</title>
</head>
<body>
    <form action="validar.php" method="post">
    <div class = "main-login">
        <div class = "left-login">
            <h1>Bem vindo de volta!</h1>
           <img src="desenho.svg" class = "left-login-image" alt="desenho">
        </div>
        <div class ="right-login" >
            <div class = "card-login">
                <h1>LOGIN</h1>
                <div class = "textfield">
                    <label  for = " email ">E-mail </label >
                    <input  type = "email"  id="email" name ="email" placeholder="E-mail">
                </div >
                  <div class = "textfield">
                    <label  for = " senha ">Senha </label >
                    <input  type = "password"  id="senha" name ="senha" placeholder="Senha" >
                    
                 </div >
                    <button  class = " btn-login "  type = " submit " > ENTRAR </button>
                </div>
            </div>
        
        </div>
    </div>
    </form>
    
</body>
</html>