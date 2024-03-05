<?php
session_start();
?>
<style type="text/css">
    body{
        background:#363636;
    }
    .r{
        background:#008c7a;
        text:white;
        border: 1px solid black;
        border-radius: 10px;
        border-style: outset;
        border: gray;
        width:48%

    }
    .r tr:hover{
        background:# 000000 ;
        border-bottom: 30px solid #ddd;
    }
    .o{
        background-color:white;
        float:right;
        width:8%;
        height:3%;
        margin-right:15%;
        }
    .i{
        color:white;
        text-align:top;
        width:48%;
        height:20%;
        margin-top:0%;
        background:gray;
        background-size:34%;
        }
    
       
    
    .horarios{
        color:red;
        background:white;
        width:48%;
    }

    a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}</style>






<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
	<center> <div class="i">
        <h1>LOGIN</h1>
		<h3>Respeitando a privacidade dos professores , você deve fazer login com seu email cadastrado no projeto para poder ter acesso às aulas gravadas</h3>
    </div></center>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>

<div class="o"> 
        <table>
            <tr><td><a href="index.php"><input type="button" value="VOLTAR AO MENU"><a></td></tr>
        </table>
    </div >

	<div class="r">
    <center>
        <h2>
    <table border=3px>
	<form method="POST" action="valida.php">
        
		<tr>       <td><label>Email</label></td>                              </tr>
        <tr>       <td><input type="text" name="email" placeholder="Digite o seu usuário"></td>              <td><input type="submit" name="btnLogin" value="Acessar"></a></td>                                                                </tr>
    
	</form>
	</table>    

        </h2>
    </center>
    </div>


		
			
		
			
			
			
		
		
		
	</body>
</html>