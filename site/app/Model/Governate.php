<?php
App::uses('AppModel', 'Model');
/**
 * Governate Model
 *
 * @property District $District
 * @property Service $Service
 */
class Governate extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'governate_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'order' => array('District.name'),
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'governate_id',
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

	function getRegionTree() {
		$tree = $this->find('all', array(
			'contain' => array('District.Village'),
			'order' => array('Governate.name'),
		));

		// re-index on ids
		$governates_indexed = array();

		foreach ($tree as $governate) {

			$districts_indexed = array();
			foreach ($governate['District'] as $district) {

				$villages_indexed = array();
				foreach ($district['Village'] as $village) {
					$villages_indexed[$village['id']] = $village;
				}


				unset($district['Village']);
				$districts_indexed[$district['id']] = array(
					'district' => $district,
					'villages' => $villages_indexed,
				);
			}

			$governates_indexed[$governate['Governate']['id']] = array(
				'governate' => $governate['Governate'],
				'districts' => $districts_indexed,
			);
		}


		return $governates_indexed;

	}








}
