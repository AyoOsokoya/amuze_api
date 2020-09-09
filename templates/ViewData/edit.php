<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ViewData $viewData
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $viewData->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $viewData->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List View Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viewData form content">
            <?= $this->Form->create($viewData) ?>
            <fieldset>
                <legend><?= __('Edit View Data') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('media_id', ['options' => $media, 'empty' => true]);
                    echo $this->Form->control('review');
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
