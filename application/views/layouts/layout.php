<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= isset($title) ? $title : "Galeri Figure"; ?>
  </title>
  <link href="<?= site_url("../asset/css/font.css") ?>" rel="stylesheet">
  <link href="<?= site_url("../asset/css/output.css") ?>" rel="stylesheet">
</head>

<body class="w-full relative bg-primary-light px-[14px]">
  <div class="sticky z-10 pt-[14px] bg-primary-light top-0 w-full">
    <div class="mx-auto mb-[28px] max-w-3xl flex flex-col items-center">
      <div style="width: calc(100% - 28px);" class="bg-background h-[14px]"></div>
      <nav class="px-[14px] flex justify-between items-center h-[56px] w-full bg-background relative before:absolute before:-bottom-[14px] before:left-0 before:h-[14px] before:w-full before:bg-secondary">
        <h2 class="font-display text-[42px] text-primary-dark -mb-1 ml-2"><?= isset($header) ? $header : "Galeri Figure ."; ?></h2>
        <?php
        if ($this->uri->segment(2) !== null) {
          $data['label'] = 'Back';
          $data['route'] = 'post/';
          $this->load->view('components/button', $data);
        } else {
          $data['label'] = 'Create';
          $data['route'] = 'post/create';
          $this->load->view('components/button', $data);
        }
        ?>
      </nav>
      <div style="width: calc(100% - 28px);" class="relative bg-background h-[14px] before:absolute before:-bottom-[14px] before:h-[14px] before:w-full before:bg-secondary"></div>
    </div>
  </div>
  <main class="mx-auto min-h-screen max-w-3xl">