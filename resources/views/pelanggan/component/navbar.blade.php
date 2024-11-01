<nav class="navbar navbar-expand-lg" style="background-color: #66b39c">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/brandblack.png') }}" alt="TokoBaju Logo" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
      <ul class="navbar-nav gap-1">
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold {{ Request::path() == 'shop' ? 'active' : '' }}" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold {{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact">Profile</a>
        </li>
      </ul>
      <div class="d-flex gap-4 align-items-center">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Login | Register</button>
        <div class="notif">
          <a href="/transaksi" class="fs-5 icon-nav">
            <i class="fa-solid fa-bag-shopping"></i>
          </a>
          <div class="circle">10</div>
        </div>
      </div>
    </div>
  </div>
</nav>
