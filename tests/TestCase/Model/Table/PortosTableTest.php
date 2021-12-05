<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortosTable Test Case
 */
class PortosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PortosTable
     */
    public $Portos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Portos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Portos') ? [] : ['className' => PortosTable::class];
        $this->Portos = TableRegistry::getTableLocator()->get('Portos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Portos);

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
