<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discussion[]|\Cake\Collection\CollectionInterface $discussions
 */
?>
<div class="discussions index content">
    <?= $this->Html->link(__('New Discussion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Discussions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('media_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($discussions as $discussion): ?>
                <tr>
                    <td><?= $this->Number->format($discussion->id) ?></td>
                    <td><?= h($discussion->title) ?></td>
                    <td><?= $discussion->has('user') ? $this->Html->link($discussion->user->id, ['controller' => 'Users', 'action' => 'view', $discussion->user->id]) : '' ?></td>
                    <td><?= $discussion->has('media') ? $this->Html->link($discussion->media->title, ['controller' => 'Media', 'action' => 'view', $discussion->media->id]) : '' ?></td>
                    <td><?= h($discussion->created) ?></td>
                    <td><?= h($discussion->updated) ?></td>
                    <td><?= h($discussion->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $discussion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discussion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discussion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id)]) ?>
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
