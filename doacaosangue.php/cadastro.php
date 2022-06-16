
<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .cabeçalho{
	margin:0;
	height: 30px;
	line-height: 200%;
	width: 100%;
	padding:0;
	text-align: center;
	background-color: goldenrod;
}

.cabeçalho a{
    text-decoration: none;
}

	*{
	margin:0;
	padding:0;
	color: #222;
	font-family:'Arial';
	}
	
	.doacaosangue{
	margin-top: -85px;
	height: 50px;
	color: #222;
	font-size: 30px;
	list-style: none;
	margin-left: 500px;
}

.menu{
	width:auto;
	height:50px;
	background-color: cadetblue;
	}

	.menu{
		border: 1px solid #222;
	}
	
.menu>ul{
	list-style:none;	
	position:relative;
	margin-left:50px;
	}
.menu ul li{
		width:150px;
		float:left;
	}

.menu a{
	padding:15px;
	display:block;
	text-decoration: none;
	background-color: cadetblue;
	text-align:center;
	}
.menu ul ul{
	list-style:none;
	position:absolute;
	visibility:hidden;
	
	}
.menu ul li:hover ul{
	visibility:visible;
	}
	
.menu a:hover{
	
	background-color:green;
	}

.menu ul ul li{
	float:none;
	border-bottom: solid 1px #ccc;
	}
.menu ul ul li a{
	
	background-color:rgb(75, 194, 207);
	}
#bt_menu{
	display: none;
	}
label[for='bt_menu']{
	padding:5px;
	background-color:#222;
	color:#fff;
	font-family:'Arial';
	text-align:center;
	font-size:30px;
	cursor:pointer;
	display:none;
	width:50px;
	height:50px;
	}	
label[for='bt_menu']:hover{
	background-color:#f4f4f4;
	color:#aaa;
	}
@media (max-width: 800px) {

	.cabeçalho>ul{
		margin-left: 0;
	}

	.cabeçalho{
		margin-top: 5px;
	}

	.cabeçalho ul>li{
		width: 100%;
		float: 0;
	}
	.cabeçalho ul ul{
		position: static;
		overflow: hidden;
		max-height: 0;
		transition: all .4s;
	}

	.cabeçalho ul li:hover ul{
	height:auto;
	max-height:200px;
	transition:all .4s;
	}


.menu{
	margin-left:-100%;
	transition:all .4s;
	}
label[for='bt_menu']{
	display:block;
	}
.menu>ul{
	margin-left:0;
	}
.menu{
	margin-top:5px;
	}
.menu ul li{
	width:100%;
	float:none;  
	}
.menu ul ul{
	position:static;
	overflow:hidden;
	max-height:0;
	transition:all .4s;
	}
.menu ul li:hover ul{
	height:auto;
	max-height:200px;
	transition:all .4s;
	}
#bt_menu:checked ~ .menu{
	margin-left:0;
	}
}

.titulo{
	
	width: 100%;
	margin-left:auto;
	height: 140px;

	background-color:  cadetblue;
}

h1{
	margin-left: 10%;
	line-height: 225%;
}

h3{
	margin-left: 10%;
	line-height: 1000%;
}


.titulo h4{	
    margin-top: 100px;
    
	padding: 8px 20px;
	text-align: left;
	background-color: white; 
    color: black;
    border-left: 8px solid #4CAF50;
	transition-duration: 0.4s;
	margin-left: 150px;
}

.titulo h5{	
    margin-top: 30px;
	padding: 8px 30px;
	text-align: left;
	background-color: white; 
    color: black;
	transition-duration: 0.4s;
	margin-left: 150px;
}

.criterios{
    margin-top: 50px;
    padding: 5px 5px;
	text-align: left;
    color: rgb(3, 3, 3);
	transition-duration: 0.4s;
	margin-left: 150px;
}

.atecao{
    padding: 8px 30px;
	text-align: left;
    color: #222;
   
	transition-duration: 0.4s;
	margin-left: 150px;
}

.titulo h6{
	width: 100%;
	border: 3px solid #4CAF50;
	background-color:#4CAF50;
}

.titulo h2{
    padding: 8px 30px;
	text-align: left;
    color: #222;
	transition-duration: 0.4s;
	margin-left: 150px;
}
.homens {
    padding: 8px 30px;
	text-align: left;
    color: #222;
	transition-duration: 0.4s;
	margin-left: 150px;
}

.rodape{
	width: 100%;
	margin-top: 50px;
	
}

.rodape>ul{
	list-style: none;
	position: relative;
	margin-left: 150px;
	margin-right: 50px;
}

.rodape ul li{
	width: 250px;
	float: left;
}
.rodape a{
	text-decoration: none;
	text-transform: uppercase;
	color: rgb(94, 92, 92);
	text-align: center;
}
.rodape ul ul{
	list-style: none;
	position: absolute;	
}


.rodape ul ul li{
	float:none;
	color: #222;
}

.sede p{
	margin-top: 5px;
	color: #222;
}

.horarios p{
	margin-top: 5px;
	color: #222;
}

.cadastro{ /*almeta a borda da tela */ 
	height: 1000%;
    margin-top: 50px;
    color: #222;
}

.tabela{
	margin-top: 50px;
    color: #222;
}

