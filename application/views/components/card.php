<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<article class="flex flex-col items-center">
  <div style="width: calc(100% - 28px);" class="bg-background h-[14px]"></div>
  <div class="px-[14px] bg-background relative before:absolute before:-bottom-[14px] before:left-0 before:h-[14px] before:w-full before:bg-secondary">
    <section class="relative">
      <div class="absolute top-0 left-0 w-full flex justify-between">
        <div class="bg-background aspect-square h-[14px]"></div>
        <div class="bg-background aspect-square h-[14px]"></div>
      </div>
      <div class="absolute bottom-0 left-0 w-full flex justify-between">
        <div class="bg-background aspect-square h-[14px]"></div>
        <div class="bg-background aspect-square h-[14px]"></div>
      </div>
      <img class="aspect-square object-cover" src="<?= site_url('../upload/' . $post['filename']); ?>" alt="<?= $post['caption'] ?>">
    </section>
    <section class="mt-[14px] flex flex-col">
      <h2 class="font-display text-[28px] text-center mb-[6px]" style="line-height: 1.1;"><?= $post['caption'] ?></h2>
      <p class="text-sm text-center"><?= strlen($post['description']) > 100 ? substr($post['description'], 0, 99) . "..." : $post['description']; ?></p>
      <div class="flex w-full justify-center mt-3">
        <a href="<?= site_url('post/index/' . $post['id']); ?>" class="font-display text-lg bg-primary-dark text-background px-[14px] py-2">
          <p class="-mb-[2px]">Read More</p>
        </a>
      </div>
    </section>
  </div>
  <div style="width: calc(100% - 28px);" class="relative bg-background h-[14px] before:absolute before:-bottom-[14px] before:h-[14px] before:w-full before:bg-secondary"></div>
</article>