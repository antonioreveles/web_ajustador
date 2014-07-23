<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  {{  HTML::style('css/style.css') }}
  <!--<link media="all" rel="stylesheet" type="text/css" href="style.css">-->
  <!--[if IE]>
    <link media="all" rel="stylesheet" type="text/css" href="style-ie.css">
  <![endif]--> 
  <title>AJUSTADORES MEXICANOS</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>
  
    <div id="header">
      <ul>
        <div align="center"><img  src="img/header.jpg" height="150" width="250"></div>
      </ul>
    </div>
   
<div id="menu" >
        <ul>
          <font color="#RRVVAA">
          <P ALIGN=center>                    
          <a href="{{ URL::route('inicio') }}"> INICIO  </a>
          <a href="{{ URL::route('empresa') }}"> NUESTRA EMPRESA  </a>
          <a href="{{ URL::route('servicio') }}">  SERVICIO  </a>
          <a href="{{ URL::route('covergeografica') }}">COVERTURA GEOGRAFICA  </a>
          <a href="{{ URL::route('sucursal') }}">SUCURSALES </a>
          <a href="{{ URL::route('contacto') }}">CONTACTO  </a>
          </font>
          </p>
        </ul>
</div>
		
    <br></br>
      <div class="body">


          @yield('content')




      
     <br></br><br></br><br></br><br></br><br></br><br></br>
      <div id="footer">                  	             
          <font color="#000000">          
          <P ALIGN=center>          
          <a href="{{ URL::route('inicio') }}"> INICIO  </a>          
          <a href="{{ URL::route('servicio') }}">SERVICIO</a>          
          <a href="{{ URL::route('sucursal') }}">SUCURSALES</a>
          <a href="{{ URL::route('contacto') }}">CONTACTO</a></p>
          </font>
      </div>

     
</div>
    
   


  </body>
</html>
