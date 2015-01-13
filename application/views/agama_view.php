<!DOCTYPE html>

<body id="page3">
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
<!-- header -->
	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
                                                <a class="logonew" href="<?php echo base_url(); ?>"></a>
                                                <a class="aktenew" href="<?php echo base_url(); ?>home/akteyayasan"></a>
                                                <a class="agama" href="<?php echo base_url(); ?>home/agama"></a>
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
						<h2>Agama<figure class="img-indent3"><img src="<?php echo base_url(); ?>images/page1-img1.png" alt="" width="80px"/></figure></h2>
						<div class="wrapper indent-bot">
							<div class="col-3">
								<div class="wrapper">
									
                                                                        <div class="extra-wrap" style="color: black">
										<h6><strong>Penjelasan</strong></h6>
										<p align="justify">
										Membahas tentang agama yang lurus yaitu Agama Allah, yang merupakan agama Illa Rahmatan Lilallamin yaitu golongan Allah bahwa karena Allah mempunyai Sifat Rachman dan Rachim untuk dapat menuju sebagai Manusia yang Sempurna dan Mulia.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Rahasia Al-Quran</strong></h6>
										<p align="justify">
										Pedoman untuk meluruskan Umat dengan cara membangun dengan rahasia Al Qur&rsquo;an yang datang dari sisi Allah yang selama ini belum pernah diberikan kepada siapapun yang terdiri dari rahasia angka Al qur'an dan rahasia huruf abjad Al Qur'an, sehingga hanya berdasarkan dari terjemahan saja dan mengabaikan tafsir Al Qur&rsquo;an yang selama ini digunakan sebagian Umat.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper indent-bot2">
							<div class="col-3">
								<div class="wrapper">

									<div class="extra-wrap" style="color: black">										
										<h6><strong>Ilmu Allah</strong></h6>
										<p align="justify">
										Bahwa untuk membaca dan mengumpulkan serta menjelaskan ayat-ayat Allah diperlukan Ilmu langsung dari Allah, sedangkan ayat-ayat tersebut ketika diwahyukan melalui Malaikat Jibril kepada Muhammad Rasulullah juga dengan Ilmu Nya. Sehingga tidak mungkin ada orang atau siapapun dapat menjelaskan maksud dan arti dari isi ayat-ayat pada Surat di dalam Al Qur&rsquo;an dengan tanpa Ilmu Allah, sedangkan tafsir sendiri adalah suatu prasangka dan perkiraan dari Manusia belaka.
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Pembuktian Kebenaran</strong></h6>
										<p align="justify">
										Dengan akan dibangunnya Kerajaan Allah yang ada di Bumi dan akan ditunjukkan bahwa benar-benar Allah Maha Kaya dengan Harta Amanah yang dimiliki Nya. sedang Harta Amanah tersebut nanti akan digunakan untuk kepentingan menyuburkan Umat.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper p3">
							<div class="col-3">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Belajar Pembuktian</strong></h6>
										<p align="justify">
										Belajar pembuktian kebenaran dapat dilakukan dengan cara menggunakan rahasia Al Qur'an berupa rahasia angka Al Qur&rsquo;an dan rahasia huruf abjad Al Qur&rsquo;an serta angka dalam urutan pada huruf abjad bahasa Indonesia. Kenapa menggunakan huruf abjad bahasa Indonesia? Karena Syahadat Akhir (SA) telah dibuat dan ditemukan oleh Orang Indonesia yaitu Nur Muhammad Saleh, demikian juga alasan mengapa Al Qur&rsquo;an sendiri menggunakan bahasa Arab dengan alasan karena untuk memudahkan Muhammad Rasulullah mengerti dan menyampaikan wahyu yang diturunkan oleh Allah tersebut terutama kepada bangsa Arab sendiri.
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