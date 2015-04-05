Snippets



	
	img {
	    max-width: 100%;
	    height: auto;
	}	
	<picture>
	    <source srcset="smaller.jpg" media="(max-width: 768px)">
	    <source srcset="default.jpg">
	    <img srcset="default.jpg" alt="My default image">
	</picture>	
	<picture>
	    <source srcset="smaller_landscape.jpg" media="(max-width: 40em) and (orientation: landscape)">
	    <source srcset="smaller_portrait.jpg" media="(max-width: 40em) and (orientation: portrait)">
	    <source srcset="default_landscape.jpg" media="(min-width: 40em) and (orientation: landscape)">
	    <source srcset="default_portrait.jpg" media="(min-width: 40em) and (orientation: portrait)">
	    <img srcset="default_landscape.jpg" alt="My default image">
	</picture>
		