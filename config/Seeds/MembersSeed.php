<?php
use Migrations\AbstractSeed;

/**
 * Members seed.
 */
class MembersSeed extends AbstractSeed
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
        'first_name' => 'Walther',
        'last_name' => 'Lalk',
        'email' => 'waltherlalk@cakephp.org',
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s'),
    ]
];

        $table = $this->table('members');
        $table->insert($data)->save();
    }
}
