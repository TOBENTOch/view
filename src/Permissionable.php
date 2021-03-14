<?php

/**
 * TOBENTO
 *
 * @copyright	Tobias Strub, TOBENTO
 * @license     MIT License, see LICENSE file distributed with this source code.
 * @author      Tobias Strub
 * @link        https://www.tobento.ch
 */

declare(strict_types=1);

namespace Tobento\Service\Acl;

/**
 * Permissionable
 */
interface Permissionable
{
	/**
	 * Set the permissions.
	 *
	 * @param array The permissions ['user.create', 'user.update']
	 * @return static $this
	 */	
	public function setPermissions(array $permissions): static;
	
	/**
	 * Add permissions.
	 *
	 * @param array The permissions ['user.create', 'user.update']
	 * @return static $this
	 */	
	public function addPermissions(array $permissions): static;

	/**
	 * Get the permissions.
	 *
	 * @return array The permissions ['user.create', 'user.update']
	 */	
	public function getPermissions(): array;

	/**
	 * Has the permission.
	 *
	 * @return bool True on success, otherwise false.
	 */	
	public function hasPermission(string $key): bool;
}