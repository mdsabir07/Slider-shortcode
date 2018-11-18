<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* == Homepage == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_homepage_01' );
function medpro_toolkit_custom_template_homepage_01( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '01 - medpro homepage 01', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][medpro_slides height="600" dots="true" autoplay="false"][/vc_column][/vc_row][vc_row css=".vc_custom_1514260379958{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/3"][medpro_promo_box title="Emergency cases" img="49" desc="Drifting organic matter for the animals to eat. When their filters get clogged that." textonly="Call us: (062) 109-9222"][/vc_column][vc_column width="1/3"][medpro_promo_box button_type="2" link_text="Appointment" link_to="2" title="Online appointment" img="50" desc="Cassini would be traveling at more than miles per hour as it passed within." link_external="http://www.google.com"][/vc_column][vc_column width="1/3"][medpro_promo_box icon_type="2" button_type="2" link_to_page="19" title="Doctors timetable" icon="fa fa-user-md" desc="Student at Australian National University and the lead author of a paper published."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514260401753{padding-top: 90px !important;padding-bottom: 90px !important;background-color: #f6fbff !important;}"][vc_column offset="vc_col-lg-5 vc_col-md-5" el_class="padding-bottom-30 mobile-p-b-30"][vc_column_text el_class="homepage-ul-style"]
<h1>Welcome to medpro</h1>
<h2>Care &amp; Amenities</h2>
Promises to open new avenues of research into human prehistory and was met with excitement by geneticists and archaeologists It’s a bit like discovering that you can.
<ul>
    <li>would ever be possible to fish out gene fragments</li>
    <li>limited by the availability of fossil bones.</li>
    <li>Crust on a peninsula in western Russia But now.</li>
    <li>especially significant in a state imperiled by rising</li>
</ul>
[/vc_column_text][medpro_iconic_btn btn_style="2" link_to_page="19" show_icon="1" btn_color="#ffffff" icon="fa fa-plus"][/vc_column][vc_column width="1/2" offset="vc_col-lg-4 vc_col-md-4" el_class="mobile-p-b-60"][medpro_single_carousel autoplay="false" nav="false" images="1854,1745,524"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_working_time height="450" working_bg="505" works_time="%5B%7B%22wor_time%22%3A%22Monday%20-%2008%3A00am%20-%2010%3A00pm%20%22%7D%2C%7B%22wor_time%22%3A%22Saturday%20-%2010%3A00am%20-%2007%3A00pm%20%22%7D%2C%7B%22wor_time%22%3A%22Sunday%20-%20Emergency%20Only%20%22%7D%2C%7B%22wor_time%22%3A%22Monday%20-%208%3A00%20AM%20%E2%80%93%2010%3A00%20pm%22%7D%2C%7B%22wor_time%22%3A%22Tuesday%20-%208%3A00%20AM%20%E2%80%93%207%3A00%20pm%22%7D%2C%7B%22wor_time%22%3A%22%20Ambulance%2024%2F7%20Service%20%22%7D%5D"][/vc_column][/vc_row][vc_row css=".vc_custom_1514260454792{padding-top: 90px !important;padding-bottom: 90px !important;}"][vc_column][vc_row_inner css=".vc_custom_1513591580863{padding-bottom: 30px !important;}"][vc_column_inner offset="vc_col-lg-offset-3 vc_col-lg-6" css=".vc_custom_1514432783199{padding-bottom: 20px !important;}"][medpro_section_title desc_option="1" title="Medifair Departments" desc="Composition at the deep mantle, just at the border of its core Scientists
have seismic evidence that the deep part of the mantle"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1784" dep_title="Plastic Surgery"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1786" dep_title="Rhinonology"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1787" dep_title="Nurology"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department icon_type="2" link_to_page="1797" dep_title="Heart Surgery" fa_icon="fa fa-heartbeat"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1788" dep_title="Otology"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1791" dep_title="Urology"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1793" dep_title="Orthopedies"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_title="Eye care" dep_icon="1792"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner el_class="text-center" css=".vc_custom_1513591534447{padding-top: 15px !important;}"][medpro_iconic_btn btn_style="2" button_text="View all" link_to_page="13" btn_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1512383468130{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/counter_bg.jpg?id=63) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="overlay"][vc_column width="1/4"][medpro_counter_box number="108" desc="Our staff"][/vc_column][vc_column width="1/4"][medpro_counter_box number="20" after_text="+" desc="Years of experience"][/vc_column][vc_column width="1/4"][medpro_counter_box number="1450" desc="Happy smiler"][/vc_column][vc_column width="1/4"][medpro_counter_box number="646" desc="Blood Donate"][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="doctor-side-bg" css=".vc_custom_1514519865165{padding-top: 80px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/doctor_side_bg.png?id=87) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column][vc_row_inner][vc_column_inner offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6" css=".vc_custom_1514519858492{padding-top: 0px !important;padding-bottom: 30px !important;}"][medpro_section_title desc_option="1" title="Medifair Doctors" desc="Composition at the deep mantle, just at the border of its core Scientists have seismic evidence that the deep part of the mantle"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1514519886468{padding-top: 30px !important;}"][vc_column_inner el_class="sm-padding-b-30" css=".vc_custom_1514528546008{padding-top: 0px !important;}" offset="vc_col-lg-3"][vc_empty_space height="60" el_class="hiddend-sm hidden-md"][vc_column_text el_class="margin-bottom-15"]
<h4><strong>About our doctors</strong></h4>
&nbsp;

Because the animals’ houses were too fragile to be harvested and collected specimens were never able to build houses outside the ocean.To study the zooplankton in their natural.[/vc_column_text][medpro_iconic_btn link_type="2" show_icon="1" link_to_external="http://www.google.com" icon="fa fa-plus"][/vc_column_inner][vc_column_inner css=".vc_custom_1514440249612{padding-bottom: 40px !important;}" offset="vc_col-lg-9 vc_col-md-12"][medpro_doctor column="3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1514440784925{padding-top: 60px !important;padding-bottom: 70px !important;}" el_class="padding-bottom-30"][vc_column offset="vc_col-lg-6 vc_col-md-6" el_class="padding-bottom-30 sm-padding-b-30"][vc_row_inner el_class="sm-padding-b-30"][vc_column_inner][medpro_section_title desc_option="1" text_align="left" title="Make an appoinment now!" desc="Promises to open new avenues of research into human prehistory and was met with excitement by geneticists and ."][/vc_column_inner][/vc_row_inner][vc_empty_space height="80" el_class="hiddend-sm"][contact-form-7 id="4"][/vc_column][vc_column offset="vc_col-lg-6 vc_col-md-6"][vc_row_inner el_class="sm-padding-b-30"][vc_column_inner][medpro_section_title desc_option="1" text_align="left" title="Latest news latter" desc="Promises to open new avenues of research into human prehistory and was met with excitement by geneticists and ."][/vc_column_inner][/vc_row_inner][vc_empty_space height="80" el_class="hiddend-sm"][medpro_posts count="3"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Homepage == */



/* == Home page 02 == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_homepage_02' );
function medpro_toolkit_custom_template_homepage_02( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '02 - medpro homepage 02', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1514445062327{padding-top: 50px !important;padding-bottom: 10px !important;}" el_class="padding-bottom-30"][vc_column width="1/2" offset="vc_col-lg-4 vc_col-md-6" el_class="padding-bottom-30 sm-padding-b-30"][vc_empty_space height="50" el_class="hiddend-sm"][vc_column_text el_class="slide-text"]
<h1>A smile is the prettiest thing you can wear.</h1>
Student at Australian National University and the lead author in Nature on Wednesday that may hold the answer Jones[/vc_column_text][medpro_iconic_btn btn_style="4" link_to_page="17" btn_color="#ffffff"][/vc_column][vc_column width="1/2" offset="vc_col-lg-4 vc_col-md-6"][vc_single_image image="2009" img_size="large"][/vc_column][vc_column el_class="form-style-4" offset="vc_col-lg-4 vc_col-md-12"][vc_column_text]
<h5>Appointment now!</h5>
[/vc_column_text][contact-form-7 id="2013"][/vc_column][/vc_row][vc_row css=".vc_custom_1514023322840{padding-top: 30px !important;padding-bottom: 35px !important;}"][vc_column width="1/3"][medpro_promo_box style="2" title="24 Hours Dental Services" desc="Wednesday scientists near California’s Monte Bay have found that, through this process, giant larvaceans can filter."][/vc_column][vc_column width="1/3"][medpro_promo_box style="2" title="Dental implants" desc="Wednesday scientists near California’s Monte Bay have found that, through this process, giant larvaceans can filter."][/vc_column][vc_column width="1/3"][medpro_promo_box style="2" title="Fexible payment options" desc="Wednesday scientists near California’s Monte Bay have found that, through this process, giant larvaceans can filter."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514260660896{padding-top: 35px !important;padding-bottom: 40px !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="1/2" el_class="sm-padding-b-30 "][vc_empty_space height="45" el_class="hiddend-sm"][vc_column_text el_class="custom-style-2"]
<h3>We use advanced proven technology to keep your smile looking the best</h3>
Especially significant in a state imperiled by rising sea levels and overi by a governor, Rick Scott, who has said he is unconvinced that climat nge and global warming are real and whose administration is widely the terms. the problem is not that people don’t believe .[/vc_column_text][medpro_iconic_btn btn_style="4" link_to_page="222" btn_color="#ffffff"][/vc_column][vc_column width="1/2"][vc_single_image image="484" img_size="large" el_class="single-img"][medpro_video_popup theme="2" text_link="1" video_url="https://www.youtube.com/watch?v=3PmtRjTBcXk" link_with_text="See this video"][/vc_column][/vc_row][vc_row css=".vc_custom_1514260668434{padding-top: 30px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514445345078{padding-top: 30px !important;padding-bottom: 60px !important;}"][medpro_section_title desc_option="1" title="Our Services" desc="Tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific and why are their chemical compositions so different ."][/vc_column][/vc_row][vc_row][vc_column offset="vc_col-lg-4"][medpro_service link_1="19" title="Cosmetic dentistry" desc="Crust on a peninsula in western int but now we can better understand what’s happening" link_text="Know more" photo="310"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service link_1="222" title="Implant dentistry" desc="Crust on a peninsula in western int but now we can better understand what’s happening" link_text="Know more" photo="310"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service upload_type="2" link_1="435" title="Great doctor" desc="Crust on a peninsula in western int but now we can better understand what’s happening" link_text="Know more" icon="fa fa-user-md"][/vc_column][/vc_row][vc_row][vc_column offset="vc_col-lg-4"][medpro_service link_1="19" title="Cosmetic dentistry" desc="Crust on a peninsula in western int but now we can better understand what’s happening" link_text="Know more" photo="310"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service link_1="435" title="Implant dentistry" desc="Crust on a peninsula in western int but now we can better understand what’s happening" link_text="Know more" photo="310"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service upload_type="2" link_1="345" title="Great doctor" desc="Crust on a peninsula in western int but now we can better understand what’s happening" link_text="Know more" icon="fa fa-user-md"][/vc_column][/vc_row][vc_row css=".vc_custom_1512974677697{padding-bottom: 30px !important;}"][vc_column el_class="text-center"][medpro_iconic_btn button_text="More serices" link_to_page="345" show_icon="1" icon="fa fa-play-circle-o"][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="doctor-side-bg" css=".vc_custom_1514260705439{padding-top: 80px !important;padding-bottom: 30px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/side_bg.png?id=418) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title desc_option="1" title="Meet our doctors" desc="Tracks along the Hawaiian-Emperor chain formed over the same hot spot in and why are their chemical compositions so different . "][vc_empty_space height="50" el_class="hidden-md hiddend-sm"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1514260729174{padding-top: 30px !important;padding-bottom: 40px !important;}"][vc_column_inner][medpro_doctor view_type="2" count="-1" column="3" autoplay="false" dots="false"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1512975402179{padding-top: 30px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2" offset="vc_col-lg-3"][medpro_counter_box style="2" number="500" after_text="+" desc="Satisfied patients"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3"][medpro_counter_box style="2" number="120" desc="Successfull surgeries"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3"][medpro_counter_box style="2" number="5000" after_text="+" desc="Working hours"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3"][medpro_counter_box style="2" number="25" after_text="+" desc="Spacialist doctors"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1514260991104{padding-bottom: 50px !important;}"][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-4 vc_col-lg-4 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514447664812{padding-bottom: 60px !important;}"][medpro_section_title desc_option="1" title="Take care of your teeth" desc="Tracks along the Hawaiian-Emperor chain formed over and why are their chemical compositions so . "][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner offset="vc_col-lg-5"][vc_column_text el_class="ul-custom-style-2"]Saturn and its innermost ring on April 26, the first of such encou nters before it will plunge into Saturn’s atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft as .
<ul>
    <li>Chemical compositions that eventually made their way</li>
    <li>Sifting through teaspoons of clay and sand scraped from</li>
    <li>Looking for these genetic signposts in sediment has</li>
    <li>Would ever be possible to fish out gene fragments that</li>
    <li>Scientists led by Matthias Meyer at the Max Planck Institute</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner el_class="sm-padding-b-30 " width="1/2" offset="vc_col-lg-4"][medpro_tile_gallery height="200" images="523,524,525,526"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3"][medpro_working_time theme="2" title="Opening time" text_color="#464646" overlay="#f2fbff" working_bg="510" works_time="%5B%7B%22wor_time%22%3A%22Monday%20-%208%3A00am%20-%2012%3A00pm%22%7D%2C%7B%22wor_time%22%3A%22Tuesday%20-%208%3A00am%20-%204%3A30pm%22%7D%2C%7B%22wor_time%22%3A%22Friday%20-%208%3A00am%20-%203%3A00pm%22%7D%5D" contact="%5B%7B%22con_icon%22%3A%22fa%20fa-phone%22%2C%22con_text%22%3A%22(356)%2000265464%22%7D%2C%7B%22con_icon%22%3A%22fa%20fa-envelope%22%2C%22con_text%22%3A%22yourmedical%40gmail.com%22%7D%5D"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1514261093482{padding-bottom: 0px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514447678854{padding-top: 30px !important;padding-bottom: 50px !important;}"][medpro_section_title desc_option="1" title="Testomonial" desc="Tracks along the Hawaiian-Emperor chain formed over the same hot spot in and why are their chemical compositions so different . "][/vc_column][/vc_row][vc_row css=".vc_custom_1512975678029{padding-bottom: 60px !important;}"][vc_column][medpro_testimonial view_type="2" count="-1" category="18" nav="false" autoplay="false"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Homepage 02 == */



/* == Home page 03 == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_homepage_03' );
function medpro_toolkit_custom_template_homepage_03( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '03 - medpro homepage 03', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][medpro_slides height="600" arrows="false" dots="true" style="3"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514261248394{margin-top: 80px !important;margin-bottom: 80px !important;padding-top: 100px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/home_img_5.jpg?id=530) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}" el_class="side-img"][vc_column offset="vc_col-lg-offset-7 vc_col-lg-5"][vc_column_text el_class="font-light"]
<h3>Welcome to our Eye center</h3>
<h5>We are best eye care and we are ready to help!</h5>
[/vc_column_text][vc_empty_space height="20" el_class="hiddend-sm"][vc_column_text]Crust on a peninsula in western Russia. But now we can better understand what’s happening below by looking at Mauna Kea and Mauna Loa, said Mr. Jones. The prevailing hypothesis has been that volcanoes like these two in Hawaii are chemical fing erprints of the Earth’s composition at the deep mantle,[/vc_column_text][medpro_video_popup theme="2" text_link="1" video_url="https://www.youtube.com/watch?v=e9RMLDvyxjg" link_with_text="See about us"][/vc_column][/vc_row][vc_row css=".vc_custom_1512976407362{padding-bottom: 30px !important;}"][vc_column width="2/3" css=".vc_custom_1514450188143{padding-top: 30px !important;}" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title theme="2" desc_option="1" title="Eye care service" desc="Student at Australian National University and the lead author of a published in Nature on Wednesday that may hold answer."][/vc_column][/vc_row][vc_row css=".vc_custom_1514261367649{padding-bottom: 50px !important;}"][vc_column offset="vc_col-lg-4"][medpro_service service_view="2" link_1="17" bg_img="307" title="Cataract surgery" desc="Composition at the deep mantle just at the border of its core. Scientists have seismic." link_text="More details"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service service_view="2" link_1="17" bg_img="315" title="General ophtalmlogy" desc="Composition at the deep mantle just at the border of its core. Scientists have seismic." link_text="More details"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service service_view="2" link_1="17" bg_img="316" title="Computerized eye exam" desc="Composition at the deep mantle just at the border of its core. Scientists have seismic." link_text="More details"][/vc_column][/vc_row][vc_row css=".vc_custom_1514261373394{padding-bottom: 80px !important;}"][vc_column el_class="text-center"][medpro_iconic_btn btn_style="3" button_text="Browse all service" link_to_page="222" show_icon="1" icon="fa fa-angle-right"][/vc_column][/vc_row][vc_row][vc_column offset="vc_col-lg-6 vc_col-md-6" el_class="sm-padding-b-30 padding-bottom-30"][vc_column_text el_class="ul-custom-style-2 font-light"]
<h3>We have world class top contact lenses</h3>
Laboratory An absolutely amazing and exciting paper,” added David Reich, professor at Harvard who focuses on ancient Until recently the only way to the genes of ancient humans like the Neanderthals cousins.
<ul>
    <li>Would ever be possible to fish out gene fragments that were tens.</li>
    <li>Limited by the availability of fossil bones. In a lot of cases</li>
    <li>Agencies refrain from using the terms. The problem is not that</li>
    <li>People don’t believe in science, but that they pick and choose</li>
    <li>Agencies refrain from using the terms The problem is not the are</li>
</ul>
[/vc_column_text][medpro_iconic_btn button_text="Read details" link_to_page="345"][/vc_column][vc_column offset="vc_col-lg-6 vc_col-md-6"][vc_single_image image="2048" img_size="large"][/vc_column][/vc_row][vc_row css=".vc_custom_1512976407362{padding-bottom: 30px !important;}"][vc_column width="2/3" css=".vc_custom_1514450198757{padding-top: 50px !important;padding-bottom: 20px !important;}" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title theme="2" desc_option="1" title="Our medical doctor" desc="Student at Australian National University and the lead author of a published in Nature on Wednesday that may hold answer."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514261643449{padding-bottom: 40px !important;}"][vc_column][medpro_doctor view_type="2" style="3" count="-1" autoplay="false"][/vc_column][/vc_row][vc_row css=".vc_custom_1514261650730{padding-top: 40px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title theme="2" desc_option="1" title="Testimonial" desc="Student at Australian National University and the lead author of a published in Nature on Wednesday that may hold answer."][vc_empty_space height="50" el_class="hidden-md hiddend-sm "][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514261778369{padding-top: 30px !important;padding-bottom: 80px !important;}"][vc_column][medpro_testimonial view_type="2" style="2" count="-1" category="18" autoplay="false"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Home page 03 == */



/* == Single Service == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_homepage_04' );
function medpro_toolkit_custom_template_homepage_04( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '04 - medpro homepage 04', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][medpro_slides count="2" height="600" dots="true" autoplay="false" style="4"][/vc_column][/vc_row][vc_row css=".vc_custom_1514262067775{padding-bottom: 50px !important;}"][vc_column width="2/3" css=".vc_custom_1514450384948{padding-top: 80px !important;}" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title theme="3" desc_option="1" title="Our service" desc="Expression of modern scientific inquiry and exposition Its opening follows a series of setbacks and lawsuits and "][/vc_column][/vc_row][vc_row css=".vc_custom_1513506222358{padding-bottom: 40px !important;}"][vc_column offset="vc_col-lg-4"][medpro_service service_view="3" link_1="13" bg_img="322" title="Family planning" desc="Composition at the deep mantle just at the border its core Scientists have seismic evidence that deep part of the mantle is graveyard ." link_text="Read more"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service service_view="3" link_1="13" bg_img="320" title="Preatal ultrasund" desc="Composition at the deep mantle just at the border its core Scientists have seismic evidence that deep part of the mantle is graveyard ." link_text="Read more"][/vc_column][vc_column offset="vc_col-lg-4"][medpro_service service_view="3" link_1="13" bg_img="321" title="High risk pregnancy care" desc="Composition at the deep mantle just at the border its core Scientists have seismic evidence that deep part of the mantle is graveyard ." link_text="Read more"][/vc_column][/vc_row][vc_row css=".vc_custom_1513506237074{padding-top: 40px !important;}"][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514450425266{padding-bottom: 30px !important;}"][medpro_section_title desc_option="1" title="Baby care tips" desc="Expression of modern scientific inquiry and exposition Its opening follows a series of setbacks and lawsuits and "][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1514526370476{padding-top: 50px !important;}" el_class="padding-bottom-30"][vc_column_inner el_class="padding-bottom-30 sm-padding-b-30" offset="vc_col-lg-5 vc_col-md-5"][vc_column_text]Mauna Loa the biggest volcano on Earth and one of the most active covers half the Island of Hawaii Just miles to the northeast Mauna above sea level. To them it represents a spiritual .[/vc_column_text][vc_column_text el_class="custom-ul-style-3"]
<ul>
    <li>Especially significant in a state imperiled by rising sea.</li>
    <li>What he had expected was something more like the din of</li>
    <li>Understand how the system works, we have to look at</li>
    <li>Called which they paired with a remotely operated vehicle.</li>
    <li>Cassini here until the mission’s final months. As a</li>
</ul>
[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="19" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner offset="vc_col-lg-7 vc_col-md-7"][medpro_tile_gallery images="1942,1943,1944,1945,1946"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1514262282908{padding-top: 80px !important;}"][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514450461210{padding-bottom: 50px !important;}"][medpro_section_title theme="3" desc_option="1" title="Procedures" desc="Expression of modern scientific inquiry and exposition Its opening follows a series of setbacks and lawsuits and "][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1514262240942{padding-top: 0px !important;}"][vc_column][vc_tta_tabs active_section="1" el_class="custom-tab-style"][vc_tta_section title="Prental care" tab_id="1513143855205-7729877f-bf41"][vc_row_inner][vc_column_inner width="7/12"][vc_column_text]
<h5>Prental care</h5>
Would be traveling at more than 70,000 miles per hour as it passed within 2,000 miles of the cloud tops, and a chance hit with a sand grain could be trouble. The analysis indicated that the chances of such a collision were until the mission’s final months the spacecraft was .

Pound oculus, a lens that will give the impression of seeing the fish from the bottom of huge cocktail glass And that’s just one of attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost .[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="13" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="5/12"][vc_single_image image="584" img_size="large"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Morning sickness" tab_id="1513144778763-2f93dd18-7506"][vc_row_inner][vc_column_inner width="7/12"][vc_column_text]
<h5>Morning sickness</h5>
Would be traveling at more than 70,000 miles per hour as it passed within 2,000 miles of the cloud tops, and a chance hit with a sand grain could be trouble. The analysis indicated that the chances of such a collision were until the mission’s final months the spacecraft was .

Pound oculus, a lens that will give the impression of seeing the fish from the bottom of huge cocktail glass And that’s just one of attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost .[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="13" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="5/12"][vc_single_image image="584" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Diet schedule" tab_id="1513144775548-2e6496d7-35d1"][vc_row_inner][vc_column_inner width="7/12"][vc_column_text]
<h5>Diet schedule</h5>
Would be traveling at more than 70,000 miles per hour as it passed within 2,000 miles of the cloud tops, and a chance hit with a sand grain could be trouble. The analysis indicated that the chances of such a collision were until the mission’s final months the spacecraft was .

Pound oculus, a lens that will give the impression of seeing the fish from the bottom of huge cocktail glass And that’s just one of attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost .[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="13" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="5/12"][vc_single_image image="484" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Expert’s advice" tab_id="1513145425325-03ea4883-d77b"][vc_row_inner][vc_column_inner width="7/12"][vc_column_text]
<h5>Expert’s advice</h5>
Would be traveling at more than 70,000 miles per hour as it passed within 2,000 miles of the cloud tops, and a chance hit with a sand grain could be trouble. The analysis indicated that the chances of such a collision were until the mission’s final months the spacecraft was .

Pound oculus, a lens that will give the impression of seeing the fish from the bottom of huge cocktail glass And that’s just one of attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost .[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="13" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="5/12"][vc_single_image image="484" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Baby vaccination" tab_id="1513145460587-4d918492-b58d"][vc_row_inner][vc_column_inner width="7/12"][vc_column_text]
<h5>Baby vaccination</h5>
Would be traveling at more than 70,000 miles per hour as it passed within 2,000 miles of the cloud tops, and a chance hit with a sand grain could be trouble. The analysis indicated that the chances of such a collision were until the mission’s final months the spacecraft was .

Pound oculus, a lens that will give the impression of seeing the fish from the bottom of huge cocktail glass And that’s just one of attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost .[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="13" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="5/12"][vc_single_image image="484" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Surgery practice" tab_id="1513145487093-15bf57f9-37eb"][vc_row_inner][vc_column_inner width="7/12"][vc_column_text]
<h5>Surgery practice</h5>
Would be traveling at more than 70,000 miles per hour as it passed within 2,000 miles of the cloud tops, and a chance hit with a sand grain could be trouble. The analysis indicated that the chances of such a collision were until the mission’s final months the spacecraft was .

Pound oculus, a lens that will give the impression of seeing the fish from the bottom of huge cocktail glass And that’s just one of attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost .[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="Read more" link_to_page="13" show_icon="1" btn_color="#ffffff" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="5/12"][vc_single_image image="47" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row][vc_row css=".vc_custom_1514262323172{padding-top: 80px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514450480548{padding-bottom: 50px !important;}"][medpro_section_title theme="3" desc_option="1" title="Appointment" desc="Expression of modern scientific inquiry and exposition Its opening follows a series of setbacks and lawsuits and "][vc_empty_space height="50" el_class="hidden-md"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][vc_single_image image="566" img_size="large" el_class="hidden-md"][/vc_column][vc_column el_class="form-style-2" offset="vc_col-lg-8"][contact-form-7 id="564"][/vc_column][/vc_row][vc_row css=".vc_custom_1514262567326{padding-top: 80px !important;}"][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title theme="3" desc_option="1" title="Testomonial" desc="Expression of modern scientific inquiry and exposition Its opening follows a series of setbacks and lawsuits and "][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514262552330{padding-top: 60px !important;padding-bottom: 80px !important;}"][vc_column][medpro_testimonial view_type="2" style="3" column="1" autoplay="false"][/vc_column][/vc_row][vc_row css=".vc_custom_1514262535423{padding-bottom: 0px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514450521246{padding-bottom: 60px !important;}"][medpro_section_title theme="3" desc_option="1" title="Latest news" desc="Expression of modern scientific inquiry and exposition Its opening follows a series of setbacks and lawsuits and "][/vc_column][/vc_row][vc_row css=".vc_custom_1514262436855{padding-bottom: 80px !important;}"][vc_column][medpro_posts blog_style="2" columns="3" count="3"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Homepage 04 == */



/* == Hompage 05 == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_homepage_05' );
function medpro_toolkit_custom_template_homepage_05( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '05 - medpro homepage 05', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][medpro_slides autoplay="false" style="5"][/vc_column][/vc_row][vc_row css=".vc_custom_1516341245319{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_column width="1/4"][medpro_promo_box style="3" title="Call now !" img="139" bg_img="138" promo_text="(062) 109-9222"][/vc_column][vc_column width="1/4"][medpro_promo_box style="3" title="Call now !" img="139" bg_img="138" promo_text="(062) 109-9222"][/vc_column][vc_column width="1/4"][medpro_promo_box style="3" title="Call now !" img="139" bg_img="138" promo_text="(062) 109-9222"][/vc_column][vc_column width="1/4"][medpro_promo_box style="3" title="Call now !" img="139" bg_img="138" promo_text="(062) 109-9222"][/vc_column][/vc_row][vc_row css=".vc_custom_1516341481757{padding-bottom: 80px !important;}"][vc_column width="1/2"][medpro_section_title theme="4" text_align="left" title="Highly Professional Psychologist"][vc_column_text]Tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pa why are their chemical compositions so different? We knew this was related to som deeper, but we couldn’t see what,” said Tim Jones, an earth science .

National University and the lead author of a paper published in Nature on Wednes hold the answer. Mr. Jones and his colleagues developed a model that simulatesw in our planet’s mantle, beneath the crust that we live on,[/vc_column_text][medpro_iconic_btn btn_style="4" button_text="More information" link_to_page="19" btn_color="#ffffff"][/vc_column][vc_column width="1/2"][medpro_tile_gallery height="350" images="1953,1954,1955"][/vc_column][/vc_row][vc_row css=".vc_custom_1516341990350{padding-top: 60px !important;padding-bottom: 40px !important;}"][vc_column][medpro_section_title theme="4" text_align="left" title="Our Psychotherpy Service"][/vc_column][/vc_row][vc_row css=".vc_custom_1516342362212{padding-bottom: 70px !important;}"][vc_column][vc_tta_tabs active_section="1" el_class="custom-tab-style-2"][vc_tta_section title="Couples therapy" tab_id="Couplestherapy"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="70"][vc_column_text]
<h5>Couples therapy</h5>
Laboratory An absolutely amazing and exciting paper,” added David Reich, a genetics professor at Harvard who focuses on ancient Until recently, the only way to study the genes of ancient humans like the Neanderthals and their cousins[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="1861" img_size="large"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Family practice" tab_id="Familypractice"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="70"][vc_column_text]
<h5>Family practice</h5>
Laboratory An absolutely amazing and exciting paper,” added David Reich, a genetics professor at Harvard who focuses on ancient Until recently, the only way to study the genes of ancient humans like the Neanderthals and their cousins[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="1861" img_size="large"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Anzicty treatment" tab_id="Anzictytreatment"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="70"][vc_column_text]
<h5>Anzicty treatment</h5>
Laboratory An absolutely amazing and exciting paper,” added David Reich, a genetics professor at Harvard who focuses on ancient Until recently, the only way to study the genes of ancient humans like the Neanderthals and their cousins[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="1861" img_size="large"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Depression therapy" tab_id="Depressiontherapy"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="70"][vc_column_text]
<h5>Depression therapy</h5>
Laboratory An absolutely amazing and exciting paper,” added David Reich, a genetics professor at Harvard who focuses on ancient Until recently, the only way to study the genes of ancient humans like the Neanderthals and their cousins[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="1861" img_size="large"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Group therapy" tab_id="Grouptherapy"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="70"][vc_column_text]
<h5>Depression therapy</h5>
Laboratory An absolutely amazing and exciting paper,” added David Reich, a genetics professor at Harvard who focuses on ancient Until recently, the only way to study the genes of ancient humans like the Neanderthals and their cousins[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="1861" img_size="large"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row][vc_row css=".vc_custom_1516342580191{padding-bottom: 60px !important;}"][vc_column width="2/3"][medpro_section_title theme="4" text_align="left" title="Meet with our doctor"][vc_empty_space height="40"][medpro_doctor style="4" count="4" column="1"][/vc_column][vc_column width="1/3"][medpro_section_title theme="4" text_align="left" title="Meet with our doctor"][vc_empty_space height="40"][medpro_posts blog_style="3" count="3"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1516342678992{padding-top: 40px !important;padding-bottom: 40px !important;background-color: #f3fff8 !important;}"][vc_column width="1/4"][medpro_counter_box style="3" img="156" number="2605" desc="Days of expiriense "][/vc_column][vc_column width="1/4"][medpro_counter_box style="3" img="157" number="590" desc="Successeful therapy"][/vc_column][vc_column width="1/4"][medpro_counter_box style="3" img="158" number="107" desc="Doctor’s awards"][/vc_column][vc_column width="1/4"][medpro_counter_box style="3" img="159" number="21302" desc="Happy customar"][/vc_column][/vc_row][vc_row css=".vc_custom_1516342958362{padding-top: 60px !important;padding-bottom: 60px !important;}"][vc_column width="1/4"][vc_empty_space height="50"][medpro_section_title theme="4" text_align="left" title="What our customer say Testomonial"][/vc_column][vc_column width="3/4"][medpro_testimonial view_type="2" style="4" count="-1" category="18" column="2" autoplay="false"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Homepage 05 == */



/* == About == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_about' );
function medpro_toolkit_custom_template_about( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '06 - medpro about', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513005758618{padding-top: 100px !important;padding-bottom: 30px !important;}"][vc_column offset="vc_col-lg-6 vc_col-md-6"][vc_column_text el_class="ul-custom-style-1"]
<h2>Welcome to our Medifair</h2>
Composition at the deep mantle just at the border of its core. Scientists have seismic evidence that the deep part of the mantle is a graveyard where long ago slabs of ea rth were subducted or thrust underneath one another creating separate regions with different chemical compositions that eventually made their way
<ul>
    <li>would ever be possible to fish out gene fragments</li>
    <li>limited by the availability of fossil bones.</li>
    <li>Crust on a peninsula in western Russia But now.</li>
    <li>especially significant in a state imperiled by rising</li>
</ul>
Laboratory.An absolutely amazing and exciting paper,” added David Reich, a genetics professor at Harvard who focuses on ancient DNA Until recently, the only way to stud y the genes of ancient humans like the Neanderthals and their cousins.[/vc_column_text][/vc_column][vc_column offset="vc_col-lg-6 vc_col-md-6"][medpro_video_popup text_link="1" bg_img="441" height="480" video_url="https://www.youtube.com/watch?v=sKVYLkdYJWw" link_with_text="Our Medical environment"][/vc_column][/vc_row][vc_row css=".vc_custom_1514263306770{padding-top: 20px !important;padding-bottom: 80px !important;}"][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_promo_box style="2" title="Experienced team" desc="Drifting organic matter for the animals to eat are When their filters get clogged that may Looking these genetic signposts in sediment has .
"][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_promo_box style="2" title="Primary care" desc="Drifting organic matter for the animals to eat are When their filters get clogged that may Looking these genetic signposts in sediment has .
"][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_promo_box style="2" title="Academic resasearch" desc="Drifting organic matter for the animals to eat are When their filters get clogged that may Looking these genetic signposts in sediment has .
"][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="overlay" css=".vc_custom_1512971697713{padding-top: 80px !important;padding-bottom: 80px !important;background: #44a6f0 url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/counter_bg.jpg?id=63) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_counter_box number="108" desc="Our Staff"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_counter_box number="20" desc="Years of experiance" after_text="+"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_counter_box number="1450" desc="Happy smiler"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_counter_box number="600" desc="Blood donate"][/vc_column][/vc_row][vc_row css=".vc_custom_1514263324641{padding-top: 80px !important;padding-bottom: 40px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title desc_option="1" title="Medifair Services" desc="Composition at the deep mantle, just at the border of its core Scientists have seismic evidence that the deep part of the mantle"][/vc_column][/vc_row][vc_row css=".vc_custom_1513176363257{padding-top: 15px !important;}"][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_service service_view="4" link_1="452" photo="338" title="Emergency unit" desc="Looking for these genetic signposts in first sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_service service_view="4" link_1="11" photo="339" title="Health care" desc="Looking for these genetic signposts in first sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_service service_view="4" link_type="2" photo="340" title="Qualified doctors" desc="Looking for these genetic signposts in first sediment has become possible only in the last few years with recente composition at the." link_2="http://www.google.com"][/vc_column][/vc_row][vc_row css=".vc_custom_1513176354401{padding-bottom: 60px !important;}"][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_service service_view="4" link_1="19" photo="1905" title="Ambulance" desc="Looking for these genetic signposts in first sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_service service_view="4" photo="476" title="Drag Store" desc="Looking for these genetic signposts in first sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][medpro_service service_view="4" link_type="2" photo="477" title="DNA testing" desc="Looking for these genetic signposts in first sediment has become possible only in the last few years with recente composition at the." link_2="http://www.google.com"][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="doctor-side-bg" css=".vc_custom_1513005918530{margin-bottom: 50px !important;padding-top: 30px !important;padding-bottom: 30px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/doctor_side_bg.png?id=87) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column][vc_row_inner css=".vc_custom_1514263340462{padding-bottom: 50px !important;}"][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2" css=".vc_custom_1514452205537{padding-bottom: 20px !important;}"][medpro_section_title desc_option="1" title="Medifair Doctors" desc="Composition at the deep mantle, just at the border of its core Scientists have seismic evidence that the deep part of the mantle"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner el_class="sm-padding-b-30 padding-bottom-30" css=".vc_custom_1514526859563{padding-top: 0px !important;}" offset="vc_col-lg-3"][vc_empty_space height="60" el_class="hiddend-sm hidden-md"][vc_column_text el_class="margin-bottom-15"]
<h4>About our doctors</h4>
&nbsp;

Because the animals’ houses were too fragile to be harvested and collected specimens were never able to build houses outside the ocean.To study the zooplankton in their natural.[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-plus"][/vc_column_inner][vc_column_inner width="3/4"][medpro_doctor column="3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End About == */



/* == Services == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_service' );
function medpro_toolkit_custom_template_service( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '07 - medpro services', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513087593246{padding-top: 80px !important;}"][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="338" title="Emergency unit" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="339" title="Health care" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="340" title="Qualified doctors" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][/vc_row][vc_row][vc_column width="1/3"][medpro_service service_view="4" upload_type="2" link_1="452" title="Ambulance" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the." icon="fa fa-ambulance"][/vc_column][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="476" title="Drag store" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="477" title="DNA testing" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][/vc_row][vc_row css=".vc_custom_1513087598885{padding-bottom: 80px !important;}"][vc_column width="1/3"][medpro_service service_view="4" link_1="452" title="Outdoor Checkup" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the." photo="480"][/vc_column][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="478" title="Blood Test" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][vc_column width="1/3"][medpro_service service_view="4" link_1="452" photo="479" title="Cancer Service" desc="Looking for these genetic signposts in good sediment has become possible only in the last few years with recente composition at the."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1513087877546{padding-top: 60px !important;padding-bottom: 60px !important;background: #44a6f0 url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/counter_bg.jpg?id=63) !important;}" el_class="overlay"][vc_column width="1/4"][medpro_counter_box number="108" desc="Out Staff"][/vc_column][vc_column width="1/4"][medpro_counter_box number="20" desc="Year of experiance" after_text="+"][/vc_column][vc_column width="1/4"][medpro_counter_box number="1450" desc="Happy smiller"][/vc_column][vc_column width="1/4"][medpro_counter_box number="655" desc="Blood donate"][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="doctor-side-bg" css=".vc_custom_1513088330611{margin-bottom: 50px !important;padding-top: 80px !important;padding-bottom: 50px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/doctor_side_bg.png?id=87) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][medpro_section_title desc_option="1" title="Medifair Doctors" desc="Composition at the deep mantle, just at the border of its core Scientists have seismic vidence that the deep part of the mantle"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1514527141866{padding-top: 40px !important;}"][vc_column_inner el_class="sm-padding-b-30 padding-bottom-30" offset="vc_col-lg-3"][vc_column_text]
<h5>About our doctors</h5>
[/vc_column_text][vc_column_text]Because the animals’ houses were too fragile to be harvested and collected specimens were never able to build houses outside the ocean.To study the zooplankton in their natural.[/vc_column_text][medpro_iconic_btn link_to_page="19" show_icon="1" icon="fa fa-plus"][/vc_column_inner][vc_column_inner width="3/4"][medpro_doctor column="3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Services == */



/* == Single service == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_single_service' );
function medpro_toolkit_custom_template_single_service( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '08 - medpro single service', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513055043701{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_column offset="vc_col-lg-6 vc_col-md-6"][vc_single_image image="454" img_size="large"][vc_column_text el_class="single-service"]
<h5>Emergency unit</h5>
Looking for these genetic signposts in sediment has become possible only in the la st few years with recente composition at the deep composition at the deep mantle, just at the border of its core. Scientists have seismic evidence that the deep part of the mantle is a graveyard where long ago slabs of earth were subducted.

Student at Australian National University and the lead author of a paper published in Nature on Wednesday that may hold the answer. Mr. Jones and his colleagues developed a model that simulates what’s happening in our planet’s mantle .
<blockquote>
<h5>Minim veniam, quis laboris commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</h5>
From Rasel Ahmed</blockquote>
<ul>
    <li>would ever be possible to fish out gene fragments</li>
    <li>limited by the availability of fossil bones.</li>
    <li>Crust on a peninsula in western Russia But now.</li>
    <li>especially significant in a state imperiled by rising</li>
    <li>limited by the availability of fossil bones.</li>
    <li>Crust on a peninsula in western Russia But now.</li>
    <li>especially significant in a state imperiled by rising</li>
</ul>
Expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the square-foot structure At one point the project ran precariously short of money The museum’s high-profile open especially significant in a state imperiled by rising sea levels

Wednesday scientists near California’s Monterey Bay have found that through this process, giant larvaceans can filter all of the bay’s watere .[/vc_column_text][/vc_column][vc_column offset="vc_col-lg-6 vc_col-md-6"][vc_column_text el_class="ul-custom-style-1"]
<h2>Make an appoinment now!</h2>
Promises to open new avenues of research into human prehistory and was met with excitement by geneticists and .[/vc_column_text][contact-form-7 id="4"][vc_empty_space height="70"][vc_column_text el_class="single-service"]
<h2>More medical service</h2>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][medpro_single_service link_to_page="452" img_icon="339" service_title="Health care"][/vc_column_inner][vc_column_inner width="1/2"][medpro_single_service link_type="2" img_icon="340" service_title="Qualified doctors" link_to_external="http://wpfoxcoder.com"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][medpro_single_service icon_type="2" link_to_page="452" service_title="Ambulance service" fa_icon="fa fa-ambulance"][/vc_column_inner][vc_column_inner width="1/2"][medpro_single_service link_type="2" img_icon="476" service_title="Drag store" link_to_external="http://wpfoxcoder.com"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][medpro_single_service link_to_page="452" service_title="DNA testing" img_icon="477"][/vc_column_inner][vc_column_inner width="1/2"][medpro_single_service link_type="2" img_icon="480" service_title="Outdoor Checkup" link_to_external="http://wpfoxcoder.com"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][medpro_single_service link_to_page="452" service_title="Blood Test" img_icon="478"][/vc_column_inner][vc_column_inner width="1/2"][medpro_single_service link_type="2" img_icon="479" service_title="Cancer Service" link_to_external="http://wpfoxcoder.com"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Single service == */









/* == Department == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_department' );
function medpro_toolkit_custom_template_department( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '09 - medpro department', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513579329752{padding-top: 80px !important;}"][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="1797" dep_icon="1784" dep_title="Plastic Surgery"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="15" dep_icon="1786" dep_title="Rhinonology"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="15" dep_icon="1787" dep_title="Nurology"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department icon_type="2" link_to_page="15" dep_title="Otology" fa_icon="fa fa-heartbeat"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1513579338121{padding-bottom: 80px !important;}"][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="15" dep_icon="1790" dep_title="Pulmonology"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="15" dep_icon="1793" dep_title="Orthopedies"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="15" dep_icon="1791" dep_title="Urology"][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_department link_to_page="15" dep_title="Eye care" dep_icon="1792"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Department == */







/* == Single deparment == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_single_department' );
function medpro_toolkit_custom_template_single_department( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '10 - medpro single department', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513579577833{padding-top: 100px !important;padding-bottom: 40px !important;}"][vc_column width="1/2" el_class="single-department sm-padding-b-30"][vc_column_text]Wednesday scientists near California’s Monterey Bay have found that, through this process giant larvaceans can filter all of the bay’s water from about 300 to 1,000 feet deep in less than two.

Managers did not send Cassini here until the mission’s final months As a better saf than sorry precaution the spacecraft was pointed with its big radio dish facing forw ard like a shield. Not only was there nothing.

Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into Saturn’s atmosphere in September .[/vc_column_text][medpro_iconic_btn btn_style="2" button_text="Appointment" link_to_page="616" show_icon="1" btn_color="#ffffff" icon="fa fa-plus"][/vc_column][vc_column width="1/2"][vc_single_image image="1800" img_size="large"][/vc_column][/vc_row][vc_row css=".vc_custom_1513580058853{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_column width="1/2" offset="vc_col-lg-4 vc_col-md-4"][vc_column_text el_class="single-department"]
<h5>Treatments:</h5>
<ul>
    <li>Captopril Renogram <strong>$300</strong></li>
    <li>Paratyroid scan <strong>$450</strong></li>
    <li>Heart Patient <strong>$95</strong></li>
    <li>Liposuction <strong>$185</strong></li>
    <li>Tummy Tuck <strong>$145</strong></li>
    <li>Cardiac ablation <strong>$360</strong></li>
</ul>
[/vc_column_text][/vc_column][vc_column width="1/2" offset="vc_col-lg-offset-1 vc_col-lg-4 vc_col-md-4"][vc_column_text el_class="single-department"]
<h5>Investigation:</h5>
<ul>
    <li>Gastroscopy <strong>$170</strong></li>
    <li>Paratyroid Scan<strong> $333</strong></li>
    <li>Allergy Testing <strong>$125</strong></li>
    <li>CT scan <strong>$135</strong></li>
    <li>Full Blood Picture <strong>$195</strong></li>
    <li>Bronchoscopy<strong> $139</strong></li>
</ul>
[/vc_column_text][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-3"][medpro_working_time height="420" working_bg="505" works_time="%5B%7B%22wor_time%22%3A%22Monday%20-%2008%3A00am%20-%2010%3A00pm%20%22%7D%2C%7B%22wor_time%22%3A%22Saturday%20-%2010%3A00am%20-%2007%3A00pm%20%22%7D%2C%7B%22wor_time%22%3A%22Sunday%20-%20Emergency%20Only%22%7D%2C%7B%22wor_time%22%3A%22Monday%20-%208%3A00%20AM%20%E2%80%93%2010%3A00%20pm%22%7D%2C%7B%22wor_time%22%3A%22Tuesday%20-%208%3A00%20AM%20%E2%80%93%207%3A00%20pm%22%7D%2C%7B%22wor_time%22%3A%22%20Ambulance%2024%2F7%20Service%20%22%7D%5D"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1513581507317{padding-top: 40px !important;padding-bottom: 45px !important;background-image: url(http://dedicated.crazycafe.net/medpro/wp-content/uploads/2017/12/doctor_side_bg.png?id=87) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}" el_class="doctor-side-bg"][vc_column][vc_row_inner css=".vc_custom_1513581405986{padding-bottom: 30px !important;}"][vc_column_inner width="2/3" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2"][vc_column_text el_class="text-center"]
<h2>Medifair Doctors</h2>
Composition at the deep mantle, just at the border of its core Scientists have seismic evidence that the deep part of the mantle[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner el_class="sm-padding-b-30" width="1/4"][vc_empty_space height="70" el_class="hiddend-sm"][vc_column_text]
<h5>About our doctors</h5>
&nbsp;

Because the animals’ houses were too fragile to be harvested and collected specimens were never able to build houses outside the ocean.To study the zooplankton in their natural.[/vc_column_text][medpro_iconic_btn link_to_page="17" show_icon="1" icon="fa fa-plus"][/vc_column_inner][vc_column_inner width="3/4"][medpro_doctor column="3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="80"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Single Department == */







/* == Doctor == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_doctor' );
function medpro_toolkit_custom_template_doctor( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '11 - medpro doctor', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513748431982{padding-top: 50px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6"][medpro_section_title theme="3" title="Doctors style 1"][/vc_column][/vc_row][vc_row][vc_column][medpro_doctor count="4"][/vc_column][/vc_row][vc_row][vc_column][medpro_doctor view_type="2" count="-1" autoplay="false"][/vc_column][/vc_row][vc_row css=".vc_custom_1513748431982{padding-top: 50px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6"][medpro_section_title theme="3" title="Doctors style 2"][/vc_column][/vc_row][vc_row][vc_column][medpro_doctor style="2" column="3"][/vc_column][/vc_row][vc_row][vc_column][medpro_doctor view_type="2" style="2" count="-1" column="3" autoplay="false"][/vc_column][/vc_row][vc_row css=".vc_custom_1513748431982{padding-top: 50px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6"][medpro_section_title theme="3" title="Doctors style 3"][/vc_column][/vc_row][vc_row][vc_column][medpro_doctor style="3" count="4"][/vc_column][/vc_row][vc_row][vc_column][medpro_doctor view_type="2" style="3" count="-1"][/vc_column][/vc_row][vc_row css=".vc_custom_1513748431982{padding-top: 50px !important;padding-bottom: 0px !important;}"][vc_column width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6"][medpro_section_title theme="2" title="Doctors style 4"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][medpro_doctor style="4" count="4" column="1"][/vc_column][vc_column width="1/3"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Doctor == */





/* == Price table == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_price_table' );
function medpro_toolkit_custom_template_price_table( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '12- medpro price table', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1512918480842{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][medpro_price_table theme="2" duration_type="Weekly" link_to_page="19" titles="%5B%7B%7D%5D" feature_items="%5B%7B%22sin_item%22%3A%2224%2F7%20General%20Care%22%7D%2C%7B%22sin_item%22%3A%22100%20Clinic%20Hours%22%7D%2C%7B%22sin_item%22%3A%224%20Appointments%22%7D%2C%7B%22sin_item%22%3A%221%20Orthopan%20Scan%22%7D%5D"][/vc_column][vc_column width="1/3"][medpro_price_table theme="2" price_title="Standard" price_tag="$60.85" link_type="2" titles="%5B%7B%7D%5D" feature_items="%5B%7B%22sin_item%22%3A%2224%2F7%20General%20Care%22%7D%2C%7B%22sin_item%22%3A%22100%20Clinic%20Hours%22%7D%2C%7B%22sin_item%22%3A%224%20Appointments%22%7D%2C%7B%22sin_item%22%3A%221%20Orthopan%20Scan%22%7D%5D" link_to_external="http://www.google.com"][/vc_column][vc_column width="1/3"][medpro_price_table theme="2" price_title="Premium" price_tag="$80.85" duration_type="Yearly" link_type="2" titles="%5B%7B%7D%5D" feature_items="%5B%7B%22sin_item%22%3A%2224%2F7%20General%20Care%22%7D%2C%7B%22sin_item%22%3A%22100%20Clinic%20Hours%22%7D%2C%7B%22sin_item%22%3A%224%20Appointments%22%7D%2C%7B%22sin_item%22%3A%221%20Orthopan%20Scan%22%7D%5D" link_to_external="http://www.google.com"][/vc_column][/vc_row][vc_row css=".vc_custom_1512918480842{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][medpro_price_table duration_type="Weekly" link_to_page="222" titles="%5B%7B%7D%5D" feature_items="%5B%7B%22sin_item%22%3A%2224%2F7%20General%20Care%22%7D%2C%7B%22sin_item%22%3A%22100%20Clinic%20Hours%22%7D%2C%7B%22sin_item%22%3A%224%20Appointments%22%7D%2C%7B%22sin_item%22%3A%221%20Orthopan%20Scan%22%7D%5D"][/vc_column][vc_column width="1/3"][medpro_price_table price_title="Standard" price_tag="$60.85" link_type="2" titles="%5B%7B%7D%5D" feature_items="%5B%7B%22sin_item%22%3A%2224%2F7%20General%20Care%22%7D%2C%7B%22sin_item%22%3A%22100%20Clinic%20Hours%22%7D%2C%7B%22sin_item%22%3A%224%20Appointments%22%7D%2C%7B%22sin_item%22%3A%221%20Orthopan%20Scan%22%7D%5D" link_to_external="http://www.google.com"][/vc_column][vc_column width="1/3"][medpro_price_table price_title="Premium" price_tag="$80.85" duration_type="Yearly" link_type="2" titles="%5B%7B%7D%5D" feature_items="%5B%7B%22sin_item%22%3A%2224%2F7%20General%20Care%22%7D%2C%7B%22sin_item%22%3A%22100%20Clinic%20Hours%22%7D%2C%7B%22sin_item%22%3A%224%20Appointments%22%7D%2C%7B%22sin_item%22%3A%221%20Orthopan%20Scan%22%7D%5D" link_to_external="http://www.google.com"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Price tabl == */



/* == Testimonial == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_testimonial' );
function medpro_toolkit_custom_template_testimonial( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '13- medpro testimonial', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1514263676991{padding-top: 80px !important;padding-bottom: 50px !important;}"][medpro_section_title theme="3" title="Testimonial style 1"][vc_row_inner css=".vc_custom_1514263682606{padding-bottom: 80px !important;}"][vc_column_inner][medpro_testimonial][/vc_column_inner][/vc_row_inner][medpro_testimonial view_type="2" count="-1" autoplay="false"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column css=".vc_custom_1514263676991{padding-top: 80px !important;padding-bottom: 50px !important;}"][medpro_section_title theme="3" title="Testimonial style 2"][vc_row_inner css=".vc_custom_1514263682606{padding-bottom: 80px !important;}"][vc_column_inner][medpro_testimonial style="2"][/vc_column_inner][/vc_row_inner][medpro_testimonial view_type="2" style="2" count="-1"][/vc_column][/vc_row][vc_row][vc_column][medpro_section_title theme="3" title="Testimonial style 3 - Carousel only"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column css=".vc_custom_1514263676991{padding-top: 80px !important;padding-bottom: 50px !important;}"][medpro_testimonial view_type="2" style="3" count="-1" column="1"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column css=".vc_custom_1514263676991{padding-top: 80px !important;padding-bottom: 50px !important;}"][medpro_section_title theme="3" title="Testimonial style 4"][vc_row_inner css=".vc_custom_1514263682606{padding-bottom: 80px !important;}"][vc_column_inner][medpro_testimonial style="4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column width="1/4"][medpro_section_title theme="4" text_align="left" title="Our Customer Testimonial"][/vc_column][vc_column width="3/4"][medpro_testimonial view_type="2" style="4" count="-1" column="2"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Testimonial == */


/* == FAQ == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_faq' );
function medpro_toolkit_custom_template_faq( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '14- medpro faq', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513586404074{padding-top: 80px !important;padding-bottom: 50px !important;}"][vc_column width="5/6" offset="vc_col-lg-offset-1"][vc_column_text el_class="faq-style"]
<h5>What is a Patient Centered Medical Home?</h5>
Wednesday scientists near California’s Monterey Bay have found that, through this process giant larvaceans can filter all of the bay’s water from about 300 to 1,000 feet deep in less than two weeks, making them the fastest known zooplankton filter the atmosphere by photosynthesizing organisms to the deep sea .

Managers did not send Cassini here until the mission’s final months As a better safthan sorry precaution the spacecraft was pointed with its big radio dish facing forward like a shield. Not only was there

Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into Saturn’s atmo sphere in September What Cassini did not.[/vc_column_text][vc_empty_space height="40"][vc_column_text el_class="faq-style"]
<h5>What do I need to do during registration?</h5>
Wednesday scientists near California’s Monterey Bay have found that, through this process giant larvaceans can filter all of the bay’s water from about 300 to 1,000 feet deep in less than two weeks, making them the fastest known zooplankton filter the atmosphere by photosynthesizing organisms to the deep sea .

Managers did not send Cassini here until the mission’s final months As a better safthan sorry precaution the spacecraft was pointed with its big radio dish facing forward like a shield. Not only was there[/vc_column_text][vc_empty_space height="40"][vc_column_text el_class="faq-style"]
<h5>What is the deposit amount for admission?</h5>
Wednesday scientists near California’s Monterey Bay have found that, through this process giant larvaceans can filter all of the bay’s water from about 300 to 1,000 feet deep in less than two weeks, making them the fastest known zooplankton filter the atmosphere by photosynthesizing organisms to the deep sea .

Managers did not send Cassini here until the mission’s final months As a better safthan sorry precaution the spacecraft was pointed with its big radio dish facing forward like a shield. Not only was there[/vc_column_text][vc_empty_space height="40"][vc_column_text el_class="faq-style"]
<h5>What is a Patient Centered Medical Home?</h5>
Wednesday scientists near California’s Monterey Bay have found that, through this process giant larvaceans can filter all of the bay’s water from about 300 to 1,000 feet deep in less than two weeks, making them the fastest known zooplankton filter the atmosphere by photosynthesizing organisms to the deep sea .

Managers did not send Cassini here until the mission’s final months As a better safthan sorry precaution the spacecraft was pointed with its big radio dish facing forward like a shield. Not only was there[/vc_column_text][vc_empty_space height="40"][vc_column_text el_class="faq-style"]
<h5>What does non-exclusive mean?</h5>
Wednesday scientists near California’s Monterey Bay have found that, through this process giant larvaceans can filter all of the bay’s water from about 300 to 1,000 feet deep in less than two weeks, making them the fastest known zooplankton filter the atmosphere by photosynthesizing organisms to the deep sea .

Managers did not send Cassini here until the mission’s final months As a better safthan sorry precaution the spacecraft was pointed with its big radio dish facing forward like a shield. Not only was there

Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into Saturn’s atmo sphere in September What Cassini did not.[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End faq == */




/* == appointment == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_appointment' );
function medpro_toolkit_custom_template_appointment( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '15- medpro appointment', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1513154113972{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column offset="vc_col-lg-7"][contact-form-7 id="619"][/vc_column][vc_column width="5/12" offset="vc_col-lg-5"][vc_single_image image="621" img_size="large" el_class="margin-bottom-0 display-none hiddend-sm" css=".vc_custom_1516612575885{margin-bottom: 0px !important;}"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End appointment == */



/* == gallery == */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_gallery_1' );
function medpro_toolkit_custom_template_gallery_1( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '16- medpro gallery v-1', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1514264398865{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column][medpro_project_gallery filter="2" filter_style="center"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End gallery == */



/* == gallery v2== */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_gallery_2' );
function medpro_toolkit_custom_template_gallery_2( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '17- medpro gallery v-2', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1514265774466{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column][medpro_project_gallery theme="2" filter="2" filter_style="left"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End gallery == */


/* == Contact== */
add_filter( 'vc_load_default_templates', 'medpro_toolkit_custom_template_contact' );
function medpro_toolkit_custom_template_contact( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '18- medpro contact', 'medpro-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][medpro_styled_map][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514457246748{padding-top: 80px !important;padding-bottom: 80px !important;}" el_class="mobile-p-b-30"][vc_column width="2/3" el_class="form-style-3 mobile-p-b-30 "][contact-form-7 id="1762"][/vc_column][vc_column width="1/3" el_class="iconic-shadow-box" offset="vc_col-lg-offset-1 vc_col-lg-3"][medpro_iconic_box upload_icon="1766" title="Emergency contact" desc="free call 24/ 7
(875) 466-6746"][medpro_iconic_box upload_icon="1770" title="Home visit" desc="(875) 466-6746"][medpro_iconic_box upload_icon="1771" title="Phone contact" desc="(881) 098-7269"][medpro_iconic_box icon_type="2" fa_icon="fa fa-envelope-open-o" title="Email us" desc="yframi@yahoo.com"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == Contact == */


