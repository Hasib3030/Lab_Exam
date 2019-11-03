<?php
    $errid=null;
    $errname=null;
    $errPassword=null;
	$errCpassword=null;
	$errUsert=null;
    
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $password = $_POST['password'];
		$Cpassword = $_POST['Cpassword'];
		$Usert = $_POST['Usert'];

        if(empty($id) == false)
        {
            if(preg_match("/0-9/",$id))
            {
               
            }
            else
            {
                $errid =  "Invalid id";
                
            }
        }
        else
        {
            $errid = "Empty id";
            
        }
        

        if(empty($name) == true)
        {
            $errname = "Empty name";
        }
        else
        {
            if(strlen($name >= 8))
            {
                $errname = "name Mustber greater then 8 char";
                
            }
        }

        if(empty($password) == true)
        {
            $errPassword = "Empty Password";
        }
        else
        {
            if(strlen($password >= 5))
            {
                $errPassword = "Password should be 5 char";
            }
            else
            {
                
            }
        }

        if($errid==null && $errname==null && $errPassword==null)
        {
           echo "Successfully Registered";
			$inf =  $id." ".$password." ".$Cpassword." ".$name." ".$type."\r\n";

			$myfile=fopen('info.txt', 'w');
			fwrite($myfile, $inf);
			fclose($myfile);
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Registration</title>
</head>
<body>
    <form method="POST" action="">
	  <fieldset>
	  <legend>Registration</legend> 
        <center>
            <table border="0">
                <tr>
                    <td>
                        <input type="number_format" name="id" placeholder="id">
                    </td>
                    <td>
                        <?php echo $errid ?>
                    </td>
                </tr>
				
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Set Password">
                    </td>
                    <td>
                        <?php echo $errPassword ?>
                    </td>
                </tr>
                  				
				<tr>
                    <td>
                        <input type="Cpassword" name="Cpassword" placeholder="Set Cpassword">
                    </td>
                    <td>
                        <?php echo $errCpassword ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="name" placeholder="Set Name">
                    </td>
                    <td>
                        <?php echo $errname ?>
                    </td>
                </tr>
				
				<tr>
				   <td>
				    <input type="radio" name="Usert" value="User"> User
                    <input type="radio" name="Usert" value="Admin"> Admin
				   
				   </td>
				   <td>
				      <?php echo $errname ?>
				   </td>
				</tr>

              
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Sing up">
                    </td>
                    <td>
				         <a href='ahome.php'>Sing In</a>
				    </td>
                </tr>
				
				
            </table>
        
        </center>
	    </fieldset>
    </form>
    
</body>
</html>