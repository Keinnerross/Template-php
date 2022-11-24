<?php
/**
 * Title: Default Footer
 * Slug: templatecompany/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<?php
$footerType = 1;

if ($footerType == 1) {
	echo '<footer>
	<div class="footer-container">
		[contact-form-7 id="16" title="Contact form 1"]
		<ul>
			<li>Horario: 9am 6pm</li>
			<li>Teléfono: 9 2112 1541</li>
			<li>Direccion: Av "El Sol" 693</li>

		</ul>
	</div>
</footer>
<!-- /wp:group -->';
}
;
?>


