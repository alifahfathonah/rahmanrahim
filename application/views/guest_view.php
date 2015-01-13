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
                                                    <?php if(isset($rows)) { ?>
                                                    <table width="900" border="1"  bordercolor="#000000" bocellspacing="0" cellpadding="2" align="center" style="color: black">
                                                      <tr>
                                                        <td><div align="center">ID_Member</div></td>
                                                        <td><div align="center">Username</div></td>
                                                        <td><div align="center">Nama</div></td>
                                                        <td><div align="center">Alamat</div></td>
                                                        <td><div align="center">Email</div></td>
                                                        <td><div align="center">Negara</div></td>
                                                        <td><div align="center">Data Lengkap</div></td>
                                                      </tr>
                                                      <?php foreach($rows as $baris) : ?>
                                                      <tr>
                                                          <td><div align="center"><?php echo $baris->id_member; ?></div></td>
                                                        <td><div align="center"><?php echo $baris->username; ?></div></td>
                                                        <td><div align="center"><?php echo $baris->nama; ?></div></td>
                                                        <td><div align="center"><?php echo $baris->alamat; ?></div></td>
                                                        <td><div align="center"><?php echo $baris->email; ?></div></td>
                                                        <td><div align="center"><?php echo $baris->negara; ?></div></td>
                                                        <td><div align="center"><a href="<?php echo base_url()."administratorPA/detailguest/".$baris->username; ?>">Detail</a></div></td>
                                                      </tr>
                                                      <?php endforeach; ?>
                                                    </table>
                                                    <br/>
                                                    <?php }
                                                            else
                                                            {
                                                                    echo "<center><h2>Data Tidak Ditemukan</h2></center>";
                                                            }
                                                    ?>
                                                    
                                                    <a href="<?=base_url();?>administratorPA">Kembali ke Menu Utama</a>
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