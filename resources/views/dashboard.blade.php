@include('header')
<div class="section py-5 px-3">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-3">
                <a href="/movies" type="button" class="btn btn-primary">
                    Movies
                </a>
            </div>
            <div class="col-md-3">
                <a href="/places" type="button" class="btn btn-primary">
                    Places
                </a>
            </div>
            <div class="col-md-3">
                <a href="/cinemas" type="button" class="btn btn-primary">
                    Cinema
                </a>
            </div>
            <div class="col-md-3">
                <a href="/users" type="button" class="btn btn-primary">
                    Users
                </a>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-10 m-auto">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/iron-man-3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/avengers-endgame-banner.jpg" alt="Second slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.carousel').carousel({
  interval: 2000
})
</script>
@include('footer')
