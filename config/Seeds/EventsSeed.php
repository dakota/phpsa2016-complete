<?php
use Migrations\AbstractSeed;

/**
 * Events seed.
 */
class EventsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
$data = [
    [
        'title' => 'PHP South Africa 2016',
        'description' => '',
        'start' => '2016-09-28 08:00',
        'end' => '2016-09-30 17:00',
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s'),
    ]
];

        $table = $this->table('events');
        $table->insert($data)->save();
    }
}
