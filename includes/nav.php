          <nav>
            <ul<?php echo ($language === 'fr') ? ' class="fr"' : ''; ?>>
              <?php foreach($text_nav as $nav_item):?>
                <li>
                  <a <?php echo ($nav_item['title'] === 'Get Started' || $nav_item['title'] === 'Démarrer') ? 'class="btn"' : ''; ?> href="<?php echo $nav_item['link'];?>"><?php echo $nav_item['title'];?></a>
                </li>
              <?php endforeach; ?>
              <li class="switch">
                <a <?php echo ($language === 'en') ? 'class="active"' : ''; ?> href="<?php echo $baseUrl?>">en</a>
                <a <?php echo ($language === 'fr') ? 'class="active"' : ''; ?> href="<?php echo $baseUrl?>?lang=fr">fr</a>
              </li>
            </ul>
          </nav>