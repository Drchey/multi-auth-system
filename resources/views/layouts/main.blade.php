
<!doctype html>
<html lang="en">

  @include('layouts.partials._head')

  <body>

   @include('layouts.partials._nav')

   



<div class="container-fluid">
  <div class="row">
    
   @include('layouts.partials._sidenav')

   @include('layouts.partials._alerts')


   @yield('content')

   
   
  </div>
</div>



   @include('layouts.partials._script')
</body>
</html>
