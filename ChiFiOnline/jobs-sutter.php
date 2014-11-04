<div class="modal-inner">
    <div class="modal-content">
        <?php
            if ($_POST["email"]<>'') {
                $ToEmail = 'daniel@elementaryos.org';
                $EmailSubject = "Employment Application from ".$_POST["first_name"]." ".$_POST["last_name"]."";
                $mailheader = "From: ".$_POST["email"]."\r\n";
                $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
                $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";

                $MESSAGE_BODY= "
                    <html>
                    <head>
                        <style>
                        p {
                            text-align: left;
                            max-width: 40em;
                            margin: 1em auto;
                            line-height: 1.5;
                        }
                        </style>
                    </head>
                    <body>
                        <h2>Their Info</h2>
                        <p>
                        Name: ".$_POST["first_name"]." ".$_POST["last_name"]."<br>
                        Email: ".$_POST["email"]."<br>
                        Phone Number: ".$_POST["phone_number"]."<br>
                        </p>
                    </body>
                    </html>
                ";
                
                mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
            ?>

            <h1>Your Application Has Been Submitted</h1>
            <p>It will be reviewed as soon as possible.</p>

            <?php
            } else {
            ?>

            <h1>Employment Application for Historic Folsom</h1>

            <form action="jobs.php#sutter" method="post">
                <h3>Your Info</h3>
                    <label for="first_name">First Name:</label>
                    <input name="first_name" id="first_name" type="text" required>
                    <label for="last_name">Last Name:</label>
                    <input name="last_name" id="last_name" type="text" required>
                    <label for="email">Email Address:</label>
                    <input name="email" type="email" required>
                    <label for="phone_number">Phone Number:</label>
                    <input name="phone_number"
                            id="phone_number" 
                            type="tel" 
                            pattern="(\+?\d[- .]*){7,13}"
                            oninvalid="setCustomValidity('Please enter a 7 or 10 digit phone number')"
                            onchange="try{setCustomValidity('')}catch(e){}" 
                            placeholder="(916) 867-5309" 
                    required>
                    <label for="street">Street:</label>
                    <input name="street" id="street" type="text" required>
                    <label for="city">City:</label>
                    <input name="city" id="city" type="text" required>
                    <label for="state">State:</label>
                    <input name="state" id="state" type="text" required>
                    <label for="zip">Zip Code:</label>
                    <input name="zip" id="zip" type="text" required>

                <h3>Emergency Contact</h3>
                    <label for="emergency_name">Name:</label>
                    <input name="emergency_name" id="emergency_name" type="text" required>
                    <label for="emergency_relation">Relation:</label>
                    <input name="emergency_relation" id="emergency_relation" type="text" required>
                    <label for="emergency_number">Phone Number:</label>
                    <input name="emergency_number"
                            id="emergency_number" 
                            type="tel" 
                            pattern="(\+?\d[- .]*){7,13}"
                            oninvalid="setCustomValidity('Please enter a 7 or 10 digit phone number')"
                            onchange="try{setCustomValidity('')}catch(e){}" 
                            placeholder="(916) 867-5309" 
                    required>
                    <label for="emergency_street">Street:</label>
                    <input name="emergency_street" id="emergency_street" type="text" required>
                    <label for="emergency_city">City:</label>
                    <input name="emergency_city" id="emergency_city" type="text" required>
                    <label for="emergency_state">State:</label>
                    <input name="emergency_state" id="emergency_state" type="text" required>
                    <label for="emergency_zip">Zip Code:</label>
                    <input name="emergency_zip" id="emergency_zip" type="text" required>

                <h3>Employment Info</h3>
                    <label for="position_desired">Position Desired:</label>
                    <input name="position_desired" id="position_desired" type="text" required>
                    <label for="date_available">Date Available:</label>
                    <input name="date_available" id="date_available" type="date"  required>
                    <label for="employment_status">Employment Status:</label>
                    <select name="employment_status" id="employment_status" required>
                            <option value="unemployed">I am currently unemployed</option>
                            <option value="employed">I am currently employed</option>
                    </select>


                    <p>Have you ever applied to or worked for Chicago Fire before?</p>
                    <p>Where?</p>
                    <p>When?</p>
                    <p>Reason for leaving?</p>
                    <p>Do you have any friends or relatives working for Chicago Fire?</p>
                    <p>Names and relationship</p>
                    <p>Why are you applying to work at Chicago Fire?</p>
                    <p>If hired, would you have a reliable means of transportation to/from work?</p>
                    <p>Are you at least 18 years old?</p>
                    <p>If hired, can you perform the essential functions and all other duties of the job for which you are applying?</p>
                    <p>If no, describe the duties and functions that you cannot perform:</p>
                    <p>Have you ever been convicted of a felony?</p>
                    <p>If yes, state nature of the crime(s), when and where convicted, and disposition of the case:</p>

                 <h3>Availability</h3>
                    <label for="availability_shifts">Desired Shifts:</label>
                    <select name="availability_shifts" id="availability_shifts" required>
                            <option value="opening">Opening</option>
                            <option value="lunch">Lunch</option>
                            <option value="dinner">Dinner</option>
                            <option value="closing">Closing</option>
                            <option value="any">Any Shift</option>
                    </select>
                    <label for="availability_hours">Hours per Week:</label>
                    <input name="availability_hours" id="availability_hours" type="number">
                    <label>Desired Days:</label>
                    <ul class="hbox">
                        <li><input type="checkbox" name="availability_days_monday" id="availability_days" value="Monday">Mon<li>
                        <li><input type="checkbox" name="availability_days_tuesday" id="availability_days" value="Tuesday">Tue<li>
                        <li><input type="checkbox" name="availability_days_wednesday" id="availability_days" value="Wednesday">Wed<li>
                        <li><input type="checkbox" name="availability_days_thursday" id="availability_days" value="Thursday">Thu<li>
                        <li><input type="checkbox" name="availability_days_friday" id="availability_days" value="Friday">Fri<li>
                        <li><input type="checkbox" name="availability_days_saturday" id="availability_days" value="Saturday">Sat<li>
                        <li><input type="checkbox" name="availability_days_sunday" id="availability_days" value="Sunday">Sun<li>
                    </ul>

                <h3>Education, Training, & Experience</h3>
                    <label for="experience">Experience:</label>
                    <select name="experience" id="experience" required>
                            <option value="previous_experience">I have restaurant experience</option>
                            <option value="no_previous_experience">I don't have restaurant experience</option>
                    </select>
                    <label for="experience_location">Location:</label>
                    <input name="experience_location" id="experience_location" type="text" placeholder="Leave blank if no previous experience">
                    <p>School	Name & Address	No. Of Years
Completed	Did You
Graduate?	Degree Or Diploma
High School			Yes
No	
College/University			Yes
No	
Vocational/Business			Yes
No	
Other			Yes
No<p>
                <p>Do you speak, write or understand any foreign languages?</p>
                <p>Do you have any other experience, training, qualifications or skills which you feel make you especially suited for work at Chicago Fire?</p>

                <h3>Employment History</h3>

                <h3>References</h3>

                <h3>Terms of Use:</h3>
                    <p>I hereby certify that I have not knowingly withheld any information that might adversely affect my chances for employment and that the answers given by me are true and correct to the best of my knowledge. I further certify that I, the undersigned applicant, have personally completed this application. I understand that any omission or misstatement of material fact on this application or on any document used to secure employment shall be grounds for rejection of this application or for immediate discharge if I am employed, regardless of the time elapsed before discovery.</p>
                    <p>I agree that if I am made an offer of employment with Chicago Fire, my employment can be terminated "at-will" by me or the company for any reason or no reason. Any agreement that alters the at-will employment relationship must be in writing and signed by both me and the company president. This is a integrated agreement regarding the at-will nature of my employment.</p>
                    <p>I hereby authorize Chicago Fire to thoroughly investigate my references, work record, education and other matters related to my suitability for employment and further, authorize my former employers to disclose to the company any and all letters, reports and other information related to my work records, without giving me prior notice of such disclosure. In addition, I hereby release Chicago Fire, my former employers and all other persons, corporations, partnerships and associations from any and all claims, demands or liabilities arising out of or in any way related to such investigation or disclosure.</p>
                <input class="button" type="submit" name="Submit" value="Apply at Historic Folsom">
            </form>
            <?php
        };
        ?>
    </div>
</div>