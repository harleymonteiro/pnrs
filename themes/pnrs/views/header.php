<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo $page_title.$site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--<link href="<?php echo Kohana::config('core.site_protocol'); ?>://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css">-->
	<?php echo $header_block; ?>
	<?php
            // Action::header_scripts - Additional Inline Scripts from Plugins
            Event::run('ushahidi_action.header_scripts');
	?>
        <!--js html5 -->
<script type="text/javascript" src="http://localhost/pnrs/themes/pnrs/js/html5shiv.js"></script>

<!--rodapé fixo -->
	<script src="http://localhost/pnrs/themes/pnrs/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://localhost/pnrs/themes/pnrs/js/jquery.ez-pinned-footer.js" type="text/javascript" charset="utf-8"></script>
		
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
	<script type="text/javascript" src="http://localhost/pnrs/themes/pnrs/js/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init();
	</script>
</head>


<body id="page">   

      
    <div id="topo">
        <div id="logoimg">
                <img src="http://localhost/pnrs/themes/pnrs/images/logo-plataforma.png" alt="Resíduos Sólidos - Boas Práticas em Educação Ambiental"/>
        </div>    
        <div id="menu">

            <div id="busca">
                    <form>
                    <input type="text" value="Buscar" onFocus="javascript:this.value=''" />
                </form>
            </div>
            <nav>
                    <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="<?php echo url::site() . 'reports/submit/'; ?>" rel="shadowbox">O que é a plataforma</a></li>
                    <li><a href="#">Como participar</a></li>
                    <li><a href="#" class="last">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div> 
    
    <div id="abas">
            <a href="#" class="bt-ver">Ver práticas</a>
            <a href="#" class="bt-adicione">Adicione sua prática</a>
    </div>
     