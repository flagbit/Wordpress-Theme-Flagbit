<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <label for="s" class="hidden"></label>
        <input type="text" placeholder="Bitte Suchbegriff eingeben" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" />
        <button class="searchbutton" type="submit"><span>Suchen</span></button>
    </fieldset>
</form>
