<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ViewData[]|\Cake\Collection\CollectionInterface $viewData
 */
?>
<div class="viewData index content">
    <?= $this->Html->link(__('New View Data'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('View Data') ?></h3>
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
                <?php foreach ($viewData as $viewData): ?>
                <tr>
                    <td><?= $this->Number->format($viewData->id) ?></td>
                    <td><?= $viewData->has('user') ? $this->Html->link($viewData->user->id, ['controller' => 'Users', 'action' => 'view', $viewData->user->id]) : '' ?></td>
                    <td><?= $viewData->has('media') ? $this->Html->link($viewData->media->title, ['controller' => 'Media', 'action' => 'view', $viewData->media->id]) : '' ?></td>
                    <td><?= $this->Number->format($viewData->rating) ?></td>
                    <td><?= $this->Number->format($viewData->progress) ?></td>
                    <td><?= h($viewData->created) ?></td>
                    <td><?= h($viewData->modified) ?></td>
                    <td><?= h($viewData->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $viewData->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $viewData->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $viewData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viewData->id)]) ?>
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
