<?php require_once('../plugin/contact-form/config.php'); ?>

<div class="page page-5 overflow-fix clear-fix layout-50">
    
    <!-- Left column -->
    <div class="layout-50-left">
    
        <h3>Contact me</h3>

        <p class="top-0">
            Ruth Howell<br/>
            8th Long River, Suite 15<br/>
            Houston, TX 77074
        </p>
        
        <p class="top-0">
            +123 205 808 809<br/>
            <a href="#">www.ruthhowell.com</a><br/>
            <a href="#">ruth.howell@mail.com</a>
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
            
            <li class="social-links-twitter">
                <span></span>
                <div>
                    <b>Twitter Profile</b>
                    <a href="#">http://twitter.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-facebook">
                <span></span>
                <div>
                    <b>Facebook Profile</b>
                    <a href="#">http://facebook.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-linkedin">
                <span></span>
                <div>
                    <b>Linkedin Profile</b>
                    <a href="#">http://linkedin.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-google">
                <span></span>
                <div>
                    <b>Google Profile</b>
                    <a href="#">http://googleplus.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-xing">
                <span></span>
                <div>
                    <b>Xing Profile</b>
                    <a href="#">http://xing.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-flickr">
                <span></span>
                <div>
                    <b>Flickr Profile</b>
                    <a href="#">http://flickr.com/ruth.howell</a>
                </div>
            </li>
            <li class="social-links-skype">
                <span></span>
                <div>
                    <b>Skype Nickname</b>
                    <a href="#">nickname: ruth.howell</a>
                </div>
            </li>
            
        </ul>
        <!-- /Social links list -->
        
    </div>
    <!-- /Right column -->
    
</div>