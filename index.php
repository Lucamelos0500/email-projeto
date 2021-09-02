<html>
<head>
  <title>Enviando E-mail com PHP - DevMedia</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
    body{
      font-size:12px;
      font-family:Verdana, Geneva, sans-serif;
    }
    #contato_form{
      width:500px;
      min-height:175px;
      color:#999;
      margin:auto;
    }
    .asteristico{
      color:#F00;
    }
    
  </style>
</head>
<body>
    <div id="contato_form">
      <form action="enviar.php" name="form_contato" method="post" >
      <p class="titulo mt-5">Formulário <small class="asteristico">*Campos Obrigatorios</small></p>
        <table align="center">
          <tr>
            <td>Nome:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="nome" maxlength="40" />
            </td>
          </tr>
          <tr>
            <td>E-mail:<sup class="asteristico">*</sup></td>
            <td>
              <input type="email" name="email" maxlength="30" />
            </td>
          </tr>
          <tr>
            <td>Telefone:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="telefone" 
                     onkeypress="mascara(this, '##-#####-####')" maxlength="13" />
            </td>
          </tr>
          <tr>
            <td>Mensagem:<sup class="asteristico">*</sup></td>
            <td>
              <textarea name="msg" cols="16" rows="5"></textarea>
            </td>
          </tr>
          <tr align="right";>
            <td colspan="2">
              <input type="reset" class="campo_submit" value="Limpar" />
              <input type="submit" class="campo_submit" value="Enviar" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
          </tr>
        </table>
      </form>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function mascara(t, mask){
            var a = t.value;
            var re = /[a-zA-Z\s]/;
            var index = a.search(re);
            if(index === -1){
                var i = t.value.length;
                var saida = mask.substring(1,0);
                var texto = mask.substring(i);
                if (texto.substring(0,1) !== saida){
                    t.value += texto.substring(0,1);
                }
            }else{
                t.value = null;
            }
        }
    </script>
</body>
</html>