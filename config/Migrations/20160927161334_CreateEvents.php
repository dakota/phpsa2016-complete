<?php
use Migrations\AbstractMigration;

class CreateEvents extends AbstractMigration
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
        $table = $this->table('events');
        $table->addColumn('title', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('start', 'datetime', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('end', 'datetime', [
            'default' => '',
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
