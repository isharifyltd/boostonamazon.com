<?php 
 // Google reCAPTCHA API key configuration 
$siteKey     = '6Lc_zT4iAAAAAOiRLEj-jzSFl0y_4UX5xoVOlreO'; 
$secretKey     = '6Lc_zT4iAAAAAKF2Ok0lZA5tKJZYf65rhgdQvkEV'; 

// Recipient 
// $to = 'sohanur.sr63@gmail.com'; 

$toEmail = 'sohanur.sr63@gmail.com'; 
 
// Sender 
$from = 'sihab.isharify@gmail.com'; 
$fromName = 'Boost on Amazon'; 
 
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 


// If the form is submitted 
if(isset($_POST['submit_pdf'])){ 
    // Get the submitted form data 
    $postData = $_POST; 
    $first_name = trim($_POST['first_name']); 
    $last_name = trim($_POST['last_name']); 
    $email = trim($_POST['email']); 

$to = $email; 


     
    // Validate form fields 
    if(empty($first_name)){ 
        $valErr .= 'Please enter your First Name.<br/>'; 
    } 
    if(empty($last_name) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid Last Name.<br/>'; 
    } 
    if(empty($email)){ 
        $valErr .= 'Please enter email.<br/>'; 
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


        // Email subject 
        $subject = 'From Boost On Amazon';  

        $subject_BOAZ = 'New contact request submitted';  
        
        // Attachment file 
        $file = "assets/files/Boost_On_Amazon_Become_Unstoppable_On_Amazon.pdf"; 
        
        // Email body content 
        $htmlContent = ' 
            <h3>From Boost on Amazon</h3> 
            <p>This email is sent from the PHP script with attachment.</p> 
        '; 


                    $htmlContent_BOAZ = " 
                            <h2>Contact Request Details</h2> 
                            <p><b>Name: </b>".$first_name." ".$last_name."</p> 
                            <p><b>Email: </b>".$email."</p>"
                            ; 
        
        // Header for sender info 
        $headers = "From: $fromName"." <".$from.">"; 
        
        // Boundary  
        $semi_rand = md5(time());  
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
        
        // Headers for attachment  
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
        
        // Multipart boundary  
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  

        $message_BOAZ = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent_BOAZ . "\n\n";  
        
        // Preparing attachment 
        if(!empty($file) > 0){ 
            if(is_file($file)){ 
                $message .= "--{$mime_boundary}\n"; 
                $fp =    @fopen($file,"rb"); 
                $data =  @fread($fp,filesize($file)); 
        
                @fclose($fp); 
                $data = chunk_split(base64_encode($data)); 
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
                "Content-Description: ".basename($file)."\n" . 
                "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
        } 
        $message .= "--{$mime_boundary}--"; 
        $returnpath = "-f" . $from; 
        
        // Send email 
        @mail($toEmail, $subject_BOAZ, $message_BOAZ, $headers);  


        @mail($to, $subject, $message, $headers, $returnpath);  

        
        // Email sending status 
        // echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 
        
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

?>