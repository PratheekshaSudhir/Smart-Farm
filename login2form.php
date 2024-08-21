
<html>
    <head>
        <title>
            login form
        </title>
        <link rel="stylesheet" href="login2form.css">
    </head>
    <body id="loginbody">
        <header>
            <h1><u>Registeration Page</u></h1>
            <h3>Make sure you enter all the details correctly</h3>
        </header>
        <form name="form" action="#" method="POST" class="loginform" onsubmit="return  validateForm(event) ">
            <fieldset>
                <fieldset>
                    <legend>Name</legend>
                    <label for="name" >First Name:</label>
            <input type="text" id="name" name="fname" required><br><br>
            <label for="name" >Last Name:</label>
            <input type="text" id="name" name="lname" required>
                </fieldset>
            <fieldset>
                <legend>Contact Information</legend>
                <label >Gender:</label>
                <input type="radio"  name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio"  name="gender" value="Female">
                <label for="male">Female</label>
                <input type="radio"  name="gender" value="Others">
                <label for="male">Others</label>
                <input type="radio"  name="gender" value="Prefer not to say">
                <label for="male">Prefer not to say</label><br><br>
                <label for="email">Email id:</label>
                <input type="email" id="email" name="email" required>
                <label for="name">Phone Number:</label>
                <input type="text" id="name" name="phone" required><br><br>
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="5" cols="100" required></textarea><br><br>
                <label for="city">City:</label>
                <input type="text" name="city" required>
                <label for="state">State:</label >
                <input type="text" name="state" id="state"required><br><br>
                <label for="pincode">Pincode:</label>
                <input type="text" name="pin" id="pin"required>
                <label for="country">Country:</label>
                <input type="text" name="country" id="country"required>
            </fieldset>
            <fieldset>
                <legend>Farm Information</legend>
                <label for="farmtype">Type Of Farming:</label>
                <select id="farmtype" name="farmtype" required>
                    <option value="Crop farming">Crop farming</option>
                    <option value="Livestock farming">Livestock farming</option>
                    <option value="Mixed farming">Mixed farming</option>
                    <option value="Subsistence farming">Subsistence farming</option>
                    <option value="Organic farming">Organic farming</option>
                    <option value="Agroforestry">Agroforestry</option>
                </select><br><br>
                <label for="farmsize">Farm Size(in hectares):</label>
                <input type="text" name="farmsize" required><br><br>
                <label for="location">Location of the farm (if different from personal address):</label>
                <input type="text" name="location" id="location" required><br><br>
                <label for="years">Years of Experience in Agriculture:</label>
                <input type="text" name="years" id="years" required>
            </fieldset>
            <fieldset>
                <legend>Products</legend>
                <label for="croptype">Names of Crops grown/livestock:</label>
                <input type="text" name="croptype" id="croptype" required><br><br>
                <label for="quantity">Average quantity of production (in tones per hectares):</label>
                <input type="text" name="quantity" id="quantity" required><br><br>
                <label for="certification">Any certifications or organic labels (if applicable):</label>
                <input type="text" name="certification" id="certification">
            </fieldset>
            <fieldset>
                <legend>
                    Marketing Preferences
                </legend>
                <label for="marketChannels">Preferred marketing channels:</label>
                <select name="marketChannels" id="marketChannels">
                    <option value="NotSelected">Not Selected</option>
                    <option value="local markets">Local markets</option>
                    <option value="online platforms">Online platforms</option>
                    <option value="direct sales">Direct sales</option>
                </select>
            </fieldset>
           <fieldset>
            <legend>
                Password
            </legend>
            <label for="password"> Password:</label>
            <input type="password" id="name" name="pass" required><br><br>
            <label for="password">Confirm password:</label>
            <input type="password" id="name" name="cpass" required>
           </fieldset>
           
            
            
            <label id="checkbox" ><input type="checkbox" required ></label>
            <p id="agree">Agree to terms and Condition</p>
            
            <input type="submit" value="Register" name="register">
            <input type="reset">
            </fieldset>
            
        </form>
        <footer>
            <p>Grow, Connect, Thrive! Join a community of modern farmers revolutionizing agriculture. </p>
        </footer>
        <script>
            function passValidate() {
                var pass = document.form.pass.value;
                var cpass = document.form.cpass.value;
                
                if (pass.length < 8) {
                    alert("Password must be at least 8 characters long");
                    return false;
                }
                
                if (pass != cpass) {
                    alert("Password is not matching!!!");
                    return false;
                }
                
                // Return true only if all validations pass
                return true;
            }
    
            function validateName() {
                var firstName = document.form.fname.value;
                var lastName = document.form.lname.value;
                var city = document.form.city.value;
                var country = document.form.country.value;
                var state = document.form.state.value;
                var nameRegex = /^[a-zA-Z]+$/;
    
                if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
                    alert('Please enter alphabets only for the name.');
                    return false;
                }
                else if (!nameRegex.test(city)){
                    alert("Please enter alphabets for city");
                }
                else if (!nameRegex.test(state)){
                    alert("Please enter alphabets for state");
                }
                else if (!nameRegex.test(country)){
                    alert("Please enter alphabets for country");
                }
    
                return true;
            }
    
            function validatePhone() {
                var phone = document.form.phone.value;
                var phoneRegex = new RegExp("^[0-9]{10}$");
                var pinRegex = /^[0-9]{6}$/;
                var pin=document.form.pin.value;
    
                if (!phoneRegex.exec(phone)) {
                    alert('Please enter numeric characters only for the phone number.');
                    return false;
                }
                else if(!pinRegex.test(pin)){
                    alert("Please enter 6 numeric characters only for the Pincode")
                }
    
                return true;
            }
    
            function validateForm(event) {
                // event.preventDefault();
                var isValid = true;
    
                // Call all validation functions
                isValid &= validateName();
                isValid &= validatePhone();
                isValid &= passValidate();
    
                 if (isValid) {
                    document.form.submit(); // Submit the form
                }
                else {
                    event.preventDefault(); // Prevent form submission if validation fails
                }

            }
        </script>
    </body>
    </html>
