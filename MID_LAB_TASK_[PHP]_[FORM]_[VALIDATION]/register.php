<?php
         $name="";
         $error_name="";
        $uname="";
        $error_uname="";
        $pass="";
        $error_pass="";
        $cpass="";
        $error_cpass="";

        $mail="";
        $error_mail="";
        $phone="";
        $error_phone="";
        $code="";
        $error_code="";

        $date="";
        $error_date="";

        $month="";
        $error_month="";

        $year="";
        $error_year="";

        $gender="";
        $error_gender="";


        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $error_name="Name required";
            }
            else if(strlen($_POST["name"]) < 6){
                $error_name="Name should be more than 6 characters long";
            }
            else if(strpos($_POST["name"]," ")){
                $error_name="Name should not contain space";
            }

            else{   
                $name=htmlspecialchars($_POST["name"]);

            }

            if(empty($_POST["uname"])){
                $error_uname="User name required!!!";
            }
            else if(strlen($_POST["uname"]) < 6){
                $error_uname="Username should be more than 6 characters long...";
            }
            else if(strpos($_POST["uname"]," ")){
                $error_uname="Username should not contain space";
            }

            else{   
                $uname=$_POST["uname"];

            }
            if(empty($_POST["pass"]))
		 {
			 $error_pass="[Password Required!!!!]";
		 }
		 elseif(htmlspecialchars($_POST["pass"]))
		 {
			 $error_pass=["HTML KeyWords Used"];
		 }
		 elseif (strlen($_POST["uname"])<8) {
		 	$error_pass=["[Password must be 8 charachters long"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $error_pass="[Password should contain special character!!]";
		 }
		 elseif(!is_numeric($_POST["pass"]))
		 {
			 $error_pass="[Password should contain Numeric values!]";
		 }
		 elseif(!ctype_upper($_POST["pass"]))
		 {
			 $error_pass="[Password should contain UpperCase values!!!]";
		 }
		 elseif(!ctype_lower($_POST["pass"]))
		 {
			 $error_pass="[Password should contain LowerCase values!!]";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $error_pass="[Password should not contain  space]";
		 }
		 else
		 {
			 $error_pass=$_POST["pass"];
         }

            
			if(empty($_POST["pass"])){
                $error_cpass="Enter pass again!";
                
            }
            else if($_POST["cpass"]!=$pass){
                $error_cpass="Password mismatched!";
            }


            if(empty($_POST["mail"])){
                $error_mail="E-mail required!!";
            }
            else if(!strpos($_POST["mail"],"@")){
                $error_mail="Must contain @";
            }
            else{   
                $name=htmlspecialchars($_POST["mail"]);

            }


            if(empty($_POST["gender"])){
                $error_gender="Gender must be selected!!";
            }
            else{
                $gender=$_POST["gender"];
            }


            if(empty($_POST["date"])){
                $error_date="Date must be selected";
            }
            else{
                $date=$_POST["date"];
            }


            if(empty($_POST["month"])){
                $error_month="Month must be selected";
            }
            else{
                $month=$_POST["month"];
            }


            if(empty($_POST["year"])){
                $error_year="Year must be selected";
            }
            else{
                $byear=$_POST["year"];
            }


            $up=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(ctype_lower($up[$i])){
                    $upt=true;
                    break;
                }
                else{
                    $error_pass="there is no upper";
                }
            }
            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++){
                if(ctype_lower($up[$i])){
                    $lowt=true;
                    break;
                }
                else{
                    $error_pass="there is no upper";
                }
            }


            if(!isset($_POST["hear[]"])){
                $error_hear="This must be selected";
            }
            else{
                $hobbies=$_POST["hear[]"];
            }
           
           
        
        }
    ?>
<html>
<head>
</head>
<body>

        <fieldset>
            <legend><h2>REGISTRATION</h2></legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><span><b>Name</b></span></td>
                        <td>: <input type="text" name="name" placeholder ="Name">
                            <span><?php echo $error_name;?></span></td>
                    </tr>
                    
                    <tr>
                        <td><span><b>Email</b></span></td>
                        <td>: <input type="text" name="mail" placeholder ="E-mail">
                        <span><?php echo $error_mail;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Username</b></span></td>
                        <td>: <input type="text" name="uname" placeholder ="Username">
                            <span><?php echo $error_uname;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Password</b></span></td>
                        <td>: <input type="password" name="pass" placeholder ="Password">
                        <span><?php echo $error_pass;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Confirm Password</b></span></td>
                        <td>: <input type="password" name="cpass" placeholder ="Confirm Password">
                        <span><?php echo $error_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td><span><b>Gender</b></span></td>
                        <td>: <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="male">Female
                            <input type="radio" name="gender" value="male">Other
                            <span><?php echo $error_gender;?></span></td>
                    </tr>

                    <tr>
					<td><span><b>Birth Date</b></span></td>
                        <td>:<select name ="date">
                        <option disabled selected>Date</option>
                        <?php         for($date = 1; $date <= 31; $date++) echo"<option value = '".$date."'>".$date."</option>";     ?>
                        </select>

                        <select name ="month">
                        <option disabled selected>Month</option>
						<option>Jan</option>
							<option>Feb</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
                 
                        <select name ="year">
                        <option disabled selected>Year</option>
                        <?php         for($year = 1945; $year <= 2021; $year++)echo"<option value = '".$year."'>".$year."</option>";     ?>
                        </select>

                        <span><?php echo $error_date;?></span>
                        <span><?php echo $error_month;?></span>
                        <span><?php echo $error_year;?></span></td>
                    </tr>
						</select>
					</td>
				</tr>

                </table>

                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
			</form> 
    </fieldset>   
</body>
</html>