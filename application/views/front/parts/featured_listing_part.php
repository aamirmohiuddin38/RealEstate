<!-- Featured listing -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-98f6342 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="98f6342" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-76534ca" data-id="76534ca" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-2b6dab5b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b6dab5b" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-387c1d46" data-id="387c1d46" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-36446f37 elementor-widget elementor-widget-spacer" data-id="36446f37" data-element_type="widget" data-widget_type="spacer.default">
													<div class="elementor-widget-container">
														<div class="elementor-spacer">
															<div class="elementor-spacer-inner"></div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-5880ae59 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title" data-id="5880ae59" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="houzez_elementor_section_title.default">
													<div class="elementor-widget-container">
														<div class="houzez_section_title_wrap section-title-module">
															<h2 class="houzez_section_title">Check Our Featured Listings </h2>

															<p class="houzez_section_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-686b8243 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_properties_carousel_v2n" data-id="686b8243" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="houzez_elementor_properties_carousel_v2n.default">
													<div class="elementor-widget-container">

														<div class="property-carousel-module houzez-carousel-arrows-RRiFb houzez-carousel-cols-3 property-carousel-module-v2">

															<div class="property-carousel-buttons-wrap">
																<button type="button" class="slick-prev-js-RRiFb slick-prev btn-primary-outlined">Prev</button>
																<button type="button" class="slick-next-js-RRiFb slick-next btn-primary-outlined">Next</button>
															</div><!-- property-carousel-buttons-wrap -->

															<div class="listing-view grid-view">
																<div id="houzez-properties-carousel-RRiFb" data-token="RRiFb" class="houzez-properties-carousel-js houzez-all-slider-wrap card-deck">
																	<?php if (valArr($featured)) {
																		foreach ($featured as $index => $property) { ?>
																			<div class="item-listing-wrap hz-item-gallery-js card" data-images="[<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>]">
																				<div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
																					<div class="d-flex align-items-center h-100">
																						<div class="item-header">
																							<span class="label-featured label">Featured</span>
																							<div class="labels-wrap labels-right">

																								<a href="#status/for-rent/index.html" class="label-status label status-color-34">
																									<?php echo $property->ps_name; ?>
																								</a>

																							</div>
																							<ul class="item-price-wrap hide-on-list">
																								<li class="item-price">
																									<?php
																									$fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
																									echo $fmt->formatCurrency($property->p_price, "INR");
																									?></li>
																							</ul>
																							<?php /*
																							<ul class="item-tools">

																								<li class="item-tool item-preview">
																									<span class="hz-show-lightbox-js" data-listid="291" data-toggle="tooltip" data-placement="top" title="Preview">
																										<i class="houzez-icon icon-expand-3"></i>
																									</span><!-- item-tool-favorite -->
																								</li><!-- item-tool -->

																								<li class="item-tool item-favorite">
																									<span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="291">
																										<i class="houzez-icon icon-love-it "></i>
																									</span><!-- item-tool-favorite -->
																								</li><!-- item-tool -->

																								<li class="item-tool item-compare">
																									<span class="houzez_compare compare-291 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="291">
																										<i class="houzez-icon icon-add-circle"></i>
																									</span><!-- item-tool-compare -->
																								</li><!-- item-tool -->
																							</ul><!-- item-tools -->
																							*/ ?>
																							<div class="listing-image-wrap">
																								<div class="listing-thumb">
																									<a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>" class="listing-featured-thumb hover-effect">
																										<img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?>" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="<?php echo !empty($property_images[$property->p_id]->pi_path) ? base_url($property_images[$property->p_id]->pi_path) : base_url('uploads/noimage_front.png'); ?> 592w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
																								</div>
																							</div>
																							<div class="preview_loader"></div>
																						</div><!-- item-header -->
																						<div class="item-body flex-grow-1">
																							<div class="labels-wrap labels-right">

																								<a href="#status/for-rent/index.html" class="label-status label status-color-34">
																									<?php echo $property->ps_name; ?>
																								</a>

																							</div>
																							<h2 class="item-title">
																								<a href="<?php echo base_url('houzez/property/' . $property->p_id) ?>"><?php echo $property->p_title; ?></a>
																							</h2><!-- item-title -->
																							<ul class="item-price-wrap hide-on-list">
																								<li class="item-price">
																									<?php
																									$fmt = new NumberFormatter('en_IN', NumberFormatter::CURRENCY);
																									echo $fmt->formatCurrency($property->p_price, "INR");
																									?><< /li>
																							</ul>
																							<address class="item-address">
																								<?php echo $property->pa_address . ' ' . $property->city . ', ' . $property->state . ', ' . $property->country . ' ' . $property->pa_postal_code; ?></address>
																							<ul class="item-amenities item-amenities-with-icons">
																								<li class="h-beds"><span class="hz-figure"><?php echo $property->pd_bedrooms; ?> <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedroom</li>
																								<li class="h-baths"><span class="hz-figure"><?php echo $property->pd_bathrooms; ?> <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathroom</li>
																								<li class="h-area"><span class="hz-figure"><?php echo $property->pd_area_size; ?> <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
																									<div class="area_postfix"><?php echo $property->pd_area_size_unit; ?></div>
																								</li>
																							</ul>
																						</div><!-- item-body -->

																					</div><!-- d-flex -->

																				</div><!-- item-wrap -->
																			</div><!-- item-listing-wrap -->
																	<?php }
																	} ?>
																	<?php /*
																	<div class="item-listing-wrap hz-item-gallery-js card" data-images="[&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/018-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/035-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/036-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/040-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/045-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/047-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/018-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/030-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/012-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/008-592x444.jpg&quot;]">
																		<div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
																			<div class="d-flex align-items-center h-100">
																				<div class="item-header">
																					<span class="label-featured label">Featured</span>
																					<div class="labels-wrap labels-right">

																						<a href="status/for-rent/index.html" class="label-status label status-color-34">
																							For Rent
																						</a>

																					</div>
																					<ul class="item-price-wrap hide-on-list">
																						<li class="item-price">$11,000/mo</li>
																					</ul>
																					<ul class="item-tools">

																						<li class="item-tool item-preview">
																							<span class="hz-show-lightbox-js" data-listid="344" data-toggle="tooltip" data-placement="top" title="Preview">
																								<i class="houzez-icon icon-expand-3"></i>
																							</span><!-- item-tool-favorite -->
																						</li><!-- item-tool -->

																						<li class="item-tool item-favorite">
																							<span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="344">
																								<i class="houzez-icon icon-love-it "></i>
																							</span><!-- item-tool-favorite -->
																						</li><!-- item-tool -->

																						<li class="item-tool item-compare">
																							<span class="houzez_compare compare-344 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="344">
																								<i class="houzez-icon icon-add-circle"></i>
																							</span><!-- item-tool-compare -->
																						</li><!-- item-tool -->
																					</ul><!-- item-tools -->
																					<div class="listing-image-wrap">
																						<div class="listing-thumb">
																							<a href="property/luxury-apartment-ocean-view/index.html" class="listing-featured-thumb hover-effect">
																								<img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-592x444.jpg" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/018-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
																						</div>
																					</div>
																					<div class="preview_loader"></div>
																				</div><!-- item-header -->
																				<div class="item-body flex-grow-1">
																					<div class="labels-wrap labels-right">

																						<a href="status/for-rent/index.html" class="label-status label status-color-34">
																							For Rent
																						</a>

																					</div>
																					<h2 class="item-title">
																						<a href="property/luxury-apartment-ocean-view/index.html">New apartment nice view</a>
																					</h2><!-- item-title -->
																					<ul class="item-price-wrap hide-on-list">
																						<li class="item-price">$11,000/mo</li>
																					</ul>
																					<address class="item-address">8100 S Ashland Ave, Chicago, IL 60620, USA</address>
																					<ul class="item-amenities item-amenities-with-icons">
																						<li class="h-beds"><span class="hz-figure">3 <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedrooms</li>
																						<li class="h-baths"><span class="hz-figure">1 <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathroom</li>
																						<li class="h-area"><span class="hz-figure">1789 <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
																							<div class="area_postfix">Sq Ft</div>
																						</li>
																					</ul>
																				</div><!-- item-body -->

																			</div><!-- d-flex -->

																		</div><!-- item-wrap -->
																	</div><!-- item-listing-wrap -->
																	<div class="item-listing-wrap hz-item-gallery-js card" data-images="[&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/055-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/035-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/030-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/012-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/036-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/055-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/047-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/008-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/045-592x444.jpg&quot;,&quot;https:\/\/demo03.houzez.co\/wp-content\/uploads\/2016\/03\/040-592x444.jpg&quot;]">
																		<div class="item-wrap item-wrap-v2 item-wrap-no-frame h-100">
																			<div class="d-flex align-items-center h-100">
																				<div class="item-header">
																					<div class="labels-wrap labels-right">

																						<a href="status/for-rent/index.html" class="label-status label status-color-34">
																							For Rent
																						</a>

																					</div>
																					<ul class="item-price-wrap hide-on-list">
																						<li class="item-price">$25,000/mo</li>
																					</ul>
																					<ul class="item-tools">

																						<li class="item-tool item-preview">
																							<span class="hz-show-lightbox-js" data-listid="368" data-toggle="tooltip" data-placement="top" title="Preview">
																								<i class="houzez-icon icon-expand-3"></i>
																							</span><!-- item-tool-favorite -->
																						</li><!-- item-tool -->

																						<li class="item-tool item-favorite">
																							<span class="add-favorite-js item-tool-favorite" data-toggle="tooltip" data-placement="top" title="Favourite" data-listid="368">
																								<i class="houzez-icon icon-love-it "></i>
																							</span><!-- item-tool-favorite -->
																						</li><!-- item-tool -->

																						<li class="item-tool item-compare">
																							<span class="houzez_compare compare-368 item-tool-compare show-compare-panel" data-toggle="tooltip" data-placement="top" title="Add to Compare" data-listing_id="368">
																								<i class="houzez-icon icon-add-circle"></i>
																							</span><!-- item-tool-compare -->
																						</li><!-- item-tool -->
																					</ul><!-- item-tools -->
																					<div class="listing-image-wrap">
																						<div class="listing-thumb">
																							<a href="property/gorgeous-villa/index.html" class="listing-featured-thumb hover-effect">
																								<img width="592" height="444" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20592%20444%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-592x444.jpg" class="houzez-lazyload img-fluid wp-post-image" alt="" loading="lazy" srcset="" data-srcset="//432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-592x444.jpg 592w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-300x225.jpg 300w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-1024x768.jpg 1024w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-768x576.jpg 768w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055.jpg 1170w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-584x438.jpg 584w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-800x600.jpg 800w, //432351-1355223-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2016/03/055-496x372.jpg 496w" sizes="(max-width: 592px) 100vw, 592px" /> </a><!-- hover-effect -->
																						</div>
																					</div>
																					<div class="preview_loader"></div>
																				</div><!-- item-header -->
																				<div class="item-body flex-grow-1">
																					<div class="labels-wrap labels-right">

																						<a href="status/for-rent/index.html" class="label-status label status-color-34">
																							For Rent
																						</a>

																					</div>
																					<h2 class="item-title">
																						<a href="property/gorgeous-villa/index.html">Gorgeous villa</a>
																					</h2><!-- item-title -->
																					<ul class="item-price-wrap hide-on-list">
																						<li class="item-price">$25,000/mo</li>
																					</ul>
																					<address class="item-address">4761 N Clark St, Chicago, IL 60640, USA</address>
																					<ul class="item-amenities item-amenities-with-icons">
																						<li class="h-beds"><span class="hz-figure">6 <i class="houzez-icon icon-hotel-double-bed-1 ml-1"></i></span> Bedrooms</li>
																						<li class="h-baths"><span class="hz-figure">3 <i class="houzez-icon icon-bathroom-shower-1 mr-1"></i></span>Bathrooms</li>
																						<li class="h-area"><span class="hz-figure">4300 <i class="houzez-icon icon-ruler-triangle mr-1"></i></span>
																							<div class="area_postfix">Sq Ft</div>
																						</li>
																					</ul>
																				</div><!-- item-body -->

																			</div><!-- d-flex -->

																		</div><!-- item-wrap -->
																	</div><!-- item-listing-wrap -->
																	*/ ?>
																</div><!-- testimonials-slider -->
															</div><!-- listing-view grid-view -->
														</div><!-- testimonials-module -->

													</div>
												</div>
												<div class="elementor-element elementor-element-6c19d4ad elementor-widget elementor-widget-spacer" data-id="6c19d4ad" data-element_type="widget" data-widget_type="spacer.default">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>