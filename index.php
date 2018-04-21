
<html>
  
   <head>
       
        <style>
            
            @import url(https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet);
            body{
                font-family: 'Ubuntu Condensed', sans-serif;
                color: #fff;
                 display:flex;
            min-height: 100vh;
            }
            
             body:before {
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("cocina.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
              -webkit-filter: blur(2px);
             -moz-filter: blur(2px);
            -o-filter: blur(2px);
            -ms-filter: blur(2px);
             filter: blur(2px);
             z-index: -5;
        }
            #text-left{
                color:#fff;
            }

            ul {
            list-style:none;
            }
            a{
                text-decoration: none;
            }
            li{
                color: #333333;
                text-decoration:none; 
                padding: 10px;
            }
            
            li:hover{
                background: #92BEFE;
                color: #fff;
            }
            h4{
                color:#333333;
            }
            
            
            
            *{
               margin: 0;
            }
            .html{
                width: 100%;
                height: 100%;
            }
            #contenedorPrincipal{
                width: 100%;
                height: 100%;
            }
            #titulo{
                width: 100%;
                height: 10%;
                background:#EEEDED;
               
            }
            #inferior{
                width: 100%;
                height: 90%;
            }
            #barraLateral{
                width:35%;
                height: 100%;
                display: inline-block;
                background:#FCFCFC;
                vertical-align: top;
                
            }
            h2{
                float:left;
            }
          #contenedorDinamico{
               
              float: left;
                width: 40%;
                height: 60%;
                display: inline-block;
              
            }
            
            #cd{
                width: 100%;
                height: 100%;
                border: none;      
            }
            input{
                padding: 10px;
                border-radius: 10px;
                font-family: 'Ubuntu Condensed', sans-serif;
                border:none;
            }
            
            button{
                background: rgb(21,67,96);
                padding: 6px;
                border-radius: 8px;
                color: #fff;
                font-family: 'Ubuntu Condensed', sans-serif;
                border:none;
            }
            
            button:hover{
                 background: #4B83A8;
            }
            input:hover{
                background: #D6F5FA;
            }
            #plantilla{
                
            }
            </style>
           
    </head>   
    <body>
        <div id="contenedorPrincipal">
            <div id="titulo"  >
            <img src="sarten.png" style="width:40px;padding:10px;">  
            <div style="width:20%;"></div>
                 
        
            </div>
            
<div id="inferior">
    <div id="barraLateral" >
      <center>
      <div style="height:10%;"></div>
        <form action="Acciones/ingresar.php" method="POST">
        
            <input  name="User" type="text" placeholder="user" style="width: 80%; margin-top: 10px;">
         
        
          
            <input  name="Pass"  type="password" placeholder="password" style="width: 80%; margin-top: 10px;">
         
      
         <button type="submit" name="INGRESA" value="LOGIN" style="width: 30%; margin-top: 10px;font-size: 14px">Login</button>
        </form>
             <div style="height:30%;"></div>
              <h4>Ingresa tus datos para iniciar sesion</h4>
              </center>
    </div>
    
    <div id="contenidoDinamico" >
    
          
            
    
    </div>
</div>
                                                                         
            </div>
           
    </body>
</html>





