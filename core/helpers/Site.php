<?php

class Site
{

	/**
	 * Pagination
	 */
	public static function pagination( array $pagination ) 
	{
		require( ROOT . '/app/views/pagination.php' );
	}

	/**
	 * Redirect
	 */
	public static function redirect( string $location ) 
	{
		header( 'Location: ' . $location );
	}

	/**
	 * Title
	 */
	public static function title( $title, string $separator = '#' ) : string
	{
		$name = 'CRUD MVC OOP PDO';

		if ( ! empty( $title ) ) {
			$title = $title . ' ' . $separator . ' ' . $name;
		} else {
			$title = $name;
		}

		return $title;
	}

}
