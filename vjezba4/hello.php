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
			<div>
				<?php 
					$a = 5;
					$b = 10;
					$c = 10 + 15;
					echo($c);
				?>
			</div>
			<div class="divColWrap">
				<div class="divCol6">
					<div class="divContentBoxStyle1">
						<div class="boxImgStyle1">
							<img src="images/s1.png">
						</div>
						<div class="boxDescStyle1">
							<?php  
								$naslov = 'uslugaaaaa';
								if($naslov=='usluga'){
									echo '<h3>Neka moja usluga 11111</h3>';
								}else{
									echo '<h3>Neki moj proizvod</h3>';
								}
							?>
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
	<div id="divSection3Wrap">
		<div id="divSection3">
			<h3 class="headTitleStyle1"><span>G</span> alerija</h3>
			<div class="divColWrap divGallery">
				<?php 
					for($i=1;$i<=4;$i++){
				?>
				<div class="divCol3 <?php if($i%4==0) echo 'last'; ?>">
					<img src="images/team-<?php echo $i; ?>.jpg" novaputanja="images/testimonial-<?php echo $i; ?>.jpg">
				</div>
				<?php } ?>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
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
					if(isset($_GET['btt1'])){
						$ime = $_GET['ime'];
						$prezime = $_GET['prezime'];
						echo '<h2>Vaše ime: '.$ime.' '.$prezime.'</h2>';
					}
				?>
				<div id="divForm1">
					<form id="obrazac1" method="get" action="">
						<div class="divElementBox1">
							<label for="ime">Ime</label>
							<input id="ime" name="ime" type="text" value="" placeholder="Unesite svoje ime">
						</div>
						<div class="divElementBox1">
							<label for="prezime">Prezime</label>
							<input id="prezime" name="prezime" type="text" value="Neko prezime">
						</div>
						<div class="divElementBox1">
							<label for="ime">Poštanski broj</label>
							<input id="ptt" name="ptt" type="text" value="" placeholder="Unesite poštanski broj">
							<p>Provjerite svoj unos</p>
						</div>
						<div class="divElementBox1">
							<label for="lozinka">Lozinka</label>
							<input id="lozinka" name="lozinka" type="password" value="">
						</div>
						<div class="divElementBox1">
							<label for="email">Email</label>
							<input id="email" name="email" type="email" value="">
						</div>
						<div class="divElementBox2">
							<input id="hobi1" name="hobi1" type="checkbox" value="Nogomet">
							<label for="hobi1">Nogomet</label>
						</div>
						<div class="divElementBox2">
							<input id="hobi2" name="hobi2" type="checkbox" value="Rukomet">
							<label for="hobi2">Rukomet</label>
						</div>
						<div class="divElementBox2">
							<input id="hobi3" name="hobi3" type="checkbox" value="Tenis">
							<label for="hobi3">Tenis</label>
						</div>
						<div class="divElementBox2">
							<input id="spol1" name="spol" type="radio" value="m">
							<label for="spol1">Muški</label>
						</div>
						<div class="divElementBox2">
							<input id="spol2" name="spol" type="radio" value="ž">
							<label for="spol2">Ženski</label>
						</div>
						<div class="divElementBox3">
							<label for="poruka">Vaša poruka</label>
							<textarea id="poruka" name="poruka">Ovdje je value</textarea>
						</div>
						<div class="divElementBox3">
							<label for="smjer">Vaš smjer</label>
							<select id="smjer" name="smjer">
								<option value="W34">Web dizajn</option>
								<option>Grafički dizajn</option>
								<option>Mobile programiranje</option>
								<option>Java programiranje</option>
							</select>
						</div>
						<div class="divElementBox4">
							<input id="btt1" name="btt1" type="submit" value="Spremi">
							<input id="btt2" name="btt2" type="reset" value="Obriši">
						</div>
					</form>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#ptt').keyup(function(){
							var txt = $('#ptt').val();
							var duzinaTxt = txt.length;
							if(duzinaTxt<5){
								$('#ptt').addClass('errorStyle1');
								$('.divElementBox1 p').addClass('errorStyle1');
							}else{
								$('#ptt').removeClass('errorStyle1');
								$('.divElementBox1 p').removeClass('errorStyle1');
							}
							if(duzinaTxt==5){
								$('#ptt').attr('maxlength','5');
							}
							//console.log(txt);
						});
						$('.divGallery img').hover(function(){
							var staraPutanja = $(this).attr('src');
							var novaPutanja = $(this).attr('novaputanja');
							 $(this).attr('src',novaPutanja);
							 $(this).attr('novaputanja',staraPutanja);
						});
					}); // end ready
					
				</script>
			</div>
			<div class="divCol6 last">
				<img src="images/about-img.jpg">
			</div>
			<div style="clear: both;"></div>
		</div><!-- end #divSection2 -->
	</div><!-- end #divSection2Wrap -->
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