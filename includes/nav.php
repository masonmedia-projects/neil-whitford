<nav 
id="<?php echo $navId; ?>"
class="navbar navbar-expand-lg fixed-top transition-fadeInDown <?php echo $navClass; ?>">
    <a class="navbar-brand" href="/">
        <span class="text-success <?php echo $logoClass; ?>">n</span>w
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>		
    </button>
    <div class="collapse navbar-collapse" id="navbarDark">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/guitarist.php">Guitarist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/producer.php">Producer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/educator.php">Educator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/discography.php">Discography</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mailto:neil@neilwhitford.com">Contact</a>
            </li>
        </ul>
    </div>
</nav>