</section>
</div>
<?php do_action('wp_footer'); ?>
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
            <div class="search"><?php include (TEMPLATEPATH . '/searchform.php');?></div>
        </li>
    </ul>
</nav>







<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16989173-1', 'mageblog.de');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.placeholder.js"></script>
</body>
</html>
