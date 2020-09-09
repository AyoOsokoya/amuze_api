<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres[]|\Cake\Collection\CollectionInterface $progress
 */
?>
<div class="progress index content">
    <?= $this->Html->link(__('New Progres'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Progress') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('media_id') ?></th>
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th><?= $this->Paginator->sort('progress') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($progress as $progres): ?>
                <tr>
                    <td><?= $this->Number->format($progres->id) ?></td>
                    <td><?= $progres->has('user') ? $this->Html->link($progres->user->id, ['controller' => 'Users', 'action' => 'view', $progres->user->id]) : '' ?></td>
                    <td><?= $progres->has('media') ? $this->Html->link($progres->media->title, ['controller' => 'Media', 'action' => 'view', $progres->media->id]) : '' ?></td>
                    <td><?= $this->Number->format($progres->rating) ?></td>
                    <td><?= $this->Number->format($progres->progress) ?></td>
                    <td><?= h($progres->created) ?></td>
                    <td><?= h($progres->modified) ?></td>
                    <td><?= h($progres->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $progres->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $progres->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $progres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progres->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
