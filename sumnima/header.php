<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <title>Skin Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
    <header class="custom-container-width sticky-top" id="header">
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navv"> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navv">

      <div class="container-fluid">
      <a class="navbar-brand logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Sumnima Herbal Logo.png" alt="" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active text-success" aria-current="page" href="<?php echo site_url(''); ?>" 
               <?php if(is_front_page()) echo 'class="active"'?>>Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('/about'); ?>" 
              <?php if(is_page('about')) echo 'class="active"'?>
              >About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('/products'); ?>"
               <?php if(get_post_type() == 'post') echo 'class="active"'?>
                 >product</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="#">Distributor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"> Dealership</a>
            </li>
          </ul>
          <form class="d-flex forms" role="search">
            <input class="form-control me-2" type="search" placeholder="Search product" aria-label="Search">
            <button class="btn btn-success btn-outline-success text-white" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    </header>