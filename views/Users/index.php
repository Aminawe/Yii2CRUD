<?php
use yii\helpers\Html;
?>

<style>
table th,td{
    padding: 10px;
}
</style>

<?= Html::a('Create', ['users/create'], ['class' => 'btn btn-success']); ?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>UserName</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->name; ?></td>
        <td><?= $field->mobile; ?></td>
        <td><?= $field->username; ?></td>
        <td><?= Html::a("Edit", ['users/edit', 'id' => $field->id]); ?> | <?= Html::a("Delete", ['student/delete', 'id' => $field->id]); ?></td>
    </tr>
    <?php } ?>
</table>
