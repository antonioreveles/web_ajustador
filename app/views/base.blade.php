<!DOCTYPE html>
<html lang="es">

  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  {{  HTML::style('css/style.css') }}
  <!--<link media="all" rel="stylesheet" type="text/css" href="style.css">-->
  <!--[if IE]>
    <link media="all" rel="stylesheet" type="text/css" href="style-ie.css">
  <![endif]--> 
  <title>AJUSTADORES MEXICANOS</title>
  </head>

  <body>
  
    <div id="header">
      <ul>
        <div ALIGN="left"><img  src="img/header.jpg"  height="150" width="250"></div>
      </ul>
    </div>
   
<div id="menu" >
        <ul>
          <font color="#RRVVAA">
          <P ALIGN=center>                    
          <a href="{{ URL::route('inicio') }}"> INICIO  </a>&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('empresa') }}"> NUESTRA EMPRESA  </a>&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('servicio') }}">  SERVICIO  </a>&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('covergeografica') }}">COVERTURA GEOGRAFICA  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('sucursal') }}">SUCURSALES </a>&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('contacto') }}">CONTACTO  </a>
          </font>
          </p>
        </ul>
</div>
		
    <br></br>
      <div class="body">


          @yield('content')




      
     <br></br><br></br>
      <div id="footer">                  	             
          <font color="#000000">          
          <P ALIGN=center>          
          <a href="{{ URL::route('inicio') }}"> INICIO  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
          <a href="{{ URL::route('servicio') }}">SERVICIO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
          <a href="{{ URL::route('sucursal') }}">SUCURSALES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('contacto') }}">CONTACTO</a></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </font>
      </div>

     
</div>
    
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
