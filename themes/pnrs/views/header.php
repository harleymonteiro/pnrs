<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo $page_title.$site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
	<link href="<?php echo Kohana::config('core.site_protocol'); ?>://fonts.googleapis.com/css?family=Open+Sans:300italic,300,700" rel="stylesheet" type="text/css">
	<?php echo $header_block; ?>
	<?php
            // Action::header_scripts - Additional Inline Scripts from Plugins
            Event::run('ushahidi_action.header_scripts');
	?>
        <!--js html5 -->
<script type="text/javascript" src="<?php echo url::file_loc('script'); ?>themes/pnrs/js/html5shiv.js"></script>

<!--rodapé fixo -->

	<script src="<?php echo url::file_loc('script'); ?>themes/pnrs/js/jquery.ez-pinned-footer.js" type="text/javascript" charset="utf-8"></script>
		
	<script type="text/javascript">
		$(window).load(function() {
		    $("#footer").pinFooter();
		});

		$(window).resize(function() {
		    $("#footer").pinFooter();
		});
	</script>
	
<!--shadowbox-->
    <link rel="stylesheet" type="text/css" href="http://localhost/pnrs/themes/pnrs/css/shadowbox.css">
	<script type="text/javascript" src="<?php echo url::file_loc('script'); ?>themes/pnrs/js/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init();
	</script>
</head>


<?php
  // Add a class to the body tag according to the page URI
  // we're on the home page
  if (count($uri_segments) == 0)
  {
    $body_class = "page-main";
  }
  // 1st tier pages
  elseif (count($uri_segments) == 1)
  {
    $body_class = "page-".$uri_segments[0];
  }
  // 2nd tier pages... ie "/reports/submit"
  elseif (count($uri_segments) >= 2)
  {
    $body_class = "page-".$uri_segments[0]."-".$uri_segments[1];
  }

?>

<body id="page" class="<?php echo $body_class; ?>">

<div id="wrapper">
      
    <!-- header --> 
    <div id="topo">
        <div id="logoimg">
                <img src="<?php echo url::file_loc('images'); ?>/themes/pnrs/images/logo-plataforma_educares.png" alt="Resíduos Sólidos - Boas Práticas em Educação Ambiental"/>
                <div class="logotxt">Práticas de Educação Ambiental e Comunicação Social em Resíduos Sólidos</div>
        </div>    
        <div id="menu">

            <div id="busca">
                    <form action="http://localhost/pnrs/index.php/search" method="get" id="search">
                        <input type="text" name="k" value="Buscar" onFocus="javascript:this.value=''" />
                    </form>
            </div>
            <div id="menu-int">
                    <ul>
                    <li><a href="<?php echo url::site() . 'main'; ?>">Início</a></li>
                    <li><a href="<?php echo url::file_loc('images'); ?>/themes/pnrs/views/oquee.html" rel="shadowbox">O que é a plataforma</a></li>
                    <li><a href="<?php echo url::file_loc('images'); ?>/themes/pnrs/views/comoparticipar.html" rel="shadowbox">Como participar</a></li>
                    <li><a href="<?php echo url::site().'contact' ?>" class="last">Contato</a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /topo -->
    
    <div id="abas">
            <a href="<?php echo url::site() . 'reports'; ?>" class="bt-ver">Ver práticas</a>
            <a href="<?php echo url::site() . 'reports/submit'; ?>" class="bt-adicione">Adicione sua prática</a>
    </div>
    <!-- / header -->