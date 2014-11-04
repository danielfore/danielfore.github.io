<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Chicago Fire Pizza</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/main.css"/>
        <link rel="stylesheet" href="/css/mobile.css"
           media="screen and (max-width: 40em)"> 
        <link rel="icon" type="image/png" href="/images/touch-icon.png">
        <link rel="apple-touch-icon" type="image/png" href="/images/touch-icon.png">
    </head>    
    <body>
        <?php include('nav.php'); ?>
        <div class="content community">
            <?php
                if ($_POST["email"]<>'') {
                    $ToEmail = 'community@chicagofire.com';
                    $EmailSubject = "Community Request from ".$_POST["org_name"]."";
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
                            <p>
                            Event Name: ".$_POST["event_name"]."<br>
                            Event Type: ".$_POST["event_type"]."<br>
                            Event Date: ".$_POST["event_date"]."<br>
                            From ".$_POST["event_time_start"]." until ".$_POST["event_time_end"]."<br>
                            </p>
                            <p>
                            Organization Name: ".$_POST["org_name"]."<br>
                            Organization Address: ".$_POST["org_address"]."<br>
                            Organization City: ".$_POST["org_city"]."<br>
                            Organization Website: <a href=".$_POST["org_website"].">".$_POST["org_website"]."</a><br>                            
                            </p>
                            <p>
                            Taxpayer ID: ".$_POST["org_id"]."<br>
                            ContactName: ".$_POST["contact_name"]."<br>
                            Email: ".$_POST["email"]."<br>
                            Contact Number: ".$_POST["contact_number"]."<br>
                            </p>
                            <p>
                            Deadline: ".$_POST["donation_deadline"]."<br>
                            Donation Type: ".$_POST["donation_type"]."<br>
                            Comment: ".nl2br($_POST["comment"])."
                            </p>
                        </body>
                        </html>
                    ";
                    
                    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
                ?>

                <h1>Your Request Has Been Submitted</h1>
                <p>It will be reviewed as soon as possible. Please allow up to 45 
                days for your request to be processed.</p>

                <?php
                } else {
                ?>

                <h1>#ChiFiCommunity</h1>
                <p>A huge part of our culture at Chicago Fire is about building 
                positive relationships. That means giving back to make our communities 
                a better place. If you're part of an organization that shares our
                values, we'd love to hear from you!</p>
                <p>Please fill out the form below and we will be in touch with 
                you after we have reviewed your request. Please give us at least
                45 days to process your request.</p>

                <form action="community.php" method="post">
                    <h2>Event Info</h2> <p>
                        <label for="event_name">Event name:</label>
                        <input name="event_name" id="event_name" type="text" required>
                        <label for="event_type">Type of event:</label>
                        <input name="event_type" id="event_type" type="text" placeholder="Academic Fundraiser">
                        <label for="event_date">Date:</label>
                        <input name="event_date" id="event_date" type="date"  required>
                        <label for="event_time_start">From:</label>
                        <input name="event_time_start" id="event_time_start" type="time">
                        <label for="event_time_end">Until:</label> 
                        <input name="event_time_end" id="event_time_end" type="time" >
                        </p>
                    <h2>Host Info</h2><p>
                        <label for="org_name">Organization Name:</label>
                        <input name="org_name" type="text" placeholder="Better Planet" required>
                        <label for="org_address">Address:</label>
                        <input name="org_address" type="text" placeholder="123 Awesome St." required>
                        <label for="org_city">City:</label>
                        <select name="org_city" required>
                            <option></option>
                            <option value="folsom">Folsom</option>
                            <option value="roseville">Roseville</option>
                            <option value="sacramento">Sacramento</option>
                            <option value="other">Other</option>
                        </select>
                        <label for="org_website">Website:</label>
                        <input name="org_website" type="url" size="50" placeholder="http://betterplanet.org">
                        </p>
                    <h2>Organization Info</h2><p>
                        <label for="org_id">Federal Taxpayer ID:</label>
                        <input name="org_id"
                                type="number" 
                                pattern="(\+?\d[- ]*){9,10}"
                                oninvalid="setCustomValidity('Please enter a 9 digit EIN')"
                                onchange="try{setCustomValidity('')}catch(e){}"
                                placeholder="000000000" 
                        required>
                        <label for="contact_name">Contact Name:</label>
                        <input name="contact_name" type="text" placeholder="Johnny B. Good" required>
                        <label for="email">Email Address:</label>
                        <input name="email" type="email" placeholder="Johnny@BetterPlanet.com" required>
                        <label for="contact_number">Phone Number:</label>
                        <input name="contact_number" 
                                type="tel" 
                                pattern="(\+?\d[- .]*){7,13}"
                                oninvalid="setCustomValidity('Please enter a 7 or 10 digit phone number')"
                                onchange="try{setCustomValidity('')}catch(e){}" 
                                placeholder="(916) 867-5309" 
                        required>
                        </p>
                    <h2>Donation Info</h2><p>
                        <label for="donation_deadline">Deadline:</label>
                        <input type="date" name="donation_deadline" required>
                        <label for="donation_type">Donation Type:</label>
                            <select name="donation_type">
                                <option value="giftcard">Gift Card</option>
                                <option value="giftbasket">Gift Basket</option>
                                <option value="monetary">Monetary</option>
                                <option value="other">Other</option>
                            </select>
                        <label for="comment">Details:</label>
                        <textarea name="comment" rows="6" id="comment" class="bodytext" placeholder="Describe your request here"></textarea>
                    </p>

                    <input class="button" type="submit" name="Submit" value="Send Request">
                </form>
                <?php
            };
            ?>
        </div>
    <?php include('footer.php'); ?>
    </body>
</html>