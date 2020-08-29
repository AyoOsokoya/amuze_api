<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CreatorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CreatorsTable Test Case
 */
class CreatorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CreatorsTable
     */
    protected $Creators;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Creators',
        'app.Media',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Creators') ? [] : ['className' => CreatorsTable::class];
        $this->Creators = $this->getTableLocator()->get('Creators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Creators);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
