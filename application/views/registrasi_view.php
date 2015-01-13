<!DOCTYPE html>

<body id="page3" >
<!-- header -->

	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
                                            <a class="logonew" href="<?php echo base_url(); ?>"></a>
                                            <a class="aktenew" href="<?php echo base_url(); ?>home/akteyayasan"></a>
                                            <a class="agamanew" href="<?php echo base_url(); ?>home/agama"></a>
                                            <a class="hartanew" href="<?php echo base_url(); ?>home/harta"></a>
                                            <a class="sekolahnew" href="<?php echo base_url(); ?>home/sekolah"></a>
					</h1>
					
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						  <li><a href="<?php echo base_url(); ?>">Payung Agung</a></li>
						  <li><a href="<?php echo base_url(); ?>home/akteyayasan">Akte Yayasan</a></li>
						  <li><a href="<?php echo base_url(); ?>home/agama">Agama</a></li>
						  <li><a href="<?php echo base_url(); ?>home/harta">Harta</a></li>
						  <li class="last-item"><a href="<?php echo base_url(); ?>home/sekolah">Sekolah Laduni Kediri</a></li>
						</ul>
					</nav>
				</div>
			</header>
<!-- content -->
			<section id="content" style="color: black">
				<div class="padding">
					<div class="indent">
                                            <?php if (isset ($_SESSION['messagereg']) && $_SESSION['messagereg']==false) { ?><div style="color: red">*Masukkan Semua Data dengan Benar</div><?php }?>
                                            
						<h2>Registrasi</h2>
                                                <form action="<?=base_url();?>member/registrasi" method="post" id="formMember" name="formMember" >
                                                    <table style="color: black">
                                                            <tr>
                                                            <td><strong>Username</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="text" name="username" id="username" onblur="cekUser();"/></td>
                                                            <td>&nbsp;</td>
                                                            <td><?php if (isset ($_SESSION['usernamereq']) && $_SESSION['usernamereq']==false) { ?> <div style="color: red">Username Sudah Terpakai</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Password</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="password" name="password" id="password" onblur="cekPass();"/></td>
                                                            <td>&nbsp;</td>
                                                            <td><?php if (isset ($_SESSION['password']) && $_SESSION['password']==false) { ?> <div style="color: red">Password Minimal 6 Karakter/Harus huruf dan angka</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Re-Password</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="password" name="re-password" id="re-password" onblur="cekPassword();"/></td>
                                                            <td>&nbsp;</td>
                                                            <td><?php if (isset ($_SESSION['passwordreq']) && $_SESSION['passwordreq']==false) { ?> <div style="color: red">Password Harus Sama</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Nama Lengkap</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="text" name="nama" id="nama" /></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                                <tr>
                                                            <td><strong>Jenis Kelamin</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><select name="jenis_kelamin" id="jenis_kelamin" style="width: 100px">
                                                                <option value="Pria" selected>Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                               
                                                                </select>
                                                            </td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <td><strong>Alamat</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="text" name="alamat" id="alamat" /></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>E-mail</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="text" name="email" id="email" onblur="cekEmail();"/></td>
                                                            <td>&nbsp;</td>
                                                            <td><?php if (isset ($_SESSION['email']) && $_SESSION['email']==false) { ?> <div style="color: red">Format Email Salah/Email Sudah Terpakai</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Tempat Lahir</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="text" name="tempat" id="tempat" /></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Tanggal Lahir</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><select name="tanggal" id="tanggal">
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                      <option value="4">4</option>
                                                                      <option value="5">5</option>
                                                                      <option value="6">6</option>
                                                                      <option value="7">7</option>
                                                                      <option value="8">8</option>
                                                                      <option value="9">9</option>
                                                                      <option value="10">10</option>
                                                                      <option value="11">11</option>
                                                                      <option value="12">12</option>
                                                                      <option value="13">13</option>
                                                                      <option value="14">14</option>
                                                                      <option value="15">15</option>
                                                                      <option value="16">16</option>
                                                                      <option value="17">17</option>
                                                                      <option value="18">18</option>
                                                                      <option value="19">19</option>
                                                                      <option value="20">20</option>
                                                                      <option value="21">21</option>
                                                                      <option value="22">22</option>
                                                                      <option value="23">23</option>
                                                                      <option value="24">24</option>
                                                                      <option value="25">25</option>
                                                                      <option value="26">26</option>
                                                                      <option value="27">27</option>
                                                                      <option value="28">28</option>
                                                                      <option value="29">29</option>
                                                                      <option value="30">30</option>
                                                                      <option value="31">31</option>      
                                                            </select> 
                                                            <select name="bulan" id="bulan">
                                                                      <option value="1">Januari</option>
                                                                      <option value="2">Februari</option>
                                                                      <option value="3">Maret</option>
                                                                      <option value="4">April</option>
                                                                      <option value="5">Mei</option>
                                                                      <option value="6">Juni</option>
                                                                      <option value="7">Juli</option>
                                                                      <option value="8">Agustus</option>
                                                                      <option value="9">September</option>
                                                                      <option value="10">Oktober</option>
                                                                      <option value="11">November</option>
                                                                      <option value="12">Desember</option>	  				  
                                                            </select> 
                                                            <select name="tahun" id="tahun">
                                                                      <?php $i = 50;
                                                                      $thn = 1950;
                                                                      while($i)
                                                                      {
                                                                          echo "<option value=$thn>$thn</option>";
                                                                          $i--;
                                                                          $thn++;
                                                                      }
                                                                      ?>
                                                            </select>
                                                                <td>&nbsp;</td>
                                                            <td><?php if (isset ($_SESSION['date']) && $_SESSION['date']==false) { ?> <div style="color: red">Tanggal Tidak Valid</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Nomor HP</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><input type="text" name="nomorhp" id="nomorhp" onblur="validasiTelepon();"/></td>
                                                            <td>&nbsp;</td>
                                                            <td><?php if (isset ($_SESSION['hp']) && $_SESSION['hp']==false) { ?> <div style="color: red">Nomor HP Tidak Valid</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                            <td><strong>Negara</strong></td>
                                                            <td>&nbsp;</td>
                                                            <td><select name="negara" id="negara" style="width: 150px">
                                                                <option value="Indonesia" selected>Indonesia</option>
                                                                <option value="Amerika">Amerika</option>
                                                                <option value="Arab Saudi">Arab Saudi</option>
                                                                <option value="China">China</option>
                                                                <option value="Inggris">Inggris</option>
                                                                </select>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong></strong></td>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    <span id="captchaImage"><?php echo $image ?></span><br />
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            
                                                             <tr>
                                                                <td><strong>Kode Pengamanan</strong></td>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="text" name="captcha" id="captcha" size="4"/></span><br />
                                                                </td>
                                                                <td>&nbsp;</td>
                                                                <td><?php if (isset ($_SESSION['kodepengaman']) && $_SESSION['kodepengaman']==false) { ?> <div style="color: red">Kode Pengamanan Salah</div><?php } ?></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>

                                                    </table>
                                                    
                                                  <span style="font-size:11px;"><input type="checkbox" name="checkRegistrasi" id="checkRegistrasi">
                                                      Menyatakan bahwa data yang diisikan diatas adalah sesuai dengan data diri asli</span>
                                                    <br/>
                                                    <br/>
                                                    <input type="submit" name="submit" value="Daftar" />
                                                </form>
                                        </div>

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