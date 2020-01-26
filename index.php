<!DOCTYPE html>

<html>
    <head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>ejemplo POO herencia basica en php y jquery</title>
    <script>

      function proceso(txtnumero1,boton){
        switch(boton){
          
            case "converpeso":
            var parametros={
              "txtnumero1":txtnumero1,
              "btnmulpeso":boton
            };
            break;
            case "converdolar":
            var parametros={
              "txtnumero1":txtnumero1,
              "btnmuldolar":boton
            };
            break;

        }

        $.ajax({
          data:parametros,
          url:'Calcular.php',
          type:'post',
          beforeSend:
          function(){
            $('#resultado').html('cargando!...');
          },
          success:
          function(response){
            $('#resultado').html(response);
          }
        });

      }


    </script>


</head>
<body>
    <h1>ejemplo POO herencia basica en php y jquery </h1>
    <form name="form1" method="POST">
      digita tu moneda: <input type="text" name="txtnumero1" id="txtnumero1">
      <br>
      <input type="button" name="btnmulpeso" id="btnmulpeso" value="converpeso"
      onclick="proceso($('#txtnumero1').val(),$('#btnmulpeso').val());">
      <br>
      <input type="button" name="btnmuldolar" id="btnmuldolar" value="converdolar"
      onclick="proceso($('#txtnumero1').val(),$('#btnmuldolar').val());">
     
    </form>
    <br>
    <span id="resultado"></span>
    <script src="jquery-3.4.1.js"></script>
</body>

</html>