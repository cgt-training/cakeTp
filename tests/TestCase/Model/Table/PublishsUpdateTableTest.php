<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublishsUpdateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublishsUpdateTable Test Case
 */
class PublishsUpdateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PublishsUpdateTable
     */
    public $PublishsUpdate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.publishs_update'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PublishsUpdate') ? [] : ['className' => 'App\Model\Table\PublishsUpdateTable'];
        $this->PublishsUpdate = TableRegistry::get('PublishsUpdate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PublishsUpdate);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
