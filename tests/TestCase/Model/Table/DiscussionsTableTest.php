<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscussionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscussionsTable Test Case
 */
class DiscussionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscussionsTable
     */
    protected $Discussions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Discussions',
        'app.Users',
        'app.Media',
        'app.Comments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Discussions') ? [] : ['className' => DiscussionsTable::class];
        $this->Discussions = $this->getTableLocator()->get('Discussions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Discussions);

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
