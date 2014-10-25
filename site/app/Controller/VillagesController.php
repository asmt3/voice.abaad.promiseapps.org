<?php
App::uses('AppController', 'Controller');
/**
 * Villages Controller
 *
 * @property Village $Village
 * @property PaginatorComponent $Paginator
 */
class VillagesController extends AppController {

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
		$this->Village->recursive = 0;
		$this->set('villages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Village->exists($id)) {
			throw new NotFoundException(__('Invalid village'));
		}
		$options = array('conditions' => array('Village.' . $this->Village->primaryKey => $id));
		$this->set('village', $this->Village->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Village->create();
			if ($this->Village->save($this->request->data)) {
				$this->Session->setFlash(__('The village has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The village could not be saved. Please, try again.'));
			}
		}
		$districts = $this->Village->District->find('list');
		$this->set(compact('districts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Village->exists($id)) {
			throw new NotFoundException(__('Invalid village'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Village->save($this->request->data)) {
				$this->Session->setFlash(__('The village has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The village could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Village.' . $this->Village->primaryKey => $id));
			$this->request->data = $this->Village->find('first', $options);
		}
		$districts = $this->Village->District->find('list');
		$this->set(compact('districts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Village->id = $id;
		if (!$this->Village->exists()) {
			throw new NotFoundException(__('Invalid village'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Village->delete()) {
			$this->Session->setFlash(__('The village has been deleted.'));
		} else {
			$this->Session->setFlash(__('The village could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
