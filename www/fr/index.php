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
                        <samp>Né le XX/03/2000 (21 ans)</samp><br>
                        <samp>Vit à Saint Cézaire 06530</samp>
                    </div>
                    <hr>
                    <div class="card" style="margin: 10px auto">
                        <p style="margin-bottom: 0">Permis de Conduire (B)</p>
                        <small>Obtenu en 2020.</small>
                        <br><br>
                        <p> Propriétaire d'une <i>Ford Fiesta</i>.</p>
                    </div>
                    <div class="card" style="margin: 10px auto">
                        <p style="margin-left: 5px; margin-bottom: 0">Brevet d'Initiation a l'Aéronautique</p>
                        <small style="margin-left: 5px">Obtenu en 2016.</small>
                    </div>
                </div>
                <div class="col-9"> <!-- Colonne de Droite -->
                    <h1>Mon Parcours</h1>
                    <div style="margin-left: 30px; margin-bottom: 20px"> <!-- Sous partie My Background -->
                        <h4 style="margin-bottom: 0"><b>CSTB</b>, Sophia Antipolis — Centre Scientifique et Technique du Bâtiment</h4>
                        <code>Janvier 2015 à Janvier 2015</code>
                        <ul><li>Création d'un algorithme pour l'automatisation électrique d'un bâtiment.</li></ul>
                        <h4 style="margin-bottom: 0"><b>Lycée Alexis de Tocqueville</b>, Grasse</h4>
                        <code>Septembre 2015 à Juin 2018</code>
                        <h4 style="margin-bottom: 0"><b>Ecole Nationale d'Ingénieurs de Saint Etienne</b>, Saint Etienne</h4>
                        <code>Septembre 2018 à Fevrier 2020</code>
                        <h4 style="margin-bottom: 0"><b>LEASON</b>, Saint Cézaire — Carrefour Contact</h4>
                        <code>Mars 2020 à Juin 2020</code>
                        <ul><li>Travail en tant qu'employé commercial dans une équipe de 15 personnes.</li></ul>
                        <h4 style="margin-bottom: 0"><b>DUT Informatique</b>, Aix-en-Provence</h4>
                        <code>Septembre 2020 à Aujourd'hui</code>
                    </div>
                    <div> <!-- Sous partie My Skills -->
                        <h1>Mes compétences</h1>
                        <div style="margin-left: 30px; margin-bottom: 20px">
                            <h4><b>Langues</b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-12 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Français</b></div>
                                <div class="col-10 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Anglais</b></div>
                                <div class="col-6 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Allemand</b></div>
                            </div>
                            <h4><b>Competences Informatiques</b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-11 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Python</b></div>
                                <div class="col-9 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">SQL</b></div>
                                <div class="col-8 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">C++</b></div>
                                <div class="col-6 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Java</b></div>
                            </div>
                            <h4><b>Connaissance des Logiciels</b></h4>
                            <div class="row" style="margin-left: 30px">
                                <div class="col-11 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Office Suite</b></div>
                                <div class="col-9 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Adobe Suite</b></div>
                                <div class="col-7 bg-primary text-white" style="border-radius: 5px; margin-bottom: 5px"><b style="margin-left: 10px">Solidworks & Catia V5</b></div>
                            </div>
                        </div>
                    </div>
                    <div> <!-- Sous partie Centers of interest -->
                        <h1>Centres d'intérêt</h1>
                        <ul>
                            <li>Domotique</li>
                            <li>Matériel Informatique</li>
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
