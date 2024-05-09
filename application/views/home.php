<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="w-full grid grid-cols-2 sm:grid-cols-3 gap-x-[14px] gap-y-[28px] pb-[14px]">
  <?php
  foreach ($posts as $post) :
    $data['post'] = $post;
    $this->load->view('components/card', $data);
  endforeach;
  ?>
</div>
<div class="fixed bottom-[42px] right-[28px] z-20">
  <?php
  $data['label'] = 'Delete All';
  $data['variant'] = 'secondary';
  $data['route'] = 'post/deleteall';
  $this->load->view('components/button', $data);
  ?>
</div>
