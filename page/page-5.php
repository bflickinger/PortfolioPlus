<?php require_once('../plugin/contact-form/config.php'); ?>

<div class="page page-5 overflow-fix clear-fix layout-50">
    
    <!-- Left column -->
    <div class="layout-50-left">
    
        <h3>Contact me</h3>

        <p class="top-0">
            Barry Flickinger<br/>
            4246 W Gail Drive<br/>
            Chandler, AZ 85226
        </p>
        
        <p class="top-0">
            480 262 2744<br/>
            <a href="#">www.barryflickinger.com</a><br/>
            <a href="#">barry.flickinger@gmail.com</a>
        </p>
        
        <br/>
        
        <!-- Contact form -->
       <form name="contact-form" id="contact-form" action="" method="post">

            <div>

                <div class="form-line block">
					<label for="contact-form-name" class="infield"><?php echo CONTACT_FORM_LABEL_DATA_NAME; ?></label>
                    <input type="text" name="contact-form-name" id="contact-form-name" value=""/>	
                </div>
                <div class="form-line block">
					<label for="contact-form-mail" class="infield"><?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?></label>
                    <input type="text" name="contact-form-mail" id="contact-form-mail" value=""/>	
                </div>					
                <div class="form-line block">
					<label for="contact-form-message" class="infield"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></label>
                    <textarea rows="0" cols="0" name="contact-form-message" id="contact-form-message" ></textarea>	
                </div>

                <div class="form-line">
					<div class="block float-right">
						<input type="submit" class="button" id="contact-form-send" value="Send"/>
					</div>
                </div>

            </div>	

        </form>
        <!-- /Contact form -->
        
    </div>
    <!-- /Left column -->
    
    <!-- Right column -->
    <div class="layout-50-right">
        
        <h3>Get in touch</h3>
        
        <!-- Social links list -->
        <ul class="no-list social-links">
            
            <li class="social-links-facebook">
                <span></span>
                <div>
                    <b>Facebook Profile</b>
                    <a href="#">https://www.facebook.com/profile.php?id=814857367</a>
                </div>
            </li>
            <li class="social-links-linkedin">
                <span></span>
                <div>
                    <b>Linkedin Profile</b>
                    <a href="#">https://www.linkedin.com/in/barry-flickinger-08167346</a>
                </div>
            </li>
            <li class="social-links-google">
                <span></span>
                <div>
                    <b>Google Profile</b>
                    <a href="#">https://plus.google.com/u/0/111570379438349252183</a>
                </div>
            </li>     

        </ul>
        <!-- /Social links list -->
        
    </div>
    <!-- /Right column -->
    
</div>