<?php 
        include("connection.php"); 
        if(isset($_POST['register'])){
        #fetching the details
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $city = $_POST['city'];
        $state=$_POST['state'];
        $pin=$_POST['pin'];
        $farmtype=$_POST['farmtype'];
        $farmsize=$_POST['farmsize'];
        $location=$_POST['location'];
        $years=$_POST['years'];
        $marketChannels=$_POST['marketChannels'];
        $croptype=$_POST['croptype'];
        $quantity=$_POST['quantity'];
        $certification=$_POST['certification'];
        
    
        #inserting values
        $sql1 = "INSERT INTO personaldetails values('$fname','$lname','$gender','$email','$phone','$address','$city','$state','$pin')";
        if(mysqli_query($conn,$sql1)){
            // echo "<br>INSERTED SUCESSFULLY<br>";
        }
        else{
            echo "<script>alert('INSERTION UNSUCCESSFULL')</script>";
        }
    
        $sql2 = "INSERT INTO cropdetails (Fname, Email, FarmType, FarmSize, FarmLocation, ExperienceYears, MarketChannels, CropsGrown, Quantity, Certifications) 
         VALUES ('$fname', '$email', '$farmtype', '$farmsize', '$location', '$years', '$marketChannels', '$croptype', '$quantity', '$certification')";

        if(mysqli_query($conn,$sql2)){
            echo "<script>alert('You are successfully registered as a farmer in this website. You are now redirected to the farmer interface')</script>";
        ?>

            <meta http-equiv="refresh" content="0; url=http://localhost/farmIwp/farmer.php"/>

        <?php
        }
        else{
            echo "<script>alert('INSERTION UNSUCCESSFULL')</script>";
        }
        
    }     
?>