<!DOCTYPE html>

<body id="page3" >
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
                                            
						<h2>Profil Saya</h2>
                                                <?php if(isset ($_SESSION['upload']) && $_SESSION['upload']!=''){
                                                                        echo $_SESSION['upload'];
                                                                        }?>
                                                    <table style="color: black">
                                                            <tr>     
                                                                <td width="28%">
                                                                  <?php echo form_open_multipart('member/do_upload'); ?>
                                                                    <table style="color: black">
                                                                        <tr>
                                                                            <td>
                                                                     <?php if($foto==NULL || $foto=='') { ?>
                                                                             <img src="<?php echo base_url(); ?>images/box.png" alt="bite" width="120" height="120"/>
                                                                             <?php }  else {
                                                                                 ?> <img src="<?php echo base_url().'uploads/'.$foto; ?>" alt="Unggah Data Diri Kembali" width="190" height="120"/>
                                                                            <?php } ?>

                                                                             <br/>   
                                                                             <input type="file" name="userfile" id="userfile" size="14"/>
                                                                              <br/> 
                                                                              <br/>
                                                                             <input type="submit" value="Unggah Data Diri" />
                                                                             <br/>
                                                                             <br/>
                                                                             <div style="color: red">
                                                                             <?php if($status=="guest") echo "Isi data anda secara benar dan lengkap serta tunggu validasi dari kami";?>
                                                                             </div>
                                                                             </td>
                                                                     </tr>
                                                                    </table>
                                                                   <? echo form_close(); ?>
                                                                </td>
                                                                <td width="40%">
                                                                    <form action="<?=base_url();?>member/update" method="post" id="formMember" name="formMember" >
                                                                    <table style="color: black">
                                                                      
                                                                        <tr>
                                                                            <td><strong>Nama Lengkap</strong></td>
                                                                            <td>&nbsp;</td>
                                                                    <td><input type="text" name="nama" id="nama" value="<?php echo $nama ?>" /></td>
                                                                   
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                     <tr>
                                                                            <td><strong>Jenis Kelamin</strong></td>
                                                                            <td>&nbsp;</td>
                                                                     <td><select name="jenis_kelamin" id="jenis_kelamin" style="width: 100px"/>
                                                                <option value="Pria" <?php if($jenis_kelamin=='Pria') echo 'selected'; ?> >Pria</option>
                                                                <option value="Wanita" <?php if($jenis_kelamin=='Wanita') echo 'selected'; ?> >Wanita</option>
                                                                   
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                    <td><strong>Alamat</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>" /></td>
                                                                  
                                                                    </tr>
                                                                    <?php
                                                                        $tgl = $tgllahir[8] . $tgllahir[9];
                                                                        $bln = $tgllahir[5] . $tgllahir[6];
                                                                        $thn = $tgllahir[0] . $tgllahir[1] . $tgllahir[2] . $tgllahir[3];
                                                                     ?>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                    <td><strong>Tempat Lahir</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input type="text" name="tempat" id="tempat"  value="<?php echo $tmptlahir?>"/></td>
                                                                    
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                    <td><strong>Tanggal Lahir</strong></td>
                                                                    <td>&nbsp;</td>

                                                                    <td><select name="tanggal" id="tanggal"  >
                                                                            <?php $i = 31;
                                                                              $j = 1;
                                                                              while($i)
                                                                              {
                                                                                  echo "<option value=$j"; if($j==$tgl)echo" selected"; echo">$j</option>";
                                                                                  $i--;
                                                                                  $j++;
                                                                              }
                                                                              ?>          
                                                                    </select> 
                                                                    <select name="bulan" id="bulan">
                                                                              <option value="1" <?php if($bln==1)echo" selected"; ?>  >Januari</option>
                                                                              <option value="2" <?php if($bln==2)echo" selected"; ?>>Februari</option>
                                                                              <option value="3" <?php if($bln==3)echo" selected"; ?>>Maret</option>
                                                                              <option value="4" <?php if($bln==4)echo" selected"; ?>>April</option>
                                                                              <option value="5" <?php if($bln==5)echo" selected"; ?>>Mei</option>
                                                                              <option value="6" <?php if($bln==6)echo" selected"; ?>>Juni</option>
                                                                              <option value="7" <?php if($bln==7)echo" selected"; ?>>Juli</option>
                                                                              <option value="8" <?php if($bln==8)echo" selected"; ?>>Agustus</option>
                                                                              <option value="9" <?php if($bln==9)echo" selected"; ?>>September</option>
                                                                              <option value="10" <?php if($bln==10)echo" selected"; ?>>Oktober</option>
                                                                              <option value="11" <?php if($bln==11)echo" selected"; ?>>November</option>
                                                                              <option value="12" <?php if($bln==12)echo" selected"; ?>>Desember</option>	  				  
                                                                    </select> 
                                                                    <select name="tahun" id="tahun">
                                                                              <?php $i = 50;
                                                                              $j = 1950;
                                                                              while($i)
                                                                              {
                                                                                  echo "<option value=$j"; if($j==$thn)echo" selected"; echo">$j</option>";
                                                                                  $i--;
                                                                                  $j++;
                                                                              }
                                                                              ?>
                                                                    </select>
                                                                    
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                    <td><strong>Nomor HP</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input type="text" name="nomorhp" id="nomorhp" onBlur="validasiTelepon();" value="<?php echo $hp ?>"/></td>
                                                                    <td>&nbsp;</td>

                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                    <td><strong>Negara</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><select name="negara" id="negara" style="width: 150px" value="<?php echo $negara ?>">
                                                                        <option value="Indonesia" selected>Indonesia</option>
                                                                        <option value="Amerika">Amerika</option>
                                                                        <option value="Arab Saudi">Arab Saudi</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Inggris">Inggris</option>
                                                                        </select>
                                                                    </td>
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    </table>
                                                                        <input type="submit" name="submit" value="Simpan" />
                                                                    </form>
                                                                    
                                                                    
                                                                </td>
                                                                <td>
                                                                     <?php if (isset ($_SESSION['password']) && $_SESSION['password']==false) { ?> <div style="color: red">Password Minimal 6 Karakter/Harus Huruf atau Angka</div><br/><?php }
                                                                                else if (isset ($_SESSION['passwordreq']) && $_SESSION['passwordreq']==false) { ?> <div style="color: red">Password Harus Sama</div><br/><?php }
                                                                                else if (isset ($_SESSION['passwordbaru']) && $_SESSION['passwordbaru']==false) { ?> <div style="color: red">Password Lama Tidak Sama</div><br/><?php }
                                                                                else if (isset ($_SESSION['updatepass']) && $_SESSION['updatepass']==true) { ?> <div style="color: blue">Password berhasil diganti</div><br/><?php } ?>
                                                                                 <form action="<?=base_url();?>member/update" method="post" id="formMember" name="formMember" >
                                                                                <table style="color: black">
                                         
                                                                                  
                                                                                    <tr>
                                                                                         <td><strong>Password Lama</strong></td>
                                                                                         <td>&nbsp;</td>
                                                                                          <td><input type="password" name="passwordlama" id="passwordlama"/></td>
                                                                                    </tr>
                                                                                    <tr><td>&nbsp;</td></tr>
                                                                                    <tr>
                                                                                         <td><strong>Password Baru</strong></td>
                                                                                         <td>&nbsp;</td>
                                                                                          <td><input type="password" name="password" id="password"/></td>


                                                                                    </tr>
                                                                                    <tr><td>&nbsp;</td></tr>
                                                                                    <tr>
                                                                                         <td><strong>Re-Password Baru</strong></td>
                                                                                         <td>&nbsp;</td>
                                                                                          <td><input type="password" name="re-password" id="re-password"/></td>

                                                                                    </tr>
                                                                                    <tr><td>&nbsp;</td></tr>
                                                                                    <tr>
                                                                                         <td><input type="submit" name="ganti" value="Ganti Password" /></td>
                                                                                    </tr>
                                                                                </table>
                                                                </td>
                                                             </tr>


                                                                

                                                    </table>
                                                    
                                                
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