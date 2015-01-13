<!DOCTYPE html>
<html lang="en">
<head>
<title>Laduni</title>
<meta name="description" content="Official Website dari yayasan nurRachman nurRachim (Rahman-Rahim)"/>
<meta name="keywords" content="illa,illarahmatan,lilalamin,payung agung,illa rahmatan lil alamin, agung, rahman, rahim, rahmanrahim, nurRahman, nurRahim"/>
<meta name="author" content="Payung Agung"/>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/payungagung.png"/>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css" type="text/css" media="screen"/>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/payungagung.png"/>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.min.js"></script>
<script src="<?php echo base_url(); ?>js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/cufon-replace.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/Open_Sans_Light_300.font.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>js/tms-0.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/tms_presets.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/java.js"></script>
<script src="<?php echo base_url(); ?>js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
<script type="text/javascript"> Cufon.now(); </script>
	<script type="text/javascript">
		$(function(){
			$('.slider')._TMS({
				prevBu:'.prev',
				nextBu:'.next',
				playBu:'.play',
				duration:800,
				easing:'easeOutQuad',
				preset:'simpleFade',
				pagination:false,
				slideshow:3000,
				numStatus:false,
				pauseOnHover:true,
				banners:true,
				waitBannerAnimation:false,
				bannerShow:function(banner){
					banner
						.hide()
						.fadeIn(500)
				},
				bannerHide:function(banner){
					banner
						.show()
						.fadeOut(500)
				}
			});
		})
	</script>
</head>
