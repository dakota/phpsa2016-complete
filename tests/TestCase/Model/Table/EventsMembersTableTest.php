<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsMembersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsMembersTable Test Case
 */
class EventsMembersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsMembersTable
     */
    public $EventsMembers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.events_members',
        'app.events',
        'app.members',
        'app.organising_events',
        'app.organiser'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EventsMembers') ? [] : ['className' => 'App\Model\Table\EventsMembersTable'];
        $this->EventsMembers = TableRegistry::get('EventsMembers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventsMembers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
