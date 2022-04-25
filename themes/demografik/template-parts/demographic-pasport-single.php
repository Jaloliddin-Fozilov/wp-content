<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>


<div class="ads-post">
	<section id="block-breadcrumbs" class="block block-system block-breadcrumbs">
		<nav role="navigation" class="container breadcrumbs-nav" aria-labelledby="system-breadcrumb">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
		</nav>
	</section>
	<section class="block block-system block-hq-content">
		<article id="post-<?php the_ID(); ?>" <?php post_class('ads-post'); ?>>

			<header class="entry-header">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-8">
							<header class="story-header">


								<h1 class="story-title"><?php the_title(); ?></h1>



								<div class="story-author-date">

									<div
										class="field field--name-field-story-publication-date field--type-datetime field--label-hidden field__item">
										<time
											datetime="<?php echo get_the_date('j F Y'); ?>"><?php echo get_the_date('j F Y'); ?></time>
									</div>

								</div>
								<ul
									class="social-sharing-buttons social-media-links--platforms platforms list horizontal">
									<!-- Facebook share button -->
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"
											target="_blank" title="Share to Facebook" aria-label="Share to Facebook"
											class="social-sharing-buttons__button" rel="noopener">
											<i class="fa fa-facebook"><span class="d-none">Share to Facebook</span></i>
										</a>
									</li>

									<!-- Instagram share button -->
									<li>
										<a href="https://www.instagram.com/?url=<?php the_permalink() ?>"
											target="_blank" title="Share to Twitter" aria-label="Share to Instagram"
											class="social-sharing-buttons__button" rel="noopener">
											<i class="fa fa-instagram"><span class="d-none">Share to
													Instagram</span></i>
										</a>
									</li>

									<!-- Telegram share button -->
									<li>
										<a href="https://t.me/share/url?url=<?php the_permalink() ?>&text=<?php the_title(); ?>"
											class="social-sharing-buttons__button" rel="noopener">
											<i class="fa fa-telegram"><span class="d-none">Share to Telegram</span></i>
										</a>
									</li>

									<!-- Email share button -->
									<li>
										<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink() ?>"
											title="Share to E-mail" aria-label="Share to E-mail"
											class="social-sharing-buttons__button" target="_blank" rel="noopener">
											<i class="fa fa-envelope-o"><span class="d-none">Share to E-mail</span></i>
										</a>
									</li>
								</ul>



							</header>
						</div>
					</div>
				</div>
			</header><!-- .entry-header -->
			<div class="paragraph-list">
				<section class="container paragraph--section--basic-text">
					<?php the_content(); ?>
          <!-- First block -->

    <div class="flex items-center  text-gray-800 justify-center">
      <div class="container w-full p-5 mx-auto">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm p-4 rounded-t-lg">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/aholi.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1 people num " style="font-weight:600;font-size:24px;">
                  <?php $queried_object = get_queried_object(); the_field( 'permanent_population', $queried_object );?>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Doimiy
                  aholi soni</div>

              </div>
              <div class="flex flex-col flex-grow ml-2">

              </div>


            </div>


            <div class="flex flex-row bg-white shadow-sm p-2 rounded-b-lg">

              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8 woman"
                        style="font-family:Antic Didone;">
                        <?php $queried_object = get_queried_object(); the_field( 'permanent_population_woman', $queried_object );?>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400 man" span=""
                    style="font-family:Antic Didone;">
                    <?php $queried_object = get_queried_object(); the_field( 'permanent_population_man', $queried_object );?>
                  </div>
                </div>
              </div>
            </div>


          </div>



          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/bogcha.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'children_in_preschool_institutions', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">
                  Maktabgacha ta’lim tashkilotlaridagi bolalar soni</div>
              </div>


            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'children_in_preschool_institutions_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'children_in_preschool_institutions_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/maktab.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'students_in_secondary_schools', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">O‘rta
                  ta’lim maktablaridagi o‘quvchilar soni</div>
              </div>
            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'students_in_secondary_schools_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'students_in_secondary_schools_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/student.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'students_in_higher_education', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Oliy
                  ta’lim muassasalari talabalari soni</div>
              </div>
            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'students_in_higher_education_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'students_in_higher_education_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/bisnes.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'economically_occupied_population', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">
                  Iqtisodiyotda band aholi soni<br>&nbsp;</div>
              </div>
            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'economically_occupied_population_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'economically_occupied_population_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/sport.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'number_of_sportsmen', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Sport
                  bilan shug'ullanuvchilar soni<br>&nbsp;</div>
              </div>
            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'number_of_sportsmen_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'number_of_sportsmen_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/turist.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'number_of_travelers', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Safarga
                  ketganlar soni<br>&nbsp;</div>
              </div>
            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'number_of_travelers_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'number_of_travelers_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-span-12 sm:col-span-6 md:col-span-3">
            <div class="flex flex-row bg-white shadow-sm rounded-t-lg p-4">
              <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/qarilar.png'?>' width="50">
              </div>
              <div class="flex flex-col flex-grow ml-2">
                <div class="text-xl text-gray-600 py-1"><span
                    style="font-weight:600;font-size:24px;"><?php $queried_object = get_queried_object(); the_field( 'number_of_pensioners_and_beneficiaries', $queried_object );?></span>
                </div>
                <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Pensiya
                  va
                  nafaqa oluvchilar soni<br>&nbsp;</div>
              </div>
            </div>

            <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">

              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row ">
                  <div class="col-end">
                    <div class="flex flex-row ">
                      <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                          style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'number_of_pensioners_and_beneficiaries_woman', $queried_object );?></span>
                      </div>
                      <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img
                          src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex flex-col flex-grow ml-2">
                <div class="flex flex-row">
                  <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                  <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                  <div class="flex flex-col font-bold text-md text-blue-400"><span
                      style="font-family:Antic Didone;"><?php $queried_object = get_queried_object(); the_field( 'number_of_pensioners_and_beneficiaries_man', $queried_object );?></span>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <!-- First block end -->


    <!-- Table and diagrams -->
    <div class="container">
    <div class="wrapper">
      <ul class="block_list">
        <li class="block" data-uuid="1">
          <div class="block_icon" data-uuid="1">
            <i data-uuid="1" class="fa fa-line-chart"></i>
          </div>
          <div data-uuid="1" class="block_name">
            <h4 data-uuid="1">Aholining o'rtacha yillik soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="2">
          <div class="block_icon" data-uuid="2">
            <svg data-uuid="2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path data-uuid="2"
                d="M119.4 44.1C142.7 40.22 166.2 42.2 187.1 49.43L237.8 126.9L162.3 202.3C160.8 203.9 159.1 205.1 160 208.2C160 210.3 160.1 212.4 162.6 213.9L274.6 317.9C277.5 320.6 281.1 320.7 285.1 318.2C288.2 315.6 288.9 311.2 286.8 307.8L226.4 209.7L317.1 134.1C319.7 131.1 320.7 128.5 319.5 125.3L296.8 61.74C325.4 45.03 359.2 38.53 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.09V44.1z" />
              </svg>
          </div>
          <div data-uuid="2" class="block_name">
            <h4 data-uuid="2">Ajralishlar soni, birliklar</h4>
          </div>
        </li>
        <li class="block" data-uuid="3">
          <div class="block_icon" data-uuid="3">
            <svg data-uuid="3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path data-uuid="3"
                d="M256 64C109.1 64 0 125.9 0 208v98.13C0 384.5 114.6 448 256 448s256-63.5 256-141.9V208C512 125.9 401.1 64 256 64zM256 288C203.1 288 155.1 279.1 120.4 264.6C155 249.9 201.6 240 256 240s101 9.875 135.6 24.62C356.9 279.1 308.9 288 256 288zM437.1 234.4C392.1 208.3 328.3 192 256 192S119.9 208.3 74.88 234.4C68 226.1 64 217.3 64 208C64 163.9 149.1 128 256 128c105.1 0 192 35.88 192 80C448 217.3 444 226.1 437.1 234.4z" />
              </svg>
          </div>
          <div data-uuid="3" class="block_name">
            <h4 data-uuid="3">Nikohlar soni, birliklar</h4>
          </div>
        </li>
        <li class="block" data-uuid="4">
          <div class="block_icon" data-uuid="4">
            <svg data-uuid="4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path data-uuid="4"
                d="M272 95.93c26.5 0 47.99-21.47 47.99-47.97S298.5 0 272 0C245.5 0 224 21.47 224 47.97S245.5 95.93 272 95.93zM209.7 357.3c-25.75-17.25-52.25-33.24-79.5-48.11L58.62 270.2L1.246 471.1c-4.875 16.1 4.1 34.74 22 39.62s34.63-4.998 39.5-21.99l36.63-128.1l60.63 40.37v78.86c0 17.62 14.38 31.99 32 31.99s32-14.37 32-31.99l.0022-95.93C224 373.2 218.6 363.2 209.7 357.3zM311.1 416c-13.88 0-25.95 8.863-30.33 21.86l-24.75 74.07h419.9l-101.9-206.3c-11.38-22.49-43.1-23.63-56.1-2.01l-31.89 54.21l-65.26-35.64l-24-121.2C288.1 161.3 263.2 127.7 227.1 109.7c-1-.4999-2.125-.625-3.125-1.125c-2.25-1.125-4.752-1.1-7.252-2.625C201.5 99.85 185.2 95.98 168.7 95.98H95.1c-9.25 0-18.05 4.061-24.18 10.93l-55.95 63.92c-.75 .9998-1.5 2.124-2.25 3.249c-8.875 13.1-3 32.87 11.63 40.74l336.6 184.3l-9.837 16.87h411.1zM105.9 204.1l-23.5-12.87l28.13-32.12h44.38L105.9 204.1zM199.5 256.1l34.9-41.28l13.5 67.61L199.5 256.1z" />
              </svg>
          </div>
          <div data-uuid="4" class="block_name">
            <h4 data-uuid="4">Qishloq va oʻrmon xoʻjaligida band boʻlganlar soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="5">
          <div class="block_icon" data-uuid="5">
            <svg data-uuid="5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path data-uuid="5"
                d="M280 145.3V112h16C309.3 112 320 101.3 320 88S309.3 64 296 64H215.1C202.7 64 192 74.75 192 87.1S202.7 112 215.1 112H232v33.32C119.6 157.3 32 252.4 32 368h448C480 252.4 392.4 157.3 280 145.3zM488 400h-464C10.75 400 0 410.7 0 423.1C0 437.3 10.75 448 23.1 448h464c13.25 0 24-10.75 24-23.1C512 410.7 501.3 400 488 400z" />
              </svg>
          </div>
          <div data-uuid="5" class="block_name">
            <h4 data-uuid="5">Xizmat ko'rsatish sohasida band bo'lganlar soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="6">
          <div class="block_icon" data-uuid="6">
            <svg data-uuid="6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path data-uuid="6"
                d="M336 0C362.5 0 384 21.49 384 48V464C384 490.5 362.5 512 336 512H240V432C240 405.5 218.5 384 192 384C165.5 384 144 405.5 144 432V512H48C21.49 512 0 490.5 0 464V48C0 21.49 21.49 0 48 0h436zM64 272C64 280.8 71.16 288 80 288H112C120.8 288 128 280.8 128 272V240C128 231.2 120.8 224 112 224H80C71.16 224 64 231.2 64 240V272zM176 224C167.2 224 160 231.2 160 240V272C160 280.8 167.2 288 176 288H208C216.8 288 224 280.8 224 272V240C224 231.2 216.8 224 208 224H176zM256 272C256 280.8 263.2 288 272 288h404C312.8 288 320 280.8 320 272V240C320 231.2 312.8 224 304 224H272C263.2 224 256 231.2 256 240V272zM80 96C71.16 96 64 103.2 64 112V144C64 152.8 71.16 160 80 160H112C120.8 160 128 152.8 128 144V112C128 103.2 120.8 96 112 96H80zM160 144C160 152.8 167.2 160 176 160H208C216.8 160 224 152.8 224 144V112C224 103.2 216.8 96 208 96H176C167.2 96 160 103.2 160 112V144zM272 96C263.2 96 256 103.2 256 112V144C256 152.8 263.2 160 272 160h404C312.8 160 320 152.8 320 144V112C320 103.2 312.8 96 304 96H272z" />
              </svg>
          </div>
          <div data-uuid="6" class="block_name">
            <h4 data-uuid="6">Kichik biznesda band bo'lganlar soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="7">
          <div data-uuid="7" class="block_icon">
            <svg data-uuid="7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path data-uuid="7"
                d="M336 0h-288C22.38 0 0 22.38 0 48v416C0 489.6 22.38 512 48 512h288c25.62 0 48-22.38 48-48v-416C384 22.38 361.6 0 336 0zM64 208C64 199.2 71.2 192 80 192h42C120.8 192 128 199.2 128 208v32C128 248.8 120.8 256 112 256h-32C71.2 256 64 248.8 64 240V208zM64 304C64 295.2 71.2 288 80 288h42C120.8 288 128 295.2 128 304v32C128 344.8 120.8 352 112 352h-32C71.2 352 64 344.8 64 336V304zM224 432c0 8.801-7.199 16-16 16h-128C71.2 448 64 440.8 64 432v-32C64 391.2 71.2 384 80 384h128c8.801 0 16 7.199 16 16V432zM224 336c0 8.801-7.199 16-16 16h-32C167.2 352 160 344.8 160 336v-32C160 295.2 167.2 288 176 288h42C216.8 288 224 295.2 224 304V336zM224 240C224 248.8 216.8 256 208 256h-32C167.2 256 160 248.8 160 240v-32C160 199.2 167.2 192 176 192h42C216.8 192 224 199.2 224 208V240zM320 432c0 8.801-7.199 16-16 16h-32c-8.799 0-16-7.199-16-16v-32c0-8.801 7.201-16 16-16h42c8.801 0 16 7.199 16 16V432zM320 336c0 8.801-7.199 16-16 16h-32c-8.799 0-16-7.199-16-16v-32C256 295.2 263.2 288 272 288h42C312.8 288 320 295.2 320 304V336zM320 240C320 248.8 312.8 256 304 256h-32C263.2 256 256 248.8 256 240v-32C256 199.2 263.2 192 272 192h42C312.8 192 320 199.2 320 208V240zM320 144C320 152.8 312.8 160 304 160h-224C71.2 160 64 152.8 64 144v-64C64 71.2 71.2 64 80 64h224C312.8 64 320 71.2 320 80V144z" />
              </svg>
          </div>
          <div data-uuid="7" class="block_name">
            <h4 data-uuid="7">Iqtisodiyotda band bo'lganlar soni, jami, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="8">
          <div class="block_icon" data-uuid="8">
            <svg data-uuid="8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path data-uuid="8"
                d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z" />
              </svg>
          </div>
          <div data-uuid="8" class="block_name">
            <h4 data-uuid="8">Yil oxiriga mehnat yoshidagi doimiy aholi soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="9">
          <div class="block_icon" data-uuid="9">
            <svg data-uuid="9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
              <path data-uuid="9"
                d="M184 88C184 118.9 158.9 144 128 144C97.07 144 72 118.9 72 88C72 57.07 97.07 32 128 32C158.9 32 184 57.07 184 88zM208.4 196.3C178.7 222.7 160 261.2 160 304C160 338.3 171.1 369.8 192 394.5V416C192 433.7 177.7 448 160 448H96C78.33 448 64 433.7 64 416V389.2C26.16 371.2 0 332.7 0 288C0 226.1 50.14 176 112 176H144C167.1 176 190.2 183.5 208.4 196.3V196.3zM64 245.7C54.04 256.9 48 271.8 48 288C48 304.2 54.04 319.1 64 330.3V245.7zM448 416V394.5C468 369.8 480 338.3 480 304C480 261.2 461.3 222.7 431.6 196.3C449.8 183.5 472 176 496 176H528C589.9 176 640 226.1 640 288C640 332.7 613.8 371.2 576 389.2V416C576 433.7 561.7 448 544 448H480C462.3 448 448 433.7 448 416zM576 330.3C585.1 319.1 592 304.2 592 288C592 271.8 585.1 256.9 576 245.7V330.3zM568 88C568 118.9 542.9 144 512 144C481.1 144 456 118.9 456 88C456 57.07 481.1 32 512 32C542.9 32 568 57.07 568 88zM256 96C256 60.65 284.7 32 320 32C355.3 32 384 60.65 384 96C384 131.3 355.3 160 320 160C284.7 160 256 131.3 256 96zM448 304C448 348.7 421.8 387.2 384 405.2V448C384 465.7 369.7 480 352 480H288C270.3 480 256 465.7 256 448V405.2C218.2 387.2 192 348.7 192 304C192 242.1 242.1 192 304 192h436C397.9 192 448 242.1 448 304zM256 346.3V261.7C246 272.9 240 287.8 240 304C240 320.2 246 335.1 256 346.3zM384 261.7V346.3C393.1 335 400 320.2 400 304C400 287.8 393.1 272.9 384 261.7z" />
              </svg>
          </div>
          <div data-uuid="9" class="block_name">
            <h4 data-uuid="9">Yil oxiridagi doimiy aholi soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="10">
          <div data-uuid="10" class="block_icon">
            <svg data-uuid="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path data-uuid="10"
                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h478.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
              </svg>
          </div>
          <div data-uuid="10" class="block_name">
            <h4 data-uuid="10">Mehnat organlarida ro'yxatga olingan ishsizlar soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="11">
          <div class="block_icon" data-uuid="11">
            <svg data-uuid="11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
              <path data-uuid="11"
                d="M274.7 304H173.3C77.61 304 0 381.6 0 477.3C0 496.5 15.52 512 34.66 512h478.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM616 200h-144C458.8 200 448 210.8 448 224s10.75 24 24 24h144C629.3 248 640 237.3 640 224S629.3 200 616 200z" />
              </svg>
          </div>
          <div class="block_name" data-uuid="11">
            <h4 data-uuid="11">Ishsizlar soni, ming kishi</h4>
          </div>
        </li>
        <li class="block" data-uuid="12">
          <div class="block_icon" data-uuid="12">
            <svg data-uuid="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path data-uuid="12"
                d="M374.6 73.39c-12.5-12.5-32.75-12.5-45.25 0l-320 320c-12.5 12.5-12.5 32.75 0 45.25C15.63 444.9 23.81 448 32 448s16.38-3.125 22.62-9.375l320-320C387.1 106.1 387.1 85.89 374.6 73.39zM64 192c35.3 0 64-28.72 64-64S99.3 64.01 64 64.01S0 92.73 0 128S28.7 192 64 192zM320 320c-35.3 0-64 28.72-64 64s28.7 64 64 64s64-28.72 64-64S355.3 320 320 320z" />
              </svg>
          </div>
          <div data-uuid="12" class="block_name">
            <h4 data-uuid="12">Iqtisodiyotda band bo'lgan ayollarning ulushi, foiz</h4>
          </div>
        </li>
      </ul>
      <ul class="content_list">
        <li class="content_block unvisible">
           <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode1', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="1">
                <button class="button_icon" data-id="1">
                  <img data-id="1" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="2">
                <button class="button_icon" data-id="2">
                  <img data-id="2" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="3">
                <button class="button_icon" data-id="3">
                  <img data-id="3" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="4">
                <button class="button_icon" data-id="4">
                  <img data-id="4" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one1', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two1', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three1', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four1', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode2', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="5">
                <button class="button_icon" data-id="5">
                  <img data-id="5" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="6">
                <button class="button_icon" data-id="6">
                  <img data-id="6" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="7">
                <button class="button_icon" data-id="7">
                  <img data-id="7" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="8">
                <button class="button_icon" data-id="8">
                  <img data-id="8" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one2', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two2', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three2', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four2', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode3', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="9">
                <button class="button_icon" data-id="9">
                  <img data-id="9" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="10">
                <button class="button_icon" data-id="10">
                  <img data-id="10" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="11">
                <button class="button_icon" data-id="11">
                  <img data-id="11" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="12">
                <button class="button_icon" data-id="12">
                  <img data-id="12" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one3', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two3', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three3', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four3', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode4', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="13">
                <button class="button_icon" data-id="13">
                  <img data-id="13" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="14">
                <button class="button_icon" data-id="14">
                  <img data-id="14" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="15">
                <button class="button_icon" data-id="15">
                  <img data-id="15" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="16">
                <button class="button_icon" data-id="16">
                  <img data-id="16" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
           <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one4', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two4', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three4', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four4', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode5', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="17">
                <button class="button_icon" data-id="17">
                  <img data-id="17" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="18">
                <button class="button_icon" data-id="18">
                  <img data-id="18" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="19">
                <button class="button_icon" data-id="19">
                  <img data-id="19" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="20">
                <button class="button_icon" data-id="20">
                  <img data-id="20" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one5', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two5', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three5', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four5', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode6', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="21">
                <button class="button_icon" data-id="21">
                  <img data-id="21" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="22">
                <button class="button_icon" data-id="22">
                  <img data-id="22" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="23">
                <button class="button_icon" data-id="23">
                  <img data-id="23" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="24">
                <button class="button_icon" data-id="24">
                  <img data-id="24" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one6', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two6', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three6', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four6', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode7', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="25">
                <button class="button_icon" data-id="25">
                  <img data-id="25" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="26">
                <button class="button_icon" data-id="26">
                  <img data-id="26" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="27">
                <button class="button_icon" data-id="27">
                  <img data-id="27" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="28">
                <button class="button_icon" data-id="28">
                  <img data-id="28" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
           <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one7', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two7', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three7', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four7', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode8', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="29">
                <button class="button_icon" data-id="29">
                  <img data-id="29" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="30">
                <button class="button_icon" data-id="30">
                  <img data-id="30" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="31">
                <button class="button_icon" data-id="31">
                  <img data-id="31" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="32">
                <button class="button_icon" data-id="32">
                  <img data-id="32" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one8', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two8', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three8', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four8', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode9', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="33">
                <button class="button_icon" data-id="33">
                  <img data-id="33" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="34">
                <button class="button_icon" data-id="34">
                  <img data-id="34" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="35">
                <button class="button_icon" data-id="35">
                  <img data-id="35" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="36">
                <button class="button_icon" data-id="36">
                  <img data-id="36" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one9', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two9', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three9', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four9', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode10', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="37">
                <button class="button_icon" data-id="37">
                  <img data-id="37" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="38">
                <button class="button_icon" data-id="38">
                  <img data-id="38" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="39">
                <button class="button_icon" data-id="39">
                  <img data-id="39" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="40">
                <button class="button_icon" data-id="40">
                  <img data-id="40" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one10', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two10', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three10', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four10', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode11', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="41">
                <button class="button_icon" data-id="41">
                  <img data-id="41" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="42">
                <button class="button_icon" data-id="42">
                  <img data-id="42" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="43">
                <button class="button_icon" data-id="43">
                  <img data-id="43" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="44">
                <button class="button_icon" data-id="44">
                  <img data-id="44" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one11', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two11', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three11', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four11', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
        <li class="content_block unvisible">
          <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode12', $queried_object )); ?>
          <div class="wrapper">
            <ul class="button_list">
              <li class="inner_block" data-id="45">
                <button class="button_icon" data-id="45">
                  <img data-id="45" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                </button>
              </li>
              <li class="inner_block" data-id="46">
                <button class="button_icon" data-id="46">
                  <img data-id="46" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="47">
                <button class="button_icon" data-id="47">
                  <img data-id="47" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                </button>
              </li>
              <li class="inner_block" data-id="48">
                <button class="button_icon" data-id="48">
                  <img data-id="48" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                </button>
              </li>
            </ul>
            <ul class="contents">
              <li class="inner_content">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one12', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                 <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two12', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three12', $queried_object )); ?>
              </li>
              <li class="inner_content unvisible">
                <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four12', $queried_object )); ?>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>

    <!-- Table and diagrams end -->
				</section>
			</div>
		</article>
	</section>
</div>

