<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 *
 */
class EventsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null, 'collate' => null],
        'start' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null],
        'end' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start' => '2016-09-27 17:01:19',
            'end' => '2016-09-27 17:01:19',
            'created' => '2016-09-27 17:01:19',
            'modified' => '2016-09-27 17:01:19'
        ],
    ];
}
