<ul>
    <?php  foreach ($menu_list as $value): ?>
        <li> <a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a></li>
    <?php endforeach; ?>
</ul>