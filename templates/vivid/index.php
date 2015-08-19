<?php defined( '_JEXEC' ) or die( 'Restricted access' ); define( 'YOURBASEPATH', dirname(__FILE__) ); ?>
<?php 
JHTML::_('behavior.mootools'); 

$doc = JFactory::getDocument();
$doc->setMetaData( 'cleartype', 'on', true );
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" ><!--<![endif]-->
<head>
<?php if($this->params->get("useresponsivemode") == true ) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php endif; ?>
<?php
if (!JFactory::getApplication()->get('jquery')) { JFactory::getApplication()->set('jquery', true); 
echo '<script src="'.$this->baseurl.'/templates/'.$this->template.'/js/jquery-1.8.1.min.js"></script><script src="'.$this->baseurl.'/templates/'.$this->template.'/js/jquery.noConflict.js"></script>'; } ?>
	<jdoc:include type="head" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/selectivizr-min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modernizr.js"></script>
<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie9-10.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" media="screen" />
	<?php if($this->params->get("useresponsivemode") == true  ) :  ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/responsive.css" media="screen" />
    <?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/nav.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/typography.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" media="screen" />
	<?php if($this->params->get("useresponsivemode") ) :  ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/responsive-template.css" media="screen" />
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/vm-vivid.css" media="screen" />
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"> </script>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans+Condensed:700:latin' ] }
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
<script type="text/javascript">  
(function(){
  // if firefox 3.5+, hide content till load (or 3 seconds) to prevent FOUT
  var d = document, e = d.documentElement, s = d.createElement('style');
  if (e.style.MozTransform === ''){ // gecko 1.9.1 inference
    s.textContent = 'body{visibility:hidden}';
    var r = document.getElementsByTagName('script')[0];
    r.parentNode.insertBefore(s, r);
    function f(){ s.parentNode && s.parentNode.removeChild(s); }
    addEventListener('load',f,false);
    setTimeout(f,3000);
  }
})();
 </script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/selectnav.min.js"></script>
