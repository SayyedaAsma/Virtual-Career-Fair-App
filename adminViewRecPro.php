<?php 
  
  include("db_connection.php");
  session_start();
 
  
  
  
      $id = $_GET['r_id'];
  
       $sql= "SELECT * FROM recruiter_signup2 WHERE ID ='$id'";
       $result = mysqli_query($conn, $sql);
       $row=mysqli_fetch_array($result);
       $rec_name = $row['rec_name'];
       $rec_email = $row['rec_email'] ;
  
       $rec_city = $row['city'];
       $rec_country = $row['country'];

       $rec_img = $row["rec_img"];

        $com_email=$row['com_email'];
		$cnic=$row['cnic'];

        $date_of_birth=date("d-m-Y",strtotime($row['date_of_birth']));
    
        $gender=$row['gender'];
        $phone_no=$row['phone_no'];

        	
        $job_title=$row['job_title'];
        $experience=$row['experience'];

        $com_logo = $row["com_logo"];

		$com_name=$row['com_name'];
        $com_phone_no=$row['com_phone_no'];
        $com_site=$row['com_site'];
	
		$com_address=$row['com_address'];
        $com_city=$row['com_city'];
        $com_country=$row['com_country'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rec_profile.css?<?php echo time(); ?>" />
    <title>Recruiter Profile</title>
</head>
<body>
    <?php include "header.php"; ?>

<div id="container">
	
    <div id="left-nav">
            
            <div class="clip1">
            <a href="#" title="Change Profile Picture"><img src="<?php echo "rec_profiles/".$row['rec_img']; ?>"></a>
            
            </div>

            <div class="user-details">
                <h3 style = 'text-transform: capitalize;'><?php echo $rec_name ?></h3>
                <!--  -->
            </div>
    </div>

    <div id="right-nav">
			<h1>Personal Info</h1>
			<hr />
			<br />
			<?php
			
			
				// $id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div style = 'text-transform: capitalize;'> ";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rec_name."";
				echo "</div> ";
				echo "<hr /> ";		
				// echo "<br /> ";		
				echo " <div >";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;".$rec_email."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$gender."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>DOB</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$date_of_birth."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>CNIC</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$cnic."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Contact</label>&nbsp;&nbsp;&nbsp;&nbsp;".$phone_no."";
				echo "</div> ";
				echo "<hr /> ";	
				
                echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rec_city."";
				echo "</div> ";
				echo "<hr /> ";	
                echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Country</label>&nbsp;&nbsp;&nbsp;&nbsp;".$rec_country."";
				echo "</div> ";
				echo "<hr /> ";	
                echo "</div> ";
				echo "<br /> ";	
				echo "<br /> ";	
			?>
			
		</div>

        <div id="left-nav">
            
            <div class="clip1">
            <a href="#" title="Change Profile Picture"><img src="<?php echo "company_logos/".$row['com_logo'] ?>"></a>
            
            </div>

            <div class="user-details">
                <h3 style = 'text-transform: capitalize;'><?php echo $com_name ?></h3>
                <!--  -->
            </div>
        </div>

        <div id="right-nav">
			<h1 style = "margin-left:10px;"> Company Info</h1>
			<hr />
			<br />
			<?php
			
			
				// $id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div style = 'text-transform: capitalize;'> ";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$com_name."";
				echo "</div> ";
				echo "<hr /> ";		
				// echo "<br /> ";		
				echo " <div >";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Email</label>&nbsp;&nbsp;&nbsp;".$com_email."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Job Title</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$job_title."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Experience</label>&nbsp;&nbsp;".$experience."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Contact</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$com_phone_no."";
				echo "</div> ";
				echo "<hr /> ";	
				// echo "<br /> ";		
				echo " <div>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Website</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$com_site."";
				echo "</div> ";
				echo "<hr /> ";	
				
                echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$com_city."";
				echo "</div> ";
				echo "<hr /> ";	
                echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Country</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$com_country."";
				echo "</div> ";
                echo "<hr /> ";	
                echo " <div style = 'text-transform: capitalize;'>";
				echo " <label style = 'margin-left: 0px; font-size:20px'>Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$com_address."";
				echo "</div> ";
				echo "<hr /> ";	
                echo "</div> ";
				echo "<br /> ";	
				echo "<br /> ";	
			?>
			
		</div>

		</div>
	
</body>

    </html>

<style>
.info-user{

font-size: 20px;
line-height: 25px;
/* text-align: center; */
}

</style>