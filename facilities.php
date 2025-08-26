<!-- ... (previous HTML code) ... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HarvestHub - Your Fresh Produce Source</title>
    <link rel="stylesheet" href="style .css">
</head>
<body>

    <header>
        <h1>HarvestHub</h1>
        <p>Your Fresh Produce Source</p>
    </header>

    <nav>
        <ul>
            <li><a href="home.html">Overview</a></li>
            <li><a href="crops.html">Types of Crops</a></li>
            <li><a href="services.html">Agricultural Services</a></li>
            <li><a href="offers.html">Special Offers</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="gallery.html">Farm Gallery</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <form method="post" action="facilities.php" class="search-form">
            <div class="center-wrapper">
                <div class="search-container">
                    <input type="text" name="hnic" placeholder="Search Facility" />
                    <button type="submit">Search</button>
                </div>
            </div>
        </form>
    <div class="table-container">
    <?php
    include("config.php");

   $nic=$_POST['hnic'];
   $qry="select* from facility where Facility='$nic'";
   
   $result=@mysql_query($qry);
   if(!$result){
       die($qry);
   }
   print"<table>
     <tr>
       
       <th>Facility</th>
       <th>Descriptions</th>
     </tr>";
   $row=mysql_fetch_array($result);
   do {
     print"<tr>
       
       <td>$row[1]</td>
       <td>$row[2]</td>
     </tr>";
   } while ($row=mysql_fetch_array($result));
   Print"</table>";
 ?>
</div>
</div>
<section id="facilities">
    <h2>Facilities</h2>
    <p>Discover the facilities we provide to ensure the best farming practices.</p>

    <div class="facility-card">
        <img src="images/greenhouse.jpg" alt="Greenhouse">
        <h3>Greenhouse Farming</h3>
        <p>State-of-the-art greenhouses for controlled environment farming and increased crop yield.</p>
    </div>

    <div class="facility-card">
        <img src="images/irrigation.jpg" alt="Irrigation System">
        <h3>Modern Irrigation</h3>
        <p>Efficient irrigation systems to ensure optimal water distribution for all crops.</p>
    </div>

    <!-- Add more facility cards as needed -->

</section>

<!-- ... (remaining HTML code) ... -->
