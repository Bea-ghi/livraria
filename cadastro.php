<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel  =  " stylesheet " href  =  " cadastro.css " >
    <script src = "jquery-3.6.0.min.js"></script>
    
    <script> 
    
$(document).ready(function(){
    $("#cep").blur(function () {
        $.post("buscar_cep.php", "cep="+ $("#cep").val(), function(data) {
            if (data !="" ){
              var obj = jQuery.parseJSON(data);
              $("#cidade").val(obj.localidade);
              $("#rua").val(obj.logradouro);
              $("#estado").val(obj.uf);
              $("#bairro").val(obj.bairro);

            }
        })
    });
})
</script>
    <title>Cadastro</title>

</head>
<body>
<form action="inserir.php" method="post">
    <div class = "main-login">
        <div class = "left-login">
            <h1>Faça cadastro <br/> E entre para o nosso grupo</h1>
           <img src="desenho.svg" class = "left-login-image" alt="desenho">
        </div>
        <div class ="right-login" >
            <div class = "card-login">
                <br/><br/><br/><br/>
                <h1>CADASTRO</h1>
                <div class = "textfield">
                    <label  for = "nome">Nome </label >
                    <input  type = "text"  id="nome" name ="nome" placeholder="Nome">
                </div >

                <div class = "textfield">
                    <label  for = " email ">E-mail </label >
                    <input  type = "email"  id="email" name ="email" placeholder="E-mail">
                </div >
              
                  <div class = "textfield">
                    <label  for = " senha ">Senha </label >
                    <input  type = "password"  name = "senha" placeholder="Senha" >
                    
                 </div >
         
                  <div class = "textfield">
                    <label  for = " cep ">CEP </label >
                    <input  type = "text"  id="cep" name = " cep" placeholder="CEP" >
                    
                 </div >
                 <div class = "textfield">
                    <label  for = " rua ">Rua </label >
                    <input  type = "text"  id="rua" name = " rua" placeholder="Rua" >
                    
                 </div >
            
                 <div class = "textfield">
                    <label  for = " bairro ">Bairro </label >
                    <input  type = "text"  id="bairro"name = " bairro" placeholder="Bairro" >
                    
                 </div >
                 <div class = "textfield">
                    <label  for = " cidade ">Cidade </label >
                    <input  type = "text"  id="cidade" name = " cidade" placeholder="Cidade" >
                    
                 </div >
                 <div class = "textfield">
                 <label  for = "estado ">Estado </label >
                    <input  type = "text"  id="estado" name = " estado" placeholder="Estado" >
                 </div >

                <<button  class = " btn-login "  type = " submit " > CADASTRAR </button>
                </div>
            </div>
        
        </div>
    </div>
</form>
</body>
</html>