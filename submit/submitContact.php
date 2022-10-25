<?php 
// Google reCAPTCHA API key configuration 
$siteKey     = '6Lc_zT4iAAAAAOiRLEj-jzSFl0y_4UX5xoVOlreO'; 
$secretKey     = '6Lc_zT4iAAAAAKF2Ok0lZA5tKJZYf65rhgdQvkEV'; 
 
// Email configuration 
$toEmail = 'sohanur.sr63@gmail.com'; 
$fromName = 'Boost on Amazon'; 
$formEmail = 'sihab.isharify@gmail.com'; 
 
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
  
// If the form is submitted 
if(isset($_POST['submit'])){ 
    // Get the submitted form data 
    $postData = $_POST; 
    $first_name = trim($_POST['first_name']); 
    $last_name = trim($_POST['last_name']); 
    $email = trim($_POST['email']); 
    $phone_number = trim($_POST['phone_number']); 
    $message = trim($_POST['message']); 
    $website = trim($_POST['website']); 


     
    // Validate form fields 
    if(empty($first_name)){ 
        $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    } 
    if(empty($phone_number)){ 
        $valErr .= 'Please enter subject.<br/>'; 
    } 
    if(empty($message)){ 
        $valErr .= 'Please enter your message.<br/>'; 
    } 
     
    if(empty($valErr)){ 
         
        // Validate reCAPTCHA box 
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
 
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
 
                // Send email notification to the site admin 
                $subject = 'New contact request submitted'; 
                $htmlContent = " 
                    <h2>Contact Request Details</h2> 
                    <p><b>Name: </b>".$first_name." ".$last_name."</p> 
                    <p><b>Email: </b>".$email."</p> 
                    <p><b>Phone Number: </b>".$phone_number."</p> 
                    <p><b>Message: </b>".$message."</p> 
                    <p><b>Website: </b>".$website."</p>"
                    ; 
                 
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                // More headers 
                $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
                 
                // Send email 
                @mail($toEmail, $subject, $htmlContent, $headers); 
                 
                $status = 'success';
                $statusMsg = 'Your request has been submitted';
                $postData = ''; 
            }else{ 
                $statusMsg = 'Robot verification failed, please try again.'; 
            } 
        }else{ 
            $statusMsg = 'Please check on the reCAPTCHA box.'; 
        } 
    }else{ 
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    } 
}

// Display status message 
// echo $statusMsg."testing message";