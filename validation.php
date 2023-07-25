<? php 
$username $psw $pswrepeat $firstname $lastname $address1 $address2 $city $state $zip $phone $email

$isValid = false;
$invalidcounter = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = clean_input($_POST["username"]);
  if (empty($username)){
    $username = "Please enter a Username";
    $invalidcounter++;
  }else if(strlen($username) < 6) {
      $username = "Username must be at least 6 characters";
      $invalidcounter++;
    }else {
      if(strelen($username) > 50) {
        $username = "Username must be less than 50 characters";
        $invalidcounter++;
      }
    }
  }
  
  $psw = clean_input($_POST["psw"]);
  if(empty($password)) {
    $password = "Password is required";
    $invalidcounter++;
  } else if(strlen($password) < 8) {
    $psw = "Password must be at least 8 characters";
    $invalidcounter++;
  }else if(strlen($password) > 50) {
    $psw = "Password must be less than 50 characters";
    $invalidcounter++;
  }else if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/",$psw)){
    $psw = "Password requires at least 1 capital letter, 1 lowercase letter, 1 digit, and 1 special character";
    $invalidcounter++;
  }
  
  $pswrepeat = clean_input($_POST["psw-repeat"]);
  if($psw != $pswrepeat) {
    $pswrepeat = "Both passwords must match";
    $invalidcounter++;
  }

    $firstname = clean_input($_POST["firstname"]);
  if (empty($firstname)) {
    $firstname = "First name is required";
    $invalidcounter++;
  }else if(strlen($firstname) > 50) {
    $firstname = "First name must be less than 50 characters"
    $invalidcounter++;
  }

    $lastname = clean_input($_POST["lastname"]);
  if (empty($lastname)) {
    $lastname = "Last name is required";
    $invalidcounter++;
  }else if(strlen($lastname) > 50) {
    $lastname = "Last name must be less than 50 characters"
    $invalidcounter++;
  }

    $address1 = clean_input($_POST["address1"]);
  if (empty($address1)) {
    $lastname = "Address is required";
    $invalidcounter++;
  }else if(strlen($address1) > 100) {
    $address1 = "Address box can not exceed 100 characters"
    $invalidcounter++;
  }

      $address2 = clean_input($_POST["address1"]);
  if(strlen($address2) > 100) {
    $address2 = "Address box can not exceed 100 characters"
    $invalidcounter++;
  }

      $city = clean_input($_POST["city"]);
  if (empty($city)) {
    $city = "A city is required";
    $invalidcounter++;
  }

    $state = clean_input($_POST["state"]);
  if (empty($state)) {
    $state = "A state is required";
    $invalidcounter++;
  }

    $zip = clean_input($_POST["zip"]);
  if (empty($zip)) {
    $zip = "Zip Code is required";
    $invalidcounter++;
  }else if(strlen($zip) < 5) {
    $zip = "Zip Code must be at least 5 digits";
    $invalidcounter++;
  }else if(!preg_match("/^(?!0{3})[0-9]{3,5}$/'", $zip)) {
    $zip = "Zip Code must be a number";
    $invalidcounter++;
  }

    $phone = clean_input($_POST["phone"]);
  if (empty($phone)) {
    $phone = "Phone number is required";
    $invalidcounter++;
  }else if(strlen($phone) > 12) {
    $phone = "Phone Number can not exceed 12 digits";
    $invalidcounter++;
  }else if(!preg_match("/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/", $phone)) {
    $phone = "Phone Number must be a number";
    $invalidcounter++;
  }

    $email = clean_input($_POST["email"]);
  if (empty($email)) {
    $email = "Email is required";
    $invalidcounter++;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = "Must be in an email form of coolguy@host.com"
    $invalidcounter++;
  }

  if($status != "married" || $status != "single" || $status != "other") {
    echo = "Martial Status is required"
  }
}
function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>