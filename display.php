<html>
    <head>
        <title>Farmer Details Display</title>
        <link rel="stylesheet" href="details.css">
    </head>
</html>
<?php
    include("connection.php");
    $sql1="SELECT * FROM personaldetails";
    $query=mysqli_query($conn,$sql1);
    $total=mysqli_num_rows($query);     //it finds the no. of rows

    
    
    if($total != 0)
    {
        ?>
    <h1>Farmer Personal Details</h1>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Pin Code</th>
        </tr>



        <?php
            while($data=mysqli_fetch_array($query))
            {
                echo "<tr>
                    <td>".$data['Fname']."</td>
                    <td>".$data['Lname']."</td>
                    <td>".$data['Gender']."</td>
                    <td>".$data['Email']."</td>
                    <td>".$data['Phone']."</td>
                    <td>".$data['Address']."</td>
                    <td>".$data['City']."</td>
                    <td>".$data['State']."</td>
                    <td>".$data['PinCode']."</td>
                </tr>";
            }
        }
        else
        {
            echo "Table has no records";
        }
        ?>
    </table>



<?php
    $sql2="SELECT * FROM cropdetails";
    $query2=mysqli_query($conn,$sql2);
    $total2=mysqli_num_rows($query2);     //it finds the no. of rows

    if($total2 != 0)
    {
        ?>
    <h1>Crop and Farm Details</h1>
    <table>
        <tr>
            <th>First name</th>
            <th>Email</th>
            <th>Farm Type</th>
            <th>Farm Size</th>
            <th>Farm Location</th>
            <th>Years of Experience</th>
            <th>Marketing Channels</th>
            <th>Crops Grown</th>
            <th>Quantity</th>
            <th>Certifications</th>
        </tr>

        <?php
            while($data2=mysqli_fetch_array($query2))
            {
                echo "<tr>
                    <td>".$data2['Fname']."</td>
                    <td>".$data2['Email']."</td>
                    <td>".$data2['FarmType']."</td>
                    <td>".$data2['FarmSize']."</td>
                    <td>".$data2['FarmLocation']."</td>
                    <td>".$data2['ExperienceYears']."</td>
                    <td>".$data2['MarketChannels']."</td>
                    <td>".$data2['CropsGrown']."</td>
                    <td>".$data2['Quantity']."</td>
                    <td>".$data2['Certifications']."</td>
                </tr>";
            }
        }
        else
        {
            echo "Table has no records";
        }
        ?>
    </table>

    