.imagem img{
	width: 100% ;
	height:400px;
	margin-top: 40px;
	
}

</style>
</head>
<body>
    <input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>
<nav class="cabeçalho">
	<ul>
		<a href="https://www.hemocentro.unicamp.br/noticias/ministerio-divulga-nota-tecnica-com-mudancas-para-doadores-relacionadas-ao-covid/">
			CRITERIOS PARA DOADORES - <span style="color:red;font-weight:bold">COVID-19</span></a> <br>
	 </ul>
 </nav>

<nav class="menu">
	<ul>
    	<li><a href="#">cadastro</a></li>
          <li><a href="#">Hemocentro</a>
        	<ul>
            	<li><a href="https://www.hemocentro.unicamp.br/">hemocentro Unicamp </a>
                <li><a href="https://www.boldrini.org.br/">hemocentro boldrini</a>
            </ul>
        </li>
        <li><a href="#">mais sites</a>
        	<ul class="submenu">
            	<li><a href="#">Doacoes</a>
                <li><a href="#">cultura</a>
            </ul>
        </li>
      
        <li><a href="#">Contato</a></li>
    </ul>
 </nav>


<nav class="titulo">
    
 <h1 style="font-size:60px; color: #222; font-family:Arial;" >HOMECE</h1>
 <ul>
	<li class="doacaosangue">Doação de sangue</li>
</ul>
<div class="imagem">
   <img src="https://www.hospitaldecruzilia.com.br/site/images/DOACAO%20DE%20SANGUE.jpg">
</div>

 <div class="cadastro">


	<form method="POST" action="addDoador.php" enctype="multipart/form-data">
        <table>
                <tr>
                    <td> 
                       <!-- readonly comando para deixar id modo nao editavel, apenas visualização -->
                       Id:
                       <input readonly="readonly" type="text"  name="id">
                    </td>
                </tr>
                <tr>
                    <td>
                        primeiro Nome: <!--retorna nome e id do produto esta funçao-->
                        <input type="text"  name="nome"  >
                    </td>
                </tr>
                <tr>
                    <td>
                        Sobre Nome: 
                        <input type="text"  name="sobrenome" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: 
                        <input type="text" name="email" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefone: 
                        <input type="text" name="telefone" >
                    </td>
                </tr>
                <tr>
                    <td>

                        Cidade: 
                        <input type="text" name="cidade">
                    </td>
                </tr>

                <tr>
                    <td>
                        Bairro: 
                        <input type="text" name="bairro" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Rua: 
                        <input type="text" name="rua" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>            
            </table>
        </form>   




<table class="talela" border='1'>
    <tr>
        <th>
            Nome
        </th>
        <th>
            Sobrenome
        </th>
        <th>
            Email
        </th>
        <th>
            Telefone
        </th>
        <th>
            Cidade
        </th>
        <th>
            Bairro
        </th>
        <th>
            rua
        </th>
        <th>
            
        </th>
    </tr>

<?php
$sql="SELECT * FROM doador";/*buscando o doador*/
$query=mysqli_query($con,$sql);
while($f=  mysqli_fetch_assoc($query)){/*faz retoorna todos os produtos ate retorna todos os produtos da ultima linha  ou seja $f--> e nome objeto nome do produto onde retorna tudo o preco e nome do produto */

    ?>
    <tr><!--indica apenas uma linha do produto -->
        <td>
            <?php echo $f['Nome']?>
        </td>
        <td>
            <?php echo $f['sobrenome']?>
        </td>

        <td>
            <?php echo $f['email']?>
        </td>

        <td>
            <?php echo $f['telefone']?>
        </td>

        <td>
            <?php echo $f['cidade']?>
        </td>

        <td>
            <?php echo $f['bairro']?>
        </td>

        <td>
            <?php echo $f['rua']?>
        </td>

    <td>
            <a href="deleteDoador.php?idDoador=<?php echo $f['IdDoador']?>">Deletar</a>
        </td>
        <td>
            <a href="editarDoador.php?idDoador=<?php echo $f['IdDoador']?>">Alterar</a>
        </td>
    </tr>
   
    <?php
}
?>

    <br><br>

</div>
  </form> 

	<h6></h6>
    
	<nav class="rodape">
		<ul>
			<li><a style="font-size: 15px; font-weight: bold;" href="#">HEMOCE.SP.GOV.BR</a></li>
			  <li class="sede" ><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">SEDE DO HEMOCE</a>
				<ul>
                    <p style="font-size: 12px; font-family:Helvetica; " >AV. JOSÉ BASTOS <br> 3390 - RODOLFO TEÓFILO <br>CAMPINAS, SP <br>CEP: 13386663 <br>CONTATO: (19) 98987-7077</p>
				</ul>
			</li>
			<li class="horarios" ><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">HORARIOS DE ATENDIMENTO</a>
				<ul class="subrodape">
					<p style="font-size: 12px; font-family:Helvetica; " >07H AS 18:30 DE SEGUNDA A SEXTA<br>07H AS 17:30 AOS SABADOS</p>
				</ul>
			</li>	
		  
			<li><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">NOSSOS CANAIS</a></li>
		</ul>
	 </nav>
 </nav> 
 


</body>
</html>