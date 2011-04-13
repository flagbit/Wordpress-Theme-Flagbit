<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
<input type="text" value="Suche ...<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" value="" class="searchbutton" />
</fieldset>
</form>
