<!DOCTYPE html>
<html lang="en">
    
<body id="page3" >
<!-- header -->
<?php if(!isset ($_SESSION['username']) || $_SESSION['username']=='')
{
    ?>

                    <ul id="menu" class="login" >
						<li>
                                                <center>Masuk</center>

							<ul id="menu" >
							<li> 
							<form action="<?=base_url();?>home/masuk" method="post" id="formMasuk" name="formMasuk">
                                                                          <table style="color: black">
                                                                            <tr>
                                                                            <td><strong>Username</strong></td>
                                                                          
                                                                            <td><input type="text" name="username" id=username" size="8"/></td>
                                                                            <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr><td>&nbsp;</td></tr>
                                                                            <tr>
                                                                            <td><strong>Password</strong></td>
                                                                            
                                                                            <td><input type="password" name="password" id="password" size="8"/></td>
                                                                            </tr>
                                                                        
                                                                          </table>
                                                                        <br/>
                                                                        &nbsp;
                                                                          <input type="submit" name="masuk" value="Masuk" style="background-color: #95d5f8"/>
                                                                         &nbsp;
                                                                          <input type="submit" name="daftar" value="Daftar" style="background-color: #95d5f8"/>
                                                                    </form>
							</li>
							</ul>
						</li>
					</ul>
<?php } 
else
{
    

?>
        <ul id="menunew" class="loginnew" >
            
                <li>
                    <div style="color: white ; font-family: Arial, Verdana; font-size: 14px;  ">
                        <center>
                        <?php echo $_SESSION['username'] ?> 
                        </center>
                    </div>
                        <ul id="menunew" >
                        <li> 
                        <a href="<?php echo base_url(); ?>home/profil">Lihat Profil</a>
                        </li>
                        <li> 
                        <a href="<?php echo base_url(); ?>home/keluar">Keluar</a>
                        </li>
                        </ul>
                </li>
         </ul>
<?php }?>
	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
                                            <a class="logonew" href="<?php echo base_url(); ?>">PayungAgung</a>
						
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
						<h2>Data Pendaftaran Member</h2>
                                                    <p align="center">&nbsp;</p>
                                                    <table style="color: black">
                                                            <tr>     
                                                                <td width="28%">
                                                                
                                                                    <table style="color: black">
                                                                        <tr>
                                                                            <td>
                                                                     <?php if($foto==NULL || $foto=='') { ?>
                                                                             <img src="<?php echo base_url(); ?>images/box.png" alt="bite" width="120" height="120"/>
                                                                             <?php }  else {
                                                                                 ?> <img src="<?php echo base_url().'uploads/'.$foto; ?>" alt="Unggah Data Diri Kembali" width="190" height="120"/>
                                                                            <?php } ?>

                                                                           
                                                                             
                                                                             </td>
                                                                     </tr>
                                                                    </table>
                                                                
                                                                </td>
                                                                <td width="40%">
                                                                   
                                                                    <table style="color: black">
                                                                    <tr>
                                                                            <td><strong>ID Member</strong></td>
                                                                            <td>&nbsp;</td>
                                                                    <td><input type="text" name="id_member" id="id_member" readonly="readonly" value="<?php echo $id_member ?>" /></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                            <td><strong>Username</strong></td>
                                                                            <td>&nbsp;</td>
                                                                    <td><input type="text" name="username" id="username" readonly="readonly" value="<?php echo $username ?>" /></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                        <tr>
                                                                            <td><strong>Nama Lengkap</strong></td>
                                                                            <td>&nbsp;</td>
                                                                    <td><input type="text" name="nama" id="nama" readonly="readonly" value="<?php echo $nama ?>" size="25"/></td>
                                                                   
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
                                                                    <td><input type="text" name="alamat" id="alamat" readonly="readonly" value="<?php echo $alamat ?>" /></td>
                                                                  
                                                                    </tr>
                                                                    <?php
                                                                        $tgl = $tgllahir[8] . $tgllahir[9];
                                                                        $bln = $tgllahir[5] . $tgllahir[6];
                                                                        $thn = $tgllahir[0] . $tgllahir[1] . $tgllahir[2] . $tgllahir[3];
                                                                     ?>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                     <tr>
                                                                    <td><strong>E-mail</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input type="text" name="email" id="email"  value="<?php echo $email ?>" readonly="readonly" size="25"/></td>
                                                                    
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    <tr>
                                                                    <td><strong>Tempat Lahir</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input type="text" name="tempat" id="tempat"  readonly="readonly" value="<?php echo $tmptlahir?>"/></td>
                                                                    
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
                                                                    <select name="bulan" id="bulan" >
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
                                                                    <td><input type="text" name="nomorhp" id="nomorhp" readonly="readonly" value="<?php echo $hp ?>"/></td>
                                                                  

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
                                                                     <tr>
                                                                    <td><strong>Status</strong></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><input type="text" name="status" id="status"  readonly="readonly" value="<?php echo $status ?>"/></td>                                                                 
                                                                    </tr>
                                                                    <tr><td>&nbsp;</td></tr>
                                                                    </table>
                                                                   <form action="<?=base_url();?>administratorPA/do_member" method="post" id="formMember" name="formMember" >
                                                                        <input name="username_hidden" type="hidden" value="<?php echo $username ?>"/>
                                                                        <input type="submit" name="do_member" value="Jadikan Member"/>
                                                                        <br/>
                                                                        <br/>
                                                                         <a href="<?=base_url();?>administratorPA/guest">Kembali ke Data Pendaftaran Member</a>
                                                                    </form>
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
								<h4>Alamat:</h4>
								<dl class="address">
									<dt><span>Negara:</span>Indonesia</dt>
									
									<dd><span>Email:</span><a href="#">laduni@gmail.com</a></dd>
								</dl>
							</div>
							<div class="col-2">
								<h4>Follow Us:</h4>
								<ul class="list-services">
									<li class="item-1"><a href="#">Facebook</a></li>
									<li class="item-2"><a href="#">Twitter</a></li>
									<li class="item-3"><a href="#">Tumblr</a></li>
								</ul>
							</div>
							<div class="col-3">
								<h4></h4>
								<ul class="list-1">
									
								</ul>
							</div>
							<div class="col-4">
								<div class="indent3">
									<strong class="footer-logo">Laduni.<strong>org</strong></strong>

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