<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>NACS App Store</title>
    {{ Asset::styles() }}
    {{ Asset::scripts() }}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NACS App Store">
    <meta name="author" content="technology@napoleonareaschools.org">
   </head>
<body>
     <div class="container">
     	@yield('content')
     </div> <!-- /container -->
</body>
</html>