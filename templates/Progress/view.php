<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Progres'), ['action' => 'edit', $progres->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Progres'), ['action' => 'delete', $progres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progres->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Progress'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Progres'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progress view content">
            <h3><?= h($progres->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $progres->has('user') ? $this->Html->link($progres->user->id, ['controller' => 'Users', 'action' => 'view', $progres->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Media') ?></th>
                    <td><?= $progres->has('media') ? $this->Html->link($progres->media->title, ['controller' => 'Media', 'action' => 'view', $progres->media->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($progres->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Progress') ?></th>
                    <td><?= $this->Number->format($progres->progress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($progres->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($progres->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($progres->deleted) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
