<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ViewData $viewData
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit View Data'), ['action' => 'edit', $viewData->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete View Data'), ['action' => 'delete', $viewData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viewData->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List View Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New View Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viewData view content">
            <h3><?= h($viewData->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $viewData->has('user') ? $this->Html->link($viewData->user->id, ['controller' => 'Users', 'action' => 'view', $viewData->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Media') ?></th>
                    <td><?= $viewData->has('media') ? $this->Html->link($viewData->media->title, ['controller' => 'Media', 'action' => 'view', $viewData->media->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($viewData->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= $this->Number->format($viewData->rating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Progress') ?></th>
                    <td><?= $this->Number->format($viewData->progress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($viewData->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($viewData->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($viewData->deleted) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Review') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($viewData->review)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
