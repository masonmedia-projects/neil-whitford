<ul id="disco_item" class="list-unstyled w-100 border-top border-light py-2">
    <li class="display-4 font-weight-bold text-lowercase mt-2">
        <?php echo $artist; ?> <span>&#10095;</span>
        <span class="text-success"><?php echo $album; ?></span> <span>&#10095;</span>
        <?php echo $year; ?>
    </li>
    <li class="h5 my-3">
        <?php echo $credits; ?>
    </li>
    <a 
    class="<? echo $linkClass; ?>"
    href="<?php echo $link; ?>" 
    target="_blank">
        <button class="btn btn-outline-light mt-1 font-weight-bold">Hear more</button>
    </a>
</ul>
