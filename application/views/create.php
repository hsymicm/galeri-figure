<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h6><?= validation_errors(); ?></h6>
<h6><?= $this->session->flashdata('error'); ?></h6>

<form action="<?= site_url('post/create'); ?>" method="post" enctype="multipart/form-data" class="flex flex-col items-center mb-[28px]">
  <div style="width: calc(100% - 28px);" class="bg-background h-[14px]"></div>
  <div class="px-[28px] py-6 w-full bg-background relative before:absolute before:-bottom-[14px] before:left-0 before:h-[14px] before:w-full before:bg-secondary">
    <?php
    $data['id'] = 'caption';
    $data['label'] = 'Judul';
    $data['isTextarea'] = FALSE;
    $this->load->view('components/input', $data);
    ?>
    <?php
    $data['id'] = 'description';
    $data['label'] = 'Deskripsi';
    $data['isTextarea'] = TRUE;
    $this->load->view('components/input', $data);
    ?>
    <?php
    $data['id'] = 'brand';
    $data['label'] = 'Merek';
    $data['isTextarea'] = FALSE;
    $this->load->view('components/input', $data);
    ?>
    <?php
    $data['id'] = 'release_date';
    $data['label'] = 'Tanggal Rilis';
    $data['isTextarea'] = FALSE;
    $data['type'] = 'date';
    $this->load->view('components/input', $data);
    ?>
    <div class="flex flex-col mb-6 text-primary-dark">
      <label class="font-display text-2xl mb-2">File Gambar</label>
      <div class="relative w-full aspect-[5/3]">
        <div class="absolute top-0 left-0 w-full flex justify-between">
          <div class="bg-background aspect-square h-[14px]"></div>
          <div class="bg-background aspect-square h-[14px]"></div>
        </div>
        <div class="absolute bottom-0 left-0 w-full flex justify-between">
          <div class="bg-background aspect-square h-[14px]"></div>
          <div class="bg-background aspect-square h-[14px]"></div>
        </div>
        <img class="w-full h-full object-cover object-center" src="<?= site_url('asset/img/no-image.png') ?>" alt="" id="thumbnail">
        <label class="absolute w-12 md:w-16 aspect-square rounded-full flex items-center justify-center bottom-8 right-8 bg-secondary text-background cursor-pointer" for="image">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 md:w-8 h-6 md:h-8">
            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
          </svg>
        </label>
      </div>
      <input id="image" name="image" class="hidden" type="file" onchange="previewThumbnail();">
    </div>
    <button type="submit" class="mx-auto mt-8 font-display text-2xl flex items-center">
      <div class="bg-primary-dark w-[14px] h-[28px]"></div>
      <div class="bg-primary-dark text-background p-[14px]">
        <p class="-mb-1">
          Submit
        </p>
      </div>
      <div class="bg-primary-dark w-[14px] h-[28px]"></div>
    </button>
  </div>
  <div style="width: calc(100% - 28px);" class="relative bg-background h-[14px] before:absolute before:-bottom-[14px] before:h-[14px] before:w-full before:bg-secondary"></div>

  <script>
    function previewThumbnail() {
      const preview = document.getElementById('thumbnail');
      const file = document.getElementById('image').files[0];
      const reader = new FileReader();

      reader.onloadend = function() {
        preview.src = reader.result;
      }

      file ? reader.readAsDataURL(file) : preview.src = "<?= site_url('asset/img/no-image.png') ?>"

    }
  </script>