<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Creator $creator
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Creator'), ['action' => 'edit', $creator->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Creator'), ['action' => 'delete', $creator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creator->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Creators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Creator'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="creators view content">
            <h3><?= h($creator->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name First') ?></th>
                    <td><?= h($creator->name_first) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Last') ?></th>
                    <td><?= h($creator->name_last) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($creator->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($creator->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($creator->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($creator->deleted) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Media') ?></h4>
                <?php if (!empty($creator->media)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Type Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Creator Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($creator->media as $media) : ?>
                        <tr>
                            <td><?= h($media->id) ?></td>
                            <td><?= h($media->title) ?></td>
                            <td><?= h($media->description) ?></td>
                            <td><?= h($media->type_id) ?></td>
                            <td><?= h($media->service_id) ?></td>
                            <td><?= h($media->creator_id) ?></td>
                            <td><?= h($media->created) ?></td>
                            <td><?= h($media->updated) ?></td>
                            <td><?= h($media->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Media', 'action' => 'view', $media->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Media', 'action' => 'edit', $media->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Media', 'action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
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
