<?php
// echo "<pre>";
// print_r($services[0]);
// echo "</pre>";
// die();
?>
<!-- Welcome & Services -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-6b127a43 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6b127a43" data-element_type="section">
  <div class="elementor-container elementor-column-gap-default" style="max-width: 100%;">
    <div class="elementor-row">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4d39b4e5" data-id="4d39b4e5" data-element_type="column">
        <div class="elementor-column-wrap elementor-element-populated">
          <div class="elementor-widget-wrap">
            <div class="elementor-element elementor-element-550f2a71 elementor-widget elementor-widget-spacer" data-id="550f2a71" data-element_type="widget" data-widget_type="spacer.default">
              <div class="elementor-widget-container">
                <div class="elementor-spacer">
                  <div class="elementor-spacer-inner"></div>
                </div>
              </div>
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3882ee74 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3882ee74" data-element_type="section">
              <div class="elementor-container elementor-column-gap-wide">
                <div class="elementor-row">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bbed801" data-id="bbed801" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-4ada2a05 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title" data-id="4ada2a05" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="houzez_elementor_section_title.default">
                          <div class="elementor-widget-container">
                            <div class="houzez_section_title_wrap section-title-module">
                              <h2 class="houzez_section_title">Welcome To HomeSphere </h2>

                              <p class="houzez_section_subtitle">Explore the Real Estate </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <?php if (valArr($services)) { ?>
              <section class="elementor-section elementor-inner-section elementor-element elementor-element-14bcfe0e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="14bcfe0e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-wide" style="max-width: 100%;">
                  <div class="elementor-row">
                    <?php foreach ($services as $index => $service) { ?>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-684c88f6" data-id="684c88f6" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                          <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-3b75018d animated-slow elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="3b75018d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image-box.default" style="height: 100%;">
                              <div class="elementor-widget-container" style="height: 100%;">
                                <div class="elementor-image-box-wrapper">
                                  <figure class="elementor-image-box-img"><img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="<?php echo base_url($service->psr_src); ?>" class="houzez-lazyload elementor-animation-shrink attachment-houzez-item-image-1 size-houzez-item-image-1" alt="" loading="lazy" srcset="" data-srcset="<?php echo base_url($service->psr_srcset); ?>" sizes="(max-width: 592px) 100vw, 592px" /></figure>
                                  <div class="elementor-image-box-content">
                                    <h3 class="elementor-image-box-title"><?php echo $service->psr_title; ?> </h3><br>
                                    <p class="elementor-image-box-description"><?php echo $service->psr_desc; ?></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php /*
                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4283de9" data-id="4283de9" data-element_type="column">
                      <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-d50037e animated-slow elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="d50037e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image-box.default" style="height: 100%;">
                            <div class="elementor-widget-container" style="height: 100%;">
                              <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img"><img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-592x444.jpg" class="houzez-lazyload elementor-animation-shrink attachment-houzez-item-image-1 size-houzez-item-image-1" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/023-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /></figure>
                                <div class="elementor-image-box-content">
                                  <h3 class="elementor-image-box-title"><?php echo $services['asd']; ?></h3><br><br>
                                  <p class="elementor-image-box-description"><?php echo $servicesdesc['asd']; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3bb4a581" data-id="3bb4a581" data-element_type="column">
                      <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-790ba218 animated-slow elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="790ba218" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image-box.default" style="height: 100%;">
                            <div class="elementor-widget-container" style="height: 100%;">
                              <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img"><img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-592x444.jpg" class="houzez-lazyload elementor-animation-shrink attachment-houzez-item-image-1 size-houzez-item-image-1" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-1170x877.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-584x438.jpg 584w" sizes="(max-width: 592px) 100vw, 592px" /></figure>
                                <div class="elementor-image-box-content">
                                  <h3 class="elementor-image-box-title"><?php echo $services['plm']; ?></h3><br>
                                  <p class="elementor-image-box-description"><?php echo $servicesdesc['plm']; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3bb4a581" data-id="3bb4a581" data-element_type="column">
                      <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-790ba218 animated-slow elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="790ba218" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="image-box.default" style="height: 100%;">
                            <div class="elementor-widget-container" style="height: 100%;">
                              <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img"><img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-592x444.jpg" class="houzez-lazyload elementor-animation-shrink attachment-houzez-item-image-1 size-houzez-item-image-1" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-1170x877.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/205-584x438.jpg 584w" sizes="(max-width: 592px) 100vw, 592px" /></figure>
                                <div class="elementor-image-box-content">
                                  <h3 class="elementor-image-box-title"><?php echo $services['ciec']; ?></h3>
                                  <p class="elementor-image-box-description"> <?php echo $servicesdesc['ciec']; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <?php */ ?>
                  </div>
                </div>
              </section>
            <?php } ?>
            <div class="elementor-element elementor-element-50d5ded7 elementor-widget elementor-widget-spacer" data-id="50d5ded7" data-element_type="widget" data-widget_type="spacer.default">
              <div class="elementor-widget-container">
                <div class="elementor-spacer">
                  <div class="elementor-spacer-inner"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>