<!--[if IE 6]> <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie6.css" media="screen" /> <![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie.css" media="screen" /> <![endif]-->
    <?php if($this->params->get('usetheme')==true) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/presets/<?php echo $this->params->get('choosetheme'); ?>.css" media="screen" />
    <?php endif; ?>
	<?php if($this->params->get("usedropdown")) : ?> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/supersubs.js"></script>
	<script type="text/javascript">
    jQuery(document).ready(function(){ 
        jQuery("ul.menu-nav").supersubs({ 
			minWidth: <?php echo $this->params->get("dropdownhandler1"); ?>,
            extraWidth:  1
        }).superfish({ 
            delay:500,
            animation:{opacity:'<?php if($this->params->get("dropopacity")) : ?>show<?php else: ?>hide<?php endif; ?>',height:'<?php if($this->params->get("dropheight")) : ?>show<?php else: ?>hide<?php endif; ?>',width:'<?php if($this->params->get("dropwidth")): ?>show<?php else: ?>hide<?php endif; ?>'},
            speed:'<?php echo $this->params->get("dropspeed"); ?>',
            autoArrows:true,
            dropShadows:false 
        });
    }); 
	
	jQuery(function() {                      
		jQuery(".closeMenu").click(function() { 
			jQuery('#social-links').attr('style','display:none');		
		});
	});
	</script>
	<?php endif; ?>
	<?php if( $this->countModules('position-1')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#menupanel').on('click', function() {
			jQuery('div.panel1').animate({
				'width': 'show'
			}, 300, function() {
				jQuery('div.menupanel').fadeIn(200);
			});
		});
		jQuery('span.closemenu').on('click', function() {
			jQuery('div.menupanel').fadeOut(200, function() {
				jQuery('div.panel1').animate({
					'width': 'hide'
				}, 300);
			});
		});
	});
	</script>
	<?php endif; ?>
	<?php echo $this->params->get("headcode"); ?>
	<?php if( $this->countModules('currency')) : ?>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/jquery.dropkick-1.0.0.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.default-currency').dropkick();
	});
	</script>
	<?php endif; ?>
		
	<?php if( $this->countModules('builtin-slideshow')) : ?>
	<!-- Built-in Slideshow -->
	<?php if($this->params->get("cam_turnOn")) : ?>
		<link rel="stylesheet" id="camera-css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/camera.css" type="text/css" media="all" /> 
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/camera.min.js"></script> 
		<script>
			jQuery(function(){		
				jQuery('#ph-camera-slideshow').camera({
					alignment: 'topCenter',
					autoAdvance: <?php if ($this->params->get("cam_autoAdvance")) : ?>true<?php else: ?>false<?php endif; ?>,
					mobileAutoAdvance: <?php if ($this->params->get("cam_mobileAutoAdvance")) : ?>true<?php else: ?>false<?php endif; ?>, 
					slideOn: '<?php if($this->params->get("cam_slideOn")) : echo $this->params->get("cam_slideOn"); else : ?>random<?php endif; ?>',	
					thumbnails: <?php if ($this->params->get("cam_thumbnails")) : ?>true<?php else: ?>false<?php endif; ?>,
					time: <?php if($this->params->get("cam_time")) : echo $this->params->get("cam_time"); else : ?>7000<?php endif; ?>,
					transPeriod: <?php if($this->params->get("cam_transPeriod")) : echo $this->params->get("cam_transPeriod"); else : ?>1500<?php endif; ?>,
					cols: <?php if($this->params->get("cam_cols")) : echo $this->params->get("cam_cols"); else : ?>10<?php endif; ?>,
					rows: <?php if($this->params->get("cam_rows")) : echo $this->params->get("cam_rows"); else : ?>10<?php endif; ?>,
					slicedCols: <?php if($this->params->get("cam_slicedCols")) : echo $this->params->get("cam_slicedCols"); else : ?>10<?php endif; ?>,	
					slicedRows: <?php if($this->params->get("cam_slicedRows")) : echo $this->params->get("cam_slicedRows"); else : ?>10<?php endif; ?>,
					fx: '<?php if($this->params->get("cam_fx_multiple_on")) : echo $this->params->get("cam_fx_multi"); else : echo $this->params->get("cam_fx"); endif; ?>',
					gridDifference: <?php if($this->params->get("cam_gridDifference")) : echo $this->params->get("cam_gridDifference"); else : ?>250<?php endif; ?>,
					height: '<?php if($this->params->get("cam_height")) : echo $this->params->get("cam_height"); else : ?>50%<?php endif; ?>',
					minHeight: '<?php echo $this->params->get("cam_minHeight"); ?>',
					imagePath: '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/',	
					hover: <?php if ($this->params->get("cam_hover")) : ?>true<?php else: ?>false<?php endif; ?>,
					loader: '<?php if($this->params->get("cam_loader")) : echo $this->params->get("cam_loader"); else : ?>pie<?php endif; ?>',
					barDirection: '<?php if($this->params->get("cam_barDirection")) : echo $this->params->get("cam_barDirection"); else : ?>leftToRight<?php endif; ?>',
					barPosition: '<?php if($this->params->get("cam_barPosition")) : echo $this->params->get("cam_barPosition"); else : ?>bottom<?php endif; ?>',	
					pieDiameter: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>,
					piePosition: '<?php if($this->params->get("cam_piePosition")) : echo $this->params->get("cam_piePosition"); else : ?>rightTop<?php endif; ?>',
					loaderColor: '<?php if($this->params->get("cam_loaderColor")) : echo $this->params->get("cam_loaderColor"); else : ?>#eeeeee<?php endif; ?>', 
					loaderBgColor: '<?php if($this->params->get("cam_loaderBgColor")) : echo $this->params->get("cam_loaderBgColor"); else : ?>#222222<?php endif; ?>', 
					loaderOpacity: <?php if($this->params->get("cam_loaderOpacity")) : echo $this->params->get("cam_loaderOpacity"); else : ?>8<?php endif; ?>,
					loaderPadding: <?php if($this->params->get("cam_loaderPadding")) : echo $this->params->get("cam_loaderPadding"); else : ?>2<?php endif; ?>,
					loaderStroke: <?php if($this->params->get("cam_loaderStroke")) : echo $this->params->get("cam_loaderStroke"); else : ?>7<?php endif; ?>,
					navigation: <?php if ($this->params->get("cam_navigation")) : ?>true<?php else: ?>false<?php endif; ?>,
					playPause: <?php if ($this->params->get("cam_playPause")) : ?>true<?php else: ?>false<?php endif; ?>,
					navigationHover: <?php if ($this->params->get("cam_navigationHover")) : ?>true<?php else: ?>false<?php endif; ?>,
					mobileNavHover: <?php if ($this->params->get("cam_mobileNavHover")) : ?>true<?php else: ?>false<?php endif; ?>,
					opacityOnGrid: <?php if ($this->params->get("cam_opacityOnGrid")) : ?>true<?php else: ?>false<?php endif; ?>,
					pagination: <?php if ($this->params->get("cam_pagination")) : ?>true<?php else: ?>false<?php endif; ?>,
					pauseOnClick: <?php if ($this->params->get("cam_pauseOnClick")) : ?>true<?php else: ?>false<?php endif; ?>,
					portrait: <?php if ($this->params->get("cam_portrait")) : ?>true<?php else: ?>false<?php endif; ?>
				});
			});
		</script>
	<?php endif; ?>
	<!-- End of Built-in Slideshow -->
	<?php endif; ?>
	
	<script type="text/javascript">	
		equalheight = function(container){

		var currentTallest = 0,
			 currentRowStart = 0,
			 rowDivs = new Array(),
			 $el,
			 topPosition = 0;
		 jQuery(container).each(function() {

		   $el = jQuery(this);
		   jQuery($el).height('auto')
		   topPostion = $el.position().top;

		   if (currentRowStart != topPostion) {
			 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
			   rowDivs[currentDiv].height(currentTallest);
			 }
			 rowDivs.length = 0; // empty the array
			 currentRowStart = topPostion;
			 currentTallest = $el.height();
			 rowDivs.push($el);
		   } else {
			 rowDivs.push($el);
			 currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		  }
		   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
			 rowDivs[currentDiv].height(currentTallest);
		   }
		 });
		}

		jQuery(window).load(function() {
		  equalheight('.moduletable_style1');

		});


		jQuery(window).resize(function(){
		  equalheight('.moduletable_style1');

		});

	</script>
	
	<?php if( $this->countModules('position-0')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#searchOpenButton1" ).click(function() {
		  jQuery( "#searchpanel1" ).toggle( "normal" );
		});
		
		jQuery("#searchOpenButton2" ).click(function() {
		  jQuery( "#searchpanel2" ).toggle( "normal" );
		});
		
	});
	</script>
	<?php endif; ?>
	
	<?php if( $this->countModules('quick-menu')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#stickymenuButton" ).click(function() {
		  jQuery( "#stickymenupanel" ).toggle( "normal" );
		});
	});
	</script>

	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.nicescroll.min.js"></script>
	<script>
	jQuery(window).ready(function() {
		jQuery( "#stickymenuButton" ).on( "click", function() {
			jQuery("#boxscroll").niceScroll({
				touchbehavior: false,
				cursorwidth: 10,
				cursorborder: "0",
				cursorborderradius: "0px"
			}); 
			jQuery("#boxscroll").getNiceScroll().resize();
		});
		
		jQuery( ".sticky-menu-content" ).on( "click", function() {
			jQuery("#boxscroll").getNiceScroll().resize();
		});
		
		jQuery( document ).on ( "vmousemove", "body", function(event) {
			jQuery("#boxscroll").getNiceScroll().resize();
		});
		
	});
	

	
	</script>
	<?php endif; ?>
	
	<script type="text/javascript">	
	jQuery(window).on("scroll touchmove", function () {
		jQuery('#top-sticky-panel').toggleClass('tiny', jQuery(document).scrollTop() > <?php echo $this->params->get('topheight') + 48; ?> );
	});
	</script>
	
	<style type="text/css">
	#top-sticky-panel {
		height: 50px;
		padding:0px;
		position:fixed;
		top: -50px;
		left:0;
		right:0;
		opacity: 0;
		transition: opacity 500ms, top 500ms;
		background: #ffffff;
		box-shadow: 0px 1px 3px rgba(0,0,0,0.3);
		z-index: 1039;
	}
	#top-sticky-panel.tiny {
		opacity: 1;
		top: 0px;
	}

	<?php if($this->params->get("useresponsivemode") == false ) : ?>
	.container {width:<?php echo $this->params->get('nonresponsivesitewidth'); ?>;}
	.camera_caption > div{background-color:transparent !important;}
	.camera_caption h1 {font-size: 300%;letter-spacing: -1px;margin: 4px 0px 20px 0px;}
	.camera_caption h2 {font-size: 200%;letter-spacing: 0px;margin: 4px 0px 20px 0px;}
	.camera_caption {font-size: 110%;}
	#search-position .search .inputbox, #search-position .finder .inputbox {max-width: 135px;}
	.selectnav {display:none;}.log-panel .button1{display:none;}
	.category-view .row-fluid .category img{width:100%;}
	<?php endif; ?>
	body {font-size: <?php echo $this->params->get('contentfontsize'); ?>;}
	#site-name-handler, #search-position{height:<?php echo $this->params->get('topheight'); ?>px; }
	#sn-position .h1{<?php if ($this->direction == 'rtl') : ?>right<?php else: ?>left<?php endif; ?>:<?php echo $this->params->get('H1TitlePositionX'); ?>px;top:<?php echo $this->params->get('H1TitlePositionY'); ?>px;color:<?php echo $this->params->get('sitenamecolor'); ?>;font-size:<?php echo $this->params->get('sitenamefontsize'); ?>;}
	#sn-position .h1 a {color:<?php echo $this->params->get('sitenamecolor'); ?>;}
	#sn-position .h2 {<?php if ($this->direction == 'rtl') : ?>right<?php else: ?>left<?php endif; ?>:<?php echo $this->params->get('H2TitlePositionX'); ?>px;top:<?php echo $this->params->get('H2TitlePositionY'); ?>px;color:<?php echo $this->params->get('slogancolor'); ?>;font-size:<?php echo $this->params->get('sloganfontsize'); ?>;}
	
	.cl-handler { margin-top: <?php echo $this->params->get('topheight')/5; ?>px; }
	
	ul.columns-2 {width: <?php echo $this->params->get('dropdownhandler2'); ?>px !important;}
	ul.columns-3 {width: <?php echo $this->params->get('dropdownhandler3'); ?>px !important;}
	ul.columns-4 {width: <?php echo $this->params->get('dropdownhandler4'); ?>px !important;}
	ul.columns-5 {width: <?php echo $this->params->get('dropdownhandler5'); ?>px !important;}
	<?php if ($this->direction == 'rtl') : ?>
	ul.menu-nav li li:hover ul, ul.menu-nav li li.sfHover ul {
		right: <?php echo $this->params->get("dropdownhandler1") - 1; ?>em;
	}
	<?php endif; ?>
	<?php if( $this->countModules('builtin-slideshow')) : 
	if($this->params->get("cam_turnOn")) : ?>
	.camera_caption { top: <?php echo $this->params->get("cam_caption_y_position"); ?>; }
	.camera_caption div.container div { width: <?php echo $this->params->get("cam_caption_width"); ?>; }
	.camera_pie {
		width: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>px;
		height: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>px;
	}
	#slideshow-handler { min-height: <?php echo $this->params->get("cam_minHeight"); ?>; }
	<?php endif; endif; ?>
