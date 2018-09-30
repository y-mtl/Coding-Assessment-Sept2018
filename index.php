<?php include_once 'includes/header.php'; ?>
        <div class="container">
          <div class="row">
            <div class="banner">
              <div class="catch col-xs-12 col-sm-6">
                <?php $banner = $text_main['banner'];?>
                <div class="msg1">
                  <h2><?php echo $banner['h2a'];?><br><?php echo $banner['h2b']; ?></h2>
                  <h3><?php echo $banner['h3a'];?><br><?php echo $banner['h3b']; ?></h3>
                  <a href="https://app.applauzrecognition.com/manager/account/register"><?php echo $banner['btn1'];?></a>
                </div>
                <div class="msg2">
                  <p class="title"><?php echo $banner['p-title'];?></p>
                  <p><?php echo $banner['p1'];?><br><?php echo $banner['p2'];?></p>
                  <a href="https://app.applauzrecognition.com/manager/account/register"><?php echo $banner['btn2'];?></a>
                </div>
              </div>
              <div class="screens col-xs-12 col-sm-6">
                <img src="<?php echo $baseUrl;?>assets/images/computer.png" alt="Computer for Applauz Recognition Program" />
                <div class="slider">
                  <img src="<?php echo $baseUrl;?>assets/images/engagement.jpg" alt="Engagement Dashboard of the Applauz Recognition Application" />
                  <img src="<?php echo $baseUrl;?>assets/images/newsfeed.jpg" alt="Newsfeed of the Applauz Recognition Application" />
                  <div class="shadow"></div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
        <section class="workplace">
          <div class="top effect col-xs-12">
            <?php $section1 = $text_main['section1'];?>
            <h3 class="effect-elem"><?php echo $section1['h3'];?></h3>
            <p class="effect-elem"><?php echo $section1['p'];?></p>
          </div><!-- /.top -->
          <div class="contents effect col-xs-12">
            <div class="row">
              <div class="container">
                <div class="row">
                <?php foreach($section1['contents'] as $key => $item):?>
                  <div class="col-xs-12 col-sm-6 <?php echo ($key != 0 ) ? 'effect-to-left' : 'effect-to-right'; ?>">
                    <div class="split-block">
                      <h4><?php echo $item['title'];?></h4>
                      <p><?php echo $item['p'];?></p>
                      <a href="<?php echo $item['link'];?>"><?php echo $item['btn'];?></a>
                      <?php if($key == 0) :?>
                      <img src="<?php echo $baseUrl;?>assets/images/feature-human1.png" alt="Employee Recognition Specialist welcoming a customer" />
                      <img src="<?php echo $baseUrl;?>assets/images/feature-human2.png"  alt="Business Owner meeting an Employee Recognition Specialist" />
                      <?php else: ?>
                      <img src="<?php echo $baseUrl;?>assets/images/feature-human3.png" alt="Happy engaged employee jumping in the air" />
                      <img  src="<?php echo $baseUrl;?>assets/images/feature-human4.png" alt="Happy engaged employee celebrating" />
                      <?php endif;?>
                    </div>
                  </div>
                <?php endforeach;?>
              </div>
              </div>
            </div>
          </div><!-- /.contents -->
        </section>
        <!--section of engagement -->
        <section>
          <div class="top effect col-xs-12">
            <?php $section2 = $text_main['section2'];?>
            <h3 class="effect-elem"><?php echo $section2['h3'];?></h3>
            <p class="effect-elem"><?php echo $section2['p'];?></p>
          </div><!-- /.top -->
          <div class="contents engagement col-xs-12">
            <div class="container">
              <?php $i = 1;?>
              <?php foreach($section2['contents'] as $item):?>
              <div class="row effect">
                <div class="col-xs-12 col-sm-6<?php echo ($i == 2) ? ' col-sm-push-6 effect-to-left' : ' effect-to-right' ;?>">
                  <h4><span><?php echo $i; ?></span><?php echo $item['title'];?></h4>
                  <p><?php echo $item['p'];?></p>
                </div>
                <img class="col-xs-12<?php echo ($i ==2) ? ' col-sm-pull-6 img-l effect-to-left' : ' effect-to-right' ; ?>" src="<?php echo $baseUrl;?>assets/images/temp/step-image<?php echo $i;?>.png" alt="Applauz Recognition’s platform" />
              </div>
              <?php $i++;?>
              <?php endforeach; ?>
            </div><!-- /.container -->
          </div><!-- /.contents -->
        </section>
        <div class="links effect">
          <a href="<?php echo $text_main['links1']['link'];?>"><span class="effect-to-right"><?php echo $text_main['links1']['title'];?><span class="arrow"><span class="arrow-secondary"></span></span></span></a>
          <a href="<?php echo $text_main['links2']['link'];?>"><span class="effect-to-right"><?php echo $text_main['links2']['title'];?><span class="arrow-white"><span class="arrow-white-secondary"></span></span></span></a>
        </div>
        <section>
          <div class="container">
            <div class="row">
              <div id="testimonials" class="effect col-xs-12">
                <?php $section3 = $text_main['section3'];?>
                <h3 class="effect-elem"><?php echo $section3['h3'];?></h3>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php foreach($section3['testimonials'] as $testimonial):?>
                      <div class="swiper-slide">
                        <img src="<?php echo $baseUrl;?>assets/images/temp/<?php echo $testimonial['img'];?>" alt="testimonial from <?php $testimonial['author'] ;?>" />
                        <div class="testimonial-content">
                          <p><?php echo $testimonial['content'];?></p>
                          <p class="author"><small><?php echo $testimonial['author'];?></small></p>
                        </div>
                       </div>
                    <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row">
              <div class="partners effect col-xs-12">
                <?php $section4 = $text_main['section4'];?>
                <h3 class="effect-to-bottom"><?php echo $section4['h3']; ?></h3>
                <ul class="effect-to-top">
                <?php $partner_logos = array('Birks', 'Brad', 'Confort_Expert_Inc', 'GameAccess', 'GuestTek', 'GuillevinInternational', 'ia', 'Maison_Usinees_Cote', 'Plitron', 'Richter', 'thinking-capital', 'profit_club' ); ?>
                <?php sort($partner_logos); ?>
                <?php foreach($partner_logos as $partner): ?>
                  <li><img src="assets/images/temp/partner-logos/<?php echo $partner; ?>.<?php echo ($partner !== 'profit_club') ? 'jpg' : 'png';?>" alt="<?php echo str_replace(array('_', '-'), ' ', $partner) ;?><?php echo (substr($partner, -1) !== 's') ? '\'s' : '\''; ?> logo" /></li>
                <?php endforeach;?>
                </ul>
              </div>
            </div>
          </div>
        </section>
<?php include_once 'includes/footer.php'; ?>