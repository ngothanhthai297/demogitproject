<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Management Page</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{route('user.login')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Banner
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('filemanager?type=image')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Media Manager</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('banner.index')}}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Banners</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Banner Options:</h6>
        <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
        <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Crypto
  </div>
  {{---------- Whitepapers ----}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
      <i class="fas fa-cubes"></i>
      <span>Whitepapers</span>
    </a>
    <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Whitepapers Options:</h6>
        <a class="collapse-item" href="{{route('whitepapers.index')}}">Whitepaper</a>
        <a class="collapse-item" href="{{route('whitepapers.create')}}">Add Whitepaper</a>
      </div>
    </div>
  </li>
  <!-- ICO -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('icos.index')}}" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
      <i class="fas fa-sitemap"></i>
      <span>ICO</span>
    </a>
    <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">ICO Options:</h6>
        <a class="collapse-item" href="{{route('icos.index')}}">ICO</a>
        <a class="collapse-item" href="{{route('icos.create')}}">Add ICO</a>
      </div>
    </div>
  </li>
 

  <!--Solutions -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('solution.index')}}">
      <i class="fas fa-hammer fa-chart-area"></i>
      <span>Solutions</span>
    </a>
  </li>

  <!-- Token sale -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('token.index')}}">
      <i class="fas fa-comments"></i>
      <span>Token sale</span></a>
  </li>
<!-- Read maps -->
<li class="nav-item">
    <a class="nav-link" href="{{route('roadmaps.index')}}">
      <i class="fas fa-map"></i>
      <span>Read maps</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    More
  </div>

  <!-- Apps -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('apps.index')}}" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
      <i class="fas fa-fw fa-folder"></i>
      <span>Apps</span>
    </a>
    <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Apps Options:</h6>
        <a class="collapse-item" href="{{route('apps.index')}}">App</a>
        <a class="collapse-item" href="{{route('apps.create')}}">Add App</a>
      </div>
    </div>
  </li>

  <!-- Teams -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('teams.index')}}" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
      <i class="fas fa-sitemap fa-folder"></i>
      <span>Teams</span>
    </a>
    <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Team Options:</h6>
        <a class="collapse-item" href="{{route('teams.index')}}">Team</a>
        <a class="collapse-item" href="{{route('teams.create')}}">Add Team</a>
      </div>
    </div>
  </li>

  <!-- Faq -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('fag.index')}}" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
      <i class="fas fa-tags fa-folder"></i>
      <span>Faq</span>
    </a>
    <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Faq Options:</h6>
        <a class="collapse-item" href="{{route('fag.index')}}">Faq</a>
        <a class="collapse-item" href="{{route('fag.create')}}">Add Faq</a>
      </div>
    </div>
  </li>

  <!-- Advisors -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('advisors.index')}}">
      <i class="fab fa-tripadvisor"></i>
      <span>Advisor</span>
    </a>
  </li>
    <!-- Quesition -->
    <li class="nav-item">
    <a class="nav-link" href="{{route('questions.index')}}">
      <i class="fas fa-question-circle"></i>
      <span>Question</span>
    </a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Heading -->
  <div class="sidebar-heading">
    General Settings
  </div>
  <li class="nav-item">
    <a class="nav-link" href="{{route('out.index')}}">
      <i class="fas fa-hourglass-half"></i>
      <span>Our Coin</span></a>
  </li>
  <!-- Catepory Quesion -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('category.index')}}">
      <i class="fas fa-book-open"></i>
      <span>Category Question</span></a>
  </li>
  <!-- Users -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('users.index')}}">
      <i class="fas fa-users"></i>
      <span>Users</span></a>
  </li>

  <!-- Contacts -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('contacts.index')}}">
    <i class="fas fa-comments fa-chart-area"></i>
      <span>Contacts</span></a>
  </li>

<!-- Token Distribution -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('distributions.index')}}">
      <i class="fas fa-flag"></i>
      <span>Token Distribution</span></a>
  </li>
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>