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
        <div ><img  src="img/headera.jpg" ALIGN="LEFT" height="350" width="1000">
        <!--  <img  src="img/headerb.jpg" ALIGN="CENTER" height="250" width="1050">-->
        <br></br><br></br><br></br><br></br>
        
      </ul>
    </div>   
	  
      <div class="body">
        <div id="menu" >
          <ul>
             <font color="#RRVVAA">
              <P ALIGN=center>                    
              <li><a href="{{ URL::route('inicio') }}"> INICIO  </a></li>
              <li><a href="{{ URL::route('empresa') }}"> NUESTRA EMPRESA  </a></li>
              <li><a href="{{ URL::route('misionv') }}">MISION VISION  </a></li>
              <li><a href="{{ URL::route('servicio') }}">  SERVICIO  </a></li>
              <li><a href="{{ URL::route('covergeografica') }}">COVERTURA GEOGRAFICA  </a></li>
              <li><a href="{{ URL::route('sucursal') }}">SUCURSALES </a></li>
              <li><a href="{{ URL::route('contacto') }}">CONTACTO  </a></li>
             </font>
              </p>
          </ul>
        </div>  


          @yield('content')




      
     <br></br><br></br>
      <div id="footer">                  	             
          <font color="#000000">          
          <P ALIGN=center>          
          <a href="{{ URL::route('inicio') }}"> INICIO  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
          <a href="{{ URL::route('servicio') }}">SERVICIO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
          <a href="{{ URL::route('sucursal') }}">SUCURSALES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="{{ URL::route('contacto') }}">CONTACTO</a></p>
          </font>
      </div>

     
</div>
    
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
