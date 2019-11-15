<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <!-- Nav tabs -->
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a class="navbar-brand text-light" href="#">Carousel</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-white-50" href="#">Link</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- carousel-->
    <div id="carouselId" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="tải xuống.jpg" alt="First slide" width="100%">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h3>Example headline.</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a href="#" class="btn btn-primary">Sign up today</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./tải xuống.jpg" alt="Second slide" width="100%">
                <div class="carousel-caption d-none d-md-block text-center">
                    <h3>Another example headline.</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./tải xuống.jpg" alt="Third slide" width="100%">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h3>One more for good measure.</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                        </p>
                    <a href="#" class="btn btn-primary">Browse gallery</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- #region -->
    <div class="container my-5">
        <div class="row text-center ">
            
                <div class=" col-12 col-md-4 ">
                    <img src="./carou.png" alt="" class="rounded-circle" width="140px" height="140px">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
                        </p>
                    <a href="#" class="btn btn-secondary"> View detail</a>
                </div>
                <div class="col-12 col-md-4">
                    <img src="./carou.png" alt="" class="rounded-circle" width="140px" height="140px">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
                        </p>
                        <a href="#" class="btn btn-secondary"> View detail</a>
                </div>
                <div class="col-12 col-md-4 ">
                    <img src="./carou.png" alt="" class="rounded-circle" width="140px" height="140px">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <a href="#" class="btn btn-secondary"> View detail</a>
                </div>
           
        </div>
        
    </div>
    <hr>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-7 mt-5">
                <p class="h1 ">First featurette heading. It’ll blow your mind.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-12 col-md-5">
                <img src="./carou.png" alt="" width="500px" height="500" >

                
            </div>
        </div>
    </div>

    <div class="container my-5">
            <div class="row">
                
                <div class="col-12 col-md-7 order-md-2 text-right">
                        <h1>Oh yeah, it’s that good. <br>
                        <span class="text-muted">See for yourself.</span>
                        </h1>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
            
            <div class="col-12 col-md-5 order-md-1">
                    <img src="./carou.png" alt="" width="500px" height="500" >

    
                    
                </div>
            </div>
    </div>
    <!-- #region -->
    <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-7 mt-5">
                    <p class="h1 ">First featurette heading. It’ll blow your mind.</p>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-12 col-md-5">
                    <img src="./carou.png" alt="" width="500px" height="500" >
    
                    
                </div>
            </div>
        </div>
    <!-- #region -->
    <hr>
    <footer class="container">
        <p>© 2017-2019 Company, Inc. ·<a href=""> Privacy</a> · <a href=""> Terms </a></p>
        <a href="#" class="float-right">Back to top</a>
    </footer>
    


    <!-- Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>