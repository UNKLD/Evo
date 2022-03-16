<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_border"></div>
            </div>
        </div>  
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter_content text-center">

                    <?php if (!isset($_SESSION['email'])) {
                        echo " <div class='newsletter_title'>Subscribe to our newsletter</div>
                        <div class='newsletter_text'>
                            <p>You will be provided with new information, notified when new products are available and provided with fast delivary service. We appreciate you'r support.</p>
                        </div>
                        <div class='newsletter_form_container'>
                            <form action='subscribe.php' method='POST' id='newsletter_form' class='newsletter_form'>
                                <input name='email' type='email' class='newsletter_input' required='required'>
    
                                <button class='newsletter_button trans_200'><span>Subscribe</span></button>
                            </form>
                        </div> ";
                    } elseif (isset($_SESSION['email'])) {

                        $email = $_SESSION['email'];

                        $ch = "SELECT * FROM subscribers WHERE email = '$email'";
                        $result = $connect->query($ch);
                        $final = $result->fetch_assoc();
                    

                        if ($final['email'] != null ) {
                            echo " <div class='newsletter_title'>Thank you for subscribing to our newsletter</div>";
                        } else {
                            echo " <div class='newsletter_title'>Subscribe to our newsletter</div>
                            <div class='newsletter_text'>
                                <p>You will be provided with new information, notified when new products are available and provided with fast delivary service. We appreciate you'r support.</p>
                            </div>
                            <div class='newsletter_form_container'>
                                <form action='subscribe.php' method='POST' id='newsletter_form' class='newsletter_form'>
                                    <input name='email' type='email' class='newsletter_input' required='required'>
        
                                    <button class='newsletter_button trans_200'><span>Subscribe</span></button>
                                </form>
                            </div> ";
                        }
                    }



                    ?>

                </div>
            </div>
        </div>
    </div>
</div>