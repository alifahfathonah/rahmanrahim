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
                                                <a class="aktenew" href="<?php echo base_url(); ?>home/akteyayasan"></a>
                                                <a class="agamanew" href="<?php echo base_url(); ?>home/agama"></a>
                                                <a class="hartanew" href="<?php echo base_url(); ?>home/harta"></a>
                                                <a class="sekolah" href="<?php echo base_url(); ?>home/sekolah"></a>
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
						<h2>Sekolah Laduni Kediri<figure class="img-indent3"><img src="<?php echo base_url(); ?>images/page3-img3.png" alt="" /></figure></h2>
						<br/>
						<div class="wrapper indent-bot">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Peserta Belajar</strong></h6>
										<p align="justify">
										Siapapun yang berminat untuk memperdalam Ilmu Laduni. Sedang Laduni adalah Langit dan Dunia. Dunia adalah Bumi dan Angkasa. Berarti Sekolah Laduni Kediri merupakan suatu pembelajaran tentang Ilmu rahasia Langit dan Bumi
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Tentang Sekolah Laduni Kediri</strong></h6>
										<p align="justify">
										Mengajarkan Ilmu Laduni yaitu Ilmu tentang rahasia Al Qur&rsquo;an dan Ilmu tentang Kesangyangan yaitu termasuk Ilmu diluar Al Qur&rsquo;an. 
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper indent-bot2">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Evaluasi</strong></h6>
										<p align="justify">
										Hasil belajar akan dievaluasi secara periode dengan melalui ujian berupa Quiz I, Quiz II, dan UAS (Ujian Akhir Sekolah) berupa Tesis untuk dipresentasikan sebagai bukti telah dianggap mampu dan berhak mempunyai kedudukan sebagai seorang Jaelani Serta Workshop berupa dialoq dengan Topik suatu masalah yang terjadi diluaran sehingga perlu diluruskan sesuai dengan kebenaran yang ada di dalam Al Qur'an. Sedang UAS tersebut harus diujikan dihadapan Penasehat berupa Tesis UAS dengan judul sesuai dengan yang diinginkan disertai dengan pembuktian kebenaran dari rahasia Al Qur'an.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Materi</strong></h6>
										<p align="justify">
										Penjelasan maksud dan arti yang sebenarnya dari Angka Al Qur&rsquo;an dan Huruf abjad Al Qur&rsquo;an serta ayat-ayat di dalam surat pada Al Qur&rsquo;an yang diambil langsung dari terjemahan bukan dari tafsirnya yang langsung diajarkan sendiri oleh Allah melalui Orang yang telah ditunjuk.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper p3">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Calon Jaelani</strong></h6>
										<p align="justify">
										Mereka adalah orang-orang yang dinyatakan lulus dalam Sekolah Laduni Kediri yang tidak ditentukan waktunya seperti pada sekolah reguler, sehingga diharapkan Jaelani-Jaelani tersebut pada gilirannya dapat mempunyai kemampuan menularkan dan menyampaikan kebenaran yang bersumber dari Al Qur&rsquo;an dengan melalui Ilmu-Nya kepada orang lain yang beriman.
										</p>
									</div>
								</div>
							</div>
                                                    <div class="col-4">
								<div class="wrapper">									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Tugas Jum'at</strong></h6>
										<p align="justify">
										Perintah untuk mengingat Allah pada setiap hari Jumat yaitu ketika waktu masuk Sholat pada hari Jumat atau pada saatnya Sholat Dhuhur sehingga bukan mendirikan Sholat Jumat.  <br/><a href="<?php echo base_url()."sekolah"; ?>">Tugas Jumat</a> - klik disini
										</p>
									</div>
								</div>
							</div>
						</div>
                                                <
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