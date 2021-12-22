<?php
    include '../utils.inc.php';
    head("Ozeliurs' Website");
    start_page();
    if (isset($_GET['t'])) {
        title($_GET['t'])
    }
    include_once 'cv_fr.php';
?>
        <div class="card" style="margin: 10px auto">
            <div class="row">
                <div class="col"> <!-- Colonne de Gauche -->
                    <img src="/static/content/pp.webp" alt="Profile-Picture" class="is-rounded" style="padding: 10px">
                    <code style="margin-left: 5px" class="is-center"><?php echo $lang["name"]; ?></code>
                    <hr>
                    <div style="margin-left: 5px">
                        <samp><?php echo $lang["birth"]; ?></samp><br>
                        <samp><?php echo $lang["location"]; ?></samp>
                    </div>
                    <hr>
                    <div class="card" style="margin: 10px auto">
                        <p style="margin-bottom: 0"><?php echo $lang["driver_license"]; ?></p>
                        <small><?php echo $lang["driver_license_date"]; ?></small>
                        <br><br>
                        <p><?php echo $lang["owner_of"]; ?><i><?php echo $lang["car"]; ?></i>.</p>
                    </div>
                    <div class="card" style="margin: 10px auto">
                        <p style="margin-left: 5px; margin-bottom: 0"><?php echo $lang["bia"]; ?></p>
                        <small style="margin-left: 5px"><?php echo $lang["bia_date"]; ?></small>
                    </div>
                </div>
                <div class="col-9"> <!-- Colonne de Droite -->
                    <h1><?php echo $lang["pro"]; ?></h1> <!-- Sous partie Formation -->
                    <div style="margin-left: 30px; margin-bottom: 20px">
                        <h4 style="margin-bottom: 0"><b><?php echo $lang["dut"]; ?></b><?php echo $lang["dut_loc"]; ?></h4>
                        <code><?php echo $lang["dut_date"]; ?></code>
                        <h4 style="margin-bottom: 0"><b><?php echo $lang["enise"]; ?></b><?php echo $lang["enise_loc"]; ?></h4>
                        <code><?php echo $lang["enise_date"]; ?></code>
                        <h4 style="margin-bottom: 0"><b><?php echo $lang["hs"]; ?></b><?php echo $lang["hs_loc"]; ?></h4>
                        <code><?php echo $lang["hs_loc"]; ?></code>
                    </div>
                    <h1><?php echo $lang["work_history"]; ?></h1>
                    <div style="margin-left: 30px; margin-bottom: 20px"> <!-- Sous partie experience professionelle -->
                        <h4 style="margin-bottom: 0"><b><?php echo $lang["leason"]; ?></b><?php echo $lang["leason_loc"]; ?></h4>
                        <code><?php echo $lang["leason_date"]; ?></code>
                        <ul><li><?php echo $lang["leason_desc"]; ?></li></ul>
                        <h4 style="margin-bottom: 0"><b><?php echo $lang["cstb"]; ?></b><?php echo $lang["cstb_loc"]; ?></h4>
                        <code><?php echo $lang["cstb_date"]; ?></code>
                        <ul><li><?php echo $lang["cstb_desc"]; ?></li></ul>
                    </div>
                    <div> <!-- Sous partie My Skills -->
                        <h1><?php echo $lang["skills"]; ?></b></h1>
                        <div style="margin-left: 30px; margin-bottom: 20px">
                            <h4><b><?php echo $lang["languages"]; ?></b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-12 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px"><?php echo $lang["french"]; ?></b></div>
                                <div class="col-10 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px"><?php echo $lang["english"]; ?></b></div>
                                <div class="col-6 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px"><?php echo $lang["german"]; ?></b></div>
                            </div>
                            <h4><b><?php echo $lang["programming"]; ?></b></b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-11 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Python</b></div>
                                <div class="col-9 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">SQL</b></div>
                                <div class="col-8 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">C++</b></div>
                                <div class="col-6 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Java</b></div>
                            </div>
                            <h4><b><?php echo $lang["software"]; ?></b></b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-11 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Office Suite</b></div>
                                <div class="col-9 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Adobe Suite</b></div>
                                <div class="col-7 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Solidworks & Catia V5</b></div>
                            </div>
                        </div>
                    </div>
                    <div> <!-- Sous partie Centers of interest -->
                        <h1><?php echo $lang["interest"]; ?></b></h1>
                        <ul>
                            <li><?php echo $lang["home_automation"]; ?></b></li>
                            <li><?php echo $lang["hardware"]; ?></b></li>
                            <li>Administration des Réseaux</li>
                            <li>Sujets Scientifiques</li>
                            <li>Photographie</li>
                            <li>Guitare</li>
                            <li>Vélo et course à pied</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 10px auto">
            <h2>Contact Me.</h2>
            <div class="row">
                <div class="col">
                    <a href="mailto:ozeliurs@gmail.com" class="is-center is-vertical-align button outline">
                        <img src="/static/icons/mail.svg" alt="mail_icon">
                        <p style="margin: auto 10px">ozeliurs@gmail.com</p>
                    </a>
                </div>
                <div class="col">
                    <a href="tel:+33695923210" class="is-center is-vertical-align button outline">
                        <img src="/static/icons/phone.svg" alt="phone_icon">
                        <p style="margin: auto 10px">0695923210</p>
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.instagram.com/electromaxperso/" class="is-center is-vertical-align button outline">
                        <img src="/static/icons/instagram.svg" alt="instagram_icon">
                        <p style="margin: auto 10px">@electromaxperso</p>
                    </a>
                </div>
                <div class="col">
                    <a href="https://twitter.com/ozeliurs" class="is-center is-vertical-align button outline">
                        <img src="/static/icons/twitter.svg" alt="twitter_icon">
                        <p style="margin: auto 10px">@ozeliurs</p>
                    </a>
                </div>
            </div>
        </div>
<?php
    end_page();
?>