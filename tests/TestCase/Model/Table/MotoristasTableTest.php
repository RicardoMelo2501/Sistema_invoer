<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotoristasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotoristasTable Test Case
 */
class MotoristasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MotoristasTable
     */
    public $Motoristas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Motoristas',
        'app.Veiculos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Motoristas') ? [] : ['className' => MotoristasTable::class];
        $this->Motoristas = TableRegistry::getTableLocator()->get('Motoristas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Motoristas);

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
