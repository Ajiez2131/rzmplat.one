<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!--
 // $connu=new PDO("mysql:host=localhost;dbname=id20732163_projet;port=3306;charset=utf8",
  // "id20732163_siteweb",
    "salma.03WEB");
    if(isset($_POST['salma'])){
                   echo"bonjour monsieur";
              
                   $email=$_POST["email"];
                   $code=$_POST["code"];
                   if(!empty($email) && !empty($code)){
                        $insertt=$connu->prepare('INSERT INTO salma
                       (email,code)  VALUES(?,?)');
                       echo"pas heureus";
                       $insertt->execute(array($email,$code,));
                   }
        
        
        
        
    }

?>-->
     <form action="" method="post">
          
          <input type="email" placeholder="Email" name="email">
          <br>
          <br>
          <br>
          <input type="code" placeholder="" name="code">
          <br>
          <br>
          <button name="salma">botona</button>
     </form>

      

    
</body>
</html>