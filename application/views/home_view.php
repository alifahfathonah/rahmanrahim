
<body id="page1">
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
						<a class="logo" href="<?php echo base_url(); ?>"></a>
                                                <a class="aktenew" href="<?php echo base_url(); ?>home/akteyayasan"></a>
                                                <a class="agamanew" href="<?php echo base_url(); ?>home/agama"></a>
                                                <a class="hartanew" href="<?php echo base_url(); ?>home/harta"></a>
                                                <a class="sekolahnew" href="<?php echo base_url(); ?>home/sekolah"></a>
					</h1>
					
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						  <li><a class="active" href="<?php echo base_url(); ?>">Payung Agung</a></li>
						  <li><a href="<?php echo base_url(); ?>home/akteyayasan">Akte Yayasan</a></li>
						  <li><a href="<?php echo base_url(); ?>home/agama">Agama</a></li>
						  <li><a href="<?php echo base_url(); ?>home/harta">Harta</a></li>
						  <li class="last-item"><a href="<?php echo base_url(); ?>home/sekolah">Sekolah Laduni Kediri</a></li>
						</ul>
					</nav>
				</div>
                            <!--
				<div class="row-3" >
					<div class="slider-wrapper" >
						<div class="slider">
						  <ul class="items">
							<li><img src="images/slider-img1.jpg" alt="">
								<strong class="banner">
									<strong class="b1">our solidity</strong>
									<strong class="b2">is equity</strong>
									<strong class="b3">Innovation and flexibility, quick and<br> high results - oriented work</strong>
								</strong>
							</li>
							<li><img src="images/slider-img2.jpg" alt="">
								<strong class="banner">
									<strong class="b1">our aim is</strong>
									<strong class="b2">Dedicated</strong>
									<strong class="b3">To conducting business affairs using<br>the highest standards</strong>
								</strong>
							</li>
							<li><img src="images/slider-img3.jpg" alt="">
								<strong class="banner">
									<strong class="b1">encourage</strong>
									<strong class="b2">Business</strong>
									<strong class="b3">Success and growth with our<br>professionals of this sphere</strong>
								</strong>
							</li>
						  </ul>
						  <a class="prev" href="#">prev</a>
						  <a class="next" href="#">prev</a>
						</div>
					</div>
				</div>-->
			</header> 
