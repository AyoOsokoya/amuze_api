<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgressTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgressTable Test Case
 */
class ProgressTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgressTable
     */
    protected $Progress;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Progress',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('Progress') ? [] : ['className' => ProgressTable::class];
        $this->Progress = $this->getTableLocator()->get('Progress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Progress);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