<?php							
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb);
}
?>

<?php echo $this->params->get("color1"); ?>
<?php echo hex2rgb($this->params->get("color47")); ?>

<?php if($this->params->get('usetheme')==false) : ?> 

body {
	background-color: <?php echo $this->params->get("color1"); ?>;
	color: <?php echo $this->params->get("color2"); ?>;
}

.container.msc-container {
	background-color: <?php echo $this->params->get("color3"); ?>;
}

.custom-color1{color: <?php echo $this->params->get("color4"); ?>;}
.custom-color2{color: <?php echo $this->params->get("color5"); ?>;}
.custom-color3{color: <?php echo $this->params->get("color6"); ?>;}
.custom-color4{color: <?php echo $this->params->get("color7"); ?>;}

.log-panel a {
	color: <?php echo $this->params->get("color8"); ?>;
}

.log-panel a:hover {
	color: <?php echo $this->params->get("color9"); ?>;
}

dt.tabs.open, .latest-view .spacer, .topten-view .spacer, .recent-view .spacer, .featured-view .spacer, .browse-view .spacer {
	background-color: <?php echo $this->params->get("color3"); ?>;
}

a,a:hover, .moduletable_menu ul.menu li ul li a:hover {
	color: <?php echo $this->params->get("color10"); ?>;
}

.PricesalesPrice {
	color: <?php echo $this->params->get("color11"); ?>;
}

.pr-add, .pr-add-bottom,.featured-view .spacer h3, .latest-view .spacer h3, .topten-view .spacer h3, .recent-view .spacer h3, .related-products-view .spacer h3, .browse-view .product .spacer h2,.featured-view .spacer .product_s_desc, .latest-view .spacer .product_s_desc, .topten-view .spacer .product_s_desc, .recent-view .spacer .product_s_desc, .related-products-view .spacer .product_s_desc, .browse-view .product .spacer .product_s_desc {
	color: <?php echo $this->params->get("color12"); ?>;
}

.category-view .row-fluid .category .spacer h2 a .cat-title {
	color: <?php echo $this->params->get("color13"); ?>;
}

.category .spacer {
	background: <?php echo $this->params->get("color14"); ?>;
}

.category .spacer:hover {
	background: <?php echo $this->params->get("color15"); ?>;
}

.button, button, a.button, .btn, dt.tabs.closed:hover, dt.tabs.closed:hover h3 a, .closemenu, .vmproduct.productdetails .spacer:hover .pr-add, .vmproduct.productdetails .spacer:hover .pr-add-bottom, a.product-details, input.addtocart-button, a.ask-a-question, .highlight-button, .vm-button-correct, .cartpanel span.closecart, .vm-pagination ul li a, #LoginForm .btn-group > .dropdown-menu, #LoginForm .btn-group > .dropdown-menu a, a.details, #stickymenuButton, #searchOpenButton2:hover, #searchOpenButton1:hover, .search-panel #searchpanel2, .search-panel .inputbox, #top-sticky-panel .container .is-empty, .show-both {
	color: <?php echo $this->params->get("color16"); ?> !important;
	background-color: <?php echo $this->params->get("color17"); ?> !important;
}

a#menupanel {
	background-color: <?php echo $this->params->get("color18"); ?>;
}

a#menupanel:hover {
	background-color: <?php echo $this->params->get("color19"); ?>;
}

.row-fluid .spacer .pr-img-handler .popout-price .product-details:hover,
.row-fluid .spacer .pr-img-handler .popout-price .show-pop-up-image:hover {
	background-color: <?php echo $this->params->get("color20"); ?> !important;
}

.button:hover, button:hover, a.button:hover, .closemenu:hover, .btn:hover, a.product-details:hover, input.addtocart-button:hover, a.ask-a-question:hover, .highlight-button:hover, .vm-button-correct:hover, span.quantity-controls input.quantity-plus:hover, span.quantity-controls input.quantity-minus:hover, .cartpanel span.closecart:hover, .vm-pagination ul li a:hover, .quantity-input,  span.quantity-controls input.quantity-plus, span.quantity-controls input.quantity-minus,
.row-fluid .spacer .pr-img-handler .popout-price .product-details, .row-fluid .spacer .pr-img-handler .popout-price .show-pop-up-image, a.details:hover, #stickymenuButton:hover, #searchOpenButton2, #searchOpenButton1 {
	color: <?php echo $this->params->get("color21"); ?> !important;
	background-color: <?php echo $this->params->get("color22"); ?> !important;
}

