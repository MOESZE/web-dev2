<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">

	</script>

	<link rel="stylesheet" href="style.css">

	<title>Regstration Page</title>

</head>
<?php
include 'validation.php'
?>
<body class="body>

    <div class=" container wrapper " >

        <div class="heading ">

        <h1 class="title ">Register</h1>

        <h4>Fill Your Information in The Following Boxes</h4>

        </div>

        <br>

    <form  class="form-horizontal " action=" ">

        <div class="form-group ">

    <label for="username "><b>Username</b></label>

    <input type="text " placeholder="Enter Username " name="username " id="username " minlength="6 " maxlength="50 " required value= "<?php echo $username; ?>">

        </div>

        <div class="form-group ">

    <label for="psw "><b>Password</b></label>

    <input type="password " placeholder="Enter Password " name="psw " id="psw " minlength="8 " maxlength="50 "
  pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,50}$ " required value= "<?php echo $psw; ?>">

        </div>

        <div class="form-group ">

    <label for="psw-repeat "><b>Repeat Password</b></label>

    <input type="password " placeholder ="Re-Enter Password " name="Repeat Password " id="psw-repeat " pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,50}$ " required value= "<?php echo $pswrepeat; ?>"/> 
    <span id='message'></span>
    </label>

        </div>

    <!-- fname -->

    <div class="form-group ">

    <label for="firstname "><b>Firstname</b></label>

    <input type="text " placeholder="Enter First name " name="firstname " id="firstname " maxlength= "50 " required value= "<?php echo $firstname; ?>" >

    </div>

    <!-- lname -->

    <div class="form-group ">

    <label for="lastname "><b>Lastname</b></label>

    <input type="text " placeholder="Enter Last name " name="lastname " id="lastname " maxlength= "50 " required value= "<?php echo $lastname; ?>">

    </div>

    <!-- addresss 1 -->

    <div class="form-group ">

        <label for="address1 "><b>Address Line 1</b></label>

        <textarea cols="60 " rows="3 " placeholder="Address Line 1 " value= "<?php echo $address1; ?>" maxlength= "100 " required>  

    </textarea>  

    </div>

    <div class="form-group ">

        <label for="address1=2 "><b>Address Line 2</b></label>

    <textarea cols="60 " rows="3 " placeholder="Address Line 2 " value= "<?php echo $address2; ?>" maxlength= "100 " >  

    </textarea>  

    </div>

    <div class="form-group ">

    <label for="city "><b>City</b></label>

    <input type="text " placeholder="Enter City " name="city " id="city " maxlength= "50 " required value= "<?php echo $city; ?>">

    </div>

    <!-- state dropdown -->

    <div class="form-group ">

<label for="cars ">Choose your state:</label>

<select name="states " id="states " value= "<?php echo $state; ?>">

  <option value="Missouri ">Missouri</option>

  <option value="California ">California</option>

  <option value="New Hampshire ">New Hampshire</option>

  <option value="Oregon ">Oregon</option>

</select>

    </div>

<!-- zip code -->

<div class="form-group ">

<label for="zip code "><b>Zip code</b></label>

    <input type="number " placeholder="Zip Code " name="zip " id="zip " minlength= "5 " maxlength= "10 " pattern="[0-9]+ " required value= "<?php echo $zip; ?>">
    

    <!-- number -->

</div>

<div class="form-group ">

    <label for="phone "><b>Phone Number</b></label>

    <input type="number " placeholder="Enter Phone Number " name="number " id="number " maxlength= "12 " required value= "<?php echo $phone; ?>">

</div>

    <!-- email -->

    <div class="form-group ">

    <label for="email "><b>Email</b></label>

    <input type="email " placeholder="Enter Email " name="email " id="email " required value= "<?php echo $email; ?>">

    </div>

    <!-- gender -->

    <div class="form-group ">

    <input type="radio " id="male " name="gender " value="male " <?php if($gender == "male") {echo "checked";} ?> checked = "checked">

    <label for="male ">Male</label><br>

    <input type="radio " id="female " name="gender " value="female " <?php if($gender == "female") {echo "checked";} ?>>

    <label for="female ">Female</label><br>

    <input type="radio " id="other " name="gender " value="other " <?php if($gender == "other") {echo "checked";} ?>>

    <label for="other ">Other</label>

    </div>

    <!-- maritial status -->

    <div class="form-group ">

    <input type="radiolabel " id="married " name="married " <?php if($status == "married") {echo "checked";} ?> checked = "checked">

    <label for="married ">Married</label><br>

    <input type="radiolabel " id="single " name="single " <?php if($status == "single") {echo "checked";}?>>

    <label for="single ">Single</label><br>

    </div>

    <!-- DOB -->

    <div class="form-group ">

    <label for="birthday ">Enter Date of Birth:</label>

    <input type="date " id="birthday " name="birthday " required <?php echo $dob; ?>>

    </div>

<!-- Submit -->

<div class="form-group ">

<input type="submit " value="Submit ">

</div>

    <!-- reset -->

    <div class="form-group ">

<input type="reset " value="Reset " />

    </div>

        

    </form>

</div>
<?php
if ($valid) {
  ?>
  <form id= "validform" name= "validform" method= "POST" action= "validpost.php">
  <?php foreach($_POST as $key => $value){
    ?>
    <input name= "<?php echo $key;?>" value= "<?php echo $value;?>" type= "hidden" />
    <?php
  }
  ?>
  </form>
  <script>
  document.createElement('form').submit.call(document.getElementById('validform'));
  </script>
  <?php
}
?>

</body>

</html>