<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name First') ?></th>
                    <td><?= h($user->name_first) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Last') ?></th>
                    <td><?= h($user->name_last) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($user->deleted) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Comments') ?></h4>
                <?php if (!empty($user->comments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Discussion Id') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->comments as $comments) : ?>
                        <tr>
                            <td><?= h($comments->id) ?></td>
                            <td><?= h($comments->user_id) ?></td>
                            <td><?= h($comments->discussion_id) ?></td>
                            <td><?= h($comments->comment) ?></td>
                            <td><?= h($comments->created) ?></td>
                            <td><?= h($comments->modified) ?></td>
                            <td><?= h($comments->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Discussions') ?></h4>
                <?php if (!empty($user->discussions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Media Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->discussions as $discussions) : ?>
                        <tr>
                            <td><?= h($discussions->id) ?></td>
                            <td><?= h($discussions->title) ?></td>
                            <td><?= h($discussions->user_id) ?></td>
                            <td><?= h($discussions->media_id) ?></td>
                            <td><?= h($discussions->created) ?></td>
                            <td><?= h($discussions->modified) ?></td>
                            <td><?= h($discussions->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Discussions', 'action' => 'view', $discussions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Discussions', 'action' => 'edit', $discussions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Discussions', 'action' => 'delete', $discussions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Progress') ?></h4>
                <?php if (!empty($user->progress)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Media Id') ?></th>
                            <th><?= __('Progress') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->progress as $progress) : ?>
                        <tr>
                            <td><?= h($progress->id) ?></td>
                            <td><?= h($progress->user_id) ?></td>
                            <td><?= h($progress->media_id) ?></td>
                            <td><?= h($progress->progress) ?></td>
                            <td><?= h($progress->created) ?></td>
                            <td><?= h($progress->modified) ?></td>
                            <td><?= h($progress->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Progress', 'action' => 'view', $progress->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Progress', 'action' => 'edit', $progress->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Progress', 'action' => 'delete', $progress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progress->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reviews') ?></h4>
                <?php if (!empty($user->reviews)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Media Id') ?></th>
                            <th><?= __('Review') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->reviews as $reviews) : ?>
                        <tr>
                            <td><?= h($reviews->id) ?></td>
                            <td><?= h($reviews->user_id) ?></td>
                            <td><?= h($reviews->media_id) ?></td>
                            <td><?= h($reviews->review) ?></td>
                            <td><?= h($reviews->rating) ?></td>
                            <td><?= h($reviews->created) ?></td>
                            <td><?= h($reviews->modified) ?></td>
                            <td><?= h($reviews->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
