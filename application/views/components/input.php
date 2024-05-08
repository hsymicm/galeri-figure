<?php
defined('BASEPATH') or exit('No direct script access allowed');
$id = isset($id) ? $id : 'input-label';
$type = isset($type) ? $type : 'text';
?>

<div class="flex flex-col mb-6 text-primary-dark">
    <label class="font-display text-2xl" for="<?= $id ?>"><?= $label ?></label>
    <?php if (!(isset($isTextarea) && is_bool($isTextarea) ? $isTextarea : FALSE)) { ?>
        <input class="font-sans bg-background-dark px-3 py-2 border-b-4 border-secondary" type="<?= $type ?>" name="<?= $id ?>" id="<?= $id ?>" value="<?= isset($value) ? $value : '' ?>">
    <?php } else { ?>
        <textarea class="bg-background-dark px-3 py-2 border-b-4 border-secondary" cols="100" name="<?= $id ?>" id="<?= $id ?>"><?= isset($value) ? $value : '' ?></textarea>
    <?php } ?>
</div>