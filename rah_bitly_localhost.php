<?php

/**
 * Localhost module for rah_bitly.
 *
 * @package rah_bitly
 * @author Jukka Svahn
 * @link https://github.com/gocom/rah_bitly
 */

class rah_bitly_localhost
{
	/**
	 * Constructor.
	 */

	public function __construct()
	{
		register_callback(array($this, 'update'), 'rah_bitly.update');
	}

	/**
	 * Prepends "http://example.com/#" to the localhost links.
	 */

	public function update()
	{
		rah_bitly::get()->permlink = 'http://example.com/#'.rah_bitly::get()->permlink;
		rah_bitly::get()->prev_permlink = 'http://example.com/#'.rah_bitly::get()->prev_permlink;
	}
}

new rah_bitly_localhost();