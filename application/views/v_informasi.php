<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Informasi</title>
  </head>
  <body>
    <h1>Informasi</h1>
    <a href="<?php echo base_url('c_informasi/create/'); ?>">Post</a>
    <?php foreach ($posts as $post): ?>
      <h2><?php echo $post->judul; ?></h2>
      <a href="<?php echo base_url('c_informasi/delete/' . $post->id); ?>">Hapus</a>
      <a href="<?php echo base_url('c_informasi/edit/' . $post->id); ?>">Edit</a>
      <p><?php echo $post->deskripsi; ?></p>
    <?php endforeach; ?>
  </body>
</html>
