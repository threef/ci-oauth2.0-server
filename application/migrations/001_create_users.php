<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration {

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
				'auto_increment' => TRUE
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'screen_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('users');
	}

	public function down() {
		$this->dbforge->drop_table('users');
	}

}

/* End of file 001_create_users.php */
/* Location: ./application/migrations/001_create_users.php */