<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * CategorizedOption model
 *
 * @package categories
 * @subpackage categories.models
 */

class CategorizedOption extends CategoriesAppModel {

/**
 * Name
 *
 * @var string
 */
	public $name = 'CategorizedOption';

/**
 * Table
 *
 * @var string
 */
	public $useTable = 'categorized_options';

	public $belongsTo = array(
		'CategoryOption' => array(
			'className' => 'Categories.CategoryOption'));
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

/**
 * Constructor
 *
 * @return void
 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
/*		$this->validate = array(
			'foreign_key' => array(
				'required' => array('rule' => array('notEmpty'), 'required' => true, 'allowEmpty' => false, 'message' => __d('categories', 'Foreign key can not be empty', true))),
			'category_id' => array(
				'required' => array('rule' => array('notEmpty'), 'required' => true, 'allowEmpty' => false, 'message' => __d('categories', 'Category id can not be empty', true))),
			'model' => array(
				'required' => array('rule' => array('notEmpty'), 'required' => true, 'allowEmpty' => false, 'message' => __d('categories', 'Model field can not be empty', true))));
*/	}

}