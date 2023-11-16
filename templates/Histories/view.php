<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Histories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New History'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="histories view content">
            <h3><?= h($history->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($history->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($history->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Detail Id') ?></th>
                    <td><?= $this->Number->format($history->detail_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($history->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fixed') ?></th>
                    <td><?= h($history->fixed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($history->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($history->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($history->reason)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Photo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($history->photo)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Item Details') ?></h4>
                <?php if (!empty($history->item_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('History Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($history->item_details as $itemDetails) : ?>
                        <tr>
                            <td><?= h($itemDetails->id) ?></td>
                            <td><?= h($itemDetails->code) ?></td>
                            <td><?= h($itemDetails->photo) ?></td>
                            <td><?= h($itemDetails->created) ?></td>
                            <td><?= h($itemDetails->modified) ?></td>
                            <td><?= h($itemDetails->item_id) ?></td>
                            <td><?= h($itemDetails->history_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ItemDetails', 'action' => 'view', $itemDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ItemDetails', 'action' => 'edit', $itemDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemDetails', 'action' => 'delete', $itemDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemDetails->id)]) ?>
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