.cart-button {
	background-color: <?php echo $this->params->get("color23"); ?>;
}

.is-empty {
	color: <?php echo $this->params->get("color24"); ?>;
}

.cart-button:hover {
	background-color: <?php echo $this->params->get("color25"); ?> !important;
}

.rm-line {background-color: <?php echo $this->params->get("color26"); ?>;}

.cart-button .popover-content {color: <?php echo $this->params->get("color27"); ?>;}

.cart-button .popover {background: <?php echo $this->params->get("color28"); ?>; }
.cart-button .popover.bottom .arrow{border-bottom-color: <?php echo $this->params->get("color29"); ?>;}

#LoginForm .btn-group > .dropdown-menu a:hover {
	background: <?php echo $this->params->get("color30"); ?> !important;
}

#LoginForm .caret {
	border-top-color: <?php echo $this->params->get("color31"); ?> !important;
}

div.spacer, li.spacer {
	background: <?php echo $this->params->get("color32"); ?>;
	border-color: <?php echo $this->params->get("color33"); ?>;
}

div.spacer:hover, li.spacer:hover {
	background: <?php echo $this->params->get("color34"); ?>;
	border-color: <?php echo $this->params->get("color35"); ?>;
}

.moduletable_empty > h3 {
	color: <?php echo $this->params->get("color36"); ?>;
}

.moduletable a, div.panel2 a, .category_description a, .productdetails-view a {
	color: <?php echo $this->params->get("color37"); ?>;
}

#nav-line {
	background-color: <?php echo $this->params->get("color38"); ?>;
}

.camera_wrap .camera_pag .camera_pag_ul li {
background: <?php echo $this->params->get("color39"); ?>;
}

.camera_prev > span,.camera_next > span,.camera_commands > .camera_play,.camera_commands > .camera_stop,.camera_prevThumbs div,.camera_nextThumbs div {
	background-color: <?php echo $this->params->get("color40"); ?>;
}

.camera_wrap .camera_pag .camera_pag_ul li > span, .product-sl-handler ol li,
.camera_prev:hover > span,.camera_next:hover > span,.camera_commands:hover > .camera_play,.camera_commands:hover > .camera_stop {
	background-color: <?php echo $this->params->get("color41"); ?>;
}

.camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span, .camera_wrap .camera_pag .camera_pag_ul li:hover > span,
.product-sl-handler ol li:hover, .product-sl-handler ol li.current {
	background-color: <?php echo $this->params->get("color42"); ?>;
}

.camera_thumbs_cont ul li > img {
	border: 1px solid <?php echo $this->params->get("color43"); ?> !important;
}

.camera_caption {
	color: <?php echo $this->params->get("color44"); ?>;
}

@media (max-width: 767px) { 
	.camera_caption > div {
		background-color: rgba(<?php echo hex2rgb($this->params->get("color45")); ?>,0.85);
	}
}

.camera_caption .button {
	background-color: <?php echo $this->params->get("color46"); ?> !important;
}

.camera_caption .button:hover {
	background-color: <?php echo $this->params->get("color47"); ?> !important;
}

.button.buynow {
	background-color: <?php echo $this->params->get("color48"); ?> !important;
}

.button.buynow:hover {
	background-color: <?php echo $this->params->get("color49"); ?> !important;
}

#menu {
	background: <?php echo $this->params->get("color50"); ?>;
}

#menu .menu-nav li a, #menu .menu-nav ul a, #menu .menu-nav ul ul a, #menu ul.menu-nav li a small {
	color: <?php echo $this->params->get("color51"); ?>;
}

.dk_options a,.cartpanel a {
	color: <?php echo $this->params->get("color52"); ?>;
}

#menu .menu-nav ul li {
	border-top: 1px solid <?php echo $this->params->get("color53"); ?>;
}

#menu .menu-nav ul li a {
	color: <?php echo $this->params->get("color54"); ?>;
}
.dk_options_inner a, .panel1, .panel1 a {
	color: <?php echo $this->params->get("color55"); ?> !important;
}
.dk_options_inner a:hover, .dk_option_current a {
	background-color: <?php echo $this->params->get("color56"); ?>;
	color: <?php echo $this->params->get("color57"); ?> !important;
}

#menu .menu-nav ul li a:hover, .menu-nav ul li.sfHover > a {
	color: <?php echo $this->params->get("color58"); ?> !important;
}

#menu .menu-nav ul li a .sf-sub-indicator {
	border-left-color: <?php echo $this->params->get("color59"); ?> !important;
}

#menu .menu-nav > li.active > a {
	background-color: <?php echo $this->params->get("color60"); ?>;
	color: <?php echo $this->params->get("color61"); ?> !important;
}

#menu .menu-nav > li > a:hover, #menu .menu-nav > li.sfHover > a, .menupanel ul.selectnav li a:hover, a#menupanel:hover {
	background-color: <?php echo $this->params->get("color62"); ?>;
	color: <?php echo $this->params->get("color63"); ?> !important;
	-webkit-box-shadow: 0px 0px 14px <?php echo $this->params->get("color64"); ?> inset;
	-moz-box-shadow: 0px 0px 14px <?php echo $this->params->get("color64"); ?> inset;
	box-shadow: 0px 0px 14px <?php echo $this->params->get("color64"); ?> inset;
}

#menu .menu-nav ul li a:hover .sf-sub-indicator,
#menu .menu-nav ul li.sfHover > a .sf-sub-indicator  {
	border-left-color: <?php echo $this->params->get("color65"); ?> !important;
}

#menu .menu-nav li ul, #menu .menu-nav li ul li ul, #nav ol, #nav ul, #nav ol ol, #nav ul ul, div.panel2, 
.dk_options, .panel1 {
	background-color: <?php echo $this->params->get("color66"); ?> !important;
	border: 10px solid <?php echo $this->params->get("color67"); ?>;
}

#stickymenupanel {
	background-color: <?php echo $this->params->get("color68"); ?>;
}

.nicescroll-rails > div { 
	background-color: <?php echo $this->params->get("color69"); ?> !important;
}

thead th, table th, tbody th, tbody td {
	border-top: 1px solid <?php echo $this->params->get("color70"); ?>;
}
tbody th, tbody td, .search-results dt.result-title{
	border-bottom: 1px solid <?php echo $this->params->get("color70"); ?>;
}

