<?php
    include_once 'db_connect.php';
    session_start();
?>
<?php

    $usn= $_SESSION['session_usn'];
    $sql_extract_user = "SELECT * FROM user_info WHERE usn='$usn';";
    $result1 = mysqli_query($conn, $sql_extract_user);
    $result1_check = mysqli_num_rows($result1);
if($result1_check > 0)
{
    
    while($row = mysqli_fetch_assoc($result1))
    {
        $name=$row['first_name'];
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="home.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\Parag\Desktop\Hostelites Project\images\My Post (4).ico" type="image/gif" sizes="16x16">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>

    <div class="menu">
        <font>Hostelites</font><br>
        <ul list="nav">
        <li class="nav-item active">
        <a class="nav-link" href="Home_page.php"><font>Home</font>
            <span class="sr-only">(current)</span></a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="food.php"><font>Food</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="Events.php"><font>Events</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="facilities.php"><font>Facilities</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="help.php"><font>Help</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="Bank.php"><font>Bank</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="oldnew.php"><font>Sell / Buy</font></a>
        </li>
        </ul>
            <div class="dropdown">
                <i class="fa fa-user-o fa-2x" aria-hidden="true"></i><br>
                <div class="dropdown-content">
                    <a href="account.php"><?php echo 'Hi ', $name; ?></a>
                    <a href="newlogin.php">Sign-out</a>
                </div>
          </div>
        </div>
    
    <div class="about">
        <p class="heading" align="center"><b>About BMSET HOSTELS</b></p><center><hr color="#b94c4c" size="0.5" width="200px"></center>
    </div>
    <div class="container" style="padding: 0; overflow: hidden">
        <div class="row">
            <div class="col-md-4">
                <div class="one">
        <img src="images\Hostel.jpg">
                </div>
        </div>
        <div class="col-md-8">
            <div class="two">
            <p class="abt">The BMS Education Trust (BMSET) is a prestigious institution which founded and manages the top class  colleges viz., BMS College of Engineering (BMSCE) , BMS Institute of Technology & Management, BMS College of Law, BMS        College for women and others institutions.  <br><br>
            BMSET Hostels are part of BMSET and BMSET Hostels in the campus of BMS College of Engineering (BMSCE) provide accommodation to the students wishing to reside in the hostels. BMSET Hostels gives a distinct advantage of befriending with students from across the globe and expose them different religions, languages and customs of countries. Additionally, living as a community in the hostel will lead to all-round development of personality of a hostelite and will definitely go a long way in fostering world-class citizens.<br><br>
            Hostels are independent units in respects to its internal administration under the overall supervision of council of wardens and the hostel management. The hostels are located in the southern side and adjacent to the college campus and have a separate hostel office and mess within the hostel premises. </p>
            </div>
            </div>
    </div>
    </div>
    
    <div class="hostels">
        <p><font size="+4"><center>Hostels</center></font></p><hr color="#b94c4c" size="0.5" width="200px">
        <br>
        <p><center><font size="+3">Inside Campus</font></center></p><hr color="#b94c4c" size="0.5" width="100px">
        <div class="row">
            <div class="col-md-4">
                <div class="hos">
                    <p class="name"><font face="Letter Gothic Std"><b>GIRLS HOSTEL BLOCK UNIT-II</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">This block accommodates Female students. The hostel has Ground plus 5 floors consisting of 125 fully furnished rooms. All rooms are provided on twin sharing basis. The basement consists of warden’s office, Visitors lounge, reading room, kitchen and a dining hall, solar water heaters of 6,000 liters capacity, two lifts to carry 8 passengers each are provided. There are TV lounges and reading rooms in alternate floors and the lounge in the top floor accommodates indoor games like Table Tennis etc. Managed by International co-operation division</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hos">
                    <p class="name"><font face="Letter Gothic Std"><b>Hostel Unit-IV: GIRLS HOSTEL</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">This hostel accommodates 117 girl students comprising of basement, ground and three upper floors. Three Students are accommodated in each room. Warden’s office, visitors lounge, reading room, dining hall, TV lounge, indoor games are Provided. In the basement and parking for two wheelers is provided. There are 9 rooms in each floor and 10 rooms in each of the upper floors, solar water heater of 5,000 liters capacity, two lifts to carry 5 passengers each with 5 stops are provided. Washing machines are provided in all wings.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hos">
                    <p class="name"><font face="Letter Gothic Std"><b>Main Hostel (Phase-1) (GIRLS HOSTEL)</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">The newly constructed hostel is also for girl students. This new hostel building comprising of basement, ground and three upper floors to accommodate 76 girls. All rooms are twin sharing with attached toilet and bathrooms with internet facility. Basement is meant for vehicle parking. There are 10 rooms in each floor. Each student is provided with a wardrobe, study table, chair, cot and book storing cabinet. The building is equipped with solar water heating System of 3,000 LPD capacity. The facilities include reading room, Wi-fi-Internet accessibility, TV, Gymnasium, Washing machine, RO drinking water system, indoor sports facilities and parking space for student vehicles. The hostels are strictly under CC TV surveillance.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="hos2">
                    <p class="name"><font face="Letter Gothic Std"><b>HOSTEL UNIT-I : MAIN HOSTEL</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. comprising of a ground plus two floors with a small basement to accommodate 150 pre-final and final year students in single rooms. The facilities available include water heaters with a capacity of 3000 liters per day, TV lounge, Volley Ball Court, Indoor games like Carom Board, Table Tennis and a Multi Gym. Washing machine are provided to the students for their convenience.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hos2">
                    <p class="name"><font face="Letter Gothic Std"><b>Hostel Unit-III: BOYS HOSTEL</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">This unit constructed in 2003 to accommodate 288 boys has a plinth area of 5,611.29sq meters (60,377.48 sq. ft.) comprising of basement, ground and five upper floors. All rooms are on twin sharing basis. Basement is meant for vehicle parking. Each floor consists of three wings and in each wing, there are 8 rooms totalling to 24 rooms per floor. Each student is provided with a wardrobe, study table, chair, cot and overhead book storing cabinet. solar heaters of 7500 litres capacity are installed in terrace. Two lifts to carry 9 Passengers each with 7 Stops and fire-fighting services are installed. Other facilities include reading rooms, two TV lounges, visitors lounge, Indoor games like Carom, Table Tennis.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="hosout">
        <div class="row">
            <div class="col-md-4">
                <div class="head">
                    <p><center><font size="+3">Outside Campus</font></center></p><hr color="#b94c4c" size="0.5" width="100px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="hosout1">
                    <p class="name"><font face="Letter Gothic Std"><b>Annexure-I :New Boys Hostel-I</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">(about 300 Mtrs. from Main Hostel) Address: BMSET Hostel annexure-1 (I) (Mathrushree Comforts) # 48, New #710/2, 2nd Block, BSK 1st Stage, Ashoknagar, Bengaluru-560050 Accommodation Available:34 17 Rooms(Twin Sharing)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hosout1">
                    <p class="name"><font face="Letter Gothic Std"><b>Annexure-II : New Boys Hostel-II </b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">(about 300 Mtrs. from Main Hostel) Address: BMSET Hostel annexure-11 (II) (Muniyamman Nilaya) # 898/25, 2nd Block, BSK 1st Stage, Ashoknagar, Bengaluru-560050 Accommodation Available:48 24 Rooms(Twin Sharing)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hosout1">
                    <p class="name"><font face="Letter Gothic Std"><b>Annexure-III : New Hostel</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">(Adjacent to Mess Block)) Address: BMSET Hostel annexure-111 (III) (Chinnapa Krupa) # 9/3, 2nd Cross, N.R. Colony, Basavanagudi, Bengaluru-560019 Accommodation Available:44 22 Rooms(Twin Sharing)</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="hosout2">
                    <p class="name"><font face="Letter Gothic Std"><b>Annexure-IV : Boys Hostel</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">( about 1000 mts from Main hostel) Address: #73, vidhyapeetha road, Balaji Nagar, BSK 3rd Stage, Bengaluru-560085. Accommodation Available:50</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hosout2">
                    <p class="name"><font face="Letter Gothic Std"><b>Annexure-V : Boys Hostel</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                <p class="des">( about 400 mts from Main hostel) Address: #73, vidhyapeetha road, 6th Cross, Ashoknagar, BSK 3rd Stage, Bengaluru-560085. Accommodation Available: 60</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="information" align="center">
            
            <font size="+2" color="white" face="Adobe Gothic Std">Connect with Us</font><br> 
                  <div class="social-container">
        <a href="https://www.facebook.com/BMS-College-of-Engineering-52818113981/" class="social"><i class="fa fa-facebook-square fa-2x" style="color:white;" size="+2" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/bmsce_utsav/?hl=en" class="social"><i class="fa fa-instagram fa-2x" style="color:white;" aria-hidden="true"></i></a>
        <a href="https://in.linkedin.com/school/b.-m.-s.-college-of-engineering/" class="social"><i class="fa fa-linkedin-square fa-2x" style="color:white;" aria-hidden="true"></i></a>
                <a href="https://www.bmsce.ac.in/" class="social"><i class="fa fa-google fa-2x" style="color:white;" aria-hidden="true"></i></a>
      </div>
        
        </div>
 
</body>
</html>