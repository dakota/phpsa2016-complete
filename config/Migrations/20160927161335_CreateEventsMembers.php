<?php
use Migrations\AbstractMigration;

class CreateEventsMembers extends AbstractMigration
{

    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('events_members');
        $table->addColumn('event_id', 'integer', [
            'default' => '',
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('member_id', 'integer', [
            'default' => '',
            'limit' => 11,
            'null' => false,
        ]);
        $table->addPrimaryKey([
            'event_id',
            'member_id',
        ]);
        $table->create();
    }
}
