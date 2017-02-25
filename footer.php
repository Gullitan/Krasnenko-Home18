<div class="footer">
    <div class="footer-top">
        <div class="wrap">
            <div class="section group">
                <div class="col_1_of_3 span_1_of_3">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <button class="btn1 btn-8 btn-8b">Learn more</button>
                    <h4>Photo Stream</h4>
                    <div class="gallery">
                        <ul>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/g1.jpg"
                                                                                           alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/g2.jpg"
                                                                                           alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/g3.jpg"
                                                                                           alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/g4.jpg"
                                                                                           alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/g5.jpg"
                                                                                           alt=""/></a></li>
                            <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/g6.jpg"
                                                                                           alt=""/></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col_1_of_3 span_1_of_3">
                    <h3>Latest tweets</h3>
                    <div class="footer-list">
                        <ul>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/tw.png" alt=""/>
                                <p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span> adipiscing
                                    elit, seddia<br><span class="small">&nbsp;web design</span></p>
                                <div class="clear"></div>
                            </li>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/tw.png" alt=""/>
                                <p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span> adipiscing
                                    elit, seddia<br><span class="small">&nbsp;web design</span></p>
                                <div class="clear"></div>
                            </li>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/tw.png" alt=""/>
                                <p>Lorem ipsum dolor sit amet, <span class="yellow"><a
                                            href="#">consectetuer</a></span> adipiscing elit, sed diam nonummy
                                    nibh<br><span class="small">&nbsp;web design</span></p>
                                <div class="clear"></div>
                            </li>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/tw.png" alt=""/>
                                <p>Lorem ipsum dolor sit amet, <span class="yellow"><a
                                            href="#">consectetuer</a></span> adipiscing elit, sed diam nonummy
                                    nibh<br><span class="small">&nbsp;web design</span></p>
                                <div class="clear"></div>
                            </li>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/tw.png" alt=""/>
                                <p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span> adipiscing
                                    elit, seddia<br><span class="small">&nbsp;web design</span></p>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <h4>Social Connecting</h4>
                        <?php my_social_media_icons(); ?>
                    </div>
                </div>
                <div class="col_1_of_3 span_1_of_3">
                    <h3>Contact info</h3>
                    <div class="footer-list">
                        <ul>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/address.png" alt=""/>
                                <p>Lorem ipsum dolor sit amet,consectetuer adipiscing elit, sed diam nonummy
                                    nibh<br>&nbsp;web design</p>
                                <div class="clear"></div>
                            </li>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/phone.png" alt=""/>
                                <p>Phone: +1 800 258 2689<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1
                                    800 258 2689 </p>
                                <div class="clear"></div>
                            </li>
                            <li><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/msg.png" alt=""/>
                                <p>Email: <span class="yellow"><a href="#">info(at)skokov.com</a></span></p>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="follow">
                        <h4>Follow Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod</p>
                        <div class="search">
                            <form>
                                <input type="text" value="">
                                <input type="submit" value="">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>1
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="wrap">
        <div class="copy">
            <p class="copy">
                <?php
                if (get_theme_mod('hide_copyright') == '') { ?>
                    <span>Copyright</span>
                    <?php echo get_theme_mod('copyright_year' . '') . ' - '; ?>
                    <a href="<?php the_permalink(); ?>"><?php echo get_theme_mod('copyright_name', '') . ' '; ?></a>
                    <span> - All Rights Reserved</span>
                <?php }
                ?>
            </p>
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
</body>
</html>