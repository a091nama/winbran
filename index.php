<?php require_once("microMailer.php");?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>WinBran</title>
    <link rel="icon" type="image/png" href="kepek/icon2.png" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body style="padding-top:0px; margin:0px; ">

<!-- Menüsor -->
<!-- 1. -->
    <div class="teljes">
        <div class="kep"><a href="http://www.cegiroda.hu"><img src="kepek/logo3.png"  width="220px" height="50px" title="Winbran"></a></div>
        <div style=" float: left; width:7%; height: 50px"></div>
        <div class="menusor">
            <ul class="felsorolas">
				<a href="#ajanlatok" class="lista"><li class="menupontok">Árajánlatok</li></a>
                <a href="#iroda" class="lista"><li class="menupontok">Bérelhető tárgyalók</li></a>
                <a href="#elerhetoseg" class="lista"><li class="menupontok">Elérhetőség</li></a>
                <a href="#email" class="lista"><li class="menupontok">Érdeklődöm</li></a>
				<a href="#partner" class="lista"><li class="menupontok" style="border: 0px">Partnereink</li></a>
			</ul>
        </div>
    </div>
	
<!-- Fődiv, ami az egész oldalt magába foglalja -->
<!-- 2. -->
	<div class="fodiv">

<!-- Mottó + híd -->
<!-- 3. -->
        <br><br><br><br>
        <div class="hatter">
            <div class="hirdetes">
                <p class="motto" style="padding-left:40px;"><b>A legjobb megoldás Önnek és Cégének!</b></p>
            </div>
        </div>
<!-- Bemutatkozás -->
<!-- 4. -->
        <center>
            <div class="magunkrol_div">                   
                <p>A belváros szívében, a Petőfi Sándor utcában exkluzívan kialakított irodánkban kínáljuk ügyfeleinknek székhelyszolgáltatásunkat. Társaságunk saját tulajdonát képező, 300 négyzetméteres irodájában 3 tárgyaló lett különböző méretben és felszereltséggel kialakítva, amely így az ügyfelek egyedi igényeinek megfelelően tud üzleti tárgyalások, szervezeti megbeszélések, tréningek helyszíneként szolgálni.</p>
				<p>Társaságunk szoros együttműködése a Sziklai & Andrejszki Ügyvédi Irodával ügyfeleink részére egyedi, professzionális szolgáltatások nyújtását, hatósági megkeresések esetén teljes körű képviselet biztosítását, valamint cégeljárások esetén nagymértékű kedvezmények biztosítását teszi lehetővé.</p>
				<p>Munkatársaink hétköznapokon 8-16 óra között állnak rendelkezésükre.</p>
				<p id="ajanlatok">Amennyiben felkeltettük az érdeklődésüket, úgy írjanak nekünk üzenetet, vagy keressenek minket bizalommal a lenti elérhetőségeink bármelyikén!</p>
            </div>
        </center>
		
<!-- Táblázat a csomagokról -->
<!-- 5. -->
        <center><br>
            <div  class="tabla_div">
                <table class="arak" border="0">
                    <tr class="magas">
                        <td class="no_line" width="60%"></td>
                        <td class="no_line" width="20%"><font size="4" color=#303030><b>Arany csomag</b></font></td>
                        <td class="no_line" width="20%"><font size="4" color=#303030><b>Platina csomag</b></font></td>
                    </tr>
                    <tr>
                        <td width="60%">Székhelyhasználathoz hozzájáruló nyilatkozat</td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">Postai meghatalmazás küldemények átvételére</td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">Postai küldemények érkezéséről értesítés emailen</td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">Cégtábla kihelyezése</td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">NAV előtti képviselet a rutiellenőrzések során</td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">Központi vezetékes telefonszám híváskezeléssel, telefonon érkezett megkeresések továbbítása</td>
                        <td class="middle_nemokes" ></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">10%-os tárgyalóbérlési kedvezmény</td>
                        <td class="middle_nemokes" ></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">Levelek szkennelése és továbbítása</td>
                        <td class="middle_nemokes" ></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td width="60%">Levelek postai továbbítása a megadott címre minden péteken</td>
                        <td class="middle_nemokes" ></td>
                        <td class="middle_okes" ><img src="kepek/yes.png" width=12px /></td>
                    </tr>
                    <tr>
                        <td class="no_line" width="60%" id="iroda"><p align="left"><b>Ár</b></p></td>
                        <td class="no_line" width="20%"><b>15 EUR/hó</b></td>
                        <td class="no_line" width="20%"><b>30 EUR/hó</b></td>
                    </tr>
                </table>

            </div>
        </center>

