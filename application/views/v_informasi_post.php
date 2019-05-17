<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Informasi</title>
  </head>
  <body>
    <h1>Tulis Artikel Baru</h1>
    <form action="<?php echo base_url('c_informasi/post'); ?>" method="post">
      <label>
        Judul: <input type="text" name="judul" autofocus 
        value="<?php ?>">
      </label>
      <br>
      <label>
        Deskripsi:<br>
        <textarea name="deskripsi"></textarea>
      </label>
      <br>
      <input type="submit" value="Simpan">
    </form>
  </body>
</html>
