<?php
    include 'utils.inc.php';
    start_page("Ozeliurs' Website");
    include_once 'fr/cv_fr.html';
?>

        <div class="card" style="margin: 10px auto">
            <h2>Contact Me.</h2>
            <div class="row">
                <div class="col">
                    <a href="mailto:ozeliurs@gmail.com" class="is-center is-vertical-align button outline">
                        <img src="icons/mail.svg" alt="mail_icon">
                        <p style="margin: auto 10px">ozeliurs@gmail.com</p>
                    </a>
                </div>
                <div class="col">
                    <a href="tel:+33695923210" class="is-center is-vertical-align button outline">
                        <img src="icons/phone.svg" alt="phone_icon">
                        <p style="margin: auto 10px">0695923210</p>
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.instagram.com/electromaxperso/" class="is-center is-vertical-align button outline">
                        <img src="icons/instagram.svg" alt="instagram_icon">
                        <p style="margin: auto 10px">@electromaxperso</p>
                    </a>
                </div>
                <div class="col">
                    <a href="https://twitter.com/ozeliurs" class="is-center is-vertical-align button outline">
                        <img src="icons/twitter.svg" alt="twitter_icon">
                        <p style="margin: auto 10px">@ozeliurs</p>
                    </a>
                </div>

            </div>
        </div>
<?php
    end_page();
?>