<!-- Tárgyalók -->
<!-- 7. -->
		<br>
		<center>
		<div class="irodak"><br>
			<div class="irodakcim">
				Tárgyalóink
			</div>
            <table style="border-radius: 10px; width: 902px; padding:0px; margin-bottom: 20px; ">
                <tr>
                    <td class="stilus">Pest</td>
                    <td align="right" class="stilus">Buda</td>
                </tr>
                <tr>
                    <td style="width: 50% "><div class="irodaKep1"> 
                            <div class="irodaSzoveg">
                                 <p class="Iroda_intro">A Pest a legnagyobb tárgyalónk, ahol egyszerre akár 8 személy is kényelmesen elfér.</p>
								 Szolgáltatásunk:
                                <ul style="text-align: left; margin-top: 0px; font-size: 90%;">
                                    <li>professzionális asszisztenciát biztosításunk a vendégei fogadására</li>
                                    <li>nagy képátlójú TV, amelyre csatlakoztatható Laptop is</li>
                                    <li>frissítők (kávé, üdítő, ásványvíz)</li>
                                    <li>íróeszközök</li>
                                    <li>igény esetén Flipchart</li>
                                    <li>fénymásolás/nyomtatás ingyenes biztosítása 50 lapig</li>

                                </ul> 
                            </div> 
                        </div></td>
                    <td align="right" style="width: 50%">
                        <div class="irodaKep2"> 
                            <div class="irodaSzoveg">
								<p class="Iroda_intro">A Buda irodánk második legnagyobb, maximum 6 fős kapacitású tárgyalója.</p>
								Szolgáltatásunk:
                                <ul style="text-align: left; margin-top: 0px; font-size: 90%;">
                                    <li>professzionális asszisztenciát biztosításunk a vendégei fogadására</li>
                                    <li>frissítők (kávé, üdítő, ásványvíz)</li>
                                    <li>íróeszközök</li>
                                    <li>igény esetén Flipchart</li>
                                    <li>fénymásolás/nyomtatás ingyenes biztosítása 25 lapig</li>
                                </ul> </div> 
                        </div></td>
                </tr>
                <!-- <tr>
                    <td style=" padding-left: 20px; color: #202020; font-size:120%; font-family: Bookman Old Style">Bérleti díj: 15 EUR/óra</td>
                    <td align="right" style="padding-right: 20px; color: #202020; font-size:120%; font-family: Bookman Old Style">Bérleti díj: 10 EUR/óra</td>
                </tr> -->
                <tr><td align="center" colspan="2" class="stilus">Óbuda</td></tr>
                <tr>
                    <td align="center" colspan="2"><div class="irodaKep3"> 
                            <div class="irodaSzoveg"> 
                                <p class="Iroda_intro">Az Óbuda maximum 3 személy egyidejű fogadására alkalmas.</p>
                                Szolgáltatásunk:
                                <ul style="text-align: left; margin-top: 0px; font-size: 90%;">
                                    <li>professzionális asszisztenciát biztosításunk a vendégei fogadására</li>
                                    <li>frissítők (kávé, üdítő, ásványvíz)</li>
                                    <li>íróeszközök</li>
                                    <li>fénymásolás/nyomtatás ingyenes biztosítása 10 lapig</li>

                                </ul> </div> 
                        </div></td>
                </tr>
                <!-- <tr>
                    <td align="center" colspan="2" style="padding-right: 20px; color: #202020; font-size:120%; font-family: Bookman Old Style">Bérleti díj: 5 EUR/óra</td>            
                </tr> -->
            </table>
			<div class="info" id="elerhetoseg">*Irodáink adta szolgáltatásainkért húzza a kurzort a képekre.</div>
		</div>
		</center>		

