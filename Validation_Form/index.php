<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Validation Form</title>
  <style>
  *{color:white;}
  body{
    padding-top: 50px;  
    background-color:black; 
  }
  input, textarea{
    color: black;
  }
  form{
    display: block;
    height: 380px;
    padding: 10px;
  }
  #btn{background: black;
    color: white;
    border-color: white;}
    .container{
      margin: auto;
      border: 5px dotted silver;
      padding: 20px;
      width: 450px;
      height: 550px;
    }
    h2{
      text-align: center;
    }
    .input{
      width: 300px;
      height: 8px;
      padding-left: 10px;
      display: block;
    }
    .input input{
      float: right;
    }
    .input-big{
      height: 25px;
      width: 300px;
      margin-bottom: 10px;
    }
    .input-big label{
      float: left;
    }
    .input-big textarea{
      float: right;
    }
    
    .error {color: #FF0000;}
  </style>
</head>
<body>  

  <?php
// define variables and set to empty values
  $nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
  $name = $email = $username = $password = $comment = $gender = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

  //Email
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    
  //Username  
    if (empty($_POST["username"])) {
      $usernameErr = "Username is required";
    } else {
      $username = test_input($_POST["username"]);
    }

  //Password
    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
    }

  //Comment
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

  //Gender
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <div class = 'container'>
    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">  
      <div class = "input">
      <label>Name: </label>
        <!-- <span class="error">* <?php echo $nameErr;?></span> -->
        <input type="text" name="name" required>
      </div>
      <br>
      <div class = "input">
      <label>E-mail: </label>
        <!-- <span class="error">* <?php echo $emailErr;?></span> -->
        <input type="text" name="email" required>
      </div>
      <br>
      <div class = "input">
      <label>Username: </label>
        <!-- <span class="error">*<?php echo $usernameErr;?></span> -->
        <input type="text" name="username" required>
      </div>
      <br>
      <div class = "input">
      <label>Password: </label>
        <!-- <span class="error">*<?php echo $passwordErr;?></span> -->
        <input type="password" name="password" required>
      </div>
      <br><br>
      <div class = "input-big">
        <label>Comment: </label><textarea name="comment" rows="3" cols="20"></textarea>
      </div>
      <br><br>
      <div class = "input-big" required>
        <label>Gender: </label><input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male
        <!-- <span class="error">* <?php echo $genderErr;?></span> -->
      </div>
      <br>
      <input id = "btn" type="submit" name="submit" value="Submit" data-toggle="modal" data-target="#exampleModal">  
    </form>
  </div>
  <div class="modal fade i" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Congratulations!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>You have successfully registered</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php 
  if(isset($_POST['submit'])){
    session_start();
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    $_SESSION['username'] = htmlentities($_POST['username']);
    $_SESSION['password'] = htmlentities($_POST['password']);
    $_SESSION['comment'] = htmlentities($_POST['comment']);
    $_SESSION['gender'] = htmlentities($_POST['gender']);
    header('Location: result.php');
  }
  ?>
</body>
</html>