<footer id="footer">
	<div class="footer-content">
		<div class="address">
			<h3>Flagbit GmbH &amp; Co. KG</h3>
			<p>Griesbachstraße 10<br />76815 Karlsruhe</p>
			<p>Tel: <a target="_blank" href="tel:+497219143480">+49 721 914 348 - 0</a><br />fax: +49 721 914 348 - 99<br />E-Mail:&nbsp;info@flagbit.de</p>
		</div>
		<div class="copy">
			<p>
				<span>&copy; Copyright 2008 - <?php $timestamp = time(); $datum = date(Y,$timestamp); echo $datum ?> by Flagbit GmbH &amp; Co. KG</span>
				<a href="#top" onclick="self.scrollTo(0, 0); return false;">Nach oben</a>
				<a href="#" onclick="print();">Seite Drucken</a>
			</p>
		</div>
	</div>
</footer>

</div>
<nav id="topbar">
	<ul>
		<li class="first">
			<div class="sml">
				<span>Social Media</span>
				<ul>
					<li>
						<span class="sml-item item-facebook sml-item-first">
							<a href="http://www.facebook.com/flagbit" target="_blank">facebook</a>
						</span>
					</li>
					<li>
						<span class="sml-item item-twitter">
							<a href="http://twitter.com/#!/flagbit" target="_blank">twitter</a>
						</span>
					</li>
					<li>
						<span class="sml-item item-gplus sml-item-last">
							<a href="https://plus.google.com/u/0/117279544987000527799" target="_blank">google+</a>
						</span>
					</li>
				</ul>
			</div>
		</li>
		<li>
			<div class="rss-feed">
				<a class="rss-link" title="RSS Feed" href="?feed=rss2">
					<span class="rss-label">RSS Feed abonnieren</span>
				</a>
			</div>
		</li>
		<li class="last">
			<div class="search"><?php
				include (TEMPLATEPATH . '/searchform.php');
			?></div>
			
		</li>
	</ul>
</nav>
<?php do_action('wp_footer'); ?>
<script type="text/javascript">
	var _gaq=[['_setAccount','UA-16989173-1'],['_gat._anonymizeIp'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
