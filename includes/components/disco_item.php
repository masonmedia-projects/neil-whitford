<ul class="list-unstyled w-100 border-top border-light py-2">
    <li class="display-4 font-weight-bold text-lowercase">
        <?php echo $artist; ?> <span>&#10095;</span>
        <?php echo $album; ?> <span">&#10095;</span>
        <?php echo $year; ?>
    </li>
    <li class="h5">
        <?php echo $credits; ?>
    </li>
    <a href="<?php echo $link; ?>" target="_blank">
        <button class="btn btn-outline-light mt-2 font-weight-bold">Hear more</button>
    </a>
</ul>
