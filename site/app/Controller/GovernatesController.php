<?php
App::uses('AppController', 'Controller');
/**
 * Governates Controller
 *
 * @property Governate $Governate
 * @property PaginatorComponent $Paginator
 */
class GovernatesController extends AppController {

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
		$this->Governate->recursive = 0;
		$this->set('governates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Governate->exists($id)) {
			throw new NotFoundException(__('Invalid governate'));
		}
		$options = array('conditions' => array('Governate.' . $this->Governate->primaryKey => $id));
		$this->set('governate', $this->Governate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Governate->create();
			if ($this->Governate->save($this->request->data)) {
				$this->Session->setFlash(__('The governate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The governate could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Governate->exists($id)) {
			throw new NotFoundException(__('Invalid governate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Governate->save($this->request->data)) {
				$this->Session->setFlash(__('The governate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The governate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Governate.' . $this->Governate->primaryKey => $id));
			$this->request->data = $this->Governate->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Governate->id = $id;
		if (!$this->Governate->exists()) {
			throw new NotFoundException(__('Invalid governate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Governate->delete()) {
			$this->Session->setFlash(__('The governate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The governate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
