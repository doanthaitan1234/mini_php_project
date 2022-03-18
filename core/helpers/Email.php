<?php


class Email
{

	/**
	 * Validate
	 */
	public static function validate( string $email ) 
	{
		if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$errors[] = 'Email address is invalid.';
		}

		if ( ! empty( $errors ) ) {
			throw new ValidationException( $errors );
		}
	}

}
