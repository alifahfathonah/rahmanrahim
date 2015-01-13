<!DOCTYPE html>
<html>
<head>
    <title>Laduni</title>
<meta name="description" content="Official Website dari yayasan nurRachman nurRachim (Rahman-Rahim)"/>
<meta name="keywords" content="illa,illarahmatan,lilalamin,payung agung,illa rahmatan lil alamin, agung, rahman, rahim, rahmanrahim, nurRahman, nurRahim"/>
<meta name="author" content="Payung Agung"/>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/payungagung.png"/>
	<meta charset="utf-8">

       

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleadministrator.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fancybox.css" media="screen"  />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui-1.8.16.custom.css" media="screen"  />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fullcalendar.css" media="screen"  />
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/elfinder/css/elfinder.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/editor/jquery.wysiwyg.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/editor/default.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/player/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/tipTip.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/chosen.css" media="screen"  />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/tables.css" media="screen"  />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.jgrowl.css" media="screen"  />
    
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/jquery-ui-1.8.16.custom.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/ddaccordion.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>lib/jquery.flot.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/fancybox/fancybox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/elfinder/js/elfinder.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>lib/editor/jquery.wysiwyg.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>lib/editor/wysiwyg.image.js" charset="utf-8"></script>
	<script src="<?php echo base_url(); ?>lib/editor/default.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>lib/editor/wysiwyg.link.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>lib/editor/wysiwyg.table.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/player/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/player/ttw-video-player-min.js"></script>
    <script src="<?php echo base_url(); ?>lib/jquery.tipTip.minified.js"></script>
    <script src="<?php echo base_url(); ?>lib/forms.js"></script>
    <script src="<?php echo base_url(); ?>lib/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/autoresize.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/colorpicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>lib/validation.js"></script>
    <script src="<?php echo base_url(); ?>lib/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/jquery.jgrowl_minimized.js"></script>
    <script src="<?php echo base_url(); ?>lib/jquery.alerts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>lib/slidernav-min.js"></script>
    <script src="<?php echo base_url(); ?>lib/formToWizard.js"></script><script>$(document).ready(function(){ $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' }) });</script>
    
    
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/functions.js"></script>
    
    
    <!-- wysihtml5 parser rules -->
    <script src="<?php echo base_url(); ?>js/advanced.js"></script>
    <!-- Library -->
    <script src="<?php echo base_url(); ?>js/wysihtml5-0.3.0.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/artikel/stylesheet.css" media="screen"  />
  
</head>

<body>

 <header>
	  <div class="centered-head">
      <!-- Logo -->
	  <h1><a href="/dashboard.html" class="logo">Laduni</a></h1>
      <!-- Logo end -->
      
      <!-- Navigation -->
      <nav>             
        <ul>
            <li id="login">
                <span id="login-trigger">
                 <span id="login-triggers">
 					<span id="user-panel-check"></span>
  					<a href="<?php echo base_url()."home/keluar"?>"><span id="user-panel-title">Log Out</span></a>
                  </span>
                </span>
                <!--<div id="login-content">
                  <ul>
                  <li><a href="#"><img src="../images/setting.png" alt=""> <span>Settings</span></a></li>
                  <li><a href="#"><img src="../images/help.png" alt=""><span>Help</span></a></li>
                  <li><a href="/index.html"><img src="../images/logout.png" alt=""><span>Log Out</span></a></li>
                  </ul>
               </div> -->                    
            </li> 
        </ul>
      </nav>  
      
      <div class="account-name"><p><span class="welcome">Welcome, </span><strong><?php echo  $this->session->userdata('user')->username;?></strong></p><div class="account-separator"></div></div>
       
      <!--<div class="account-name"><p>Language:</p>
       	<ul class="language">
        	<li><a href="#" class="ukraine">ukraine</a></li>
            <li class="language-active"><a href="#" class="usa">usa</a></li>
            <li><a href="#" class="europe">europe</a></li>
        </ul>
        <div class="account-separator"></div></div>-->
      
      <!-- Navigation end-->
     
       </div>
 </header>
 
  
 

        