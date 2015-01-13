<!DOCTYPE html>
<html lang="en">
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
						<h2>Pertanyaan Anda<figure class="img-indent3"><img src="<?php echo base_url(); ?>images/page1-img1.png" alt="" width="80px"/></figure></h2>
						<?php if(isset($rows)):?>
                                                <?php foreach($rows as $baris) : ?>
                                                <div class="wrapper indent-bot">
							<div class="col-3">
								<div class="wrapper">
									
                                                                        <div class="extra-wrap" style="color: black">
										<h6><strong>Pertanyaan</strong></h6>
										<p align="justify">
										<?php echo $baris->pertanyaan; ?>
										</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="wrapper">
									
									<div class="extra-wrap" style="color: black">
										<h6><strong>Jawaban</strong></h6>
										<p align="justify">
										<?php echo $baris->jawaban; ?>
										</p>
									</div>
								</div>
							</div>
						</div>
                                                <?php endforeach; ?>
                                                <?php endif;?>
                                                <form action="<?=base_url();?>pertanyaan/tanya" method="post" id="formMasuk" name="formMasuk">
                                                                                  <table style="color: black">

                                                                                    <tr>
                                                                                    <td><strong>Pertanyaan</strong></td>
                                                                                    <td>&nbsp;:&nbsp;</td>
                                                                                    <td><textarea  name="pertanyaan" id="pertanyaan" rows="6" cols="40" /></textarea></td>
                                                                                    <td>
                                                                                        &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>pertanyaan"><img src="<?php echo base_url();?>images/tanya.png"></img></a>
                                                                                    </tr>
                                                                                    </tr>
                                                                                    
                                                                                    <tr>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>&nbsp;</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td>
                                                                                            <input type="submit" name="tanya" value="Kirim Pertanyaan" />
                                                                                        </td>
                                                                                    </tr>
                                                                                 </table>
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