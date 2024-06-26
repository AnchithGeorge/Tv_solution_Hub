<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="#"></i>Tv Solution Hub</h2>                
    </a> 
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="service.php" class="nav-item nav-link">Services</a>
            <a href="items.php" class="nav-item nav-link">Items</a>
            <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
            <?php
                if(isset($_SESSION['customer_id']))
                {
                    ?>
                        <a href="cart.php" class="nav-item nav-link">Cart</a>
                        <a href="favourites.php" class="nav-item nav-link">Favourites</a>
                    <?php
                }
            ?>
        </div>
        <?php
            if(isset($_SESSION['customer_id']))
            {
                ?>
                    <a href="./customer/home.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">My Account<i class="fa fa-arrow-right ms-3"></i></a>
                <?php
            }
            else
            {
                ?>
                    <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
                <?php
            }
        ?>
        
    </div>
</nav>