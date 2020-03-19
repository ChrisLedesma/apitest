

<div style="background-color: #45a29e;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin: 50px 0px 50px 0px;  width: 50%; padding: 5vh 0vh 5vh 0vh;">
  <img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:40%; margin: 0 auto;">
  <div style="text-align: center;
  padding: 10px 20px;">
  <h2><?php echo $_SESSION['user_email_address'] ?></h2>
  </div>
</div>
<h1>Welcome, <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?>! </h1>

<br><br>
<a href="signout.php"><div style="padding: 10px 10px 10px 10px; background-color: red; border-radius: 5px;">Logout</div></a></h3>
