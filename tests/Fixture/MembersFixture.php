<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembersFixture
 *
 */
class MembersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'first_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
        'last_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '', 'precision' => null, 'comment' => null, 'fixed' => null, 'collate' => null],
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
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-09-27 17:01:16',
            'modified' => '2016-09-27 17:01:16'
        ],
    ];
}
