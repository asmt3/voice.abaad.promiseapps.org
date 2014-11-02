<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 * @property Sector $Sector
 * @property Governate $Governate
 * @property District $District
 * @property Village $Village
 * @property Comment $Comment
 * @property Criterium $Criterium
 */
class Service extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sector' => array(
			'className' => 'Sector',
			'foreignKey' => 'sector_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Governate' => array(
			'className' => 'Governate',
			'foreignKey' => 'governate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Village' => array(
			'className' => 'Village',
			'foreignKey' => 'village_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'service_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Criterium' => array(
			'className' => 'Criterium',
			'joinTable' => 'criteria_services',
			'foreignKey' => 'service_id',
			'associationForeignKey' => 'criterium_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	
	public function search($name, $village_id, $district_id, $governate_id, $sector_id, $criterium_id) {

		$conditions = array();

		if ($name) {
			$conditions[] = array('Service.name LIKE' => '%' . $name . '%');
		}

		if ($village_id) {
			$conditions[] = array('Service.village_id' => $village_id);
		}

		if ($district_id) {
			$conditions[] = array('Service.district_id' => $district_id);
		}

		if ($governate_id) {
			$conditions[] = array('Service.governate_id' => $governate_id);
		}

		if ($sector_id) {
			$conditions[] = array('Service.sector_id' => $sector_id);
		}

		if ($criterium_id) {
			// $conditions[] = array('Service.criterium_id' => $criterium_id);
		}


		return $this->find('all', compact('conditions'));
	}

}
