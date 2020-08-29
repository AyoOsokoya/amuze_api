<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserMedia[]|\Cake\Collection\CollectionInterface $userMedia
 */
?>
<div class="userMedia index content">
    <?= $this->Html->link(__('New User Media'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Media') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('media_id') ?></th>
                    <th><?= $this->Paginator->sort('progress') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userMedia as $userMedia): ?>
                <tr>
                    <td><?= $this->Number->format($userMedia->id) ?></td>
                    <td><?= $userMedia->has('user') ? $this->Html->link($userMedia->user->id, ['controller' => 'Users', 'action' => 'view', $userMedia->user->id]) : '' ?></td>
                    <td><?= $userMedia->has('media') ? $this->Html->link($userMedia->media->title, ['controller' => 'Media', 'action' => 'view', $userMedia->media->id]) : '' ?></td>
                    <td><?= $this->Number->format($userMedia->progress) ?></td>
                    <td><?= h($userMedia->created) ?></td>
                    <td><?= h($userMedia->updated) ?></td>
                    <td><?= h($userMedia->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userMedia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userMedia->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userMedia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMedia->id)]) ?>
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
