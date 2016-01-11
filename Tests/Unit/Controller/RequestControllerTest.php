<?php
namespace VMFDS\VmfdsPrayers\Tests\Unit\Controller;
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
 * Test case for class VMFDS\VmfdsPrayers\Controller\RequestController.
 *
 * @author Christoph Fischer <christoph.fischer@volksmission.de>
 */
class RequestControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VMFDS\VmfdsPrayers\Controller\RequestController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('VMFDS\\VmfdsPrayers\\Controller\\RequestController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllRequestsFromRepositoryAndAssignsThemToView() {

		$allRequests = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$requestRepository = $this->getMock('VMFDS\\VmfdsPrayers\\Domain\\Repository\\RequestRepository', array('findAll'), array(), '', FALSE);
		$requestRepository->expects($this->once())->method('findAll')->will($this->returnValue($allRequests));
		$this->inject($this->subject, 'requestRepository', $requestRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('requests', $allRequests);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenRequestToView() {
		$request = new \VMFDS\VmfdsPrayers\Domain\Model\Request();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('request', $request);

		$this->subject->showAction($request);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenRequestToView() {
		$request = new \VMFDS\VmfdsPrayers\Domain\Model\Request();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newRequest', $request);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($request);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenRequestToRequestRepository() {
		$request = new \VMFDS\VmfdsPrayers\Domain\Model\Request();

		$requestRepository = $this->getMock('VMFDS\\VmfdsPrayers\\Domain\\Repository\\RequestRepository', array('add'), array(), '', FALSE);
		$requestRepository->expects($this->once())->method('add')->with($request);
		$this->inject($this->subject, 'requestRepository', $requestRepository);

		$this->subject->createAction($request);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenRequestToView() {
		$request = new \VMFDS\VmfdsPrayers\Domain\Model\Request();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('request', $request);

		$this->subject->editAction($request);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenRequestInRequestRepository() {
		$request = new \VMFDS\VmfdsPrayers\Domain\Model\Request();

		$requestRepository = $this->getMock('VMFDS\\VmfdsPrayers\\Domain\\Repository\\RequestRepository', array('update'), array(), '', FALSE);
		$requestRepository->expects($this->once())->method('update')->with($request);
		$this->inject($this->subject, 'requestRepository', $requestRepository);

		$this->subject->updateAction($request);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenRequestFromRequestRepository() {
		$request = new \VMFDS\VmfdsPrayers\Domain\Model\Request();

		$requestRepository = $this->getMock('VMFDS\\VmfdsPrayers\\Domain\\Repository\\RequestRepository', array('remove'), array(), '', FALSE);
		$requestRepository->expects($this->once())->method('remove')->with($request);
		$this->inject($this->subject, 'requestRepository', $requestRepository);

		$this->subject->deleteAction($request);
	}
}
