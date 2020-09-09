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
        </div>
    </div>
</div>
