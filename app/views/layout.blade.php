<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('html_title') - UP AME Shortlinker</title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <script src="/js/modernizr.js"></script>
  </head>
  <body>
  
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="/admin/">UP AME Shortlink System</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="/admin/view">View All</a></li>
      <li><a href="/admin/add">Create</a></li>
      <li class="has-dropdown">
        <a href="#">Account</a>
        <ul class="dropdown">
          <li><a href="#">Settings</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
    </ul>
  </section>
</nav>

@if (isset($html_flash_success))
<div data-alert class="alert-box success radius">
  {{ $html_flash_success }}
  <a href="#" class="close">&times;</a>
</div>
@endif

@if (isset($html_flash_info))
<div data-alert class="alert-box info radius">
  {{ $html_flash_info }}
  <a href="#" class="close">&times;</a>
</div>
@endif

@if (isset($html_flash_warning))
<div data-alert class="alert-box warning radius">
  {{ $html_flash_warning }}
  <a href="#" class="close">&times;</a>
</div>
@endif

	@yield('content')
        
    <script src="/js/jquery.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


</html>
