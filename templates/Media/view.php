<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Media $media
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Media'), ['action' => 'edit', $media->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Media'), ['action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Media'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Media'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="media view content">
            <h3><?= h($media->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($media->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $media->has('type') ? $this->Html->link($media->type->id, ['controller' => 'Types', 'action' => 'view', $media->type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $media->has('service') ? $this->Html->link($media->service->name, ['controller' => 'Services', 'action' => 'view', $media->service->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $media->has('creator') ? $this->Html->link($media->creator->id, ['controller' => 'Creators', 'action' => 'view', $media->creator->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($media->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($media->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($media->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($media->deleted) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($media->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Discussions') ?></h4>
                <?php if (!empty($media->discussions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Media Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($media->discussions as $discussions) : ?>
                        <tr>
                            <td><?= h($discussions->id) ?></td>
                            <td><?= h($discussions->title) ?></td>
                            <td><?= h($discussions->user_id) ?></td>
                            <td><?= h($discussions->media_id) ?></td>
                            <td><?= h($discussions->created) ?></td>
                            <td><?= h($discussions->modified) ?></td>
                            <td><?= h($discussions->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Discussions', 'action' => 'view', $discussions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Discussions', 'action' => 'edit', $discussions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Discussions', 'action' => 'delete', $discussions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