.popout-price .PricesalesPrice {
	background-color: <?php echo $this->params->get("color72"); ?>;
	color: <?php echo $this->params->get("color73"); ?>;
}

.product-price {
	color: <?php echo $this->params->get("color74"); ?>;
}

.moduletable {
	border: 6px solid <?php echo $this->params->get("color75"); ?>;
}

.moduletable_menu > h3, .moduletable_menu > h3 .h-cl {
	color: <?php echo $this->params->get("color76"); ?>;
	background: <?php echo $this->params->get("color77"); ?>;
}

.moduletable_menu .module-content {
	background: <?php echo $this->params->get("color78"); ?>;
}

.moduletable_menu ul.menu li, .VMmenu li {
	border-bottom: 1px solid <?php echo $this->params->get("color79"); ?>;
}

.moduletable_menu ul.menu li a, .latestnews_menu li a, .VMmenu li div a {
	color: <?php echo $this->params->get("color80"); ?>;
}

.VMmenu ul li div a:hover {
	color: <?php echo $this->params->get("color81"); ?> !important;
}
.moduletable_menu ul.menu li a:hover, ul.latestnews_menu li a:hover, .VMmenu li div a:hover {
	color: <?php echo $this->params->get("color82"); ?>;
}

.moduletable_style1, #slideshow-handler {
	background-color: <?php echo $this->params->get("color83"); ?>;
	box-shadow: 0px 0px 25px <?php echo $this->params->get("color84"); ?> inset;
	color: <?php echo $this->params->get("color85"); ?>;
}

.moduletable_style1 a {
	color: <?php echo $this->params->get("color86"); ?>;
}

.moduletable_style1:hover {
	background-color: <?php echo $this->params->get("color87"); ?>;
	box-shadow: 0px 0px 25px <?php echo $this->params->get("color87"); ?> inset;
	color: <?php echo $this->params->get("color88"); ?>;
}

.moduletable_style1:hover a {
	color: <?php echo $this->params->get("color89"); ?>;
}

.moduletable_motion .custom_motion {
	background-color: <?php echo $this->params->get("color90"); ?>;
}

.h-cl {
	color: <?php echo $this->params->get("color91"); ?>;
}

#bot-modules-2 {
	border-bottom: 6px solid <?php echo $this->params->get("color92"); ?>;
}

#footer {
	background-color: <?php echo $this->params->get("color93"); ?>;
	color: <?php echo $this->params->get("color94"); ?>;
}

#footer a {
	color: <?php echo $this->params->get("color95"); ?>;
}
#footer a:hover, #footer h3 {
	color: <?php echo $this->params->get("color96"); ?>;
}


<?php endif; ?>
</style>
<?php if( $this->countModules('top-1 or top-2 or top-3 or top-4 or top-5 or top-6')) : 
	if( $this->countModules('top-1') ) $a[0] = 0;
	if( $this->countModules('top-2') ) $a[1] = 1;
	if( $this->countModules('top-3') ) $a[2] = 2;
	if( $this->countModules('top-4') ) $a[3] = 3;
	if( $this->countModules('top-5') ) $a[4] = 4;
	if( $this->countModules('top-6') ) $a[5] = 5; 
	$topmodules1 = count($a); 
	if ($topmodules1 == 1) $tm1class = "span12";
	if ($topmodules1 == 2) $tm1class = "span6";
	if ($topmodules1 == 3) $tm1class = "span4";
	if ($topmodules1 == 4) $tm1class = "span3";
	if ($topmodules1 == 5) { $tm1class = "span2"; $tm1class5w = "17.9%"; };
	if ($topmodules1 == 6) $tm1class = "span2";
	endif; 
	
	if( $this->countModules('top-7 or top-8 or top-9 or top-10 or top-11 or top-12')) : 
	if( $this->countModules('top-7') ) $b[0] = 0;
	if( $this->countModules('top-8') ) $b[1] = 1;
	if( $this->countModules('top-9') ) $b[2] = 2;
	if( $this->countModules('top-10') ) $b[3] = 3;
	if( $this->countModules('top-11') ) $b[4] = 4;
	if( $this->countModules('top-12') ) $b[5] = 5; 
	$topmodules2 = count($b); 
	if ($topmodules2 == 1) $tm2class = "span12";
	if ($topmodules2 == 2) $tm2class = "span6";
	if ($topmodules2 == 3) $tm2class = "span4";
	if ($topmodules2 == 4) $tm2class = "span3";
	if ($topmodules2 == 5) { $tm2class = "span2"; $tm2class5w = "17.9%"; };
	if ($topmodules2 == 6) $tm2class = "span2";
	endif; 
	
	if( $this->countModules('bottom-1 or bottom-2 or bottom-3 or bottom-4 or bottom-5 or bottom-6')) :
	if( $this->countModules('bottom-1') ) $c[0] = 0; 
	if( $this->countModules('bottom-2') ) $c[1] = 1; 
	if( $this->countModules('bottom-3') ) $c[2] = 2; 
	if( $this->countModules('bottom-4') ) $c[3] = 3; 
	if( $this->countModules('bottom-5') ) $c[4] = 4; 
	if( $this->countModules('bottom-6') ) $c[5] = 5; 
	$botmodules = count($c); 
	if ($botmodules == 1) $bmclass = "span12";
	if ($botmodules == 2) $bmclass = "span6";
	if ($botmodules == 3) $bmclass = "span4";
	if ($botmodules == 4) $bmclass = "span3";
	if ($botmodules == 5) { $bmclass = "span2"; $bmclass5w = "17.7%"; };
	if ($botmodules == 6) $bmclass = "span2";
	endif; 
	
	if( $this->countModules('bottom-7 or bottom-8 or bottom-9 or bottom-10 or bottom-11 or bottom-12')) :
	if( $this->countModules('bottom-7') ) $cb[0] = 0; 
	if( $this->countModules('bottom-8') ) $cb[1] = 1; 
	if( $this->countModules('bottom-9') ) $cb[2] = 2; 
	if( $this->countModules('bottom-10') ) $cb[3] = 3; 
	if( $this->countModules('bottom-11') ) $cb[4] = 4; 
	if( $this->countModules('bottom-12') ) $cb[5] = 5; 
	$botmodules2 = count($cb); 
	if ($botmodules2 == 1) $bm2class = "span12";
	if ($botmodules2 == 2) $bm2class = "span6";
	if ($botmodules2 == 3) $bm2class = "span4";
	if ($botmodules2 == 4) $bm2class = "span3";
	if ($botmodules2 == 5) { $bm2class = "span2"; $bm2class5w = "17.7%"; };
	if ($botmodules2 == 6) $bm2class = "span2";
	endif; 
	
	if( $this->countModules('top-a or top-b or top-c or top-d')) :
	if( $this->countModules('top-a') ) $d[0] = 0; 
	if( $this->countModules('top-b') ) $d[1] = 1; 
	if( $this->countModules('top-c') ) $d[2] = 2; 
	if( $this->countModules('top-d') ) $d[3] = 3; 
	$topamodules = count($d); 
	if ($topamodules == 1) $tpaclass = "span12";
	if ($topamodules == 2) $tpaclass = "span6";
	if ($topamodules == 3) $tpaclass = "span4";
	if ($topamodules == 4) $tpaclass = "span3";
	endif; 
	
	if( $this->countModules('bottom-a or bottom-b or bottom-c or bottom-d')) :
	if( $this->countModules('bottom-a') ) $e[0] = 0; 
	if( $this->countModules('bottom-b') ) $e[1] = 1; 
	if( $this->countModules('bottom-c') ) $e[2] = 2; 
	if( $this->countModules('bottom-d') ) $e[3] = 3; 
	$bottomamodules = count($e); 
	if ($bottomamodules == 1) $bmaclass = "span12";
	if ($bottomamodules == 2) $bmaclass = "span6";
	if ($bottomamodules == 3) $bmaclass = "span4";
	if ($bottomamodules == 4) $bmaclass = "span3";
	endif; 
	
	if( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') && $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')  ) : $mcols = 'span6'; 
	elseif( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') && !$this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')  ) : $mcols = 'span9'; 
	elseif( !$this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') && $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')  ) : $mcols = 'span9'; else : $mcols = 'span12'; endif; ?>
	<?php if ($this->direction == 'rtl') : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-rtl.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template_rtl.css" media="screen" />
	<?php if($this->params->get("useresponsivemode") == true ) : ?>
	<style type="text/css">
	@media (min-width: 1200px) {
		.row-fluid [class*="span"] {
			margin-right:2.564102564102564%;
			*margin-right:2.5109110747408616%;
		}
	}

	@media (min-width: 768px) and (max-width: 979px) {
		.row-fluid [class*="span"] {
			margin-right:2.564102564102564%;
			*margin-right:2.5109110747408616%;
		}
	}
	</style>
	<?php endif; endif; ?>
