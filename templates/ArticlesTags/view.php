<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticlesTag $articlesTag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Articles Tag'), ['action' => 'edit', $articlesTag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Articles Tag'), ['action' => 'delete', $articlesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Articles Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articlesTags view content">
            <h3><?= h($articlesTag->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $articlesTag->has('user') ? $this->Html->link($articlesTag->user->id, ['controller' => 'Users', 'action' => 'view', $articlesTag->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Media') ?></th>
                    <td><?= $articlesTag->has('media') ? $this->Html->link($articlesTag->media->title, ['controller' => 'Media', 'action' => 'view', $articlesTag->media->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($articlesTag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Progress') ?></th>
                    <td><?= $this->Number->format($articlesTag->progress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= $this->Number->format($articlesTag->rating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($articlesTag->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($articlesTag->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($articlesTag->deleted) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Review') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($articlesTag->review)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
