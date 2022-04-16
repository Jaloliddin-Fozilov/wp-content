<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();
?>
 <div class="ads-wrapper-blog">
 	<div class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header center-title"> 
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

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
              <div class="text-xl text-gray-600 py-1 people num " style="font-weight:600;font-size:24px;"><?php the_field('permanent_population'); ?></div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Doimiy
                aholi soni <br>11.04.2022<br>&nbsp;</div>

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
                      style="font-family:Antic Didone;">17620591</div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
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
                  style="font-family:Antic Didone;">17840450</div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">1 196 421</span>
              </div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">
                Maktabgacha ta’lim tashkilotlaridagi bolalar soni</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">

              <div>
                <div class="flex items-center justify-end text-md" style="color:#38b2ac;">
                  <div
                    style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-top-left-radius:40%; border-bottom-right-radius:40%;border:1px solid #38b2ac;background-color:#38b2ac;">
                    +7,3%</div>
                  <i class="fa fa-level-up animate-bounce" aria-hidden="true"></i>
                </div>


              </div>

            </div>

          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">573 438</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">622
                    983</span></div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">6 287 885</span>
              </div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">O‘rta
                ta’lim maktablaridagi o‘quvchilar soni</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">


              <div class="flex items-center justify-end text-md" style="color:#38b2ac;">

                <div
                  style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-top-left-radius:40%; border-bottom-right-radius:40%;border:1px solid #38b2ac;background-color:#38b2ac;">
                  +1,9%</div>
                <i class="fa fa-level-up animate-bounce" aria-hidden="true"></i>
              </div>

            </div>

          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">3 052 855</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">3 235
                    030</span></div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">571 512</span></div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Oliy
                ta’lim muassasalari talabalari soni<br>&nbsp;</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">

              <div>
                <div class="flex items-center justify-end text-md" style="color:#38b2ac;">
                  <div
                    style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-top-left-radius:40%; border-bottom-right-radius:40%;border:1px solid #38b2ac;background-color:#38b2ac;">
                    +29,6%</div>
                  <i class="fa fa-level-up animate-bounce" aria-hidden="true"></i>
                </div>


              </div>
            </div>
          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">260 026</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">311
                    486</span></div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">13 236 353</span>
              </div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">
                Iqtisodiyotda band aholi soni<br>&nbsp;</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">
              <div class="flex items-center justify-end text-red-500 text-md">
                <div
                  style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-bottom-left-radius: 40%;border-top-right-radius: 40%;border:1px solid #f56565;background-color:#f56565;">
                  -2,3%</div>
                <i class="fa fa-level-down animate-bounce" aria-hidden="true"></i>
              </div>

            </div>

          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">5 484 576</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">7 751
                    777</span></div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">2 360 539</span>
              </div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Sport
                bilan shug'ullanuvchilar soni<br>&nbsp;</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">

              <div class="flex items-center justify-end text-red-500 text-md">
                <div
                  style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-bottom-left-radius: 40%;border-top-right-radius: 40%;border:1px solid #f56565;background-color:#f56565;">
                  -13,5%</div>
                <i class="fa fa-level-down animate-bounce" aria-hidden="true"></i>
              </div>
            </div>
          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">874 255</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">1 486
                    284</span></div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">2 001 521</span>
              </div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Safarga
                ketganlar soni<br>&nbsp;<br>&nbsp;</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">
              <div class="flex items-center justify-end text-red-500 text-md">
                <div
                  style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-bottom-left-radius: 40%;border-top-right-radius: 40%;border:1px solid #f56565;background-color:#f56565;">
                  -76,3%</div>
                <i class="fa fa-level-down animate-bounce" aria-hidden="true"></i>
              </div>

            </div>

          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">916 305</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">1 085
                    216</span></div>
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
              <div class="text-xl text-gray-600 py-1"><span style="font-weight:600;font-size:24px;">3 744 261</span>
              </div>
              <div class="text-md text-blue-500" style="font-size:12.4px;line-height: initial;margin-top:6px">Pensiya va
                nafaqa oluvchilar soni<br>&nbsp;</div>
            </div>

            <div class="flex flex-col flex-grow ml-2">

              <div>
                <div class="flex items-center justify-end text-md" style="color:#38b2ac;">
                  <div
                    style="width:50px ;height:30px; border-radius:5px; display:flex; justify-content:center; align-items:center; text-decoration:none; font-size:16px; color:#fff;border-top-left-radius:40%; border-bottom-right-radius:40%;border:1px solid #38b2ac;background-color:#38b2ac;">
                    +4,0%</div>
                  <i class="fa fa-level-up animate-bounce" aria-hidden="true"></i>
                </div>


              </div>

            </div>
          </div>

          <div class="flex flex-row bg-white shadow-sm rounded-b-lg p-2">

            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row ">
                <div class="col-end">
                  <div class="flex flex-row ">
                    <div class="flex flex-col font-bold text-md text-blue-400 pl-8"><span
                        style="font-family:Antic Didone;">1 765 746</span></div>
                    <div class="flex flex-col text-sm text-gray-600 px-1 pl-2"><img src='<?php echo get_template_directory_uri() . '/assets/images/womann.png'?>' width="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex flex-col flex-grow ml-2">
              <div class="flex flex-row">
                <img src='<?php echo get_template_directory_uri() . '/assets/images/mann.png'?>' width="20">
                <div class="flex flex-col text-sm text-gray-600 px-1"></div>
                <div class="flex flex-col font-bold text-md text-blue-400"><span style="font-family:Antic Didone;">1 978
                    515</span></div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

	<!-- First block end -->

			<div class="center">
				<div class="row">
				<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/category-ads', get_post_type() );

			endwhile;

			the_posts_navigation();

		else:

			get_template_part( 'template-parts/category-ads', 'none' );

		endif;
		?>
			</div>

			</div>
	</div>

</div>
<?php 
get_footer();
