@extends('layouts.mainlayout2')

@section('content')

<body class="sub_page">

  <div class="menu_area">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
  <!-- service section -->

  <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Sizes</th>
        <th>Price</th>
        <th>Order</th>
      </tr>
    </thead>
    <tbody>

@foreach ($menus as $menus)

      <tr>
        <td>
          <div class="d-flex align-items-center">

            <div class="ms-3">
              <p class="fw-bold mb-1">{{ $menus->name }}</p>

            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">{{ $menus->description }}</p>

        </td>
        <td>
          <span class="badge badge-primary rounded-pill d-inline">{{ $menus->size }}</span>
        </td>
        <td>{{ $menus->price }}</td>
        <td>
            <p class="btn-holder"><a href="{{ route('addItem.to.cart',$menus->id) }}" class="btn btn-outline-danger">Add</a></p>
        </td>
      </tr>

@endforeach
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <!--<img
                src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                class="rounded-circle"
                alt=""
                style="width: 45px; height: 45px"
                />-->
            <div class="ms-3">
              <p class="fw-bold mb-1">Amore' Cheesy Agilo</p>
              <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Creamy garlic, fresh parsely, italian herbs, olive oil and Mozzarella cheese</p>
          <!--<p class="text-muted mb-0">Finance</p>-->
        </td>
        <td>
          <!--<span class="badge badge-success rounded-pill d-inline">L</span>-->
          <span class="badge badge-primary rounded-pill d-inline">L</span>
        </td>
        <td>2000 LKR</td>
        <td>
          <button
                  type="button"
                  class="btn btn-link btn-rounded btn-sm fw-bold"
                  data-mdb-ripple-color="dark"
                  >
            Add
          </button>
        </td>
      </tr>


      <!--<tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                class="rounded-circle"
                alt=""
                style="width: 45px; height: 45px"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">Kate Hunington</p>
              <p class="text-muted mb-0">kate.hunington@gmail.com</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Designer</p>
          <p class="text-muted mb-0">UI/UX</p>
        </td>
        <td>
          <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
        </td>
        <td>Senior</td>
        <td>
          <button
                  type="button"
                  class="btn btn-link btn-rounded btn-sm fw-bold"
                  data-mdb-ripple-color="dark"
                  >
            Edit
          </button>
        </td>
      </tr>-->
    </tbody>
  </table>

</div>

  <!-- end service section -->


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
