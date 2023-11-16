<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemDetail $itemDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item Detail'), ['action' => 'edit', $itemDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item Detail'), ['action' => 'delete', $itemDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Item Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemDetails view content">
            <h3><?= h($itemDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $itemDetail->has('item') ? $this->Html->link($itemDetail->item->name, ['controller' => 'Items', 'action' => 'view', $itemDetail->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('History') ?></th>
                    <td><?= $itemDetail->has('history') ? $this->Html->link($itemDetail->history->id, ['controller' => 'Histories', 'action' => 'view', $itemDetail->history->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($itemDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= $this->Number->format($itemDetail->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($itemDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($itemDetail->modified) ?></td>
                    <td><?= h($itemDetail->photo) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Photo') ?></strong>
                <blockquote>
                    <?= $this->Html->image('../photo/'.$itemDetail->photo , ['width' => '100px']); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
