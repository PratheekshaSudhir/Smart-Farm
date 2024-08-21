<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer</title>
    <link rel="stylesheet" href="farmer.css">
</head>
<body>
    <!-- header section -->
    <section class="title">
        <h1>Harvest Hub</h1>
        <p id="titlep">Cultivating Knowledge and Connectivity </p>
        <button id="login"><a href="login2form.php" target="_blank">Register here</a></button>
    </section>

    
    <!-- serach bar -->
    <section class="searchbar">
        <h2>Explore a Bounty of Agricultural Knowledge Awaits</h2>
        <form onsubmit="searchGoogle();return false;">
            <input type="search" id="Input" placeholder="Search" >
            <input type="submit"  value="Submit">
        </form>
    </section>
    <!-- content -->
    <section >
        <table>
            <tr>
                <td>
                    <!-- schemes -->
                    <div >
                        <img class="img_icon" src="https://www.krctimes.com/wp-content/uploads/2020/08/rkvy_Logo.png" alt="logo_scheme">
                        <h3>Government Schemes</h3>
                        <p>Harvesting Prosperity with Government Schemes for Cultivating Agricultural Excellence</p>
                        <button class="click_here"><a href="schemes.html" target="_blank">Click here</a></button>
                    </div>
                </td>
                <td>
                    <!-- Educational Resources -->
                    <div>
                        <img class="img_icon" src="https://t3.ftcdn.net/jpg/03/98/12/60/360_F_398126049_6smxkbsZrC3XpMySkNIrVzmcDvt2zFFv.jpg" alt="logo_edu_resource">
                        <h3>Educational Resources</h3>
                        <p>Empowering Farmers, Cultivating Knowledge: Growing Tomorrow's Harvest with Today's Education!</p>
                        <button class="click_here"><a href="edures.html" target="_blank">Click here</a></button>
                    </div>
                </td>
                <td>
                    <!-- updates -->
                    <div>
                        <img class="img_icon" src="https://cdn-icons-png.freepik.com/256/6373/6373820.png" alt="logo_update">
                        <h3>Update your Info</h3>
                        <p>Registered farmers can update or delete their information here</p>
                        <button class="click_here"><a href="display_crud.php" target="_blank">Click here</a></button>
                    </div>
                </td>
            </tr>
        </table>
    </section>
    <footer>
       <a href="#top">© Harvest Hub</a>
    </footer>
    <script>
        function searchGoogle() {
          // Get the search query from the input field
          var searchQuery = document.getElementById("Input").value;
      
          // Construct the Google search URL  and encodeURI is to eliminate special characters from search value
          var googleSearchURL = "https://www.google.com/search?q=" + encodeURIComponent(searchQuery); 
      
          // Redirect the user to the Google search page
          window.location.href = googleSearchURL;
        }
    </script>
</body>
</html>