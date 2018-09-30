      </div><!-- /.row -->
    </div><!-- /. container-fluid  -->
  </main>

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <h5><?php echo $text_footer['h5'][0]; ?></h5>
              <ul>
                <?php $companies = $text_footer['Company']; ?>
                <?php foreach($companies as $item):?>
                <li><a href="<?php echo $item['link'];?>"><?php echo $item['title'];?></a></li>
                <?php endforeach;?>
              </ul>
              <h5><?php echo $text_footer['h5'][1]; ?></h5>
              <ul>
                <?php $adds = $text_footer['Corporate Office']; ?>
                <li><?php echo $adds['add']; ?>, <?php echo $adds['city']; ?></li>
                <li><?php echo $adds['province']; ?> <?php echo $adds['pcode']; ?></li>
                  <li>Toll Free <a href="tel:+<?php echo str_replace(array('-', ' '), '', $adds['phone']);?>"><?php echo $adds['phone']; ?></a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-5">
              <h5><?php echo $text_footer['h5'][2];?></h5>
              <ul>
                <?php $products = $text_footer['Product']; ?>
                <?php foreach($products as $item):?>
                  <li><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></li>
                <?php endforeach; ?>
              </ul>
              <div class="awards">
                <a href="https://www.capterra.com/reviews/175278/Applauz?utm_source=vendor&utm_medium=badge&utm_campaign=capterra_reviews_badge" target="_blank"><img src="https://assets.capterra.com/badge/5a419c82c7524d46bd045641e4dcc477.png?v=2121799&amp;p=175278" alt="Capterra Awards" /></a>
                <img src="<?php echo $baseUrl;?>assets/images/cvmag.png" alt="CV Magazine" />
                <img src="<?php echo $baseUrl;?>assets/images/temp/badge6.png" alt="Canada HR Award Winner for Best HR Software">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <h5><?php echo $text_footer['h5'][3];?></h5>
              <?php $engage = $text_footer['Engage']; ?>
              <p><?php echo $engage['p1'];?></p>
              <form action="/">
                <label><?php echo $engage['input_placeholder'];?></label>
                <input type="email" name="email" placeholder="<?php echo $engage['input_placeholder'];?>" />
                <input type="submit" name="subscribe" value="<?php echo $engage['btn'];?>" />
              </form>
              <p class="last"><?php echo $engage['p2'];?><a href="<?php echo $engage['link'];?>" target="_blank"><?php echo $engage['learn']; ?></a></p>
              <h6><?php echo $engage['copyright'];?></h6>
              <?php $badges = array('Secure SSL Encryption’s certification badge', '2017 Canadian Best Diversity Employer’s certification badge', 'PCI’s certification badge', '2017 PROFIT 500 Canada’s Fastest-Growing Companies’ certification badge', 'McAfee SECURE’s certification badge'); ?>
              <ul class="badges">
                <?php $j = 1; ?>
                <?php foreach($badges as $badge): ?>
                  <li><img src="<?php echo $baseUrl; ?>assets/images/temp/badge<?php echo $j;?>.png" alt="<?php echo $badge;?>"></li>
                <?php $j++;?>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </footer>
  <!--[if lt IE 9]>
  <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo $baseUrl; ?>assets/js/swiper.min.js"></script>
  <script src="<?php echo $baseUrl; ?>assets/js/script.js"></script>
</body>
</html>