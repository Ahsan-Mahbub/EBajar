<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Bajar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  @include('Frontend.Layouts.frontend_css')
</head>
<body>
  @include('Frontend.Layouts.nav')
  @include('Frontend.Layouts.hero')

<main id="main">

  @include('Frontend.pages.about')
  @include('Frontend.pages.services')
  @include('Frontend.pages.features')
  @include('Frontend.pages.portfolio')
  @include('Frontend.pages.pricing')
  @include('Frontend.pages.team')
  @include('Frontend.pages.contact')
 
</main><!-- End #main -->
  @include('Frontend.Layouts.footer')
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  @include('Frontend.Layouts.frontend_js')

</body>

</html>