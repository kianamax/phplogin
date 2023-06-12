<?PHP 

$host="localhost";
$user="root";
$password="";
$db ="demo";

$conn = mysqli_connect($host, $user, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
mysqli_select_db($conn, $db);

if(isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

   // $sql = "SELECT * FROM form WHERE user='$username' AND password='$password' limit 1";

$query = "SELECT * FROM form  WHERE user='$username' AND pass='$password' limit 1";

$result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1){
        echo "You have successfully logged in";
        exit();
    }
    else{
        echo "Something went wrong";
        exit();
    }
  
}
// Close the connection
mysqli_close($conn);



?>

<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>

    
    <STyle>
        body{
            margin: auto;
            background-image: url("/images/tech.jpg");
            background-repeat: no-repeat;
            background-size: 100% 720px;
        }
        .container{
            width: 500px;
            height: 450px;
            text-align: center;
            margin: 0 auto;
            background-color: rgba(44, 62, 80,0.7);
            margin-top: 160px;  
         }
       .container img{
            width: 150px;
            height: 150px;
            margin-top: -60px;
        }

        input[type="text"],input[type="password"]{
            margin-top: 30px;
            height: 45px;
            width: 300px;
            font-size: 18px;
            margin-bottom: 20px;
            background-color: #fff;
            padding-left: 40px;
        }

        .form-input::before{
            content: "\f007";
            font-family: "FontAwesome";
            padding-left: 07px;
            padding-top: 40px;
            position: absolute;
            font-size: 35px;
            color: #2980b9; 
        }

        .form-input:nth-child(2)::before{
            content: "\f023";
        }

        .btn-login{
            padding: 15px 25px;
            border: none;
            background-color: #27ae60;
            color: #fff;
        }
    </STyle>

    <body>
        <div class="container">
        <img src="images/login.png" alt="">
        
        <form method="post" action="">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div class="form-input">
                <input type="text" name="password" placeholder="Enter your password">
            </div>
            <input type="submit" value="Login" name="submit" class="btn">
        </form>
        </div>
    </body>
</html>