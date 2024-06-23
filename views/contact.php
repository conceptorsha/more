<section class="contact" id="contact" >
        <h2 class="section-title">Contact</h2>
    
        <div class="contact__container bd-grid">
            <div class="contact__details">
        <p>Email:<a href="info@more.co.ke">info@more.co.ke</a> </p>
                <p>Phone: +254799656213</p>
                <p>Location:<a href="Nairobi, Kenya">NextGen Nairobi, Kenya</a></p>
            </div>
            <form action="." class="contact__form" method="post">
            <input type="hidden" name="action" value="contact-us">

                <input type="text" placeholder="Name" class="contact__input" name="name" id="name">
                <input type="mail" placeholder="Email" class="contact__input" name="email" id='email'>
                <textarea name="message" id="message" cols="0" rows="10" class="contact__input"></textarea>
                <input type="submit" value="Send" class="contact__button button">
                <div id="statusMessage"> 
                    <!-- <?php
                    if (! empty($message)) {
                        ?>
                        <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                    <?php
                    }
                    ?> -->
                </div>
            </form>
        </div>

    </section>
    
