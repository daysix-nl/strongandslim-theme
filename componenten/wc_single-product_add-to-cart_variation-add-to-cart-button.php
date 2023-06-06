<?php

global $product;
?>
<hr class="border-white my-3">
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
	<div class="flex items-center mb-3">
	<p class="text-green text-20 leading-26 mr-3">Hoeveelheid</p>
	<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );

	//  woocommerce_quantity_input(
	// 	$min_value = array(
	// 		'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
	// 		'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
	// 		'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
	// 	)
	// );

	?>
	
	<div class="relative px-[5px] w-8">
		<input
			type="number"
			id="quantity"
			class="quantity-input bg-transparent"
			step="1"
			min="1"
			name="quantity"
			value="<?php echo(isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity()) ?>"
			title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
			size="4"
			placeholder="1"
			inputmode="numeric" 
			autocomplete="off"
		/>
		<div class="minus-button absolute top-1/2 transform -translate-y-1/2 w-2 h-2 rounded-full bg-white left-0 flex justify-center items-center cursor-pointer">
			<span class="h-[1px] w-[9px] bg-[#36544F] block"></span>
		</div>
		<div class="plus-button absolute top-1/2 transform -translate-y-1/2 w-2 h-2 rounded-full bg-white right-0 cursor-pointer">
			<div class="relative flex justify-center items-center h-full w-full">
				<span class="h-[1px] w-[9px] bg-[#36544F] block"></span>
				<span class="h-[1px] w-[9px] bg-[#36544F] block rotate-90 absolute"></span>
			</div>
		</div>
	</div>
	<?php
	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>
	</div>

	<script>
		const plusButton = document.querySelector(".plus-button");
		const minusButton  = document.querySelector(".minus-button");
		const input = document.querySelector(".quantity-input");

		const plusButtonFuction = () => {

input.value = parseInt(input.value) + 1;
// minusButton.style.opacity = "1";
// 	if (input.value  >= <?php echo(apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product )) ?>) {
// 		plusButton.style.opacity = "0.5";
// 	}

//  if (input.value <= <?php echo(apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product )) ?>) {
// 	plusButton.style.opacity = "0.5";
//  }

}

const minusButtonFuction = () => {
if(input.value > 1) {
input.value = parseInt(input.value) - 1;
plusButton.style.opacity = "1";
// if (parseInt(input.value) === 1) {
// 	minusButton.style.opacity = "0.5";
// }
}
}

		plusButton.addEventListener("click", () => {
			plusButtonFuction();
		});

		minusButton.addEventListener("click", () => {
			minusButtonFuction();
		});

		window.addEventListener("load", () => {
			plusButtonFuction();
		});

		window.addEventListener("load", () => {
			minusButtonFuction();
		});
	</script>
	
	<button type="submit" class="text-18 leading-18 block py-1.5 px-3 bg-soft-peache border-2 border-soft-peache rounded-full transition-colors text-white hover:bg-white hover:text-soft-peache hover:border-white hover:transition-colors w-fit"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
