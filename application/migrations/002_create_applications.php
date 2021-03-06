<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_Applications extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE,
			),
			'client_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'null' => FALSE,
			),
			'client_secret' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'null' => FALSE,
			),
			'owner_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'null' => FALSE,
			),
		));
		$this->dbforge->add_key('id', true);
		$this->dbforge->add_key(array('owner_id', 'client_id'));
		$this->dbforge->create_table('applications');
	}

	public function down() {
		$this->dbforge->drop_table('applications');
	}

}

/* End of file 002_create_applications.php */
/* Location: ./applications.php */