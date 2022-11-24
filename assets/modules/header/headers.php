



<div class="header-theme">
	<div class="header-container">
		<span class="logotype">MyWebiste</span>
		<ul>
			<li>Mi cuenta</li>
			<li>tienda</li>
			<li>cart</li>
		</ul>
	</div>
</div>

<style>
	.header-theme {
		height: 100px;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.header-container {
		width: 80%;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.wp-site-blocks {
		padding: 0;
		margin: 0;
	}

	ul {
		display: flex;
		gap: 20px;
		list-style: none;
		cursor: pointer;
	}

	.wp-site-blocks>*+* {
		margin-block-start: 0;
	}
</style>