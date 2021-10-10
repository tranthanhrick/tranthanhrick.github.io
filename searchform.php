<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php _e('Search this site...','Resume Design Pro'); ?>" onblur="if (this.value == '') {this.value = '<?php _e('Search this site...','Resume Design Pro'); ?>';}" onfocus="if (this.value == '<?php _e('Search this site...','Resume Design Pro'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'Search', 'Resume Design Pro' ); ?>" />
	</fieldset>
</form>
