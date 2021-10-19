<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
  require'database_connection.php';
  function validate_data($data){
    $data=trim($data);
    return($data);
  }
  $input_email= validate_data($_POST['email']);
  $input_password= validate_data($_POST['password']);
  if(empty($input_email)){
    header("Location: ../login.php?wanted= Email is Required");
    exit();
  }elseif(empty($input_password)){
    header("Location: ../login.php?wanted= Password is Required");
    exit();
  }else{
    $encrypt_password=md5($input_password);
    $admin_sql="SELECT * FROM admin WHERE email ='$input_email' AND password = '$encrypt_password'";
    $user_sql="SELECT * FROM user WHERE email ='$input_email' AND password = '$encrypt_password'";
    $rider_sql="SELECT * FROM rider WHERE email ='$input_email' AND password = '$encrypt_password'";
    $admin_query=mysqli_query($connection,$admin_sql);
    $user_query=mysqli_query($connection,$user_sql);
    $rider_query=mysqli_query($connection,$rider_sql);
    if(mysqli_num_rows($admin_query)===1){
      $admin_row=mysqli_fetch_assoc($admin_query);
      if($admin_row['email'] === $input_email && $admin_row['password'] === $encrypt_password){
        $_SESSION['name'] = $admin_row['name'];
				$_SESSION['email'] = $admin_row['email'];
				$_SESSION['position'] = $admin_row['position'];
        $_SESSION['status'] = $admin_row['status'];
        $_SESSION['id'] = $admin_row['id'];
        header("Location: ../admin");
		    exit();
      }
    }elseif(mysqli_num_rows($user_query)===1){
      $user_row=mysqli_fetch_assoc($user_query);
      if($user_row['email'] === $input_email && $user_row['password'] === $encrypt_password && $user_row['status'] === 'Active'){
                $_SESSION['id'] = $user_row['id'];
                $_SESSION['name'] = $user_row['name'];
                $_SESSION['email'] = $user_row['email'];
                $_SESSION['code'] = $user_row['code'];
                $_SESSION['position'] = $user_row['position'];
                $_SESSION['status'] = $user_row['status'];
            	header("Location: ../dashboard");
		        exit();
      }elseif($user_row['status'] === 'Inactive'){
				header("Location: ../login.php?disabled_msg= Your account has been Deactivated.");
		        exit();
          }
    }elseif(mysqli_num_rows($rider_query)===1){
      $rider_row=mysqli_fetch_assoc($rider_query);
      if($rider_row['email'] === $input_email && $rider_row['password'] === $encrypt_password && $rider_row['status'] === 'Active'){
                $_SESSION['id'] = $rider_row['id'];
                $_SESSION['name'] = $rider_row['name'];
                $_SESSION['email'] = $rider_row['email'];
                $_SESSION['code'] = $rider_row['code'];
                $_SESSION['position'] = $rider_row['position'];
                $_SESSION['status'] = $rider_row['status'];
            	header("Location: ../riderdashboard");
		        exit();
      }elseif($rider_row['status'] === 'Inactive'){
				header("Location: ../login.php?disabled_msg= Your account has been Deactivated.");
		        exit();
          }
    }else{
			header("Location: ../login.php?error=Incorect email or password");
	        exit();
		}
  }
}else{
  header("Location: ../login.php");
  exit();
}
?>