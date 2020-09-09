<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticlesTag[]|\Cake\Collection\CollectionInterface $articlesTags
 */
?>
<div class="articlesTags index content">
    <?= $this->Html->link(__('New Articles Tag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Articles Tags') ?></h3>
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
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articlesTags as $articlesTag): ?>
                <tr>
                    <td><?= $this->Number->format($articlesTag->id) ?></td>
                    <td><?= $articlesTag->has('user') ? $this->Html->link($articlesTag->user->id, ['controller' => 'Users', 'action' => 'view', $articlesTag->user->id]) : '' ?></td>
                    <td><?= $articlesTag->has('media') ? $this->Html->link($articlesTag->media->title, ['controller' => 'Media', 'action' => 'view', $articlesTag->media->id]) : '' ?></td>
                    <td><?= $this->Number->format($articlesTag->progress) ?></td>
                    <td><?= h($articlesTag->created) ?></td>
                    <td><?= h($articlesTag->updated) ?></td>
                    <td><?= h($articlesTag->deleted) ?></td>
                    <td><?= $this->Number->format($articlesTag->rating) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $articlesTag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlesTag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->id)]) ?>
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
