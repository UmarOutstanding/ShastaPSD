<section id="footer">
	<div class="container grid">
	<div id="logo-and-name">
		<object data="img/logo2.svg" type="image/svg+xml" style="margin-top:2px;" class="your-logo-here"></object>
		<h3 class="your-company-here">SHASTA</h3>
	</div>
	
	<div id="address">
		<p>123 Street,<br>
Anytown, USA 12345</p>
		<email>hello@website.com</email>
	</div>
	<div id="icons-and-copyright">
		<li id="bottom-social-icons">
                    <img src="img/social-icon.svg" width="19" height="13"  />
                    <img src="img/news-icon.svg" width="22" height="15" />
                    <img src="img/photos-icon.svg" width="19" height="15"/>
                </li>
		<p class="copyright">2016 Shasta. All rights reserved</p>
	</div>
	</div>
</section>

<style type="text/css">
	#footer {
		background-color: #333;
		color:white;
	}

	#footer .container {
		width: 981px;
	}

	#footer .grid {
		display: grid;
		grid-template-columns:248px 493px 1fr;
		margin-top: 40px;
	}

	#logo-and-name {
		display: grid;
		grid-template-columns: 20px 80px;
		grid-column-gap: 18px;
	}

	#logo-and-name object {
		width:20px;
		height: 20px;
	}

	.your-company-here {
		width: 80px;
		height: 12px;
		color: white;
		font-family: Raleway;
		font-size: 16px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 5px;
		margin-top: 4px;
	}

	#address {
		display: grid;
		grid-template-rows: 1fr 1fr;
		grid-row-gap: 14px;
		opacity: 0.3;
		color: white;
		font-family: "Adobe Caslon Pro";
		font-size: 15px;
		font-weight: 600;
		line-height: 19px;
		letter-spacing: 1px;
	}

	#footer #icons-and-copyright {
		display: grid;
	}

	#bottom-social-icons {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		height: fit-content;
		margin-left: 50%;
		grid-column-gap:26px;
	}


	#footer .copyright {
		width: 235px;
		height: 16px;
		opacity: 0.3;
		color: white;
		font-family: "Adobe Caslon Pro";
		font-size: 15px;
		font-weight: 600;
		line-height: 16px;
		letter-spacing: 1px;
	}
</style>