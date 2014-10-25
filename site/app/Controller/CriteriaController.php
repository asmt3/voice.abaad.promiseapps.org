<?php
App::uses('AppController', 'Controller');
/**
 * Criteria Controller
 *
 * @property Criterium $Criterium
 * @property PaginatorComponent $Paginator
 */
class CriteriaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Criterium->recursive = 0;
		$this->set('criteria', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Criterium->exists($id)) {
			throw new NotFoundException(__('Invalid criterium'));
		}
		$options = array('conditions' => array('Criterium.' . $this->Criterium->primaryKey => $id));
		$this->set('criterium', $this->Criterium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Criterium->create();
			if ($this->Criterium->save($this->request->data)) {
				$this->Session->setFlash(__('The criterium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterium could not be saved. Please, try again.'));
			}
		}
		$services = $this->Criterium->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Criterium->exists($id)) {
			throw new NotFoundException(__('Invalid criterium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Criterium->save($this->request->data)) {
				$this->Session->setFlash(__('The criterium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Criterium.' . $this->Criterium->primaryKey => $id));
			$this->request->data = $this->Criterium->find('first', $options);
		}
		$services = $this->Criterium->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Criterium->id = $id;
		if (!$this->Criterium->exists()) {
			throw new NotFoundException(__('Invalid criterium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Criterium->delete()) {
			$this->Session->setFlash(__('The criterium has been deleted.'));
		} else {
			$this->Session->setFlash(__('The criterium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
