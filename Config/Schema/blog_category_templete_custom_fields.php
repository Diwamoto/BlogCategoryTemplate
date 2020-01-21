<?php 
class BlogCategoryTemplateCustomFieldsSchema extends CakeSchema {

	public $file = 'blog_category_template_custom_fields.php';

	public $connection = 'plugin';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $blog_category_templete = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'your_integer' => array('type' => 'integer', 'null' => true, 'default' => null),
		'your_string' => array('type' => 'string', 'null' => true, 'default' => null),
		'your_flag' => array('type' => 'integer', 'null' => true, 'default' => 0, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		)
	);

}
