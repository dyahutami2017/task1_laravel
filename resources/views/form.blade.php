<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Promo Privatq</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  </head>
  <body>
    <div class="FormField">
      <h1>Isi Form Berikut</h1>
      <form action="/store" method="post">
      {{csrf_field()}}
        <input type="text" name="nama" placeholder="Nama Lengkap"/>
        <input type="email" name="email" placeholder="Email"/>
        <input type="tel" name="telepon" placeholder="Nomor HP"/>
        <br>
        <input class="FormField__Button" type="submit" name="" value="Kirim">

    </div>
  </body>
</html>