</head>
<body>
	<div id="fb-root"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '1465531973742483', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<div id="top-sticky-panel">
	<div class="container">
		<?php if($this->params->get('logoLinked')) : ?>
		<?php if($this->params->get('H1TitleImgText') == true) : ?>
		<div class="h1"><a href="<?php echo $this->baseurl; ?>"><img alt="<?php echo strip_tags($this->params->get("H1Title")); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></div>
		<?php else : ?>
		<div class="h1"><a href="<?php echo $this->baseurl; ?>"><?php echo $this->params->get("H1Title"); ?></a></div>
		<?php endif; ?>
		<?php else : ?>
		<?php if($this->params->get('H1TitleImgText') == true) : ?>
		<div class="h1"><img alt="<?php echo strip_tags($this->params->get("H1Title")); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></div>
		<?php else : ?>
		<div class="h1"><?php echo $this->params->get("H1Title"); ?></div>
		<?php endif; ?>
		<?php endif; ?>
	
		<?php if( $this->countModules('quick-menu')) : ?>
		<div id="stickymenuButton"> </div>
		<div id="stickymenupanel"><div class="scroll-bg"><div class="sticky-menu-content" tabindex="5000" style="overflow-y: none;" id="boxscroll"><jdoc:include type="modules" name="quick-menu" /></div></div></div>
		<?php endif; ?>
		<?php if( $this->countModules('position-0')) : ?>
		<div class="search-panel">
			<div id="searchOpenButton2"> </div>
			<div id="searchpanel2"><jdoc:include type="modules" name="position-0" /></div>
		</div>
		<?php endif; ?>
		<jdoc:include type="modules" name="sticky-cart" />
		
		<?php if( $this->countModules('loginform')) : ?>
		<ul class="log-panel">
			<?php jimport( 'joomla.application.module.helper' ); $module_login = JModuleHelper::getModules('loginform'); ?>
			<li><a data-toggle="modal" href="#LoginForm" class="open-register-form"><?php echo $module_login[0]->title; ?></a></li>
			<?php if(!JFactory::getUser()->id) : $usersConfig = JComponentHelper::getParams('com_users'); if ($usersConfig->get('allowUserRegistration')) : ?>
			<li><a class="v_register" href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>"> <?php echo JText::_('Registrar'); ?> </a></li>
			<?php endif; endif; ?>
		</ul>
		<?php endif; ?>
	</div>
