<?php // no direct access
defined('_JEXEC') or die('Restricted access');



?>

<div class="vmCartModule <?php echo $params->get('moduleclass_sfx'); ?>" id="vmCartModule">


<?php if ($data->totalProduct and $show_price) { ?>
<div class="show-cart"><a id="cartpanel<?php echo $module->id; ?>" class="cart-button open-cart-panel-button" href="javascript:void(0);"><?php echo JText::_('COM_VIRTUEMART_CART_SHOW') ?></a></div>

	<?php if ($show_product_list) { ?>

	<div class="panel2<?php echo $module->id; ?> panel2">
		<div class="cartpanel<?php echo $module->id; ?> cartpanel">
			<span class="closecart">-</span>
			<div class="arrow"></div>
			<?php if ($data->totalProduct and $show_price) echo "<span class=\"show-cart-link\">".$data->cart_show."</span>"; ?>

			<div id="hiddencontainer" style="display: none; ">
				<div class="cart-container">
					<?php if ($show_price) { ?>
					  <div class="prices" style="float: right;"></div>
					<?php } ?>
					<div class="product_row">
						<span class="quantity"></span>&nbsp;x&nbsp;<span class="product_name"></span>
					</div>

					<div class="product_attributes"></div>
				</div>
			</div>
			<div class="vm_cart_products">
				<div class="cart-container">

				<?php
					foreach ($data->products as $product)
				{ ?> <div class="product-cart-row"> <?php
					if ($show_price) { ?>
						  <div class="prices" style="float: right;"><?php echo  $product['prices'] ?></div>
						<?php } ?>
					<div class="product_row">
						<span class="quantity"><?php echo  $product['quantity'] ?></span>&nbsp;x&nbsp;<span class="product_name"><?php echo  $product['product_name'] ?></span>
					</div>
					<?php if ( !empty($product['product_attributes']) ) { ?>
						<div class="product_attributes"><?php echo $product['product_attributes'] ?></div>

					<?php } ?>
					</div>
					<?php
				}
				?>
				</div>
			</div>
			
			<div class="total"><?php if ($data->totalProduct and $show_price) echo  $data->billTotal; ?></div>
			
		</div>
	</div>
	
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#cartpanel<?php echo $module->id; ?>').on('click', function() {
			jQuery('div.panel2<?php echo $module->id; ?>').animate({
				'height': 'show'
			}, 300, function() {
				jQuery('div.cartpanel<?php echo $module->id; ?>').fadeIn(200);
			});
		});
		jQuery('span.closecart').on('click', function() {
			jQuery('div.cartpanel<?php echo $module->id; ?>').fadeOut(200, function() {
				jQuery('div.panel2<?php echo $module->id; ?>').animate({
					'height': 'hide'
				}, 300);
			});
		});
	});
	</script>

	<?php } ?>
<?php } ?>
<?php if ($data->totalProduct and $show_price) { ?><div class="show-both"><?php } ?>
<div class="total_products">
<?php if ($data->totalProduct>1) $data->totalProductTxt2 = '<div class="total-items"><strong>'.vmText::_('CARRINHO').'</strong><br>'.vmText::sprintf('TPL_VMT_ITEM_S', $data->totalProduct).'</div>';
else if ($data->totalProduct == 1) $data->totalProductTxt2 = '<div class="total-items"><strong>'.vmText::_('CARRINHO').'</strong><br>'.vmText::_('TPL_VMT_ITEM').'</div>';
else $data->totalProductTxt2 = '<a href="#" class="cart-button"><div class="popover bottom"><div class="arrow"></div><div class="popover-content"><p>'.vmText::_('COM_VIRTUEMART_EMPTY_CART').'</p></div></div></a><div class="is-empty">'.vmText::_('COM_VIRTUEMART_EMPTY_CART').'</div>';
echo $data->totalProductTxt2; ?>

</div>	

<?php if ($data->totalProduct and $show_price) { ?></div><?php } ?>

<noscript>
<?php echo JText::_('MOD_VIRTUEMART_CART_AJAX_CART_PLZ_JAVASCRIPT') ?>
</noscript>
</div>

