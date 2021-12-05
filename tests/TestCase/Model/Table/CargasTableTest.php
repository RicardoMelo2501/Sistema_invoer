<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CargasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CargasTable Test Case
 */
class CargasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CargasTable
     */
    public $Cargas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cargas',
        'app.Empresas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cargas') ? [] : ['className' => CargasTable::class];
        $this->Cargas = TableRegistry::getTableLocator()->get('Cargas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cargas);

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
