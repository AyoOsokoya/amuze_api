<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Media[]|\Cake\Collection\CollectionInterface $media
 */
?>
<div class="media index content">
    <?= $this->Html->link(__('New Media'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Media') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= $this->Paginator->sort('creator_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($media as $media): ?>
                <tr>
                    <td><?= $this->Number->format($media->id) ?></td>
                    <td><?= h($media->title) ?></td>
                    <td><?= $media->has('type') ? $this->Html->link($media->type->id, ['controller' => 'Types', 'action' => 'view', $media->type->id]) : '' ?></td>
                    <td><?= $media->has('service') ? $this->Html->link($media->service->name, ['controller' => 'Services', 'action' => 'view', $media->service->id]) : '' ?></td>
                    <td><?= $media->has('creator') ? $this->Html->link($media->creator->id, ['controller' => 'Creators', 'action' => 'view', $media->creator->id]) : '' ?></td>
                    <td><?= h($media->created) ?></td>
                    <td><?= h($media->modified) ?></td>
                    <td><?= h($media->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $media->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $media->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
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
