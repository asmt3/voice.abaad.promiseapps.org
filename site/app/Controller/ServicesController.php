<?php
App::uses('AppController', 'Controller');
/**
 * Services Controller
 *
 * @property Service $Service
 * @property PaginatorComponent $Paginator
 */
class ServicesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
        $this->Auth->allow('search');
    }


	public function search() {



		if ($this->request->is('post')) {
			$name = $this->request->data('Service.name');
			$village_id = $this->request->data('Service.village_id');
			$district_id = $this->request->data('Service.district_id');
			$governate_id = $this->request->data('Service.governate_id');
			$sector_id = $this->request->data('Service.sector_id');
			$criterium_id = $this->request->data('Service.criterium_id');


			$services = $this->Service->search($name, $village_id, $district_id, $governate_id, $sector_id, $criterium_id);

			$this->set(compact('services'));
		}

		$governates = $this->Service->Governate->find('list');
		$districts = $this->Service->District->find('list');
		$villages = $this->Service->Village->find('list');
		$sectors = $this->Service->Sector->find('list');
		$criteria = $this->Service->Criterium->find('list');

		
		$this->set(compact('governates', 'districts', 'villages', 'sectors', 'criteria'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Service->recursive = 0;
		$this->set('services', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
		$this->set('service', $this->Service->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'));
			}
		}
		$sectors = $this->Service->Sector->find('list');
		$governates = $this->Service->Governate->find('list');
		$districts = $this->Service->District->find('list');
		$villages = $this->Service->Village->find('list');
		$criteria = $this->Service->Criterium->find('list');
		$this->set(compact('sectors', 'governates', 'districts', 'villages', 'criteria'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Service->exists($id)) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));
			$this->request->data = $this->Service->find('first', $options);
		}
		$sectors = $this->Service->Sector->find('list');
		$governates = $this->Service->Governate->find('list');
		$districts = $this->Service->District->find('list');
		$villages = $this->Service->Village->find('list');
		$criteria = $this->Service->Criterium->find('list');
		$this->set(compact('sectors', 'governates', 'districts', 'villages', 'criteria'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Service->delete()) {
			$this->Session->setFlash(__('The service has been deleted.'));
		} else {
			$this->Session->setFlash(__('The service could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