</div>
<div class="container msc-container">
	<div class="vmst-container">
		<header id="top-handler">
			<div id="top">
				<div class="row-fluid">
					<div id="site-name-handler" class="span6">
						<div id="sn-position">
						<?php if($this->params->get('logoLinked')) : ?>
						<?php if($this->params->get('H1TitleImgText') == true) : ?>
						<div class="h1"> <a href="<?php echo $this->baseurl; ?>"><img alt="<?php echo strip_tags($this->params->get("H1Title")); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></div>
						<?php else : ?>
						<div class="h1"> <a href="<?php echo $this->baseurl; ?>"> <?php echo $this->params->get("H1Title"); ?> </a> </div>
						<?php endif; ?>
						<?php else : ?>
						<?php if($this->params->get('H1TitleImgText') == true) : ?>
						<div class="h1"> <img alt="<?php echo strip_tags($this->params->get("H1Title")); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></div>
						<?php else : ?>
						<div class="h1"> <?php echo $this->params->get("H1Title"); ?> </div>
						<?php endif; ?>
						<?php endif; ?>
						<?php if($this->params->get('H2TitleImgText') == true) : ?>
						<div class="h2"> <img alt="<?php echo strip_tags($this->params->get("H2Title")); ?>" src="<?php echo $this->params->get("H2Titleimage"); ?>" /> </div>
						<?php else : ?>
						<div class="h2"> <?php echo $this->params->get("H2Title"); ?> </div>
						<?php endif; ?>
						</div>
					</div>
					<?php if( $this->countModules('cart or loginform')) : ?>
					<div class="span6">
						<div class="cl-handler">
							<jdoc:include type="modules" name="cart" />
							<?php if( $this->countModules('loginform')) : ?>
							<ul class="log-panel">
								<?php jimport( 'joomla.application.module.helper' ); $module_login = JModuleHelper::getModules('loginform'); ?>
								<li><a data-toggle="modal" href="#LoginForm" class="open-register-form"><?php echo $module_login[0]->title; ?></a></li>
								<?php if(!JFactory::getUser()->id) : $usersConfig = JComponentHelper::getParams('com_users'); if ($usersConfig->get('allowUserRegistration')) : ?>
								<li><a class="v_register" href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>"> <?php echo JText::_('Registrar'); ?> </a></li>
								<?php endif; endif; ?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</header>
		<?php if( $this->countModules('position-1 or position-0')) : ?>
		<nav id="menu"<?php if( $this->countModules('position-2')) : ?> class="is-navline"<?php endif; ?>>
			<div id="menu-handler">
				<div class="row-fluid">
					<div class="span12"><jdoc:include type="modules" name="position-1" />
					<?php if( $this->countModules('position-0')) : ?>
					<div class="search-panel">
						<div id="searchOpenButton1"> </div>
						<div id="searchpanel1"><jdoc:include type="modules" name="position-0" /></div>
					</div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</nav>
		<?php endif; ?>
		<?php if( $this->countModules('position-2')) : ?>
		<div id="nav-line">
			<div class="row-fluid">
				<div class="span12" id="brcr"><jdoc:include type="modules" name="position-2" /></div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row-fluid" id="slideshow-header">
		<?php if( $this->countModules('header-left') ) : ?>
			<div class="span3"><jdoc:include type="modules" name="header-left" style="vmdefault" /></div>
		<?php endif; ?>
		
			<?php if( $this->countModules('builtin-slideshow or slideshow') ) : ?>
			<div id="slideshow-handler-bg" class="<?php if( $this->countModules('header-left and header-right') ) : ?>span6<?php elseif( $this->countModules('header-left or header-right') ): ?>span9<?php else: ?>span12<?php endif; ?>">
				<div id="slideshow-handler"> 
					<?php if( $this->countModules('builtin-slideshow') ) : ?>
					<?php
					$count_slides = JDocumentHTML::countModules('builtin-slideshow');
					$module = JModuleHelper::getModules('builtin-slideshow');
					$moduleParams = new JRegistry();
					echo "<div class=\"camera_wrap\" id=\"ph-camera-slideshow\">"; 
					for($sld_a=0;$sld_a<$count_slides;$sld_a++) { 
						$moduleParams->loadString($module[$sld_a]->params);
						$bgimage[$sld_a] = $moduleParams->get('backgroundimage', 'defaultValue'); 
						$caption_effect[$sld_a] = $moduleParams->get('moduleclass_sfx', 'defaultValue'); 
					?>
					<div data-thumb="<?php if($bgimage[$sld_a] == "defaultValue") : echo $this->baseurl."/templates/".$this->template."/images/slideshow/no-image.png"; else : echo $this->baseurl."/".$bgimage[$sld_a]; endif; ?>" data-src="<?php if($bgimage[$sld_a] == "defaultValue") : echo $this->baseurl."/templates/".$this->template."/images/slideshow/no-image.png"; else : echo $this->baseurl."/".$bgimage[$sld_a]; endif; ?>">
						<div class="camera_caption <?php if(($caption_effect[$sld_a] == "defaultValue")) : ?>fadeIn<?php else: echo $caption_effect[$sld_a]; endif; ?>" style="<?php if(empty($module[$sld_a]->content)) : ?>display:none !important;visibility: hidden !important; opacity: 0 !important;<?php endif; ?>">
							<div><?php echo $module[$sld_a]->content; ?></div>
						</div>
					</div>
					<?php } echo "</div>"; // End of camera_wrap ?> 
					<?php elseif( $this->countModules('slideshow') ) : ?>
					<div class="sl-3rd-parties">
						<jdoc:include type="modules" name="slideshow" />
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			
		<?php if( $this->countModules('header-right') ) : ?>
			<div class="span3"><jdoc:include type="modules" name="header-right" style="vmdefault" /></div>
		<?php endif; ?>
		</div>
		
		<?php if( $this->countModules('top-1 or top-2 or top-3 or top-4 or top-5 or top-6')) : ?>
		<section id="tab-modules">
			<div id="tab-modules-handler" class="row-fluid">
				<?php if( $this->countModules('top-1')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-1" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-2')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-2" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-3')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-3" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-4')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-4" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-5')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-5" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-6')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-6" style="vmdefault" /></div><?php endif; ?>
			</div>
		</section>
		<?php endif; ?>

		<?php if( $this->countModules('top-7 or top-8 or top-9 or top-10 or top-11 or top-12')) : ?>
		<div id="top-modules">
			<div class="row-fluid">
				<?php if( $this->countModules('top-7')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-7" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-8')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-8" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-9')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-9" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-10')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-10" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-11')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-11" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('top-12')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-12" style="vmdefault" /></div><?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		

		<?php if( $this->countModules('loginform')) : ?>
		<div id="LoginForm" class="b-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-header"><span id="myModalLabel"><?php echo $module_login[0]->title; ?></span></div>
			<div class="modal-body"><jdoc:include type="modules" name="loginform" /></div>
			<div class="modal-footer"><a class="button" data-dismiss="modal">Close</a></div>
		</div>
		<?php endif; ?>

		<div class="main-bg" id="main-handler">
			<div id="content-handler">
				<div id="tmp-container">
					<?php if( $this->countModules('position-3')) : ?>
					<div class="row-fluid">
						<div class="span12"><div id="newsflash-position"><jdoc:include type="modules" name="position-3" style="vmdefault" /></div></div>
					</div>
					<?php endif; ?>
					<div id="main-content-handler">
						<div class="row-fluid">
							<?php if( $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')) : ?>
							<div class="span3">
								<jdoc:include type="modules" name="top-left-1" style="vmdefault" />
								<jdoc:include type="modules" name="top-left-2" style="vmdefault" />
								<jdoc:include type="modules" name="position-7" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-left-1" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-left-2" style="vmdefault" />
							</div>
							<?php endif; ?>
							<div class="<?php echo $mcols; ?>">
								
								<?php if( $this->countModules('top-long')) : ?>
									<jdoc:include type="modules" name="top-long" style="vmdefault" />
									<div class="clear-sep"></div>
								<?php endif; ?>
								<?php if( $this->countModules('top-a or top-b or top-c or top-d')) : ?>
								<div id="top-content-modules">
									<div class="row-fluid">
										<?php if( $this->countModules('top-a')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-a" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-b')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-b" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-c')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-c" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-d')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-d" style="vmdefault" /></div><?php endif; ?>
									</div>
								</div>
								<?php endif; ?>
								<div class="tmp-content-area">
								
								<?php if(JFactory::getApplication()->getMessageQueue()) : ?>
								<div id="top-com-handler">
									<jdoc:include type="message" />
								</div>
								<?php endif; ?>
								
								<jdoc:include type="component" />
								</div>
								<?php if( $this->countModules('bottom-a or bottom-b or bottom-c or bottom-d')) : ?>
								<div id="bottom-content-modules">
									<div class="row-fluid">
										<?php if( $this->countModules('bottom-a')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-a" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-b')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-b" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-c')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-c" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-d')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-d" style="vmdefault" /></div><?php endif; ?>
									</div>	
								</div>
								<?php endif; ?>
							</div>
							<?php if( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2')) : ?>
							<div class="span3">
								<jdoc:include type="modules" name="top-right-1" style="vmdefault" />
								<jdoc:include type="modules" name="top-right-2" style="vmdefault" />
								<jdoc:include type="modules" name="position-6" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-right-1" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-right-2" style="vmdefault" />
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if( $this->countModules('bottom-long')) : ?>
		<section id="bottom-long">
			<div class="row-fluid">
				<div class="span12">
					<jdoc:include type="modules" name="bottom-long" style="vmdefault" />
				</div>
			</div>
		</section>
		<?php endif; ?>
		<?php if( $this->countModules('bottom-1 or bottom-2 or bottom-3 or bottom-4 or bottom-5 or bottom-6')) : ?>
		<section id="bottom-bg">
			<div id="bot-modules">
				<div class="row-fluid">
					<?php if( $this->countModules('bottom-1')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-1" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-2')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-2" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-3')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-3" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-4')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-4" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-5')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-5" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-6')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-6" style="vmdefault" /></div><?php endif; ?>
				</div>
			</div>
			<div class="clear"> </div>
		</section>
		<?php endif; ?>
	</div>
		<?php if( $this->countModules('footer or footer-left or footer-right') || ($this->params->get('twitterON') || $this->params->get('linkedinON') || $this->params->get('RSSON') || $this->params->get('facebookON') || $this->params->get('bloggerON')  || $this->params->get('youtubeON') || $this->params->get('vimeoON') || $this->params->get('stumbleuponON')  || $this->params->get('diggON') )  ) : ?>
		<footer id="footer">

			<?php if( $this->countModules('bottom-7 or bottom-8 or bottom-9 or bottom-10 or bottom-11 or bottom-12')) : ?>
			<div id="bot-modules-2">
				<div class="row-fluid">
					<?php if( $this->countModules('bottom-7')) : ?><div class="<?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-7" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-8')) : ?><div class="<?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-8" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-9')) : ?><div class="<?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-9" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-10')) : ?><div class="<?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-10" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-11')) : ?><div class="<?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-11" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('bottom-12')) : ?><div class="<?php echo $bm2class; ?>" style="<?php if ($botmodules2 == 5) {echo "width:".$bm2class5w;} ?>"><jdoc:include type="modules" name="bottom-12" style="vmdefault" /></div><?php endif; ?>
				</div>
				
				<?php if($this->params->get('twitterON') || $this->params->get('linkedinON') || $this->params->get('RSSON') || $this->params->get('facebookON') || $this->params->get('bloggerON')  || $this->params->get('youtubeON') || $this->params->get('vimeoON') || $this->params->get('stumbleuponON')  || $this->params->get('diggON') ) : ?>
				<ul id="social-links">
				<?php if($this->params->get('twitterON') == true ) : ?><li><a href="<?php echo $this->params->get('twitter'); ?>" title="Twitter" id="twitter" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/twitter.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('gplusON') == true ) : ?><li><a href="<?php echo $this->params->get('gplus'); ?>" title="Google Plus" id="gplus" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/gplus.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('facebookON') == true ) : ?><li><a href="<?php echo $this->params->get('facebook'); ?>" title="Facebook" id="facebook" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/facebook.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('RSSON') == true ) : ?><li><a href="<?php echo $this->params->get('RSS'); ?>" title="RSS" id="rss" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/rss.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('linkedinON') == true ) : ?><li><a href="<?php echo $this->params->get('linkedin'); ?>" title="Linkedin" id="linkedin" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/linkedin.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('youtubeON') == true ) : ?><li><a href="<?php echo $this->params->get('youtube'); ?>" title="youtube" id="youtube" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/youtube.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('vimeoON') == true ) : ?><li><a href="<?php echo $this->params->get('vimeo'); ?>" title="vimeo" id="vimeo" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/vimeo.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('stumbleuponON') == true ) : ?><li><a href="<?php echo $this->params->get('stumbleupon'); ?>" title="stumbleupon" id="stumbleupon" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/stumbleupon.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('diggON') == true ) : ?><li><a href="<?php echo $this->params->get('digg'); ?>" title="digg" id="digg" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/digg.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('bloggerON') == true ) : ?><li><a href="<?php echo $this->params->get('blogger'); ?>" title="Blogger" id="blogger" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/blogger.png"></span></a></li><?php endif; ?>
					<li><a href="https://instagram.com/expressaoo_modas" title="Instagram" id="instagram" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/ic_insta.png"></span></a></li>
				</ul>
				<?php endif; ?>
				
			</div>
			<div class="clear"> </div>
			<?php endif; ?>
		
			<div id="footer-line" class="row-fluid">
				<?php if( $this->countModules('footer')) : ?><div class="span12"><jdoc:include type="modules" name="footer" /></div><?php endif; ?>
				<?php if( $this->countModules('footer-left or footer-right')) : ?>
				<div id="foo-left-right">
					<?php if( $this->countModules('footer-left')) : ?><div class="<?php if( $this->countModules('footer-left and footer-right')) : ?>span6<?php else: ?>span12<?php endif;?>"><jdoc:include type="modules" name="footer-left" /></div><?php endif; ?>
					<?php if( $this->countModules('footer-right')) : ?><div class="<?php if( $this->countModules('footer-left and footer-right')) : ?>span6<?php else: ?>span12<?php endif;?>"><jdoc:include type="modules" name="footer-right" /></div><?php endif; ?>
					<div class="clear"> </div>
				</div>
				<?php endif; ?>
			</div>

		</footer>
		<?php endif; ?>
</div>

<?php if($this->params->get("bodybackgroundimage")) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
jQuery.backstretch("<?php echo $this->baseurl ?>/<?php echo $this->params->get("bodybackgroundimage"); ?>");
</script>
<?php endif; ?>
<jdoc:include type="modules" name="debug" />
<?php echo $this->params->get("footercode"); ?>
</body>
</html>