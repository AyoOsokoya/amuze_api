<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discussion $discussion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $discussion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Discussions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="discussions form content">
            <?= $this->Form->create($discussion) ?>
            <fieldset>
                <legend><?= __('Edit Discussion') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('media_id', ['options' => $media, 'empty' => true]);
                    echo $this->Form->control('deleted', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
