<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buzz_Store
 */

get_header(); ?>

<?php //do_action('buzzstore-breadcrumb-page'); ?>

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 upper-page-title">
                    <h1>Sell Your MacBook</h1>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="./" id="category_changer">
<!--        <div class="aspNetHidden">-->
<!--            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"-->
<!--                   value="v4hRd2Y75gfuyOCbCdcmf2iwtP4tvODhwL6QNn67eq/l9KbefYfouy9CNgndStpu3S3/GYfM2bhGYm+Me+mL0K7uK5SYGwWYSBkURiI1vIK58DWT"/>-->
<!--        </div>-->

<!--        <div class="aspNetHidden">-->
<!---->
<!--            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A0DDA87A"/>-->
<!--            <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value=""/>-->
<!--            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"-->
<!--                   value="6ti2k0KPQIUyAPQq8VGgLLwxW2YLsfmDYiXmDtQy+WsdtK5sp6txZ5U0uT1FYGUOJFyapncgH//TkLCF1T7gqOOAXo8YBtj4d2IOJQeqVEjDdVxKc0qUJu9mZbTHVRtx6aDCNbgTOk0lockO9eBiGZFMRJbXHxxte+R/z48Y/s3nHbs4KNZMZqgEc5razCC123xPBsL/oOTFmaw2GSwv2BUan+ZOQv0IpODyaLxZspg954QOkQtgo4m2scswG1dz5B1A7uHWutZJ5sEagUA+DJ6rwvkxalK3WcH52gjBQcSEfsco+nNT4w+hRQPEKp9tGT1BQ5ZWRlK6ypE49KF8AkYBGu5uGFf4iQsxQHoKdisa8z6ZC+cND364v+TToqcaUnGSxBhFi3s41U++sOUJ/9fy17p5t8XhDCgFvrEgcsPfqI2L/iBNU92c5NcgMdwn7bUPHJ+NOXXROLh2Zvausy/t3HO2m+GiYLxJ2dErav8wUhl9DBSIiXBvb3m8irM16VAptNw3kFxadV4FZTr9DwHBW9VFi4ay3xZRdEiEhxLgWsQbLN25/n964s4K8zSBZgIZ9HsvDOUqu4QQxssn/iJN0N6TxYQbfx8V/AcfjwlG301HAG0NTUlbngEk70BEAgHtqt3/xr64zqPvlmRu0gyFWX0hU86g9EFBnTQjpzZWAQnifSnzMttjodEnHcNstGGbJMFF8sg1CpG8DVlfnkuP36DdqtGrkQBCeNppFpEWuEtuI7mk9FJINV8FWVBr/9nSr/9cu6mexyvh+yUP+HOrugMA4Qbi6YxviYTaH7vib+/wR5iO/DhxiHYuw4gQ0fWNdUlqDBcHqFzA0/swgQeVv0E="/>-->
<!--        </div>-->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 upper-page-title">
                    <div class="info-box-up2">
                        If you cannot find your item, please select the nearest one and we will
                        update the price accordingly or call us on 0203 664 0642<br/>Please do not hesitate to contact
                        us should you have any further questions or queries
                    </div>


                    <div class="site-paging">
                        <div class="category-filtering">
                            <div class="lt_page_info">Filtering</div>
                            <div class="control-list">
                                <div id="panel_p2">

                                    <input type="submit" name="ctl00$ContentPlaceHolder1$apply_filter"
                                           value="Apply Filter" id="apply_filter" class="apply_filter"/><select
                                            name="ctl00$ContentPlaceHolder1$dp2_bca99b13-bca9-4aae-b97a-eb54586726e1"
                                            id="dp2_bca99b13-bca9-4aae-b97a-eb54586726e1" class="mithra-cat-select"
                                            name="Filter by Year" title="Filter by Year">
                                        <option value="0">Year</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>

                                    </select><select
                                            name="ctl00$ContentPlaceHolder1$dp2_173c5f03-c67d-456b-8e03-2a6b531cb0a7"
                                            id="dp2_173c5f03-c67d-456b-8e03-2a6b531cb0a7" class="mithra-cat-select"
                                            name="Filter by Color" title="Filter by Color">
                                        <option value="0">Color</option>
                                        <option value="White">White</option>
                                        <option value="Unibody">Unibody</option>
                                        <option value="Space Grey">Space Grey</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Rose Gold">Rose Gold</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Black">Black</option>

                                    </select><select
                                            name="ctl00$ContentPlaceHolder1$dp2_c6d0fda7-1cc9-4267-b128-4ed9a9ee3ba7"
                                            id="dp2_c6d0fda7-1cc9-4267-b128-4ed9a9ee3ba7" class="mithra-cat-select"
                                            name="Filter by Screen Size" title="Filter by Screen Size">
                                        <option value="0">Screen Size</option>
                                        <option value="13&quot;">13&quot;</option>
                                        <option value="12&quot;">12&quot;</option>

                                    </select><select
                                            name="ctl00$ContentPlaceHolder1$dp2_eff9e708-81a7-4a02-98ff-0feff5123f59"
                                            id="dp2_eff9e708-81a7-4a02-98ff-0feff5123f59" class="mithra-cat-select"
                                            name="Filter by RAM" title="Filter by RAM">
                                        <option value="0">RAM</option>
                                        <option value="8GB">8GB</option>
                                        <option value="512MB">512MB</option>
                                        <option value="2GB">2GB</option>
                                        <option value="1GB">1GB</option>

                                    </select><select
                                            name="ctl00$ContentPlaceHolder1$dp2_e610d3be-e81d-4317-8379-4c3e1c8a34b0"
                                            id="dp2_e610d3be-e81d-4317-8379-4c3e1c8a34b0" class="mithra-cat-select"
                                            name="Filter by Storage" title="Filter by Storage">
                                        <option value="0">Storage</option>
                                        <option value="80GB">80GB</option>
                                        <option value="60GB">60GB</option>
                                        <option value="512GB SSD">512GB SSD</option>
                                        <option value="512GB">512GB</option>
                                        <option value="256GB SSD">256GB SSD</option>
                                        <option value="256GB">256GB</option>
                                        <option value="250GB">250GB</option>
                                        <option value="160GB">160GB</option>
                                        <option value="120GB">120GB</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="category-filtering">
                            <div class="lt_page_info">
                                Page 1 from 4 - Total Items: 43
                            </div>
                            <div style=" text-align:center">
                                <span class="currentPage">1</span> /
                                <a href="/Sell/MacBook/2">2</a> /
                                <a href="/Sell/MacBook/3">3</a> /
                                <a href="/Sell/MacBook/4">4</a>
                            </div>
                        </div>
                    </div>

                    <div class="row inner-products site-prolist openh2">
                        <span id="dtpage" style="display:inline-block;width:100%;">
                            <span>
                                 <div class="col-md-3">
                                     <a href="/Sell/Apple/MacBook/MacBook-Core-m3-1.2-12-inch-256GB-Gold-2017/"
                                        title="MacBook Core m3 1.2 12 inch 256GB Gold 2017">
                                         <div class="pro_img">
                                             <img alt="MacBook Core m3 1.2 12 inch 256GB Gold 2017" src="<?php echo get_template_directory_uri() . "/assets/products/image.jpg" ?>">
                                         </div>
                                         <h2>MacBook "Core m3" 1.2 12 inch 256GB Gold (2017)</h2>
                                         <h5>We pay you <span>£750</span></h5>
                                    </a>
                                 </div>
                            </span>
                            <span>
                                <div class="col-md-3">
                                     <a href="/Sell/Apple/MacBook/MacBook-Core-i5-1.3-12-inch-512GB-Rose-Gold-2017/"
                                        title="MacBook Core i5 1.3 12 inch 512GB Rose Gold 2017">
                                         <div class="pro_img">
                                             <img alt="MacBook Core i5 1.3 12 inch 512GB Rose Gold 2017"
                                                     src="<?php echo get_template_directory_uri() . "/assets/products/image.jpg" ?>">
                                         </div>
                                         <h2>MacBook "Core i5" 1.3 12 inch 512GB Rose Gold (2017)</h2>
                                         <h5>We pay you <span>£880</span></h5>
                                     </a>
                                </div>
                            </span>
                        </span>
                    </div>

<!--                    <div class="site-paging2">-->

                        <!--                        <div class="category-filtering">-->
                        <!--                            <div class="lt_page_info">-->
                        <!--                                Page 1 from 4 - Total Items: 43-->
                        <!--                            </div>-->
                        <div style=" text-align:center">
                            <span class="currentPage">1</span> /
                            <a href="/Sell/MacBook/2">2</a> /
                            <a href="/Sell/MacBook/3">3</a> /
                            <a href="/Sell/MacBook/4">4</a>
                        </div>
                        <!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </form>


<?php get_footer();