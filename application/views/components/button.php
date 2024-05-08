<?php
  defined('BASEPATH') or exit('No direct script access allowed');
  $color = isset($variant) && $variant === "secondary" ? "bg-secondary" : "bg-primary-dark";
?>

<a href="<?= site_url(isset($route) ? $route : ''); ?>" class="font-display text-2xl flex items-center">
  <div class="<?= $color . " w-[14px] h-[28px]"; ?>"></div>
  <div class=" <?= $color . " text-background p-[14px]"?>">
    <p class="-mb-1">
      <?= isset($label) ? $label : 'Button'; ?>
    </p>
  </div>
  <div class="<?= $color . " w-[14px] h-[28px]"; ?>"></div>
</a>