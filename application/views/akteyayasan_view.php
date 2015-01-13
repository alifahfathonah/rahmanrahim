<!DOCTYPE html>
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
                                                <a class="akte" href="<?php echo base_url(); ?>home/akteyayasan"></a>
                                                <a class="agamanew" href="<?php echo base_url(); ?>home/agama"></a>
                                                <a class="hartanew" href="<?php echo base_url(); ?>home/harta"></a>
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
						<h2>Akte Yayasan<figure class="img-indent3"><img src="<?php echo base_url(); ?>images/page3-img5.png" alt="" /></figure></h2>
						<br/>
						<div class="wrapper indent-bot">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Penjelasan Yayasan</strong></h6>
										<p align="justify">
										Yayasan telah didirikan dan diprakarsai oleh 3 (tiga) orang yang kesemuanya bukan sebagai pemilik Yayasan tetapi hanya sebagai penggagas pendirian dari Yayasan Nurullah Nurmuhammad yang disingkat dengan nama &quot;NN&quot;. Yayasan tersebut merupakan wadah yang akan dinaungi dalam tugas untuk meluruskan Umat.
										</p>
										
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>AD/ART</strong></h6>
										<p align="justify">
										Telah tertulis lengkap didalam akte pendirian Yayasan "NN" yang mengatur tentang hak dan kewajiban bagi Petugas, Pengurus Inti, Pengurus dan Pegawai Allah yang telah ditunjuk dan diangkat serta mengatur tugas-tugas terhadap kepentingan Umat
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper indent-bot2">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Ketentuan</strong></h6>
										<p align="justify">
										Yayasan "NN" didirikan atas perintah langsung dari Langit, sehingga dapat dimiliki dan digunakkan serta dimanfaatkan oleh seluruh Umat yang beriman.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Kesaksian</strong></h6>
										<p align="justify">
										Semua Petugas, Pengurus Inti, Pengurus dan Pegawai Allah adalah orang-orang yang beriman dan bertaqwa serta telah mengucapkan Syahadat Akhir (SA) dan Sumpah sebagai suatu kesaksian dan perjanjian dengan Allah sehingga akan diberikan Segitiga Cap Kenabian sebagai kunci untuk dapat masuk Surga dengan sanksi "MBL" di Dunia dan di Akhirat.
										</p>
									</div>
								</div>
							</div>
						</div>
						<center>
										<h6><strong>Struktur Organisasi</strong></h6>
										<br/>
                                                                                    <img src="<?php echo base_url()."images/strukturyayasan.png";?>"/>
                                                </center>
                                                 
					</div>
                                    <br/>
<br/>
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