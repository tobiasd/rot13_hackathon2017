<?php
/**
 * Name: ROT13 Substitution Code
 * Description: Apply rot13 to send postings. DO NOT USE FOR SECURITY/PRIACY REASONS!
 * Version: 0.1
 * Author: Tobias Diekershoff <https://social.diekershoff.de/profile/tobias>
 *
 * License: MIT License (see LICENSE file for details)
 **/

/**
 * @brief register hooks for the addon
 **/
function rot13_install() {
	register_hook('post_local', 'addon/rot13/rot13.php', 'rot13_post_local');
	register_hook('jot_networks', 'addon/rot13/rot13.php', 'rot13_jot_networks');
}

/**
 * @brief unregister hooks for the addon
 **/
function rot13_unistall() {
	unregister_hook('post_local', 'addon/rot13/rot13.php', 'rot13_post_local');
	unregister_hook('jot_networks', 'addon/rot13/rot13.php', 'rot13_jot_networks');
}

/**
 * @brief add a checkbox to use the ROT13 to the ACL dialog
 **/
function rot13_jot_networks(&$a, &$b) {
	if(! local_user())
		return;

	$b .= '<div class="profile-jot-net"><input type="checkbox" name="rot13_enable" value="1" /> '
			. t('Apply ROT13 to posting') . '</div>';
}
/**
 * @brief apply ROT13 to a locally made posting
 **/
function rot13_post_local() {
}
