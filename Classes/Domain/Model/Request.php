<?php
namespace VMFDS\VmfdsPrayers\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Christoph Fischer <christoph.fischer@volksmission.de>, Volksmission Freudenstadt
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Gebetsanliegen
 */
class Request extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * request
	 *
	 * @var string
	 */
	protected $request = '';

	/**
	 * showName
	 *
	 * @var boolean
	 */
	protected $showName = FALSE;

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the request
	 *
	 * @return string $request
	 */
	public function getRequest() {
		return $this->request;
	}

	/**
	 * Sets the request
	 *
	 * @param string $request
	 * @return void
	 */
	public function setRequest($request) {
		$this->request = $request;
	}

	/**
	 * Returns the showName
	 *
	 * @return boolean $showName
	 */
	public function getShowName() {
		return $this->showName;
	}

	/**
	 * Sets the showName
	 *
	 * @param boolean $showName
	 * @return void
	 */
	public function setShowName($showName) {
		$this->showName = $showName;
	}

	/**
	 * Returns the boolean state of showName
	 *
	 * @return boolean
	 */
	public function isShowName() {
		return $this->showName;
	}

}