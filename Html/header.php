        <header class='navbar has-background-white-ter'>
            <nav class="container" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <i class="fas fa-home">Home</i>   
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <?php
                
                    if(isset($_SESSION['login']))
                    {
                        include('nav-header.php');
                    }
                
                ?>
            </nav>
        </header>