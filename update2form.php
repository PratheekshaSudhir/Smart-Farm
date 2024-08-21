<?php
    include("connection.php");
    $email=$_GET['email'];
    $sql1="SELECT * FROM personaldetails where Email='$email'";
    $query=mysqli_query($conn,$sql1);
    $data=mysqli_fetch_array($query);


    $sql2="SELECT * FROM cropdetails where Email='$email'";
    $query2=mysqli_query($conn,$sql2);
    $data2=mysqli_fetch_array($query2);

?>

<html>
    <head>
        <title>
            login form
        </title>
        <link rel="stylesheet" href="login2form.css">
    </head>
    <body id="loginbody">
        <header>
            <h1><u>Update Page</u></h1>
            <h3>Make sure you enter all the details correctly</h3>
        </header>
        <form name="form" action="#" method="POST" class="loginform" onsubmit="return  validateForm(event) ">
            <fieldset>
                <fieldset>
                    <legend>Name</legend>
                    <label for="name" >First Name:</label>
            <input type="text" id="name" name="fname" value="<?php echo $data['Fname'];?>" required><br><br>
            <label for="name" >Last Name:</label>
            <input type="text" id="name" name="lname" value="<?php echo $data['Lname'];?>" required>
                </fieldset>
            <fieldset>
                <legend>Contact Information</legend>
                <label >Gender:</label>
                <input type="radio"  name="gender" value="Male"
                    <?php
                            if($data['Gender'] == 'Male')
                            {
                                echo "selected";
                            }
                        ?>
                >
                <label for="male">Male</label>
                <input type="radio"  name="gender" value="Female"
                    <?php
                            if($data['Gender'] == 'Female')
                            {
                                echo "selected";
                            }
                        ?>
                >
                <label for="male">Female</label>
                <input type="radio"  name="gender" value="Others"
                    <?php
                            if($data['Gender'] == 'Others')
                            {
                                echo "selected";
                            }
                        ?>
                >
                <label for="male">Others</label>
                <input type="radio"  name="gender" value="Prefer not to say"
                    <?php
                            if($data['Gender'] == 'Prefer not to say')
                            {
                                echo "selected";
                            }
                        ?>
                >
                <label for="male">Prefer not to say</label><br><br>
                <label for="email">Email id:</label>
                <input type="email" id="email" name="email" value="<?php echo $data['Email'];?>" required>
                <label for="name">Phone Number:</label>
                <input type="text" id="name" name="phone" value="<?php echo $data['Phone'];?>" required><br><br>
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="5" cols="100" required>
                    <?php echo $data['Address']; ?>
                </textarea><br><br>
                <label for="city">City:</label>
                <input type="text" name="city" value="<?php echo $data['City'];?>" required>
                <label for="state">State:</label >
                <input type="text" name="state" id="state" value="<?php echo $data['State'];?>" required><br><br>
                <label for="pincode">Pincode:</label>
                <input type="text" name="pin" id="pin" value="<?php echo $data['PinCode'];?>" required>
                <label for="country">Country:</label>
                <input type="text" name="country" id="country"required>
            </fieldset>
            <fieldset>
                <legend>Farm Information</legend>
                <label for="farmtype">Type Of Farming:</label>
                <select id="farmtype" name="farmtype" required>
                    <option value="Crop farming" 
                        <?php
                            if($data2['FarmType'] == 'Crop farming')
                            {
                                echo "selected";
                            }
                        ?>
                    >Crop farming</option>
                    <option value="Livestock farming"
                        <?php
                            if($data2['FarmType'] == 'Livestock farming')
                            {
                                echo "selected";
                            }
                        ?>
                    >Livestock farming</option>
                    <option value="Mixed farming"
                        <?php
                            if($data2['FarmType'] == 'Mixed farming')
                            {
                                echo "selected";
                            }
                        ?>
                    >Mixed farming</option>
                    <option value="Subsistence farming"
                        <?php
                            if($data2['FarmType'] == 'Subsistence farming')
                            {
                                echo "selected";
                            }
                        ?>
                    >Subsistence farming</option>
                    <option value="Organic farming"
                        <?php
                            if($data2['FarmType'] == 'Organic farming')
                            {
                                echo "selected";
                            }
                        ?>
                    >Organic farming</option>
                    <option value="Agroforestry"
                        <?php
                            if($data2['FarmType'] == 'Agroforestry')
                            {
                                echo "selected";
                            }
                        ?>
                    >Agroforestry</option>
                </select><br><br>
                <label for="farmsize">Farm Size(in hectares):</label>
                <input type="text" name="farmsize" value="<?php echo $data2['FarmSize'];?>" required><br><br>
                <label for="location">Location of the farm (if different from personal address):</label>
                <input type="text" name="location" id="location" value="<?php echo $data2['FarmLocation'];?>" required><br><br>
                <label for="years">Years of Experience in Agriculture:</label>
                <input type="text" name="years" id="years" value="<?php echo $data2['ExperienceYears'];?>" required>
            </fieldset>
            <fieldset>
                <legend>Products</legend>
                <label for="croptype">Names of Crops grown/livestock:</label>
                <input type="text" name="croptype" id="croptype" value="<?php echo $data2['CropsGrown'];?>"required><br><br>
                <label for="quantity">Average quantity of production (in tones per hectares):</label>
                <input type="text" name="quantity" id="quantity" value="<?php echo $data2['Quantity'];?>" required><br><br>
                <label for="certification">Any certifications or organic labels (if applicable):</label>
                <input type="text" name="certification" id="certification" value="<?php echo $data2['Certifications'];?>">
            </fieldset>
            <fieldset>
                <legend>
                    Marketing Preferences
                </legend>
                <label for="marketChannels">Preferred marketing channels:</label>
                <select name="marketChannels" id="marketChannels">
                    <option value="NotSelected">Not Selected</option>
                    <option value="local markets"
                        <?php
                            if($data2['MarketChannels'] == 'local markets')
                            {
                                echo "selected";
                            }
                        ?>
                    >Local markets</option>
                    <option value="online platforms"
                        <?php
                            if($data2['MarketChannels'] == 'online platforms')
                            {
                                echo "selected";
                            }
                        ?>
                    >Online platforms</option>
                    <option value="direct sales"
                        <?php
                            if($data2['MarketChannels'] == 'direct sales')
                            {
                                echo "selected";
                            }
                        ?>
                    >Direct sales</option>
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
            
            <input type="submit" value="Update" name="update">
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
        if(isset($_POST['update'])){
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
        
    
        #updating values
        $sql3 = "UPDATE personaldetails set Fname='$fname',Lname='$lname',Gender='$gender',Email='$email',Phone='$phone',Address='$address',City='$city',State='$state',PinCode='$pin' WHERE Email='$email'";
        if(mysqli_query($conn,$sql3)){
            //echo "<script>alert('Data updated Sucessfully')</script>";
        }
        else{
            echo "<script>alert('Updation Failed')</script>";
        }
    

        $sql4 = "UPDATE cropdetails set FarmType='$farmtype',FarmSize='$farmsize',FarmLocation='$location',ExperienceYears='$years',MarketChannels='$marketChannels',CropsGrown='$croptype',Quantity='$quantity',Certifications='$certification' WHERE Email='$email'";
        if(mysqli_query($conn,$sql4)){
            echo "<script>alert('Data updated Sucessfully')</script>";
            ?>

            <meta http-equiv="refresh" content="0; url=http://localhost/farmIwp/display_crud.php"/>

        <?php
        }
        else{
            echo "<script>alert('Updation Failed')</script>";
        }
        
    }     
?>