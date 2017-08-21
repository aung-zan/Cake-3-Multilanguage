<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\News $news
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News'), ['action' => 'edit', $news->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Draft') ?></th>
            <td><?= $this->Number->format($news->draft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $this->Number->format($news->deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploaded Date') ?></th>
            <td><?= h($news->uploaded_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($news->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($news->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Eng Title') ?></h4>
        <?= $this->Text->autoParagraph(h($news->eng_title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Jp Title') ?></h4>
        <?= $this->Text->autoParagraph(h($news->jp_title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Mm Title') ?></h4>
        <?= $this->Text->autoParagraph(h($news->mm_title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Eng Body') ?></h4>
        <?= $this->Text->autoParagraph(h($news->eng_body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Jp Body') ?></h4>
        <?= $this->Text->autoParagraph(h($news->jp_body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Mm Body') ?></h4>
        <?= $this->Text->autoParagraph(h($news->mm_body)); ?>
    </div>
</div>
