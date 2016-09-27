<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsMembersFixture
 *
 */
class EventsMembersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'event_id' => ['autoIncrement' => null, 'type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null],
        'member_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['event_id', 'member_id'], 'length' => []],
            'sqlite_autoindex_events_members_1' => ['type' => 'unique', 'columns' => ['event_id', 'member_id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'event_id' => 1,
            'member_id' => 1
        ],
    ];
}
