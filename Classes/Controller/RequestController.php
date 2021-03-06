<?php
namespace VMFDS\VmfdsPrayers\Controller;

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
 * RequestController
 */
class RequestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * requestRepository
	 *
	 * @var \VMFDS\VmfdsPrayers\Domain\Repository\RequestRepository
	 * @inject
	 */
	protected $requestRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$requests = $this->requestRepository->findAll();
		$this->view->assign('requests', $requests);
	}

	/**
	 * action show
	 *
	 * @param \VMFDS\VmfdsPrayers\Domain\Model\Request $request
	 * @return void
	 */
	public function showAction(\VMFDS\VmfdsPrayers\Domain\Model\Request $request) {
		$this->view->assign('request', $request);
	}

	/**
	 * action new
	 *
	 * @param \VMFDS\VmfdsPrayers\Domain\Model\Request $newRequest
	 * @ignorevalidation $newRequest
	 * @return void
	 */
	public function newAction(\VMFDS\VmfdsPrayers\Domain\Model\Request $newRequest = NULL) {
		$this->view->assign('newRequest', $newRequest);
	}

	/**
	 * action create
	 *
	 * @param \VMFDS\VmfdsPrayers\Domain\Model\Request $newRequest
	 * @return void
	 */
	public function createAction(\VMFDS\VmfdsPrayers\Domain\Model\Request $newRequest) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->requestRepository->add($newRequest);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \VMFDS\VmfdsPrayers\Domain\Model\Request $request
	 * @ignorevalidation $request
	 * @return void
	 */
	public function editAction(\VMFDS\VmfdsPrayers\Domain\Model\Request $request) {
		$this->view->assign('request', $request);
	}

	/**
	 * action update
	 *
	 * @param \VMFDS\VmfdsPrayers\Domain\Model\Request $request
	 * @return void
	 */
	public function updateAction(\VMFDS\VmfdsPrayers\Domain\Model\Request $request) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->requestRepository->update($request);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \VMFDS\VmfdsPrayers\Domain\Model\Request $request
	 * @return void
	 */
	public function deleteAction(\VMFDS\VmfdsPrayers\Domain\Model\Request $request) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->requestRepository->remove($request);
		$this->redirect('list');
	}

	/**
	 * action approve
	 *
	 * @return void
	 */
	public function approveAction() {
		
	}

}