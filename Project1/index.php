<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candy Shop</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-md
                            justify-content-start
                            bg-dark navbar-dark
                            col-12">
            <a href="#"> 𝓒𝓪𝓷𝓭𝔂 𝓢𝓱𝓸𝓹</a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./productDetails.php?id=3">Product Detail</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="carousel">
    <div class="carousel__item carousel__item--selected">Variety of Candy
        <section class = "carousel-screen">
            <img src="images/candy.jpeg" alt="candy">
        </section>
    </div>
    <div class="carousel__item">Chocolates
        <section class = "carousel-screen">
            <img src="images/chocolatecandy.jpeg" alt="candy">
        </section>
    </div>
    <div class="carousel__item">Other Types
        <section class = "carousel-screen">
            <img src="images/hardcandy.jpeg" alt="candy">
        </section>
    </div>
    <div class="carousel__actions">
        <button id="carousel__button-prev" aria-label="Previous Slide"><</button>
        <button id="carousel__button-next" aria-label="Next">></button>
    </div>
</div>
<script src="index.js"></script>
<h2>Welcome to the Candy Shop!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, inventore ipsum. A at culpa cum earum iure
    magnam perferendis reprehenderit sapiente unde! Distinctio esse iste reiciendis saepe sed sequi ut?</p>
<p>Adipisci architecto, commodi consequatur cumque dicta dignissimos doloribus et explicabo fugit impedit in iure
    maiores maxime molestias nulla odit officia qui quia quisquam, quos rem sit, sunt voluptas voluptatem
    voluptatibus?</p>
<p>Dolor dolorum maxime, quod repellat sequi velit. Architecto corporis nisi odio officiis, omnis voluptas. Aliquam
    aspernatur atque debitis ea ipsum maxime natus numquam officia, perspiciatis reiciendis unde vel? Earum,
    itaque!</p>
<p>Accusamus ad alias amet aspernatur delectus ea odit sapiente sint sit totam! Asperiores atque commodi, cum enim
    esse fugit in magnam modi molestiae, nobis quae, quaerat quis ratione vel voluptas?</p>
<p>Aspernatur distinctio enim error molestias natus nesciunt nostrum obcaecati quis! Accusamus ad consectetur dolor
    eum expedita facere illum libero molestias, neque non pariatur perferendis possimus quod, repellat velit
    voluptas voluptates?</p>
<p>Dicta, dolores et iusto nihil quia sit. Consectetur corporis eius natus porro repellat repellendus, sed
    voluptatum? Accusantium adipisci cum ducimus eius eligendi, exercitationem in magni modi odit quasi sed
    vero.</p>
<p>A architecto cum laboriosam placeat, recusandae rem suscipit voluptas voluptates. Amet dolores eligendi
    exercitationem expedita, facere harum hic illum laudantium necessitatibus nulla officia quidem quod repudiandae
    rerum similique temporibus tenetur.</p>
</body>
<footer class="footer page-footer font-small">
    <div class="container">
        <div class="row">
            <span class="text-muted">&copy; Pavisha Amin, Tejkumar Patel, Hassan Khalid, 2022 | Terms of Use | Privacy Statement</span>
        </div>
    </div>
</footer>