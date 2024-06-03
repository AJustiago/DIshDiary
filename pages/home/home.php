<?php include '../../components/header/header.php'; ?>
<div class="py-5 mx-5">
        <h1 class="text-center mb-5">Popular Dishes</h1>

        <div class="row row-cols-1 row-cols-md-4 g-4">

            <div class="col">
                <div class="card">
                    <div class="card-img-top-wrapper">
                        <img src="../../assets/img/Nasgor.jpg" class="card-img-top" alt="...">
                        <i class="fa-regular fa-heart fav-icon"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 justify-content-between">                            
                            <h5 class="card-title ml-2">MAKANAN 1</h5>
                            <span class="label label-info bg-success">Beginner</span>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit molestias dolores sequi a unde obcaecati repellendus impedit veritatis.</p>
                    </div>
                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-primary">View Recipe</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-img-top-wrapper">
                        <img src="../../assets/img/Nasgor.jpg" class="card-img-top" alt="...">
                        <i class="fa-regular fa-heart fav-icon"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 justify-content-between">                            
                            <h5 class="card-title ml-2">MAKANAN 2</h5>
                            <span class="label label-info bg-warning">Intermediate</span>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit molestias dolores sequi a unde obcaecati repellendus impedit veritatis.</p>
                    </div>
                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-primary">View Recipe</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-img-top-wrapper">
                        <img src="../../assets/img/Nasgor.jpg" class="card-img-top" alt="...">
                        <i class="fa-regular fa-heart fav-icon"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 justify-content-between">                            
                            <h5 class="card-title ml-2">MAKANAN 3</h5>
                            <span class="label label-info bg-danger">Advanced</span>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit molestias dolores sequi a unde obcaecati repellendus impedit veritatis.</p>
                    </div>
                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-primary">View Recipe</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-img-top-wrapper">
                        <img src="../../assets/img/Nasgor.jpg" class="card-img-top" alt="...">
                        <i class="fa-regular fa-heart fav-icon"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 justify-content-between">                            
                            <h5 class="card-title ml-2">MAKANAN 4</h5>
                            <span class="label label-info bg-success">Beginner</span>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit molestias dolores sequi a unde obcaecati repellendus impedit veritatis.</p>
                    </div>
                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-primary">View Recipe</button>
                    </div>
                </div>
            </div>           
        </div>
    </div>

    <!-- Bootstrap 5 Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        document.querySelectorAll('.fav-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                this.classList.toggle('fa-regular');
                this.classList.toggle('fa-solid');
                this.classList.toggle('favorited');
            });
        });
    </script>
<?php include '../../components/footer/footer.php'; ?>