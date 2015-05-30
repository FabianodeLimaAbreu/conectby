<?php

defined('_JEXEC') or die('Restricted access');

echo '<a class="continue" href="' . $this->continue_link . '" >' . JText::_('COM_VIRTUEMART_CONTINUE_SHOPPING') . '</a>';
echo '<a class="showcart floatright" href="' . $this->cart_link . '">' . JText::_('COM_VIRTUEMART_CART_SHOW') . '</a>';
if($this->products){
	foreach($this->products as $product){
		echo '<h4>'.JText::sprintf('COM_VIRTUEMART_CART_PRODUCT_ADDED',$product->product_name,$product->quantity).'</h4>';
	}
}

if ($this->errorMsg) echo '<div>'.$this->errorMsg.'</div>';

if(VmConfig::get('popup_rel',1)){
	if($this->products and !empty($this->products[0]->customfieldsRelatedProducts)){
		?>
		<div class="product-related-products">
				<h4><?php echo JText::_('COM_VIRTUEMART_RELATED_PRODUCTS'); ?></h4>
		<?php
		foreach ($this->products[0]->customfieldsRelatedProducts as $field) {
			if(!empty($field->display)) {
				?><div class="product-field product-field-type-<?php echo $field->field_type ?>">
				<span class="product-field-display"><?php echo $field->display ?></span>
				</div>
			<?php }
		} ?>
		</div>
	<?php
	}
}

?><br style="clear:both">

<script type="text/javascript">
jQuery('#fancybox-close').click(function() {
    location.reload();
});
</script>
