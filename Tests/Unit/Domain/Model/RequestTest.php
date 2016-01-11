<?php

namespace VMFDS\VmfdsPrayers\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Christoph Fischer <christoph.fischer@volksmission.de>, Volksmission Freudenstadt
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \VMFDS\VmfdsPrayers\Domain\Model\Request.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christoph Fischer <christoph.fischer@volksmission.de>
 */
class RequestTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VMFDS\VmfdsPrayers\Domain\Model\Request
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \VMFDS\VmfdsPrayers\Domain\Model\Request();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShowNameReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getShowName()
		);
	}

	/**
	 * @test
	 */
	public function setShowNameForBooleanSetsShowName() {
		$this->subject->setShowName(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'showName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRequestReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRequest()
		);
	}

	/**
	 * @test
	 */
	public function setRequestForStringSetsRequest() {
		$this->subject->setRequest('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'request',
			$this->subject
		);
	}
}
