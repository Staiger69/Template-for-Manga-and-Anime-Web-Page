<?php 
    $sitepath="http://people.oregonstate.edu/~guzmannt/mangamania/contactus/index.php";
    $pagetitle="Conctact us";
    include '../header.html'; 
?>


  <?php
        $name = $_POST['firstlastname'];
        $email = $_POST['emailaddress'];
        $phone = $_POST['phone'];
        $web = $_POST['web'];
        $message = $_POST['message'];
        $from = $_POST['firstlastname']; 
        $to = 'guzmannt@oregonstate.edu'; 
        $subject = '[Resume;] inquiry';
        $human = $_POST['human'];
        /* extra credit */
        $social = isset($_POST['socialmedia']) ? $_POST['socialmedia'] : '';
        $social_msg = is_array($social) ? implode(", ", $social) : '';


        $headers .= "Reply-To: <{$_POST['emailaddress']}>";
        $body = "$name $email from $web would like a call back at $phone. 
        Their favorite marketing outlets include $social_msg.
        They sent this message: $message\n";
            if ($_POST['submit']) {
            if ($name != '' && $email != '') {
                if ($human == '4') {                 
                    if (mail ($to, $subject, $body, $from)) { 
                        echo '<p class="confirmation">Your message has been sent!</p>';
                    } else { 
                        echo '<p class="tryagain">Something went wrong. Please try again.</p>'; 
                    } 
                } else if ($_POST['submit'] && $human != '4') {
                    echo '<p class="tryagain">The form was cleared because you provided an incorrect Anti-Spam answer. Please try again. </p>';
                }
                } else {
                    echo '<p class="tryagain">Please fill in all required fields.</p>';
                }
            }
  ?>

    <!-- contact form -->
<form class="light-blue-bg trans boxshadow" id="contact" action="index.php" method="post">
      <h2 class="light-blue-bg">Contact form</h2>
      <fieldset>
      <legend class="light-blue-bg trans">Contact Information</legend>
        <label for="firstlastname" class="required">First and Last Name</label>
        <input name="firstlastname" id="firstlastname" type="text" required placeholder="Jane Doe"  maxlength="32"  />
        <label for="emailaddress" class="required">Email address</label>
        <input name="emailaddress" id="emailaddress" type="email" required placeholder="Jane@Doe.com"  maxlength="32"  />
      </fieldset>

          
     <fieldset>
      <legend class="light-blue-bg trans">Optional</legend>
        <label for="phone">Phone number</label>
        <input name="phone" id="phone" type="tel" placeholder="000-000-0000"  maxlength="12"  />
        <label for="web">Web URL</label>
        <input name="web" id="web" type="url" placeholder="https://www.janedoe.com"  maxlength="40"  />
        
       <p>Choose your favorite social media:</p>
        <label for="facebook">
        <input type="checkbox" name="socialmedia[]" id="facebook" value="Facebook" />Facebook</label>

        <label for="linkedin">
        <input type="checkbox" name="socialmedia[]" id="linkedin" value="LinkedIn" />LinkedIn</label>

        <label for="instagram">
        <input type="checkbox" name="socialmedia[]" id="instagram"  value="Instagram"  />Instagram</label>
      </fieldset> 
      
      <fieldset>
        <legend class="light-blue-bg trans">Message</legend>       
          <label for="subject">Select a
            <select name="subject" id="subject" required="" >
              <option value="">Subject:</option>
              <option value="Employment">Employment</option>
              <option value="Contract">Contract</option>
              <option value="Personal">Personal</option>
            </select>
          </label>
            <textarea id="message" name="message" required placeholder="Text only" maxlength="480" ></textarea>
            <label for="message">Type up to 480 characters.</label>
        
          </fieldset>
         <fieldset>
            <legend class="light-blue-bg trans">Validate and Send Form</legend>
             <p>To help prevent spam, answer this mathematical equation:</p>
           <label for="human">What is 2+2 ?
            <input name="human" id="human" required maxlength="1"/>
           </label>
           
            <label for="submit"></label>
            <input name="submit" id="submit" type="submit" value="Send"/>
                <label for="reset"></label>
            <input name="reset" id="reset" type="reset" value="Reset"/>

          </fieldset>
      
</form>


<?php include '../footer.html'; ?>