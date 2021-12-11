<?php
    include 'utils.inc.php';
    start_page("Ozeliurs' Website");
?>
        <div class="card" style="margin: 10px auto">
            <div class="row">
                <div class="col"> <!-- Colonne de Gauche -->
                    <img src="{{ url_for('static', filename='content/pp.webp') }}" alt="Profile-Picture" class="is-rounded" style="padding: 10px">
                    <code style="margin-left: 5px" class="is-center">Maxime BILLY</code>
                    <hr>
                    <div style="margin-left: 5px">
                        <samp>Born XX/03/2000 (21 yo)</samp><br>
                        <samp>Living in Saint Cézaire 06530</samp>
                    </div>
                    <hr>
                    <div class="card" style="margin: 10px auto">
                        <p style="margin-bottom: 0">Driver's license (B)</p>
                        <small>Obtained in 2020.</small>
                        <br><br>
                        <p> Proud owner of a <i>Renault Twingo I</i> (1992).</p>
                    </div>
                    <div class="card" style="margin: 10px auto">
                        <p style="margin-left: 5px; margin-bottom: 0">Introduction to aeronautics certificate</p>
                        <small style="margin-left: 5px">Obtained in 2016.</small>
                    </div>
                </div>
                <div class="col-9"> <!-- Colonne de Droite -->
                    <h1>My background</h1>
                    <div style="margin-left: 30px; margin-bottom: 20px"> <!-- Sous partie My Background -->
                        <h4 style="margin-bottom: 0"><b>CSTB</b>, Sophia Antipolis — Centre Scientifique et Technique du Bâtiment</h4>
                        <code>January 2015 to January 2015</code>
                        <ul><li>Creation of an algorithm for the electrical automation of a building.</li></ul>
                        <h4 style="margin-bottom: 0"><b>Alexis de Tocqueville High School</b>, Grasse</h4>
                        <code>September 2015 to June 2018</code>
                        <h4 style="margin-bottom: 0"><b>National School of Engineering of Saint-Etienne</b>, Saint Etienne</h4>
                        <code>September 2018 to February 2020</code>
                        <h4 style="margin-bottom: 0"><b>LEASON</b>, Saint Cézaire — Carrefour Contact</h4>
                        <code>March 2020 to June 2020</code>
                        <ul><li>Work as a Commercial Employee in a team of 15 people.</li></ul>
                        <h4 style="margin-bottom: 0"><b>Computer Science DUT</b>, Aix-en-Provence</h4>
                        <code>September 2020 to Today</code>
                    </div>
                    <div> <!-- Sous partie My Skills -->
                        <h1>My Skills</h1>
                        <div style="margin-left: 30px; margin-bottom: 20px">
                            <h4><b>Languages</b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-12 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">French</b></div>
                                <div class="col-10 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">English</b></div>
                                <div class="col-6 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">German</b></div>
                            </div>
                            <h4><b>Programming Related</b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-11 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Python</b></div>
                                <div class="col-9 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">SQL</b></div>
                                <div class="col-8 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">C++</b></div>
                                <div class="col-6 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Java</b></div>
                            </div>
                            <h4><b>Software Knowledge</b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-11 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Office Suite</b></div>
                                <div class="col-9 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Adobe Suite</b></div>
                                <div class="col-7 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Solidworks & Catia V5</b></div>
                            </div>
                        </div>
                    </div>
                    <div> <!-- Sous partie Centers of interest -->
                        <h1>Centers of interest</h1>
                        <ul>
                            <li>Home automation</li>
                            <li>Computer Hardware</li>
                            <li>Network administration</li>
                            <li>Scientific subjects</li>
                            <li>Photography</li>
                            <li>Guitar</li>
                            <li>Biking and Running</li>
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
