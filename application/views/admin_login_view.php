  <!DOCTYPE html>
<html>
<head>
	<title>Laduni</title>
        <meta name="description" content="Official Website dari yayasan nurRachman nurRachim (Rahman-Rahim)"/>
        <meta name="keywords" content="illa,illarahmatan,lilalamin,payung agung,illa rahmatan lil alamin, agung, rahman, rahim, rahmanrahim, nurRahman, nurRahim"/>
        <meta name="author" content="Payung Agung"/>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/payungagung.png"/>
    
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/validationEngine.jquery.css" type="text/css" media="screen"  />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/loginadmin.css" type="text/css" media="screen"  />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

        <script src="<?php echo base_url(); ?>lib/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>lib/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script>
                jQuery(document).ready(function(){
                    // binds form submission and fields to the validation engine
                    jQuery("#form-login").validationEngine();
                });


        </script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<body style="background-color: #95d5f8;">

    <section id="form" >
        <form action="<?=base_url();?>administratorPA/login" method="post"  class="formular" id="form-login" name="formMasuk">     
                <div id="content-header" >
                     <center><p id="logo">Administrator</p></center>
                     <p><br/></p>
                </div>     	
                <div id="content" >         
                     <input type="text" name="username" id="req" class="validate[required] text-input" placeholder="Username"/><br/><br/>
                     <input type="password" name="password" id="pass" class="validate[required] text-input" placeholder="Password"/><br/><br/>
                     <div class="buttons">
                        <input type="submit"  name="masuk"  class="button-a blue" value="LOG IN"/>
                     </div>
                </div>
	</form>     
    </section>
 
</body>
</html>