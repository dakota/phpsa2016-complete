<?php
use Migrations\AbstractMigration;

class AddPasswordToMembers extends AbstractMigration
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
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ]);
        $table->update();
    }
}
