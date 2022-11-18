<?php 
session_start();
include('../dbcon.php');
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="userstyles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }

        .form-container {
            background-color: white;

            border: .5px solid #eee;
            border-radius: 5px;
            padding: 20px 10px 20px 30px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        }

        .form-group {
            text-align: left;
        }

        h1 {
            color: white;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .red-bar {
            width: 25%;
        }
    </style>
    <div class="container size">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
                <h3>SIGNUP</h3>
                <hr class="red-bar" style="width: 100%;">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">NAME:</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastname">GUARDIANS NAME:</label>
                        <input type="text" name="gname" id="gname" placeholder="Guardian's Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">BLOOD GROUP:</label><br>
                        <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                            <option>---Select Your Blood Group---</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">WEIGHT:</label>
                        <input type="number" min="1" name="weight" id="weight" placeholder="Weight" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">GENDER:</label><br>
                        Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:20px; margin-right:20px;"><br>
                        Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;"><br>
                    </div>
                    <div class="form-inline">
                        <label for="dob">DATE OF BIRTH:</label><br>
                        <input type="date" name="dob" id="dob" style="margin-left:10px;">
                    </div>
                    <div class="form-group">
                        <label for="fullname">EMAIL ID:</label>
                        <input type="email" name="email" id="email" placeholder="Enter EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_no">CONTACT NUMBER:</label>
                        <input type="tel" name="contact_no" placeholder="****" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">USERNAME:</label>
                        <input type="text" name="username" placeholder="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">ADDRESS:</label>
                        <input type="text" name="address" placeholder="xyz" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD:</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit" name="register" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
                    </div>
                    <div style="text-align: right; margin: -50px 10px 10px 10px;">
						<a href="userlogin.php" style="text-decoration:none; color: black;">Already A User? Login Here</a>
					</div>
                </form>
                <?php
                    include('../dbcon.php');

                    if (isset($_POST['register'])) {
                        $name = $_POST['name'];
                        $gname = $_POST['gname'];
                        $blood_group = $_POST['blood_group'];
                        $weight = $_POST['weight'];
                        $gender = $_POST['gender'];
                        $dob = $_POST['dob'];
                        $email = $_POST['email'];
                        $contact_no = $_POST['contact_no'];
                        $address = $_POST['address'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                    
                        $query = mysqli_query($con, "INSERT INTO `donor`(`name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES ($name, $gname, $gender, $dob, $weight, $blood_group, $email, $address, $contact_no, $username, $password)");
                        // $query_run = mysqli_query$query);
                    
                        if($query == true){
                            header('location: userlogin.php');
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>