<?php 
 include "header/header.php";
 include "submit/submitContact.php";
?>




<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <!-- <div class="status-msg <?php// echo $status; ?>"><?php //echo $statusMsg; ?></div> -->


    <?php if($status=="error"){ ?>

<div id="overlay">
    <div class="messagebox">
    <div class="popup-image">
            <img src="assets/images/popup-error.png" alt="">
        </div>

        <p class="popup-heading">Error!</p>
        <p class="popup-body">Oops! something went wrong</p>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:85%;text-align:center;margin-left: 40px;">
        <button id="accept" class="popup-btn-error" onclick="popUp()">Retry</button>
    </div>  
</div>

<?php } else if($status=="success") {?>
<div id="overlay">
    <div class="messagebox">
        <div class="popup-image">
            <img src="assets/images/popup-image.png" alt="">
        </div>

        <p class="popup-heading">Your request has been submitted</p>
        <p class="popup-body">Our team members will check and submit your report in your mail address. Please check your mail for confirmation.</p>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:85%;text-align:center;margin-left: 40px;">
        <button class="popup-btn" id="accept" onclick="popUp()">OK</button>
    </div>  
</div>
<?php } ?>



<?php } ?>



<section>
    <div class="contact">
        <div class="container">
            <div class="contact-row">
                <div class="contact-left">
                    <h1>Get in Touch</h1>

                    <p>To be the company our customers want us to be, we need an eclectic group of passionate operators. Get to know the people who are leading the way at Untitled.</p>

                    <img src="assets/images/contact.png" alt="">
                </div>
                <div class="contact-right">
                    <form action="" method="post" class="contact-form">
                    

                        <div class="contact-name">
                            <div class="first-name">
                                <h4>First Name <span>*</span></h4>
                                <input type="text" name="first_name" placeholder="First Name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                            </div>
                            <div class="last-name">
                                <h4>Last Name <span>*</span></h4>
                                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                            </div>
                        </div>

                        <div class="contact-name">
                            <div class="first-name">
                                <h4>Your Email <span>*</span></h4>
                                <input type="email" name="email" placeholder="example@gmail.com" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                            </div>
                            <div class="last-name">
                                <h4>Your Phone Number <span>*</span></h4>
                                <input type="text" name="phone_number" placeholder="+000 0000 0000" value="<?php echo !empty($postData['phone_number'])?$postData['phone_number']:''; ?>" required>
                            </div>
                        </div>

                        <div class="contact-label">
                            <h4>Your Website</h4>
                       </div>
                       <div class="contact-website">
                            <input type="text" name="website" placeholder="www.example.com" value="<?php echo !empty($postData['website'])?$postData['website']:''; ?>" required>
                       </div>
                       <div class="contact-label">
                            <h4>Your Message</h4>
                       </div>
                       <div class="contact-message">
                            <input type="text" name="message" placeholder="Message" value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" required>
                       </div>

                       <div class="" style="margin-bottom: 20px">
                            <h4 style="margin-bottom: 10px">CAPTCHA</h4>
                            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                        </div>

                        <button type="submit" name="submit" class="contact-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
  

<?php
 include "footer/footer.php";
?>