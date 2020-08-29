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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $creator->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $creator->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Creators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="creators form content">
            <?= $this->Form->create($creator) ?>
            <fieldset>
                <legend><?= __('Edit Creator') ?></legend>
                <?php
                    echo $this->Form->control('name_first');
                    echo $this->Form->control('name_last');
                    echo $this->Form->control('deleted', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
