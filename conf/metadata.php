<?php
/**
 * Metadata for configuration manager plugin
 * Additions for the Page Redirect plugin
 *
 * @author    David Lorentsen <zyberdog@quakenet.org>
 */

$meta['show_note'] = array('multichoice', '_choices' => array('always','has_edit_perms','never'));
$meta['allow_external'] = array('onoff');
$meta['note_class'] = array('multichoice', '_choices' => array('default','bs3'));