<!DOCTYPE html>
<html lang="en">
<body id="page3">
<!-- header -->
<?php if(!isset ($_SESSION['username']) || $_SESSION['username']=='')
{
    ?>

            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form action="<?=base_url();?>home/masuk" method="post" id="loginForm" name="formMasuk">
                        <fieldset id="body">
                            <fieldset>
                                <label for="username">Username/Email</label>
                                <input type="text" name="username" id="username" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <input type="submit" name="masuk" id="login" value="Sign in" />
                            <span><a  id="singupform" href="<?=base_url();?>home/registrasi">Sign up?</a></span>
                        </fieldset>
                        <!--<span><a href="#">Forgot your password?</a></span>-->
                    </form>
                </div>
            </div>
</form>
<?php } 
else
{
?>
       <div id="loginContainer">
           <a href="#" id="loginButton" ><span>Profile</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form action="<?=base_url();?>home/menuprofil" method="post" id="loginForm" >
                        <fieldset id="body">
                            <fieldset>
                                <a href=""><input type="submit" id="profile" name="profile" value="Lihat Profil" /></a>                           
                            </fieldset>
                            <fieldset>
                                <a href=""><input type="submit" id="profile" name="signout" value="Sign out" /></a>
                            </fieldset>                            
                        </fieldset>
                        
                    </form>
                </div>
            </div>
<?php }?>
	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
                                                <a class="logonew" href="<?php echo base_url(); ?>"></a>
                                                <a class="aktenew" href="<?php echo base_url(); ?>home/akteyayasan"></a>
                                                <a class="agamanew" href="<?php echo base_url(); ?>home/agama"></a>
                                                <a class="harta" href="<?php echo base_url(); ?>home/harta"></a>
                                                <a class="sekolahnew" href="<?php echo base_url(); ?>home/sekolah"></a>
					</h1>
					
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						   <li><a href="<?php echo base_url(); ?>">Payung Agung</a></li>
						  <li><a <?php if (isset ($_SESSION['page']) && $_SESSION['page']=="akteyayasan") { ?> class="active" <?php } ?> href="<?php echo base_url(); ?>home/akteyayasan">Akte Yayasan</a></li>
						  <li><a <?php if (isset ($_SESSION['page']) && $_SESSION['page']=="agama") { ?> class="active" <?php } ?> href="<?php echo base_url(); ?>home/agama">Agama</a></li>
						  <li><a <?php if (isset ($_SESSION['page']) && $_SESSION['page']=="harta") { ?> class="active" <?php } ?> href="<?php echo base_url(); ?>home/harta">Harta</a></li>
						  <li class="last-item"><a <?php if (isset ($_SESSION['page']) && $_SESSION['page']=="sekolah") { ?> class="active" <?php } ?> href="<?php echo base_url(); ?>home/sekolah">Sekolah Laduni Kediri</a></li>
						</ul>
					</nav>
				</div>
			</header>
