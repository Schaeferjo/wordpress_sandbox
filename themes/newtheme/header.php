<script>
function toggleMenu() {
   var element = document.getElementById("menu");
   element.classList.toggle("openMenu");
}
</script>


<header class="fixed w-full mb-12 z-10">
	<div class="w-full max-w-6xl mx-auto flex justify-end">
		<div class="w-full max-w-5xl h-24 px-6 flex items-center bg-white shadow-md">
			<div id="logo" class="border pr-12 flex justify-center items-center">		
				<a href="#">Logo</a>
			</div>
			<div id="navigation" class="grow flex justify-end">
			<button onclick="toggleMenu()" class="p-4 bg-rose-600 text-white font-bold uppercase text-xs tracking-widest">Menu</button>
			</div>
		</div>
	</div>
</header>


<div id="menu" class="z-50 absolute w-full h-screen top-0 right-[100vw] p-12 bg-teal-900 shadow-xl text-white">
	<button onclick="toggleMenu()" class="p-4 bg-rose-600 text-white font-bold uppercase text-xs tracking-widest">schliessen</button>
	<hr class="my-12 border-t border-black opacity-20">
	<?php
		$menus = wp_get_nav_menus();
		foreach ( $menus as $menu /** @var WP_Term $menu */ ) {
		/* echo '<h2>' . $menu->name . '</h2>';*/
			$menu_items = wp_get_nav_menu_items( $menu->term_id );
			if ( ! empty( $menu_items ) ) {
				echo '<ul>';
				foreach ( $menu_items as $menu_item ) {
					echo '<li class="py-4"><a class=" uppercase text-5xl tracking-wide hover:text-rose-600" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
				}
				echo '</ul>';
			}
		}
	?>
	<hr class="my-12 border-t border-black opacity-20">
</div>



<style>
	.openMenu {
		right:0px;
		transition-duration: 300ms;
	}
</style>