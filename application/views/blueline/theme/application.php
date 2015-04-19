<?php 
/**
 * @file        Application View
 * @author      Luxsys <support@luxsys-apps.com>
 * @copyright   By Luxsys (http://www.luxsys-apps.com)
 * @version     2.2.0
 */

$act_uri = $this->uri->segment(1, 0);
$lastsec = $this->uri->total_segments();
$act_uri_submenu = $this->uri->segment($lastsec);
if(!$act_uri){ $act_uri = 'dashboard'; }
if(is_numeric($act_uri_submenu)){ 
    $lastsec = $lastsec-1; 
    $act_uri_submenu = $this->uri->segment($lastsec);
}
 ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="<?=base_url()?>assets/blueline/style/main.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="">
  <link rel="apple-touch-icon" href="meta/apple-touch-icon.png">
  <link rel="apple-touch-startup-image" href="meta/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone 5+ -->
  <link rel="apple-touch-startup-image" href="meta/apple-touch-startup-image-640x920.png"  media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone, retina -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <META Http-Equiv="Cache-Control" Content="no-cache">
    <META Http-Equiv="Pragma" Content="no-cache">
    <META Http-Equiv="Expires" Content="0">
    <link rel="SHORTCUT ICON" href="<?=base_url()?>assets/blueline/img/favicon.ico"/>
    <title><?=$core_settings->company;?></title> 

    <!-- Bootstrap core CSS and JS -->
    
    <script src="<?=base_url()?>assets/blueline/js/plugins/jquery-1.11.0.min.js"></script>

    <!-- Custom styles for this template -->
    
   <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans:400italic,400,300,600,700:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/bootstrap.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/datepicker.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/bootstrap-timepicker.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/colorpicker.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/refineslide.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/jquery-slider.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/summernote.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/chosen.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/xcharts.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/nprogress.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/plugins/jquery-labelauty.css" />

    
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/blueline.css"/>
    
    <link href="<?=base_url()?>assets/blueline/css/font-awesome.min.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/user.css"/> 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>
<div id="mainwrapper">
 <a href="#" class="menu-trigger"><i class="fa fa-bars visible-xs"></i></a>
    <div class="side">
    <div class=" "></div>
        <div class="sidebar">
        <div class="navbar-header">
         
          <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/blueline/images/FC2_logo_light.png?>" alt="logo"></a>
        </div>
    
          
        </div>
    </div>

    <div class="content-area" onclick="">
      <div class="row mainnavbar"> 
	    <div class="score-container">0</div>
        <div class="best-container">0</div>
	   
      <div class="topbar">
      <?php 
                if($this->user->userpic != 'no-pic.png'){
                  $userimage = base_url()."files/media/".$this->user->userpic;
                }else{
                  $userimage = get_gravatar($this->user->email);
                }
                 ?>
				  
				  
      <span class="inline visible-xs"><a href="<?=site_url("agent");?>" data-toggle="mainmodal" title="<?=$this->lang->line('application_profile');?>"><img class="img-circle topbar-userpic" src="<?=$userimage;?>" height="21px"></a></span>
      <img class="img-circle topbar-userpic hidden-xs" src="<?=$userimage;?>" height="21px">
      
      <span class="hidden-xs"><?php echo character_limiter($this->user->firstname." ".$this->user->lastname, 25);?> </span>
       <span class="hidden-xs"><a href="<?=site_url("agent");?>" data-toggle="mainmodal" title="<?=$this->lang->line('application_profile');?>"><i class="fa fa-cog"></i></a></span>
      
      <span><a href="<?=site_url("logout");?>" title="<?=$this->lang->line('application_logout');?>"><i class="fa fa-sign-out"></i></a></span>
	   
      </div>
          
        </div>      
               
        
        <?=$yield?>     
      
            <div class="container">
    

    <div class="above-game">
	<a class="restart-button btn-primary" style="float:left;">New Game</a>
         
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>
  <br>
  <p class="game-intro">To Join the dices they must be the same color and the same number</p> 
    <p class="game-explanation">
	    <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the dices. When two dices with the same number and color touch, they <strong>merge into one!</strong>
    </p>
    <hr>
    
  </div>

  <script src="<?=base_url()?>assets/blueline/js/bind_polyfill.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/classlist_polyfill.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/animframe_polyfill.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/keyboard_input_manager.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/html_actuator.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/grid.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/tile.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/local_storage_manager.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/game_manager.js"></script>
  <script src="<?=base_url()?>assets/blueline/js/application.js"></script>        
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  

    </div>
    <!-- Notify -->
    <?php if($this->session->flashdata('message')) { $exp = explode(':', $this->session->flashdata('message'))?>
        <div class="notify <?=$exp[0]?>"><?=$exp[1]?></div>
    <?php } ?>

      
    <!-- Modal -->
    <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="mainModalLabel" aria-hidden="true"></div>
    

 
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery-ui-1.10.3.custom.min.js"></script>
    
    <!-- Plugins -->
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/date-time/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/date-time/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/bootstrap-colorpicker.min.js"></script>
    
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.knob.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.autosize-min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.inputlimiter.1.3.1.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.refineslide.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/summernote.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery.nanoscroller.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/chart.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/d3.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/xcharts.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/nprogress.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/jquery-labelauty.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/plugins/validator.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/blueline.js"></script>
    

   
 </div> <!-- Mainwrapper end -->   

       
 </body>
</html>
