<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarsTrain $carsTrain
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cars Trains'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carsTrains form content">
            <?= $this->Form->create($carsTrain) ?>
            <fieldset>
                <legend><?= __('Add Cars Train') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