<!-- Elérhetőség -->
<!-- 6. -->
        <br>
        <center>
            <div class="elerhetoseg_div">
                <table class="elerhetoseg">
                    <tr>
                        <td colspan="2" class="top">
                            <font size="6" color=#303030><p align="left">Elérhetőségeink</p></font>
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" class="left">
                            <ul class="lista">
                                <li style="style-type: none" ><b>Cím:</b> 1052 Budapest, Petőfi Sándor u. 11.</li>
                                <li><b>Telefon:</b> +36 1 266 7777</li>
                                <li><b>Fax:</b> +36 1 279 0323</li>
                                <li><b>Email:</b> <a href="mailto:info@winbran.hu">info@winbran.hu</a></li>
                                <li><b>Web:</b> <a href="http://www.cegiroda.hu">www.cegiroda.hu</a></li>
                            </ul>
                        </td>
                        <td rowspan="2" width="60%">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1sXo76Awtc5NmeJvp-n_sidL8iq0" width="490" height="360"></iframe>
                        </td>
                    </tr>
                    <tr width=40%>
                        <td class="left" width="40%">
                            <p align="justify">Gépkocsival érkező ügyfeleinknek ajánljuk, hogy a Március 15. téren (az Erzsébet híd jobb oldalán található nagy parkolóban), vagy a Szervita téri, illetőleg az Aranykéz utcai parkolóházakban szíveskedjenek parkolni. Mindhárom helyszínről az irodánk 2 perces sétával elérhető.</p>
                            <p id="email"></p>
                        </td>
                    </tr>
                </table>
            </div>
		</center>
            <br>

<!-- E-mail küldés -->
<!-- 8. -->
<center>
	<div class="mail">
        <div align="left" style="font-size: 160%; margin-left: 27px;">Küldjön nekünk e-mail-t!</div></br>
<?php if (!isset($_POST['submitBtn']))  { ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td class="data">Az Ön neve:</td>
				<td><input type="text" name="fromname" class="email" /></td>
			</tr>
			<tr>
				<td class="data">Az Ön email címe:</td>
				<td><input type="email" name="fromemail" class="email" /></td>
			</tr>
			<tr>
				<td class="data">Tárgy:</td>
				<td><input type="text" name="subject" class="email" /></td>
			</tr>
			<tr>
				<td class="data">Üzenet:</td>
				<td><textarea class="email" name="message" placeholder="Ide írja üzenetét..."></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td  class="send"><input class="send" type="submit" name="submitBtn" value="Küldés" /></td>
			</tr>
        </table>
      </form>
<?php } else  { 
      $mailer = new MicroMailer();

      $mailer->fromName   = isset($_POST['fromname']) ? $_POST['fromname'] : "";
      $mailer->fromEmail  = isset($_POST['fromemail']) ? $_POST['fromemail'] : "";
      $mailer->subject    = isset($_POST['subject']) ? $_POST['subject'] : "";
      $mailer->message    = isset($_POST['message']) ? $_POST['message'] : "";
?>

      <div>
        <table width="100%">
          <tr><td>
            <?php
              if ($mailer->send()) {
                
					?><script>
						alert("Köszönjük levelét, hamarosan felvesszük Önnel a kapcsolatot!")
					</script> 
					<meta http-equiv="refresh" content="2" /><?php

              } else {
				  ?><script>
						alert("A küldés sikertelen, kérem próbálja újra, vagy írjon az info@winbran.hu e-mail címre!")
					</script> 
					<meta http-equiv="refresh" content="2" /><?php
              }
            ?>
          </td></tr>
        </table>
     </div>
<?php } ?>	
	</div>
</center>

<!-- Partnerek -->
<!-- 10. -->
	<br id="partner">
	<center>
	<div class="partnerek"><br>
		<div class="partnercim">
			Partnereink
		</div>
		<br>
		<table>
			<tr>
				<td>
					<a href="http://www.drsziklai.hu">
						<div class="kepekhatter">
							<img src="kepek/sziklai_logo.png" width="250px" style="border-radius:10px;">
						</div>
					</a>
				</td>
			</tr>
		</table>
		<br>
	</div>
	</center>
    </div>
	


<!-- Lábjegyzet -->
<!-- 9. -->
<center>
    <footer>
        <ul align="left">
            <li class="lab"><b>Winbran Kft.</b></li>
            <li class="lab">Elérhetőség: 1052 Budapest, Petőfi Sándor u. 11.</li>
            <li class="lab">Tel: +36 1 266 7777</li>
            <li class="lab">Fax: +36 1 279 0323</li>
            <li class="lab">E-mail: <a href="mailto:info@winbran.hu">info@winbran.hu</a></li>     
            <li class="lab">Web: <a href="http://www.cegiroda.hu">www.cegiroda.hu</a></li>     
        </ul>
        <table style="width: 100%">
            <tr>
				<td style="width: 25%">
				</td>
                <td style="width: 50%">
					<center>
						<div class="copyright">
							&copy; Copyright 2008-2017<br>Minden jog fenntartva
						</div>
					</center>     
				</td>
				<td align="right" style="padding-top:60px">
					<img src="kepek/logo_grey.png" style="width: 190px; background-color:#202020 ">
				</td>
            </tr>
        </table>
        <br><br>
    </footer>
</center>
</body>
</html>