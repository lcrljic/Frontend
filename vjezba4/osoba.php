<!DOCTYPE html>
<html>
<head>
	<title>Ovo je vježba 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-3.7.1.js"></script>
</head>
<body>
	<div id="divTopBarWrap">
		<div class="divCol4">
			<p>Email: info@edunova.hr</p>
		</div>
		<div class="divCol4 topBarInfoStyle2">
			<p>Lokacija: Lorenza Jagera 5, Osijek</p>
		</div>
		<div class="divCol4 last topBarInfoStyle1">
			<p>Mob: 099/2550-205</p>
		</div>
		<div style="clear: both;"></div>
	</div><!-- end #divTopBarWrap -->
	<div id="divHeaderWrap">
		<div class="divCol6">
			<h1>Edunova W34</h1>
		</div>
		<div class="divCol6 last">
			<ul id="ulMainMenu">
				<li><a href="#">Naslovna</a></li>
				<li><a href="#">O nama</a></li>
				<li><a href="#">Usluge</a></li>
				<li><a href="#">Proizvodi</a></li>
				<li><a href="#">Kontakt</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div><!-- end #divHeaderWrap -->
	<div id="divHeroSectionWrap">
		<div id="divHeroSectionInnerWrap">
			<div id="divHeroSection">
				<h2>We provide the best transport service</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
				<a href="#" class="buttonStyle1">Read more</a>
			</div>
		</div>
	</div><!-- end #divHeroSectionWrap -->
	<div id="divSection1Wrap">
		<div id="divSection1">
			<div class="divColWrap">
				<div class="divCol6">
					<div class="divContentBoxStyle1">
						<div class="boxImgStyle1">
							<img src="images/s1.png">
						</div>
						<div class="boxDescStyle1">
							<p>Neki moj opis prve usluge koji ćemo kasnije prilagoditi</p>
							<a href="#" class="buttonStyle2">Read more</a>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<div class="divCol6 last">
					<div class="divContentBoxStyle1">
						<div class="boxImgStyle1">
							<img src="images/s2.png">
						</div>
						<div class="boxDescStyle1">
							<h3>Neka moja usluga 2</h3>
							<p>Neki moj opis prve usluge koji ćemo kasnije prilagoditi</p>
							<a href="#" class="buttonStyle2">Read more</a>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<div class="divCol6">
					<div class="divContentBoxStyle1">
						<div class="boxImgStyle1">
							<img src="images/s3.png">
						</div>
						<div class="boxDescStyle1">
							<h3>Neka moja usluga 3</h3>
							<p>Neki moj opis prve usluge koji ćemo kasnije prilagoditi</p>
							<a href="#" class="buttonStyle2">Read more</a>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<div class="divCol6 last">
					<div class="divContentBoxStyle1">
						<div class="boxImgStyle1">
							<img style="width: 60%" src="images/s4.png">
						</div>
						<div class="boxDescStyle1">
							<h3>Neka moja usluga 4</h3>
							<p>Neki moj opis prve usluge koji ćemo kasnije prilagoditi</p>
							<a href="#" class="buttonStyle2">Read more</a>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div><!-- end #divSection1 -->
	</div><!-- end #divSection1Wrap -->
	<div id="divSection2Wrap">
		<div id="divSection2">
			<div class="divCol6">
				<h3 class="headTitleStyle1"><span>O</span> nama</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
				<a href="#" class="buttonStyle1">Više o nama</a>
				<?php
					if(isset($_REQUEST['btt1'])){
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "edunovaw34";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}

						$ime = $_REQUEST['ime'];
						$prezime = $_REQUEST['prezime'];
						$oib = $_REQUEST['oib'];

						$sql = "INSERT INTO osoba (ime, prezime, oib)
						VALUES ('$ime', '$prezime', '$oib')";

						if ($conn->query($sql) === TRUE) {
						  echo "Nova osoba je unešena.";
						} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
						}

						$conn->close();
					}
				?>
				<div id="divForm1">
					<form id="obrazac1" method="post" action="">
						<div class="divElementBox1">
							<label for="ime">Ime</label>
							<input id="ime" name="ime" type="text" value="" placeholder="Unesite svoje ime">
						</div>
						<div class="divElementBox1">
							<label for="prezime">Prezime</label>
							<input id="prezime" name="prezime" type="text" value="Neko prezime">
						</div>
						<div class="divElementBox1">
							<label for="oib">OIB</label>
							<input id="oib" name="oib" type="text" value="" placeholder="Unesite OIB">
						</div>
						<div class="divElementBox4">
							<input id="btt1" name="btt1" type="submit" value="Spremi">
							<input id="btt2" name="btt2" type="reset" value="Obriši">
						</div>
					</form>
				</div>
			</div>
			<div class="divCol6 last">
				<img src="images/about-img.jpg">
			</div>
			<div style="clear: both;"></div>
		</div><!-- end #divSection2 -->
	</div><!-- end #divSection2Wrap -->
	<div id="divSection3Wrap">
		<div id="divSection3">
			<?php 
				$team = array(
					array('ime'=>'Pero','prezime'=>'Perić','oib'=>'12345678987'),
					array('ime'=>'Marko','prezime'=>'Marić','oib'=>'15681678987'),
					array('ime'=>'Miro','prezime'=>'Jozić','oib'=>'12047088987'),
					array('ime'=>'Miro','prezime'=>'Jozić','oib'=>'12047088987')
				);
			?>
			<h3 class="headTitleStyle1">Osobe</h3>
			<div class="divColWrap divGallery">
				<?php 
					$i=1;
					foreach($team as $person):
					if($i<=4):
				?>		
					<div class="divCol3 <?php if($i%4==0) echo 'last'; ?>">
						<img src="images/team-<?php echo $i; ?>.jpg" novaputanja="images/testimonial-<?php echo $i; ?>.jpg">
						<p style="color: #000000"><?php echo $person['ime'].' '.$person['prezime']; ?></p>
					</div>
				<?php
					$i++; 
					endif;
					endforeach;
				?>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
	<div id="divFooterWrap">
		<div id="divFooter">
			<div class="divCol3">
				<h3>Footer naslov 1</h3>
				<ul>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
				</ul>
			</div>
			<div class="divCol3">
				<h3>Footer naslov 2</h3>
				<ul>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
				</ul>
			</div>
			<div class="divCol3">
				<h3>Footer naslov 3</h3>
				<ul>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
				</ul>
			</div>
			<div class="divCol3 last">
				<h3>Footer naslov 4</h3>
				<ul>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
					<li>Neka footer stavka</li>
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div><!-- end #divFooter -->
	</div><!-- end #divFooterWrap -->
</body>
</html>