<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Walknesia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


  <!-- Owl Carousel Assets -->
  <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('./css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Prettify -->



</head>

<body>
    

@yield('container')

  <!-- Footer -->
  <footer class="   text-center " style="margin-top:50px; background-color: #f7f7f7;">
    <!-- Grid container -->
    <div class="container p-4">
      <center>
        <h5>Ikuti Kami</h5>
      </center>
      <!-- Section: Social media -->
      <section class="mb-4 mt-4">
        <!-- Facebook -->
        <a class="btn text-light rounded-circle btn-floating m-1" style="background-color: #3b5998" href="#!"
          role="button"><i class="bi bi-facebook"></i></a>

        <!-- Twitter -->
        <a class="btn text-light rounded-circle btn-floating m-1" style="background-color: #55acee" href="#!"
          role="button"><i class="bi bi-twitter"></i></a>

        <!-- Google -->
        <a class="btn text-light rounded-circle btn-floating m-1" style="background-color: #39dd41" href="#!"
          role="button"><i class="bi bi-whatsapp"></i></a>

        <!-- Instagram -->
        <a class="btn text-light rounded-circle btn-floating m-1" style="background-color: #ac2bac" href="#!"
          role="button"><i class="bi bi-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn text-light rounded-circle btn-floating m-1" style="background-color: #0082ca" href="#!"
          role="button"><i class="bi bi-linkedin"></i></a>
        <!-- Github -->
        <a class="btn text-light rounded-circle btn-floating m-1" style="background-color: #333333" href="#!"
          role="button"><i class="bi bi-tiktok"></i></a>
      </section>
      <!-- Section: Social media -->





      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
          distinctio earum repellat quaerat voluptatibus placeat nam,
          commodi optio pariatur est quia magnam eum harum corrupti dicta,
          aliquam sequi voluptate quas.
        </p>
      </section>
      <!-- Section: Text -->



      <!-- Copyright -->
      <div class="text-center p-3">
        © 2023 Copyright:
        <a class="text-dark" href="">@mreza</a>
      </div>
      <!-- Copyright -->

  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
})
  </script>



</body>

</html>