<!-- content -->
			<section id="content" style="color: black">
                            <div class="padding" style="background-color: #95d5f8">
					 
					<div class="wrapper">
						<div class="col-3">
							<div class="indent">
                                                            <br/>
								<h3>Penjelasan Logo</h3>
                                                                <figure class="img-indent3"><img src="<?php echo base_url(); ?>images/payungagung.png" alt="" /></figure>
								<p  class="color-4 p1"  align="justify">Logo dari Yayasan Nurullah Nurmuhammad berupa "Payung Agung" 
                                                                    berlatar belakang warna Biru Langit yang berarti adanya 7 (Tujuh) Langit sebagai simbul kesempurnaan dari ciptaan Allah yang akan dapat dinaungi 
                                                                    bagi Makhluk di seluruh Alam Semesta. Sedang terdapat 9 (Sembilan) Pilar yang berwarna Biru Laut yang berarti 
                                                                    Bahtera kemuliaan bagi Umat untuk dapat menuju ke Jalan yang lurus yaitu agama Allah yang termasuk dalam Golongan Allah, kemudian adanya 
                                                                    Gagang dari Payung Agung yang berwarna Kuning Emas menunjukkan adanya Manusia Mulia yang telah dikehendaki Allah dengan 
                                                                    Pegangan berbentuk garis-garis Hitam sebagai simbul adanya keteguhan dan kekokohan yang selalu berpegang kepada Tali Allah yang kuat dan 
                                                                    di tengah-tengah Payung Agung pada bagian atas ada bentuk Segitiga berwarna Hitam sebagai simbul 
                                                                    adanya segi 3 Cap Kenabian yang ada pada Welikat sebagai Bukti Kerasulan yang telah mendapatkan Kunci untuk masuk Surga</p>
                                                                <br/><h3>Wadah Yayasan</h3>
                                                                
								<p  class="color-4 p1" align="justify">
								Berfungsi untuk meluruskan Aqidah dan menegakkan Tauhid dengan cara untuk membangun Umat dengan rahasia Al-Qur&rsquo;an serta untuk menyuburkan Umat dengan harta Amanah.
								</p>
                                                                <br/><h3>Nurullah Nurmuhammad</h3>
                                                                
								<p  class="color-4 p1" align="justify">
								Allah Maha Pengasih dan Penyayang akan memberikan Karunia dan Rahmat berupa pengampunan Dosa-dosa bagi siapapun yang mau memohon Ampunan dan Taubat serta hanya menyembah kepada Allah yang Maha Tunggal tidak dapat dipersekutukan dengan siapapun dengan memiliki akhlaq seperti Muhammad yaitu Al Qur'an kemudian tidak lupa dengan selalu bersyukur terhadap nikmat yang diberikan yang tidak terhitung banyaknya.
								</p>
                                                                <br/><h3>Tugas</h3>
                                                                
								<p  class="color-4 p1" align="justify">
								Allah telah menunjuk seorang "Imam" Nya untuk memimpin umat baik di Langit maupun di Bumi kemudian dibantu oleh 2 (dua) Orang Petugas, 4 (empat) Orang Pengurus Inti, 11 (sebelas) Orang Pengurus dan 313 (tiga ratus tiga belas) Orang Pegawai Allah yang kesemuanya diberi tugas untuk meluruskan umat.
								</p>
                                                                <br/><h3>Filosofi</h3>
                                                                
								<p  class="color-4 p1" align="justify">
								Perlu diketahui dari sejak Nabi Adam sampai dengan Muhammad Rasullah selalu membicarakan tentang Keimanan. Bagaimana umat harus menyembah hanya kepada Allah sehingga telah diturunkanlah 4 (empat) Kitab yaitu Taurat, Zabur, Injil dan Al Qur&rsquo;an semuanya adalah benar yang datang dari sisi Alah. Sedangkan tugas pada saat ini membahas tentang Keimanan dan Kekayaan karena Allah mempunyai Kerajaan di Langit dan di Bumi, sedangkan untuk Kerajaan Allah yang di Bumi belum adanya bukti yang Nyata. Sehingga untuk merealisasikan Kerajaan Allah yang ada di Bumi maka Allah Yang Maha Kaya telah menunjuk "Imam" Nya untuk membuktikan hal itu.
								</p>
							</div>
                                                    <br/>
                                                    <br/>
                                                    <a href="<?php echo base_url(); ?>pertanyaan"><img src="<?php echo base_url();?>images/tanya.png"></img></a>
                                                    <a href="<?php echo base_url(); ?>pertanyaan/detail"><img src="<?php echo base_url();?>images/detail.png"></img></a>
						</div>
                                            <?php if(!isset ($_SESSION['username'])  || $_SESSION['username']=='')
                                            { ?>
                                               <div class="col-2" style="background-color: #95d5f8">
							<div class="block-news" style="background-color: #95d5f8">
								<h3 class="color-4 p2">Masuk</h3>
								<div class="wrapper p2">
                                                                    <form action="<?=base_url();?>home/masuk" method="post" id="formMasuk" name="formMasuk">
                                                                          <table style="color: black">
                                                                            <tr>
                                                                            <td><strong>Username</strong></td>
                                                                            <td>&nbsp;:&nbsp;</td>
                                                                            <td><input type="text" name="username" id=username" size="18"/></td>
                                                                            </tr>
                                                                            <tr><td>&nbsp;</td></tr>
                                                                            <tr>
                                                                            <td><strong>Password</strong></td>
                                                                            <td>&nbsp;:&nbsp;</td>
                                                                            <td><input type="password" name="password" id="password" size="18"/></td>
                                                                            </tr>
                                                                        
                                                                          </table>
                                                                        <br/>
                                                                        &nbsp;&nbsp;
                                                                          <input type="submit" name="masuk" value="Masuk" />
                                                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                          
                                                                          <input type="submit" name="daftar" value="Daftar" />
                                                                    </form>
                                                                    
                                                                </div>
								<!--<div class="wrapper">
									<time class="tdate-1 fleft" datetime="2011-05-24"><strong>24</strong>may</time>
									<div class="extra-wrap">
										<h5>Felis molestie vitae</h5> 
										Sed massa justo pellen<br>tesque turpis lorem, ornare sit amet vulpate at, consectetur vitae nunc... <a href="#">more</a>
									</div>
								</div>-->
                                                                
							</div>
                                                   <br/>
                                                   <?php } ?>
                                                   <!--
						<div class="col-2" style="background-color: #95d5f8">
							<div class="block-news" style="background-color: #95d5f8">
								<h3 class="color-4 p2">Berita Terbaru</h3>
								<div class="wrapper p2">
									<time class="tdate-1 fleft" datetime="2012-07-27"><strong>27</strong>July</time>
									<div class="extra-wrap">
										<h5>Perubahan menjadi Yayasan Nurullah Nurmuhammad</h5>
									</div>
								<div class="wrapper p2">
									<time class="tdate-1 fleft" datetime="2012-01-01"><strong>01</strong>January</time>
									<div class="extra-wrap">
										<h5>Launching Website Rahman Rahim</h5>
									</div>
                                                                </div>
								<!--<div class="wrapper">
									<time class="tdate-1 fleft" datetime="2011-05-24"><strong>24</strong>may</time>
									<div class="extra-wrap">
										<h5>Felis molestie vitae</h5> 
										Sed massa justo pellen<br>tesque turpis lorem, ornare sit amet vulpate at, consectetur vitae nunc... <a href="#">more</a>
									</div>
								</div> batas
                                                                
							</div>
						</div>
					</div>-->
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
	
</body>
</html>
