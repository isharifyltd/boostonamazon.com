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
    $company = trim($_POST['company']); 
    $website = trim($_POST['website']); 
    $situation = trim($_POST['situation']); 
    $revenue_on_amazon = trim($_POST['revenue_on_amazon']); 
    $selling_on_amazon = trim($_POST['selling_on_amazon']); 
    $business = trim($_POST['business']); 
    $product_list = trim($_POST['product_list']); 
    $revenue_not_amazon = trim($_POST['revenue_not_amazon']); 


     
    // Validate form fields 
    if(empty($first_name)){ 
        $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($last_name)){ 
        $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    } 
    if(empty($phone_number)){ 
        $valErr .= 'Please enter subject.<br/>'; 
    } 
    if(empty($company)){ 
        $valErr .= 'Please enter your message.<br/>'; 
    } 
    if(empty($website)){ 
        $valErr .= 'Please enter your website.<br/>'; 
    } 
    if(empty($situation)){ 
        $valErr .= 'Please enter your situation.<br/>'; 
    } 
    if(empty($revenue_on_amazon)){ 
        $valErr .= 'Please enter your situation.<br/>'; 
    } 
    if(empty($selling_on_amazon)){ 
        $valErr .= 'Please enter your situation.<br/>'; 
    } 
    if(empty($business)){ 
        $valErr .= 'Please enter your situation.<br/>'; 
    } 
    if(empty($product_list)){ 
        $valErr .= 'Please enter your situation.<br/>'; 
    } 
    if(empty($revenue_not_amazon)){ 
        $valErr .= 'Please enter your situation.<br/>'; 
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
                    <p><b>Company: </b>".$company."</p> 
                    <p><b>Website: </b>".$website."</p> 
                    <p><b>Situation: </b>".$situation."</p> 
                    <p><b>Revenue On Amazon: </b>".$revenue_on_amazon."</p> 
                    <p><b>selling On Amazon: </b>".$selling_on_amazon."</p> 
                    <p><b>Business: </b>".$business."</p> 
                    <p><b>Product List: </b>".$product_list."</p> 
                    <p><b>Revenue not Amazon: </b>".$revenue_not_amazon."</p>"
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