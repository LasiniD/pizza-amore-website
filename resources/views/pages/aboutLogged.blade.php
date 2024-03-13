@extends('layouts.mainlayout2')

@section('content')

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="assets/images/hero-bg.png" alt="">
      </div>
    </div>


  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
            More than just delicious
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="assets/images/about.jpeg" alt="Couldn't load image">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
                Pizza Amore: Where Passion Meets Dough
            </h3>
            <p>
                Made with passion: We pour our hearts (and a generous amount of mozzarella) into every pizza.
                Fresh, never frozen: We source the finest ingredients, ensuring peak flavor and quality.
                Hand-crafted with care: No conveyor belts here! Our pizzas are born from tradition and a love for the art of dough.
                Uniquely yours: Customize your pizza to your heart's content with a wide variety of toppings.
            </p>
            <p>
                But Pizza Amore is more than just pizzas. We offer a warm and inviting atmosphere, perfect for gathering with friends and family. Whether you're enjoying a romantic date night, a lively birthday celebration, or a casual get-together, we're your go-to spot for creating unforgettable memories</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- jQery -->
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

@endsection
