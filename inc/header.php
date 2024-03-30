<style>
	/* Default styles for larger screens */
.c-header .header_content .header_items, .c-header .header_content .header_items .menu_items {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
}

.c-header .header_content .header_items {
    -ms-flex-align: center;
    align-items: center;
    column-gap: 36px;
    pointer-events: auto;
}

/* Media query for smaller screens (e.g., mobile devices) */
@media (max-width: 768px) {
    .c-header .header_content .header_items {
        -ms-flex-direction: column;
        flex-direction: column;
        align-items: flex-start; /* You may adjust this based on your design */
        column-gap: 0; /* Remove the gap between items */
    }

    .c-header .header_content .header_items .menu_items {
        flex-direction: column;
        text-align: left; /* Align text to the left within menu items */
    }

    /* Hide specific menu items on mobile */
    .c-header .header_content .header_items .menu_items .items_item:nth-child(1),
    .c-header .header_content .header_items .menu_items .items_item:nth-child(2) {
        display: none;
    }
}

/* Rest of your existing styles */

</style>
<header class="c-header js-header u-comp-def--3 " data-comp="header">

<div class="header_content u-wrapper u-wrapper--2 u-wrapper--pad-nav" style="/* display:none; */">
		
		<a class="inline_logo"  href="./index.php" data-scroll-to="" title="Scroll to top of page" target="_self" data-cursor="1" style="
    /* display: none; */
">
<img src="wp-content/uploads/2023/cust/logo.png" style="
    width: 260px;
">
		</a>

	

		<div class="header_items">
			<ul class="menu_items" role="menu">
				<li class="items_item" role="menuitem"><a class="item_link underline" href="index1.php" title="Home" target="_self" data-cursor="1" rel="" data-scroll-to=""><span class="btn_label">Home</span><div class="btn_bg" data-label="Mission"></div></a></li>
              
              <li class="items_item" role="menuitem"><a class="item_link underline" href="contactus.php" title="Pricing" target="_self" data-cursor="1" rel=""><span class="btn_label">Contact Us</span><div class="btn_bg" data-label="Our Companies"></div></a></li>
              
              
              <!-- <li class="items_item" role="menuitem"><a class="item_link underline" href="sell_my_merch.php" title="Pricing" target="_self" data-cursor="1" rel=""><span class="btn_label">Sell My Merch</span><div class="btn_bg" data-label="Our Companies"></div></a></li>	 -->
          
          
          
          
          
          
          </ul>
	
			<div class="header_button">
				
<!-- <a class="buttons_btn u-btn--1 " href="#" target="_self" data-cursor="1" rel=""><span class="btn_label">PURCHASE GEAR NOW</span></a>			</div> -->



		</div>

		
		<div class="header_icon-mobile">
			<svg class="mobile-nav-icon" width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect id="first" width="32" height="2" fill="#D9D9D9"></rect>
<rect id="second" y="8" width="32" height="2" fill="#D9D9D9"></rect>
<rect id="third" y="16" width="22" height="2" fill="#D9D9D9"></rect>
</svg>
		</div>
	</div>
	
	
	<div class="mobile_header u-wrapper u-wrapper--pad-nav">
		<div class="mobile_header-upper">
			<div class="header_close-icon">
				<svg class="close_icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.9961 11.5847L23.6015 0.979248L25.0157 2.39346L14.4103 12.9989L25.018 23.6067L23.6038 25.0209L12.9961 14.4132L2.38834 25.0209L0.974121 23.6067L11.5818 12.9989L0.976379 2.39346L2.39059 0.979248L12.9961 11.5847Z" fill="#D9D9D9"/>
</svg>
			</div>
		</div>
		<div class="mobile_header-lower">
			<div class="header_items">
			
			</div>
			<div class="header_button">
				
<a class="buttons_btn u-btn--1 " href="index1.php" title="Contact us" target="_self" data-cursor="1" rel="" ><span class="btn_label">Home</span></a>			</div>

<div class="header_button">
				
<a class="buttons_btn u-btn--1 " href="contactus.php" title="Contact us" target="_self" data-cursor="1" rel="" ><span class="btn_label">Contact Us</span></a>			</div>

		</div>
	</div>

	
</header>