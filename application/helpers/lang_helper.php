<?php

/**
 * @property CI_Session $session
 */
function field_lang($row, $field)
{
	/** @var CI_Controller $CI */
	$CI = &get_instance();
	$lang = $CI->session->userdata('site_lang') ?? 'id';
	$field_name = ($lang == 'id') ? $field : $field . '_en';
	return $row->$field_name ?? '';
}