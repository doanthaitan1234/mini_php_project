<?php

class User
{

	/**
	 * Author
	 */
	public static function author( int $author_id ) : bool
	{
		return $_SESSION['user']['id'] == $author_id ? true : false;
	}

	/**
	 * Gravatar
	 *
	 * @source https://gravatar.com/site/implement/images/php/
	 */
	public static function gravatar( string $email, int $s = 64, string $d = 'monsterid', string $r = 'g', bool $img = false, array $atts = array() ) : string
	{
		$url  = 'https://www.gravatar.com/avatar/';
		$url .= md5( strtolower( trim( $email ) ) );
		$url .= '?s=' . $s . '&d=' . $d . '&r=' . $r;

		if ( $img ) {
			$url = '<img src="' . $url . '"';

			foreach ( $atts as $key => $val ) {
				$url .= ' ' . $key . '="' . $val . '"';
			}

			$url .= ' />';
		}

		return $url;
	}

	/**
	 * Login
	 */
	public static function login() : bool
	{
		return isset( $_SESSION['user'] ) ? true : false;
	}


	/**
	 * check cookie
	 */
	public static function checkCookie($cookie_name) : bool
	{
		return isset( $_COOKIE[$cookie_name] ) ? true : false;
	}

	/**
	 * set cookie
	 */
	public static function setCookie($cookie_name, $value)
	{
		setcookie($cookie_name, $value, time() + (86400 * 30));
	}
	/**
	 * set cookie
	 */
	public static function removeCookie($cookie_name )
	{
		setcookie($cookie_name, "", time() - 3600);
	}

	/**
	 * Panel
	 */
	public static function panel() 
	{
		require_once( ROOT . '/app/views/users/panel.php' );
	}

	/**
	 * Role
	 */
	public static function role( array $roles ) : bool
	{
		return in_array( $_SESSION['user']['role'], $roles ) ? true : false;
	}

}
