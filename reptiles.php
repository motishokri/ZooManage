
<html>
<head>
  <link rel="stylesheet" type="text/css" href="animals.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
     <div class="container-fluid">
       <a class="navbar-brand" href="http://127.0.0.1/ZooManage/">Home</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">Gallery</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Animals
           </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="mammals.php">MAMMALS</a></li>
			<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="reptiles.php">REPTILES</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="birds.php">BIRDS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">ContactUs</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</nav>
<section class="bg-gray p-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 text-center mt-4">
                <h2 class="text-left lined">Reptiles</h2>
                <div class="row justify-content-left mt-4">
				        <div class="col-xs-6 col-sm-6 col-md-4 col-xl-3 my-2">
                            <a href="#" class="product-class-link">
                                <div class="card product-card">
                                    <img src="img/iguana.jpg" alt="" class="card-img-top animal-image-style">
                                    <div class="card-body pt-2">
                                        <hr class="mt-0">
                                        <h5 class="card-title font-weight-bold color-header">Green Iguana</h5>
                                        <p class="card-text">Species name: Iguana Delicatissima </p>
										<p class="card-text">Amount Of Food:  1 full pinch per 2 pounds weight twice weekly </p>
                                    </div>
                                    <div class="card-footer text-muted card-footer-address">
                                        <div class="d-flex justify-content-between">
                                            <span>4 kg</span>
                                            <span>DOB 2020-04-02</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-xl-3 my-2">
                            <a href="#" class="product-class-link">
                                <div class="card product-card">
                                    <img src="img/snake.jfif" alt="" class="card-img-top animal-image-style">
                                    <div class="card-body pt-2">
                                        <hr class="mt-0">
                                        <h5 class="card-title font-weight-bold color-header">Snake</h5>
                                        <p class="card-text">Species name: Hermit the Snake </p>
										<p class="card-text">Amount Of Food: Eating one meal a day </p>
                                    </div>
                                    <div class="card-footer text-muted card-footer-address">
                                        <div class="d-flex justify-content-between">
                                            <span>3 kg</span>
                                            <span>DOB 2021-04-01</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 
						<div class="col-xs-6 col-sm-6 col-md-4 col-xl-3 my-2">
                            <a href="#" class="product-class-link">
                                <div class="card product-card">
                                    <img src="img/frog.jpg" alt="" class="card-img-top animal-image-style">
                                    <div class="card-body pt-2">
                                        <hr class="mt-0">
                                        <h5 class="card-title font-weight-bold color-header">Frog</h5>
                                        <p class="card-text">Species name: Green Tree Frog </p>
										<p class="card-text">Dietary Requirements: three or four insects per feeding </p>
                                    </div>
                                    <div class="card-footer text-muted card-footer-address">
                                        <div class="d-flex justify-content-between">
                                            <span> 22 g</span>
                                            <span>DOB 2022-02-11</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>