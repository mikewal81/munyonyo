<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav">
        <li>
            <a class="nav-link <?php if($_SESSION['category'] == 'home'){ echo 'active'; } ?>" href="../home.php">
                Home
            </a>
        </li>
        <li class="dropdown dropdown-full-color dropdown-primary <?php if($_SESSION['category'] == 'about'){ echo 'active'; } ?>">
            <a class="dropdown-item dropdown-toggle " href="#">
                About Us
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="../who.php">Who We Are</a>
                </li>
                <li>
                    <a class="dropdown-item" href="../anthem.php">Anthem</a>
                </li>
                <li>
                    <a class="dropdown-item" href="../exec.php">Executive Committee</a>
                </li>
            </ul>
        </li>
        <li class="dropdown dropdown-full-color dropdown-primary  <?php if($_SESSION['category'] == 'members'){ echo 'active'; } ?>">
            <a class="dropdown-item dropdown-toggle " href="#">
                Choir Members
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="../users.php">All</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-link <?php if($_SESSION['category'] == 'events'){ echo 'active'; } ?>" href="../events.php">
                Events
            </a>
        </li>
        <li>
            <a class="nav-link <?php if($_SESSION['category'] == 'gallery'){ echo 'active'; } ?>" href="../gallery.php">
                Gallery
            </a>
        </li>
    </ul>
</nav>