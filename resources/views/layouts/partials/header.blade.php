<header id="header-nav">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/logo.png') }}" alt="logo" width="100" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll active   " href="#home">Home <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#product">Partnership Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('image/a.jpg') }}" class="d-block w-100 h-45" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="carousel-description">
                    <h5 class="animated bounceInRight">First slide label</h5>
                    <p class="animated bounceInLeft">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>

          </div>
          <div class="carousel-item">

            <img src="{{ asset('image/b.jpg') }}" class="d-block w-100 h-45" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="animated bounceInRight">Second slide label</h5>
              <p class="animated bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/c.jpg') }}" class="d-block w-100 h-45" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="animated bounceInRight">Third slide label</h5>
              <p class="animated bounceInLeft">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/d.jpg') }}" class="d-block w-100 h-45" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="animated bounceInRight">Third slide label</h5>
              <p class="animated bounceInLeft">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</header>
