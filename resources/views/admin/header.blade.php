<header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Accoutancy Review</strong><strong>Management System</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">AR</strong><strong>MS</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>

        {{-- <!-- Sidebar Header-->
        <div class="header d-flex align-items-center justify-content-end">
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
            <div class="avatar">
                <!-- Adjust the width and height attributes below to resize the image -->
                <img src="{{asset('/admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle" width="50" height="50">
            </div>
        </div> --}}


            <!-- Log out -->
            <div class="list-inline-item logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout">
                </form>

            </div>
        </div>
      </div>
    </nav>
  </header>

