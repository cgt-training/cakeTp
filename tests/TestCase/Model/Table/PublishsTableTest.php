<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublishsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublishsTable Test Case
 */
class PublishsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PublishsTable
     */
    public $Publishs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.publishs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Publishs') ? [] : ['className' => 'App\Model\Table\PublishsTable'];
        $this->Publishs = TableRegistry::get('Publishs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Publishs);

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
