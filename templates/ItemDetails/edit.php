<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemDetail $itemDetail
 * @var string[]|\Cake\Collection\CollectionInterface $items
 * @var string[]|\Cake\Collection\CollectionInterface $histories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemDetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Item Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemDetails form content">
            <?= $this->Form->create($itemDetail, ['enctype' => 'multypart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit Item Detail') ?></legend>
                <?php
                echo $this->Form->control('code');
                echo $this->Form->control('photo', ['type' => 'file']);
                echo $this->Form->control('item_id', ['options' => $items]);
                echo $this->Form->control('history_id', ['type' => 'hidden']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>