<!-- content -->
			<section id="content">
				<div class="padding">
					<div class="indent">
						<h2>Harta<figure class="img-indent3"><img src="<?php echo base_url(); ?>images/page3-img6.png" alt="" width="85px"/></figure></h2>
						<br/><br/>

						<div class="wrapper indent-bot">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Penjelasan</strong></h6>
										<p align="justify">
										Harta adalah sesuatu bentuk apapun yang berharga dan punya nilai baik yang ada di Langit dan di Bumi yang kesemuanya adalah mutlak milik Allah, sehingga siapapun tidak mempunyai hak dan tidak ikut memilikinya walaupun diibaratkan hanya setebal kulit Ari pun. sedang tentang ketetapan dari hukum Allah bahwa Allah Maha Kaya akan dapat dibuktikan.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Penggunaan</strong></h6>
										<p align="justify">
										Penggunaan Harta Amanah tersebut untuk kepentingan menyuburkan Umat sehingga tidak ada lagi rasa ketidakadilan, karena siapapun dapat mengakses harta amanah ini selama mereka mau mengucapkan SA dan sumpah dengan saksi Hati Nuraninya sendiri untuk menggunakan harta tersebut sesuai dengan yang dimaksudkan.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper indent-bot2">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Perbendaharaan</strong></h6>
										<p align="justify">
										Harta apapun yang ada di Langit dan di Bumi adalah milik Allah, dengan menggunakan Ilmu Koordinat agar supaya dapat untuk memindahkan dengan cepat dari satu tempat ke tempat yang lain, baik dalam kondisi Nyata maupun Gaib. Pada waktunya nanti Allah akan mempercayakan perbendaharaan harta ini hanya kepada 1 (satu) orang yang telah dikehendaki Nya.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										
										<h6><strong>Permohonan</strong></h6>
										<p align="justify">
										Harta Amanah tersebut dapat digunakan untuk membangun proyek-proyek terutama proyek Sosial yang dapat melibatkan kepentingan banyak orang seperti Rumah Sakit, Pendidikan, Lembaga Yatim Piatu dan Panti Jompo dll. Permohonan dapat dilakukan oleh siapapun dengan cara mengajukan anggaran secara Nyata dan Realistis tanpa ada Rekayasa dengan tanpa Jaminan kecuali hanya mengucap Sumpah langsung kepada Allah.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper p3">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										
										<h6><strong>Harta Amanah</strong></h6>
										<p align="justify">
										Allah Maha Kaya akan dibuktikan dengan Harta Amanah yang berupa :
										<table border="0" style="color:black;">
										<tr>
											<td>1.</td>
											<td>&nbsp;</td>
											<td align="justify">
											Harta yang dikumpulkan sejak Zaman Nabi Adam sampai dengan Muhammad Rasulullah oleh Raja Siluman Dunia yang saat ini telah diserahkan kembali Kepada Allah untuk kepentingan umat dengan harapan Allah akan mengakui Orang tersebut untuk dapat masuk agama Islam.
											</td>
										</tr>
										<tr>
											<td>2.</td>
											<td>&nbsp;</td>
											<td align="justify">
											Harta Prasasti yang pernah dititipkan kepada Soekarno
											</td>
										</tr>
										<tr>
											<td>3.</td>
											<td>&nbsp;</td>
											<td align="justify">
											Harta Dinasti yang dimiliki oleh para Raja &#150; Raja
											</td>
										</tr>
										<tr>
											<td>4.</td>
											<td>&nbsp;</td>
											<td align="justify">
											Harta Trusty yang tersimpan di beberapa Bank di seluruh Dunia
											</td>
										</tr>
										<tr>
											<td>5.</td>
											<td>&nbsp;</td>
											<td align="justify">
											Harta Rampasan
											</td<
										</tr>
										<tr>
											<td>6.</td>
											<td>&nbsp;</td>
											<td align="justify">
											Harta Rusty yang ada di Bank Ghaib
											</td>
										</tr>
										</table>
										

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url(); ?>pertanyaan"><img src="<?php echo base_url();?>images/tanya.png"></img></a>
                                        <a href="<?php echo base_url(); ?>pertanyaan/detail"><img src="<?php echo base_url();?>images/detail.png"></img></a>
				</div>
			</section>
<!-- footer -->
			<footer>
				<div class="row-top">
					<div class="row-padding">
						<div class="wrapper">
							<div class="col-1">
								<h4></h4>
								<dl class="address">
									<dt><span>Negara :</span>Indonesia</dt>									
									<dd><span>Email &nbsp;&nbsp;:</span>RahmanRahimLaduni@gmail.com</dd>
								</dl>
							</div>
							<!--<div class="col-2">
								<h4>Follow Us:</h4>
								<ul class="list-services">
									<li class="item-1"><a href="#">Facebook</a></li>
									<li class="item-2"><a href="#">Twitter</a></li>
									<li class="item-3"><a href="#">Tumblr</a></li>
								</ul>
							</div>-->
							<div class="col-3">
								<h4></h4>
								<ul class="list-1">
									
								</ul>
							</div>
							<div class="col-4">
								<div class="indent3" style="margin-left:-20px;">
									<strong class="footer-logo">RahmanRahim<strong>.com</strong></strong>

								</div>
							</div>
						</div>
					</div>
				</div>
				
			</footer>
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>