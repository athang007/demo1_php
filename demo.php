<?php 
    $username = $_POST["username"]
    $password = $_POST["password"]
    $birthdate = $_POST["birthdate"]
    $gender = $_POST["gender"]
    $xemphim = $_POST["xemphim"]
    $nghenhac = $_POST["nghenhac"]
    $docsach = $_POST["docsach"]
    $infor = $_POST["infor"]

    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;}

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($username)) {
    //         $usernameErr = "Username is required";
    //     }
    
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($password)) {
    //         $passwordErr = "Password is required";
    //     }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($gender)) {
    //         $genderErr = "Gender is required";
    //     }
       
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $xemphim;
    echo "<br>";
    echo $nghenhac;
    echo "<br>";
    echo $docsach;
    echo "<br>";
    echo $infor;
    
?>