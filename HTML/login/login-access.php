?<php 
$login_txt=$_POST['login_txt'];
password_txt=$_POST['password_txt'];
$con=new mysqli('localhost','root','',harsha);
if($con->connect_error){
    die('connection Failed:'.$con->connect_error);
    }
    else{
        $stmt=$con->prepare("insert into hospital(Login,Password) values(??)");
    $stmt->bind_param("ss"),$Login,$password);
    $stmt->execute();
    echo "registration succesdfully";
    $stmt->close();
    $con->close();
    

    
    
    }
