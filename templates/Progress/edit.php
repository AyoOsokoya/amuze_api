<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $progres->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $progres->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Progress'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progress form content">
            <?= $this->Form->create($progres) ?>
            <fieldset>
                <legend><?= __('Edit Progres') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('media_id', ['options' => $media, 'empty' => true]);
                    echo $this->Form->control('rating');
                    echo $this->Form->control('progress');
                    echo $this->Form->control('deleted', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
