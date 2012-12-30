<?php namespace Cartalyst\Sentry\Users;
/**
 * Part of the Sentry Package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

interface UserInterface {

	/**
	 * Returns the user's ID.
	 *
	 * @return  mixed
	 */
	public function getUserId();

	/**
	 * Returns the user's login.
	 *
	 * @return string
	 */
	public function getUserLogin();

	/**
	 * Returns the user's password (hashed).
	 *
	 * @return string
	 */
	public function getUserPassword();

	/**
	 * Returns permissions for the user.
	 *
	 * @return array
	 */
	public function getUserPermissions();

	/**
	 * Check if user is activated
	 *
	 * @param  UserInterface  $user
	 * @return bool
	 */
	public function isActivated();

	/**
	 * Returns if the user is a super user - has
	 * access to everything regardless of permissions.
	 *
	 * @return void
	 */
	public function isSuperUser();

}