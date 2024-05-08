<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<article class="flex flex-col items-center mb-[28px]">
  <div style="width: calc(100% - 28px);" class="bg-background h-[14px]"></div>
  <div class="px-[28px] py-[14px] w-full bg-background relative before:absolute before:-bottom-[14px] before:left-0 before:h-[14px] before:w-full before:bg-secondary">
    <section class="relative mb-[21px]">
      <div class="absolute top-0 left-0 w-full flex justify-between">
        <div class="bg-background aspect-square h-[14px]"></div>
        <div class="bg-background aspect-square h-[14px]"></div>
      </div>
      <div class="absolute bottom-0 left-0 w-full flex justify-between">
        <div class="bg-background aspect-square h-[14px]"></div>
        <div class="bg-background aspect-square h-[14px]"></div>
      </div>
      <img class="aspect-square object-cover" src="<?= site_url('../upload/' . $detail_post->filename); ?>" alt="<?= $detail_post->caption ?>">
    </section>
    <h1 class="font-display text-6xl text-primary-dark mb-2" style="line-height: 1.1;"><?= $detail_post->caption . " ." ?></h1>
    <p class="mb-4"><?= $detail_post->description ?></p>
    <section class="mb-2 grid grid-cols-2 w-full">
      <div>
        <h3 class="font-display text-xl mb-2 px-2 py-1 w-fit bg-secondary text-background">Merek .</h3>
        <p><?= $detail_post->brand ?></p>
      </div>
      <div>
        <h3 class="font-display text-xl mb-2 px-2 py-1 w-fit bg-secondary text-background">Tanggal Rilis .</h3>
        <p><?= date_format(date_create($detail_post->release_date),"d F Y") ?></p>
      </div>
    </section>
    <section class="flex justify-between w-full mt-[28px]">
      <?php 
      $data['label'] = 'Edit';
      $data['route'] = './post/edit/' . $detail_post->id;
      $this->load->view('components/button', $data);
      ?>
      <?php 
      $data['label'] = 'Delete';
      $data['route'] = 'post/delete/' . $detail_post->id;
      $data['variant'] = 'secondary';
      $this->load->view('components/button', $data);
      ?>
    </section>
  </div>
  <div style="width: calc(100% - 28px);" class="relative bg-background h-[14px] before:absolute before:-bottom-[14px] before:h-[14px] before:w-full before:bg-secondary"></div>
</article>