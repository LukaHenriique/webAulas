<?php
    include 'connect.php';
    include 'checkLogin.php';// quando na pagina check nao exixtir na sessao ele manda para ca para ser criada outra sessao ou fazer a busca caso exista 

    $s="select*from reg where id='$_SESSION[id]'";// quando o usuario volta ao home e criado no logom esse sessiom e assim ele sabera que esse usuario esta cadastrado oelo id do usuario 
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>
<html>
    <head>
        
    </head>
    <body>
<table>
    <tr>
        <td>
            Name
        </td><td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr>
    <td> Username</td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr><td> Password</td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
  <tr><td> City </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr>
      <td>Gender</td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  <tr><td> Image</td><td>

 <img src="<?php
echo $f['image'];?>" width="100px" height="100px">
</td>

</tr>
</table>
<a href="edit.php">Edit</a>
<a href="delete.php">Delete</a>
<a href="logout.php">Logout</a> <br><br>
<a href="viewall_city.php">City</a>
    </body>
</html>