<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserMedia $userMedia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Media'), ['action' => 'edit', $userMedia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Media'), ['action' => 'delete', $userMedia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMedia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Media'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Media'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userMedia view content">
            <h3><?= h($userMedia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userMedia->has('user') ? $this->Html->link($userMedia->user->id, ['controller' => 'Users', 'action' => 'view', $userMedia->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Media') ?></th>
                    <td><?= $userMedia->has('media') ? $this->Html->link($userMedia->media->title, ['controller' => 'Media', 'action' => 'view', $userMedia->media->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userMedia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Progress') ?></th>
                    <td><?= $this->Number->format($userMedia->progress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userMedia->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($userMedia->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($userMedia->deleted) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Review') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($userMedia->review)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
