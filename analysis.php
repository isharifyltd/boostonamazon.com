<?php 
 include "header/header.php";
 include "submit/submit.php";
?>


<section>
    <div class="analysis">
        <div class="container">
            <div class="analysis-row">
                <div class="analysis-left">
                    <h1>You must have spent a considerable amount of time trying to figure out how to grow your brand on
                        Amazon, which is a very complex process</h1>

                    <p>Our team of experts in marketing, advertising, and Amazon selling can help you grow your business
                        on Amazon. Don’t waste another minute trying to manage Amazon on your own.</p>

                    <img src="assets/images/feeling-blue-01.png" alt="" class="analysis-image">

                    <p> Book a discovery call with us by filling out this form. This isn’t a sales call; it's a
                        get-to-know-you call to see if we can help you achieve significant growth.</p>

                    <img src="assets/images/feeling-blue-02.png" alt="">

                    <p> We will review your Amazon account's historic data, listings, pages, competitors, etc., and
                        create a customized solution for you. We will demonstrate your time savings, your efficiency
                        upgrades, and investment.</p>

                    <img src="assets/images/feeling-blue-03.png" alt="">

                    <p>You will increase sales and strengthen your brand on Amazon. Our team will start implementing
                        your customized plan and become your team. You will receive frequent progress reports and begin
                        to see immediate results.</p>

                    <img src="assets/images/analysis-circle.png" alt="" class="analysis-image-hide">
                </div>



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


                <div class="analysis-right">
                    <form action="" method="post" class="analysis-form" name = "myForm" onsubmit="return(validate());">

                        <div class="analysis-name">
                            <div class="first-name">
                                <h4>First Name <span>*</span></h4>
                                <input type="text" name="first_name" placeholder="First Name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                            </div>
                            <div class="last-name">
                                <h4>Last Name <span>*</span></h4>
                                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                            </div>
                        </div>

                        <div class="analysis-name">
                            <div class="first-name">
                                <h4>Email <span>*</span></h4>
                                <input type="email" name="email" placeholder="example@gmail.com" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                            </div>
                            <div class="last-name">
                                <h4>Phone Number <span>*</span></h4>
                                <input type="text" name="phone_number" placeholder="+000 0000 0000" value="<?php echo !empty($postData['phone_number'])?$postData['phone_number']:''; ?>" required>
                            </div>
                        </div>


                        <div class="analysis-name">
                            <div class="first-name">
                                <h4>Company <span>*</span></h4>
                                <input type="text" name="company" placeholder="www.example.com" value="<?php echo !empty($postData['company'])?$postData['company']:''; ?>" required>
                            </div>
                            <div class="last-name">
                                <h4>Website</h4>
                                <input type="text" name="website" placeholder="www.example.com" value="<?php echo !empty($postData['website'])?$postData['website']:''; ?>" required>
                            </div>
                        </div>


                        <div class="analysis-label-select">
                            <h4>What is your situation? <span>*</span></h4>
                        </div>
                        <div class="analysis-select">
                            <select name="situation" id="pet-select" class="minimal">
                                <option value="" disabled selected>--Select One--</option>
                                <option value="I am new in Amazon" class="analysis-option-desing" <?php if(isset($_POST['situation']) && $_POST['situation']=='I am new in Amazon') echo "selected='selected'" ?> >I am new in Amazon</option>
                                <option value="Vendor Central" <?php if(isset($_POST['situation']) && $_POST['situation']=='Vendor Central') echo "selected='selected'" ?>>Vendor Central</option>
                                <option value="Seller Central" <?php if(isset($_POST['situation']) && $_POST['situation']=='Seller Central') echo "selected='selected'" ?>>Seller Central</option>
                                <option value="3rd Party selling product" <?php if(isset($_POST['situation']) && $_POST['situation']=='3rd Party selling product') echo "selected='selected'" ?> >3rd Party selling product</option>
                            </select>
                        </div>


                        <div>
                            <div class="form-group-label">
                                <h4>Yearly sales revenue on Amazon, if applicable <span>*</span></h4>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue1" value="Under $300,000" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='Under $300,000') echo "checked='checked'" ?>/>
                                <label for="revenue1">Under $300,000</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue2" value="$300,000 - $500,000" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='$300,000 - $500,000') echo "checked='checked'" ?>/>
                                <label for="revenue2">$300,000 - $500,000</label>
                            </div>
                            
                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue3" value="$500,000 to $1MM" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='$500,000 to $1MM') echo "checked='checked'" ?>/>
                                <label for="revenue3">$500,000 to $1MM</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue4" value="$1MM - $5MM" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='$1MM - $5MM') echo "checked='checked'" ?>/>
                                <label for="revenue4">$1MM - $5MM</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue5" value="$5MM - $10MM" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='$5MM - $10MM') echo "checked='checked'" ?>/>
                                <label for="revenue5">$5MM - $10MM</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue6" value="$10MM+" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='$10MM+') echo "checked='checked'" ?>/>
                                <label for="revenue6">$10MM+</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_on_amazon" id="revenue7" value="Not applicable" <?php if(isset($_POST['revenue_on_amazon']) && $_POST['revenue_on_amazon']=='Not applicable') echo "checked='checked'" ?>/>
                                <label for="revenue7">Not applicable</label>
                            </div>

                        </div>

                        <div>
                            <div class="form-group-label-2">
                                <h4>How long have you been selling on Amazon?<span>*</span></h4>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="selling_on_amazon" id="selling1" value="Under 1 year" <?php if(isset($_POST['selling_on_amazon']) && $_POST['selling_on_amazon']=='Under 1 year') echo "checked='checked'" ?>/>
                                <label for="selling1">Under 1 year</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="selling_on_amazon" id="selling2" value="1 - 2 years" <?php if(isset($_POST['selling_on_amazon']) && $_POST['selling_on_amazon']=='1 - 2 years') echo "checked='checked'" ?>/>
                                <label for="selling2">1 - 2 years</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="selling_on_amazon" id="selling3" value="2 - 4 years" <?php if(isset($_POST['selling_on_amazon']) && $_POST['selling_on_amazon']=='2 - 4 years') echo "checked='checked'" ?>/>
                                <label for="selling3">2 - 4 years</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="selling_on_amazon" id="selling4" value="4 - 6 years" <?php if(isset($_POST['selling_on_amazon']) && $_POST['selling_on_amazon']=='4 - 6 years') echo "checked='checked'" ?>/>
                                <label for="selling4">4 - 6 years</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="selling_on_amazon" id="selling5" value="6 + Years" <?php if(isset($_POST['selling_on_amazon']) && $_POST['selling_on_amazon']=='6 + Years') echo "checked='checked'" ?>/>
                                <label for="selling5">6 + Years</label>
                            </div>

                        </div>

                        <div class="analysis-label">
                            <h4>How significant is Amazon to your business?</h4>
                        </div>
                        <div class="analysis-message">
                            <input type="text" name="business" placeholder="Please share how Amazon impacts your business." value="<?php echo !empty($postData['business'])?$postData['business']:''; ?>" required>
                        </div>

                        <div class="analysis-label">
                            <h4>Amazon Product Link/s or Store Page <span>*</span></h4>
                        </div>
                        <div class="analysis-website">
                            <input type="text" name="product_list" placeholder="Amazon Product Link/s or Store Page" value="<?php echo !empty($postData['product_list'])?$postData['product_list']:''; ?>" required>
                        </div>

                        <div>
                            <div class="form-group-label-2">
                                <h4>Yearly sales revenue on online (not on Amazon) <span>*</span></h4>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon1" value="Under $300,000" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='Under $300,000') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon1">Under $300,000</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon2" value="$300,000 - $500,000" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='$300,000 - $500,000') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon2">$300,000 - $500,000</label>
                            </div>
                            
                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon3" value="$500,000 to $1MM" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='$500,000 to $1MM') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon3">$500,000 to $1MM</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon4" value="$1MM - $5MM" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='$1MM - $5MM') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon4">$1MM - $5MM</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon5" value="$5MM - $10MM" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='$5MM - $10MM') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon5">$5MM - $10MM</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon6" value="$10MM+" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='$10MM+') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon6">$10MM+</label>
                            </div>

                            <div class="hb-colour-options">
                                <input type="radio" class="white" name="revenue_not_amazon" id="revenue_not_amazon7" value="Not applicable" <?php if(isset($_POST['revenue_not_amazon']) && $_POST['revenue_not_amazon']=='Not applicable') echo "checked='checked'" ?>/>
                                <label for="revenue_not_amazon7">Not applicable</label>
                            </div>

                        </div>

                        <p class="analysis-p-color">Your Information is confidential and will never be shared with anyone else.</p>

                        <div class="captcha">
                            <h4>CAPTCHA</h4>
                            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                        </div>
                        
                        <button type="submit" name="submit" class="analysis-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
 include "footer/footer.php";
?>


<!-- data-sitekey="6Lc_zT4iAAAAAOiRLEj-jzSFl0y_4UX5xoVOlreO" -->