<!DOCTYPE HTML>
<html>

<head>
	<title>barefoot games</title>
	<link rel="icon" type="image/png" sizes="192x192" href="images/favicon_logo_fuss_192x192px.png">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/index.css" />
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
	<link rel="stylesheet" href="assets/altcha/altcha.css" />
	<script async defer src="assets/altcha/altcha.js" type="module"></script>
	<script src="assets/altcha/worker.js"></script>

</head>

<body class="is-preload">

	<!-- Header -->
	<section id="header">

		<div class="section_height">
			<img src="images/logo_small_thin.jpg" alt="barefoot games logo of a foot stepping on a yellow die" class="responsive_logo">

			<button id="impressum_top" class="impressum_top">Impressum</button>
					
		</div>

		<div class="container">
			<section id="scrolldownbutton" class="demo">
				<a href="#one" class="goto-next scrolly"><span></span></a>
			</section>
		</div>

		

	</section>

	<div>
		<nav>
			<a class="logo" href="#"><img src="images/logo_fuss_100x147.png"
					alt="barefoot games logo of a foot stepping on a yellow die"></a>
			<input type="checkbox" id="toggle_button">
			<label for="toggle_button" class="toggle_button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</label>
			<ul>
				<li><a href="#">Home</a></li>
				<li class="expandable_li">
					<input type="checkbox" id="spiele_checkbox">
					<label for="spiele_checkbox">Spiele</label>
					<ul class="dropdown">
						<li><a class="scrolly" href="calc.html">Chef à la Card</a></li>
					</ul>
				</li>
				<li><a class="scrolly" href="#two">Kontakt</a></li>
				<li><a class="scrolly" href="#four">Über uns</a></li>
			</ul>
		</nav>
	</div>


	<!-- One -->
	<section id="one" class="main special">
		<div class="container">

			<span class="image fit primary calc"><img src="images/calc_main.jpg" alt="" /></span>

			<div class="content">

				<div class="videoplayer">

					<video id="myVideo_m" class="youtubevideo" preload="none" poster="images/calc_main_video_thumbnail.jpg" width="640" height="360" controls>
					<source src="video/calc_promo.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
					<div id="playButton_calc_promo_m" class="playButton"><i class="fas fa-play-circle"></i></div>
				</div>


				<header class="major">
					<h2 class="header_style_noto main_header_calc">Chef à la Card</h2>
				</header>

				<!-- <a class="button calc_button" id="button" href="calc.html" style="margin-top: 1em;">Zum Spiel</a> -->

				<p>Schon wieder Nudeln mit Pesto? Wieder Tiefkühlpizza? Und schon wieder zum Imbiss um die Ecke, weil
					dir einfach nichts Neues einfällt, das du kochen könntest?</p>
				<p>Schluss damit!</p>
				<p>Chef à la Card ist das Spiel, das dich vom Sofa in die Küche lockt. Ob alleine oder in der  Gruppe, ob Einkaufsbummel oder Reste-Essen, mit Chef à la Card wirst du nie wieder einfallslos vor deinem Herd stehen und in leere Töpfe starren. Mit über 60 unterschiedlichen Zutaten und neun Zubereitungsmethoden wird eine nahezu unerschöpfliche Quelle an Kombinationsmöglichkeiten für neue Rezepte geboten und eine unbekannte Welt der kulinarischen Wunder eröffnet.</p>

				<div>
					<img class="calc_testimonials_mohltied" src="images/calc_testimonial_mohltied-magazin.png" alt="">
				</div>

				<a class="button calc_button" id="button" href="calc.html">Zum Spiel</a>
			</div>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="main special">
		<div class="container">
			<span class="image fit primary empress"><img src="images/background_img_empress_small.jpg" alt="" /></span>
			<div class="content">
				<header class="major">
					<h2 class="header_style_noto">Neugierig auf mehr?</h2>
				</header>
				<p>Ihr habt Fragen zu unseren Spielen? Ihr wollt gerne mehr über barefoot games wissen? Oder ihr wollt
					unsere Spiele einmal ausprobieren? Dann kontaktiert uns einfach per Mail, oder über unseren
					Discordserver und spielt ein paar Runden mit uns an einem unserer digitalen Spieletische auf
					Tabletopia!</p>
				<ul class="icons-grid">
					<li>
						<a
							href="https://www.instagram.com/barefoot_games/?utm_source=ig_web_button_share_sheet&igshid=MjU0YjQ2MmQ2OQ==">
							<img src="images/ig_logo.png" alt="" style="width: auto; height: 2.5em;" />
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/@barefootgames1510">
							<img src="images/yt_logo.png" alt="" style="width: auto; height: 2.5em;" />
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/barefootgames/">
							<img src="images/fb_logo.png" alt="" style="width: auto; height: 2.5em;" />
						</a>
					</li>
					<li>
						<a href="https://discord.gg/NmjNfwYYtS">
							<img src="images/discord_logo.png" alt="" style="width: auto; height: 2.5em;" />
						</a>
					</li>
				</ul>
			</div>


			<header class="major">
				
				<div id="mail_form">
					<h2 class="header_style_noto mail_form">Schreib uns eine Mail</h2>
				</div>

			</header>

			<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"></iframe>

			<form id="email_id" method="post" target="hidden_iframe">
				
				<div class="row gtr-uniform">
				
					<div class="col-6 col-12-xsmall">
						
						<input type="text" name="name" id="name" placeholder="Name" onkeyup="success()"/>
					
					</div>
				
					<div class="col-6 col-12-xsmall">
					
						<input type="email" name="email" id="email" placeholder="Email" onkeyup="success()" />
					
					</div>
				
					<div class="col-12">
					
						<textarea name="message" id="message" placeholder="Deine Nachricht" rows="4" onkeyup="success()"></textarea>
					
					</div>
				
					<div class="col-12">
				
						<altcha-widget id=altcha challengeurl="https://eu.altcha.org/api/v1/challenge?		apiKey=ckey_016d56c12bdf5ec2f1fe989b01f5">
						</altcha-widget>

						<ul class="actions special">
							<button type="submit" id="email_send_button" class="email_button" disabled>Senden</button>
						</ul>
				
					</div>
				
				</div>
			</form>

			<div id="myModal_email" class="modal_email">
				
				<div class="modal-content_email">
				 
					<span class="close_email">&times;</span>
				 
				  <header class="major_email">
					<h2>Versendet ...</h2>
				  </header>

				  <img class="email_cube_message" src="images/email_cube_message_small.png" alt="">
				  
				  <p>Vielen Dank für deine Nachricht.<br>Wir melden uns so schnell es geht bei dir.</p>
				  

				</div>
			</div>

			<!--/********************************************************************************* */
			    /*                                                                                 */
			    /*                                   PHP code                                      */
			    /*                                                                                 */
			    /********************************************************************************* */-->

			<?php
			    // Get data from form  
			    $name = $_POST['name'];
			    $email= $_POST['email'];
			    $message= $_POST['message'];

			    $to = "mahr.micha@gmail.com";
			    $subject = "Mail from barefoot contact form";

			    // The following text will be sent
			    // Name = user entered name
			    // Email = user entered email
			    // Message = user entered message 
			    $txt = $name . " schreibt uns.". "\r\nSeine/Ihre Email: "
			        . $email . "\r\nNachricht:" . "\r\n\r\n" . $message;

			    $headers = "From: info@barefoot-games.com";
			    if($email != NULL) {
			        if(mail($to, $subject, $txt, $headers)){
			            echo "success";
			        } else {
			            echo "error";
			        }
			    }
			?>

		</div>


	</section>

	<!-- Three -->
	<!--<section id="three" class="main special">
		<div class="container">
			<span class="image fit primary calc"><img src="images/calc_main.jpg" alt="" /></span>
			<div class="content">
				<header class="major">
					<h2>Wo ihr unsere Spiele finden könnt</h2>
				</header>
				<a id="map_img" href="#map_img" onClick="block()">
					<img src="images/acrylic_world-map_01_transp_txt.png" alt="a blurred world map" class="retailer_map">
				</a>
				<iframe id="map" class="retailer_map_iframe"></iframe>

				<div class="shop_logos">
					<div class="shop_logos_slide">
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
					</div>
					<div class="shop_logos_slide">
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
						<img src="images/shop_placeholder.png" />
					</div>
				</div>

			</div>
		</div>
	</section>
	-->

	<!-- Four -->

	<section id="four" class="main special">
		<div class="container">
			<span class="image fit primary empress_two"><img src="images/background_img_empress_small.jpg" alt="" /></span>
			<div class="content">
				<header class="major dassindwir">
					<h2 class="header_style_noto">Das sind wir</h2>
				</header>
				<p><img src="images/malte_lenz_small.jpg" alt="" class="responsive_portrait" /></p>
				<p>Malte Lenz</p>
				<p><img src="images/tim_jahn_small.jpg" alt="" class="responsive_portrait" /></p>
				<p>Timothy Jahn</p>
				<p><img src="images/michael_mahr_small.jpg" alt="" class="responsive_portrait" /></p>
				<p>Michael Mahr</p>
			</div>

		</div>
	</section>



	<!-- Footer -->
	<section id="footer">

		<footer>
			<ul class="icons">
				<li><a href="https://www.youtube.com/@barefootgames1510" class="icon brands alt fa-youtube"><span
							class="label">YouTube</span></a></li>
				<li><a href="https://www.facebook.com/barefootgames/" class="icon brands alt fa-facebook-f"><span
							class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/barefoot_games/?utm_source=ig_web_button_share_sheet&igshid=MjU0YjQ2MmQ2OQ=="
						class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://discord.gg/NmjNfwYYtS" class="icon brands alt fa-discord"><span
							class="label">Discordserver</span></a></li>
			</ul>



			<!-- Modal Pop up 'Impressum und Datenschutz' -->


			<button id="myBtn" class="impressum_datenschutz_btn">Impressum & Datenschutz</button>

			<div id="myModal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>

					<h2>Impressum</h2>

					<p>barefoot games - Timothy Jahn, Malte Lenz, Michael Mahr GbR
						<br>Schulstraße 74
						<br>24536 Neumünster
					</p>

					<p>E-Mail: info@barefoot-games.com</p>

					<p>Umsatzsteuer-Identifikationsnummer gem. § 27a UStG:DE328799554</p>

					<p>Inhaltlich Verantwortlicher gem. § 55 II RStV: Timothy Jahn, Schulstraße 74, 24536 Neumünster</p>









					<h2>Daten&shy;schutz&shy;er&shy;klä&shy;rung</h2>



					<h1>Allgemeiner Hinweis und Pflicht&shy;in&shy;for&shy;ma&shy;tio&shy;nen</h1>

					<p><b>Benennung der verantwortlichen Stelle</b></p>

					<p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>

					<p><br>Timothy Jahn, Malte Lenz, Michael Mahr GbR
						<br>Timothy Jahn
						<br>Schulstraße 74
						<br>24536 Neumünster
					</p>

					<p>Die verantwortliche Stelle entscheidet allein oder gemeinsam mit anderen über die Zwecke und
						Mittel
						der Verarbeitung von personenbezogenen Daten (z.B. Namen, Kontaktdaten o.Ä.).</p>

					<p><b>Widerruf Ihrer Einwilligung zur Datenverarbeitung</b></p>

					<p>Nur mit Ihrer ausdrücklichen Einwilligung sind einige Vorgänge der Datenverarbeitung möglich. Ein
						Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt
						eine
						formlose Mitteilung per E-Mail. Die Rechtmäßigkeit der bis zum Widerruf erfolgten
						Datenverarbeitung
						bleibt vom Widerruf unberührt.</p>

					<p><b>Recht auf Beschwerde bei der zuständigen Aufsichtsbehörde</b></p>

					<p>Als Betroffener steht Ihnen im Falle eines datenschutzrechtlichen Verstoßes ein Beschwerderecht
						bei
						der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde bezüglich
						datenschutzrechtlicher Fragen ist der
						Lan&shy;des&shy;da&shy;ten&shy;schutz&shy;be&shy;auf&shy;trag&shy;te des Bundeslandes, in dem
						sich der
						Sitz unseres Unternehmens befindet. Der folgende Link stellt eine Liste der
						Da&shy;ten&shy;schutz&shy;be&shy;auf&shy;trag&shy;ten
						sowie deren Kontaktdaten bereit:
						https://&shy;www.bfdi&shy;.bund&shy;.de&shy;/DE&shy;Infothek&shy;/Anschriften&shy;_Links&shy;/an&shy;schrif&shy;ten&shy;_links&shy;-node&shy;.html.
					</p>

					<p><b>Recht auf Datenübertragbarkeit</b></p>

					<p>Ihnen steht das Recht zu, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines
						Vertrags automatisiert verarbeiten, an sich oder an Dritte aushändigen zu lassen. Die
						Bereitstellung
						erfolgt in einem maschinenlesbaren Format. Sofern Sie die direkte Übertragung der Daten an einen
						anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>

					<p><b>Recht auf Auskunft, Berichtigung, Sperrung, Löschung</b></p>

					<p>Sie haben jederzeit im Rahmen der geltenden gesetzlichen Bestimmungen das Recht auf
						unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, Herkunft der Daten,
						deren
						Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder
						Löschung dieser Daten. Diesbezüglich und auch zu weiteren Fragen zum Thema personenbezogene
						Daten
						können Sie sich jederzeit über die im Impressum aufgeführten Kontaktmöglichkeiten an uns wenden.
					</p>

					<p><b>SSL- bzw. TLS-Verschlüsselung</b></p>

					<p>Aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, die Sie an uns
						als Seitenbetreiber senden, nutzt unsere Website eine SSL-bzw. TLS-Verschlüsselung. Damit sind
						Daten,
						die Sie über diese Website übermitteln, für Dritte nicht mitlesbar. Sie erkennen eine
						verschlüsselte
						Verbindung an der „https://“ Adresszeile Ihres Browsers und am Schloss-Symbol in der
						Browserzeile.</p>

					<p><b>Server-Log-Dateien</b></p>

					<p>In Server-Log-Dateien erhebt und speichert derProvider der Website automatisch Informationen, die
						Ihr
						Browser automatisch an uns übermittelt. Dies sind:</p>

					<p><br>Besuchte Seite auf unserer Domain

						<br>Datum und Uhrzeit der Serveranfrage

						<br>Browsertyp und Browserversion

						<br>Verwendetes Betriebssystem

						<br>Referrer URL

						<br>Hostname des zugreifenden Rechners

						<br>IP-Adresse
					</p>

					<p>Es findet keine Zusammenführung dieser Daten mit anderen Datenquellen statt. Grundlage
						der Datenverarbeitung bildet Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur
						Erfüllung
						eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p>

					<p><b>Datenübermittlung bei Vertragsschluss für Warenkauf und Warenversand</b></p>

					<p>Personenbezogene Daten werden nur an Dritte übermittelt, sofern eine Notwendigkeit im Rahmen
						der Vertragsabwicklung besteht. Dritte können beispielsweise Bezahldienstleister
						oder Logistikunternehmen sein. Eine weitergehende Übermittlung der Daten findet nicht statt bzw.
						nur dann, wenn Sie dieser ausdrücklich zugestimmt haben.

						<br>Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1lit. b DSGVO, der die Verarbeitung von
						Daten
						zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.
					</p>

					<p><b>Abonnieren von Kommentaren</b></p>

					<p>Sie können als Nutzer unserer Website nach erfolgter Anmeldung Kommentare abonnieren. Mit
						einer Bestätigungs-E-Mail prüfen wir, ob Sie der Inhaber der angegebenen E-Mail-Adresse sind.
						Sie
						können die Abo-Funktion für Kommentare jederzeit über einen Link,der sich in einer Abo-Mail
						befindet,
						abbestellen. Zur Einrichtung des Abonnements eingegebene Daten werden im Falle der Abmeldung
						gelöscht.
						Sollten diese Daten für andere Zwecke und an anderer Stelle an uns übermittelt worden sein,
						verbleiben
						diese weiterhin bei uns.</p>

					<p><b>Newsletter-Daten</b></p>

					<p>Zum Versenden unseres Newsletters benötigen wir von Ihnen eine E-Mail-Adresse. Eine Verifizierung
						der angegebenen E-Mail-Adresse ist notwendig und der Empfang des Newsletters ist einzuwilligen.
						Ergänzende Daten werden nicht erhoben oder sind freiwillig. Die Verwendung der Daten erfolgt
						ausschließlich für den Versand des Newsletters.

						<br>Die bei der Newsletteranmeldung gemachten Daten werden ausschließlich auf Grundlage Ihrer
						Einwilligung (Art.6 Abs. 1 lit. a DSGVO) verarbeitet. Ein Widerruf Ihrer bereits erteilten
						Einwilligung ist jederzeit möglich. Für den Widerruf genügt eine formlose Mitteilung per E-Mail
						oder
						Sie melden sich über den "Austragen"-Link im Newsletter ab. Die Rechtmäßigkeit der bereits
						erfolgten
						Da&shy;ten&shy;ver&shy;ar&shy;bei&shy;tungs&shy;vor&shy;gän&shy;ge bleibt vom Widerruf
						unberührt.

						<br>Zur Einrichtung des Abonnements eingegebene Daten werden im Falle der Abmeldung gelöscht.
						Sollten
						diese Daten für andere Zwecke und an anderer Stelle an uns übermittelt worden sein, verbleiben
						diese
						weiterhin bei uns.
					</p>

					<p><b>Cookies</b></p>

					<p>Unsere Website verwendet Cookies. Das sind kleine Textdateien, die Ihr Webbrowser auf Ihrem
						Endgerät speichert. Cookies helfen uns dabei, unser Angebot nutzerfreundlicher, effektiver und
						sicherer zu machen.

						<br>Einige Cookies sind “Session-Cookies.” Solche Cookies werden nach Ende Ihrer Browser-Sitzung
						von
						selbst gelöscht. Hingegen bleiben andere Cookies auf Ihrem Endgerät bestehen, bis Sie diese
						selbst
						löschen. Solche Cookies helfen uns, Sie bei Rückkehr auf unserer Website wiederzuerkennen.

						<br>Mit einem modernen Webbrowser können Sie das Setzen von Cookies überwachen, einschränken
						oder
						unterbinden. Viele Webbrowser lassen sich so konfigurieren, dass Cookies mit dem Schließen des
						Programms von selbst gelöscht werden. Die Deaktivierung von Cookies kann eine eingeschränkte
						Funktionalität unserer Website zur Folge haben.

						<br>Das Setzen von Cookies, die zur Ausübung elektronischer
						Kom&shy;mu&shy;ni&shy;ka&shy;tions&shy;vor&shy;gän&shy;ge oder der Bereitstellung
						bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorb) notwendig sind, erfolgt auf
						Grundlage
						von Art. 6 Abs. 1 lit. f DSGVO. Als Betreiber dieser Website haben wir ein berechtigtes
						Interesse an
						der Speicherung von Cookies zur technisch fehlerfreien und reibungslosen Bereitstellung
						unserer Dienste. Sofern die Setzung anderer Cookies (z.B. fürAnalyse-Funktionen) erfolgt, werden
						diese in dieser Datenschutzerklärung separat behandelt.
					</p>

					<p><b>PayPal</b></p>

					<p>Unsere Website ermöglicht die Bezahlung via PayPal. Anbieter des Bezahldienstes ist die PayPal
						(Europe) Sà.r.l. et Cie, S.C.A., 22-24 Boulevard Royal, L-2449Luxembourg.

						<br>Wenn Sie mit PayPal bezahlen, erfolgt eine Übermittlung der von Ihnen eingegebenen
						Zahlungsdaten an
						PayPal.

						<br>Die Übermittlung Ihrer Daten an PayPal erfolgt auf Grundlage von Art. 6 Abs. 1 lit. a
						DSGVO (Einwilligung) und Art. 6 Abs. 1 lit. b DSGVO (Verarbeitung zur Erfüllung eines Vertrags).
						Ein Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. In der Vergangenheit
						liegende Da&shy;ten&shy;ver&shy;ar&shy;bei&shy;tungs&shy;vor&shy;gän&shy;ge bleiben bei einem
						Widerruf wirksam.

						<br>Quelle: Datenschutz-Konfigurator von
						mein&shy;-da&shy;ten&shy;schutz&shy;be&shy;auf&shy;trag&shy;ter.de
					</p>


				</div>
			</div>
			</div>
			<!--<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
								</div>-->
			</div>
			</div>
			</div>
			<div class="contact_end">
				<p>barefoot games - Timothy Jahn, Malte Lenz, Michael Mahr GbR
					<br>Schulstraße 74
					<br>24536 Neumünster
					<br>E-Mail: info@barefoot-games.com
				</p>
			</div>

		</footer>
	</section>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/index.js"></script>
	<script src="assets/js/main_video.js"></script>




</body>

</html>