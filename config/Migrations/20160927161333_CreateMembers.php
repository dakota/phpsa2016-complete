<?php
use Migrations\AbstractMigration;

class CreateMembers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('members');
        $table->addColumn('first_name', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('last_name', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => '',
            'null' => false,
        ]);
        $table->create();
    }
}
