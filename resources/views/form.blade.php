<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Promo Privatq</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">   
  </head>
  <body>
<div class="logo"></div>
    <div class="FormField">
      <h1>Isian Form</h1>
      <form action="/store" method="post">
      {{csrf_field()}}
        <input type="text" required="required" name="nama" placeholder="Nama Lengkap"/>
        <input type="email" required="required" name="email" placeholder="Email"/>
        <input type="tel" required="required" name="telepon" placeholder="Nomor HP"/>
        <br>
        <input class="FormField__Button" type="submit" name="" value="Kirim">
        
      </div>
      
    
  </body>
  
</html>
