<?php get_header(); ?>

        <!-- Wrapper -->         
        <div id="wrapper"> 
            <!-- Header -->             
            <header id="header"> 
                <div class="content"> 
                    <div class="inner">
                        <h1><?php _e( 'MANGO', 'default_roblox_theme' ); ?></h1> 
                        <p><?php _e( 'full time fruit. software, hardware, and server admin.', 'default_roblox_theme' ); ?><br><?php _e( 'please check my "work" page for commissions status.', 'default_roblox_theme' ); ?></p>
                    </div>                     
                </div>                 
                <nav> 
                    <ul> 
                        <li>
                            <a href="#intro"><?php _e( 'Intro', 'default_roblox_theme' ); ?></a>
                        </li>                         
                        <li>
                            <a href="#work"><?php _e( 'Work', 'default_roblox_theme' ); ?></a>
                        </li>                         
                        <li>
                            <a href="#about"><?php _e( 'About', 'default_roblox_theme' ); ?></a>
                        </li>                         
                        <li>
                            <a href="#contact"><?php _e( 'Contact', 'default_roblox_theme' ); ?></a>
                        </li>                         
                        <!--<li><a href="#elements">Elements</a></li>-->                         
                    </ul>                     
                </nav>                 
            </header>             
            <!-- Main -->             
            <div id="main"> 
                <!-- Intro -->                 
                <article id="intro"> 
                    <h2 class="major"><?php _e( 'Intro', 'default_roblox_theme' ); ?></h2> 
                    <span class="image main"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic01.jpg" alt=""/></span> 
                    <p><?php _e( 'Wow intro! Welcome to my website. I really don\'t know what to put here. This website was created on the 22nd of December, 2021. I sometimes take commissions and jobs! Check out my status and stuff', 'default_roblox_theme' ); ?> <a href="#work"><?php _e( 'on my other cool area', 'default_roblox_theme' ); ?></a>.</p> 
                    <p><?php _e( 'Find me online! My names are mango, mangoDz, mangoSSH, estin. There may be a "(real)" or "(fake)" on the username.', 'default_roblox_theme' ); ?> </p> 
                </article>                 
                <!-- Work -->                 
                <article id="work"> 
                    <h2 class="major"><?php _e( 'Work', 'default_roblox_theme' ); ?></h2> 
                    <span class="image main"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic02.jpg" alt=""/></span> 
                    <p><?php _e( 'I make stuff. I take commissions for software and hardware projects, as well as SysAdmin jobs. Costs will vary from person to person and the specific job that is required.', 'default_roblox_theme' ); ?> </p> 
                    <p><?php _e( 'As of now, all of my commissions are closed. I am currently working on a project to make small E-Paper display stands that have cool animations. Once I\'m done with that, I will most likely continue commissions and start selling the final product.', 'default_roblox_theme' ); ?></p> 
                </article>                 
                <!-- About -->                 
                <article id="about"> 
                    <h2 class="major"><?php _e( 'About', 'default_roblox_theme' ); ?></h2> 
                    <span class="image main"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic03.jpg" alt=""/></span> 
                    <p><?php _e( 'Hi! Im mango or mangoDz or mangoSSH or estin. This is my website. At this time, this website is in its VERY early stages. I spent like 10 minutes wriitng these.', 'default_roblox_theme' ); ?></p> 
                </article>                 
                <!-- Contact -->                 
                <article id="contact"> 
                    <h2 class="major"><?php _e( 'Contact', 'default_roblox_theme' ); ?></h2> 
                    <form method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/#"> 
                        <p><?php _e( 'If you want to contact me, please use the methods listed below.', 'default_roblox_theme' ); ?></p> 
                        <p><?php _e( 'Discord: estin (fake)#7846', 'default_roblox_theme' ); ?> <br><?php _e( 'Telegram:', 'default_roblox_theme' ); ?> <a href="https://t.me/mangofurr" target="_blank" rel="noopener noreferrer"><?php _e( '@mangofurr', 'default_roblox_theme' ); ?></a> <br><?php _e( 'Email:', 'default_roblox_theme' ); ?> <a href="mailto:estin@femboy.market" target="_blank" rel="noopener noreferrer"><?php _e( 'estin (at) femboy.market', 'default_roblox_theme' ); ?></a></p>
                        <p> <?php _e( 'I will most likely answer within 168 hours, or within a week. Please do not contact me with advertisements, innapropriate images/words, and/or anything that you think I wouldn\'t want to see in my inbox.', 'default_roblox_theme' ); ?> </p>
                    </form>                     
                </article>                 
                <!-- Elements -->
                <article id="elements"> 
                    <h2 class="major"><?php _e( 'Elements', 'default_roblox_theme' ); ?></h2> 
                    <section> 
                        <h3 class="major"><?php _e( 'Text', 'default_roblox_theme' ); ?></h3> 
                        <p><?php _e( 'This is', 'default_roblox_theme' ); ?> <b><?php _e( 'bold', 'default_roblox_theme' ); ?></b> <?php _e( 'and this is', 'default_roblox_theme' ); ?> <strong><?php _e( 'strong', 'default_roblox_theme' ); ?></strong><?php _e( '. This is', 'default_roblox_theme' ); ?> <i><?php _e( 'italic', 'default_roblox_theme' ); ?></i> <?php _e( 'and this is', 'default_roblox_theme' ); ?> <em><?php _e( 'emphasized', 'default_roblox_theme' ); ?></em>. <?php _e( 'This is', 'default_roblox_theme' ); ?> <sup><?php _e( 'superscript', 'default_roblox_theme' ); ?></sup> <?php _e( 'text and this is', 'default_roblox_theme' ); ?> <sub><?php _e( 'subscript', 'default_roblox_theme' ); ?></sub> <?php _e( 'text.', 'default_roblox_theme' ); ?> <?php _e( 'This is', 'default_roblox_theme' ); ?> <u><?php _e( 'underlined', 'default_roblox_theme' ); ?></u> <?php _e( 'and this is code:', 'default_roblox_theme' ); ?> <code><?php _e( 'for (;;) { ... }', 'default_roblox_theme' ); ?></code><?php _e( '. Finally,', 'default_roblox_theme' ); ?> <a href="#"><?php _e( 'this is a link', 'default_roblox_theme' ); ?></a>.</p> 
                        <hr/> 
                        <h2><?php _e( 'Heading Level 2', 'default_roblox_theme' ); ?></h2> 
                        <h3><?php _e( 'Heading Level 3', 'default_roblox_theme' ); ?></h3> 
                        <h4><?php _e( 'Heading Level 4', 'default_roblox_theme' ); ?></h4> 
                        <h5><?php _e( 'Heading Level 5', 'default_roblox_theme' ); ?></h5> 
                        <h6><?php _e( 'Heading Level 6', 'default_roblox_theme' ); ?></h6> 
                        <hr/> 
                        <h4><?php _e( 'Blockquote', 'default_roblox_theme' ); ?></h4> 
                        <blockquote>
                            <?php _e( 'Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.', 'default_roblox_theme' ); ?>
                        </blockquote>                         
                        <h4><?php _e( 'Preformatted', 'default_roblox_theme' ); ?></h4> 
                        <pre><code><?php _e( 'i = 0;', 'default_roblox_theme' ); ?> <?php _e( 'while (!deck.isInOrder()) {', 'default_roblox_theme' ); ?> <?php _e( 'print \'Iteration \' + i;', 'default_roblox_theme' ); ?> <?php _e( 'deck.shuffle();', 'default_roblox_theme' ); ?> <?php _e( 'i++;', 'default_roblox_theme' ); ?>
} <?php _e( 'print \'It took \' + i + \' iterations to sort the deck.\';', 'default_roblox_theme' ); ?></code></pre> 
                    </section>                     
                    <section> 
                        <h3 class="major"><?php _e( 'Lists', 'default_roblox_theme' ); ?></h3> 
                        <h4><?php _e( 'Unordered', 'default_roblox_theme' ); ?></h4> 
                        <ul> 
                            <li>
                                <?php _e( 'Dolor pulvinar etiam.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Sagittis adipiscing.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Felis enim feugiat.', 'default_roblox_theme' ); ?>
                            </li>                             
                        </ul>                         
                        <h4><?php _e( 'Alternate', 'default_roblox_theme' ); ?></h4> 
                        <ul class="alt"> 
                            <li>
                                <?php _e( 'Dolor pulvinar etiam.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Sagittis adipiscing.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Felis enim feugiat.', 'default_roblox_theme' ); ?>
                            </li>                             
                        </ul>                         
                        <h4><?php _e( 'Ordered', 'default_roblox_theme' ); ?></h4> 
                        <ol> 
                            <li>
                                <?php _e( 'Dolor pulvinar etiam.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Etiam vel felis viverra.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Felis enim feugiat.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Dolor pulvinar etiam.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Etiam vel felis lorem.', 'default_roblox_theme' ); ?>
                            </li>                             
                            <li>
                                <?php _e( 'Felis enim et feugiat.', 'default_roblox_theme' ); ?>
                            </li>                             
                        </ol>                         
                        <h4><?php _e( 'Icons', 'default_roblox_theme' ); ?></h4> 
                        <ul class="icons"> 
                            <li>
                                <a href="#" class="icon brands fa-twitter"><span class="label"><?php _e( 'Twitter', 'default_roblox_theme' ); ?></span></a>
                            </li>                             
                            <li>
                                <a href="#" class="icon brands fa-facebook-f"><span class="label"><?php _e( 'Facebook', 'default_roblox_theme' ); ?></span></a>
                            </li>                             
                            <li>
                                <a href="#" class="icon brands fa-instagram"><span class="label"><?php _e( 'Instagram', 'default_roblox_theme' ); ?></span></a>
                            </li>                             
                            <li>
                                <a href="#" class="icon brands fa-github"><span class="label"><?php _e( 'Github', 'default_roblox_theme' ); ?></span></a>
                            </li>                             
                        </ul>                         
                        <h4><?php _e( 'Actions', 'default_roblox_theme' ); ?></h4> 
                        <ul class="actions"> 
                            <li>
                                <a href="#" class="button primary"><?php _e( 'Default', 'default_roblox_theme' ); ?></a>
                            </li>                             
                            <li>
                                <a href="#" class="button"><?php _e( 'Default', 'default_roblox_theme' ); ?></a>
                            </li>                             
                        </ul>                         
                        <ul class="actions stacked"> 
                            <li>
                                <a href="#" class="button primary"><?php _e( 'Default', 'default_roblox_theme' ); ?></a>
                            </li>                             
                            <li>
                                <a href="#" class="button"><?php _e( 'Default', 'default_roblox_theme' ); ?></a>
                            </li>                             
                        </ul>                         
                    </section>                     
                    <section> 
                        <h3 class="major"><?php _e( 'Table', 'default_roblox_theme' ); ?></h3> 
                        <h4><?php _e( 'Default', 'default_roblox_theme' ); ?></h4> 
                        <div class="table-wrapper"> 
                            <table> 
                                <thead> 
                                    <tr> 
                                        <th><?php _e( 'Name', 'default_roblox_theme' ); ?></th> 
                                        <th><?php _e( 'Description', 'default_roblox_theme' ); ?></th> 
                                        <th><?php _e( 'Price', 'default_roblox_theme' ); ?></th> 
                                    </tr>                                     
                                </thead>                                 
                                <tbody> 
                                    <tr> 
                                        <td><?php _e( 'Item One', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Ante turpis integer aliquet porttitor.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '29.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Two', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Vis ac commodo adipiscing arcu aliquet.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '19.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Three', 'default_roblox_theme' ); ?></td> 
                                        <td> <?php _e( 'Morbi faucibus arcu accumsan lorem.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '29.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Four', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Vitae integer tempus condimentum.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '19.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Five', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Ante turpis integer aliquet porttitor.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '29.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                </tbody>                                 
                                <tfoot> 
                                    <tr> 
                                        <td colspan="2"></td> 
                                        <td><?php _e( '100.00', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                </tfoot>                                 
                            </table>                             
                        </div>                         
                        <h4><?php _e( 'Alternate', 'default_roblox_theme' ); ?></h4> 
                        <div class="table-wrapper"> 
                            <table class="alt"> 
                                <thead> 
                                    <tr> 
                                        <th><?php _e( 'Name', 'default_roblox_theme' ); ?></th> 
                                        <th><?php _e( 'Description', 'default_roblox_theme' ); ?></th> 
                                        <th><?php _e( 'Price', 'default_roblox_theme' ); ?></th> 
                                    </tr>                                     
                                </thead>                                 
                                <tbody> 
                                    <tr> 
                                        <td><?php _e( 'Item One', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Ante turpis integer aliquet porttitor.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '29.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Two', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Vis ac commodo adipiscing arcu aliquet.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '19.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Three', 'default_roblox_theme' ); ?></td> 
                                        <td> <?php _e( 'Morbi faucibus arcu accumsan lorem.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '29.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Four', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Vitae integer tempus condimentum.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '19.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                    <tr> 
                                        <td><?php _e( 'Item Five', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( 'Ante turpis integer aliquet porttitor.', 'default_roblox_theme' ); ?></td> 
                                        <td><?php _e( '29.99', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                </tbody>                                 
                                <tfoot> 
                                    <tr> 
                                        <td colspan="2"></td> 
                                        <td><?php _e( '100.00', 'default_roblox_theme' ); ?></td> 
                                    </tr>                                     
                                </tfoot>                                 
                            </table>                             
                        </div>                         
                    </section>                     
                    <section> 
                        <h3 class="major"><?php _e( 'Buttons', 'default_roblox_theme' ); ?></h3> 
                        <ul class="actions"> 
                            <li>
                                <a href="#" class="button primary"><?php _e( 'Primary', 'default_roblox_theme' ); ?></a>
                            </li>                             
                            <li>
                                <a href="#" class="button"><?php _e( 'Default', 'default_roblox_theme' ); ?></a>
                            </li>                             
                        </ul>                         
                        <ul class="actions"> 
                            <li>
                                <a href="#" class="button"><?php _e( 'Default', 'default_roblox_theme' ); ?></a>
                            </li>                             
                            <li>
                                <a href="#" class="button small"><?php _e( 'Small', 'default_roblox_theme' ); ?></a>
                            </li>                             
                        </ul>                         
                        <ul class="actions"> 
                            <li>
                                <a href="#" class="button primary icon solid fa-download"><?php _e( 'Icon', 'default_roblox_theme' ); ?></a>
                            </li>                             
                            <li>
                                <a href="#" class="button icon solid fa-download"><?php _e( 'Icon', 'default_roblox_theme' ); ?></a>
                            </li>                             
                        </ul>                         
                        <ul class="actions"> 
                            <li>
                                <span class="button primary disabled"><?php _e( 'Disabled', 'default_roblox_theme' ); ?></span>
                            </li>                             
                            <li>
                                <span class="button disabled"><?php _e( 'Disabled', 'default_roblox_theme' ); ?></span>
                            </li>                             
                        </ul>                         
                    </section>                     
                    <section> 
                        <h3 class="major"><?php _e( 'Form', 'default_roblox_theme' ); ?></h3> 
                        <form method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/#"> 
                            <div class="fields"> 
                                <div class="field half"> 
                                    <label for="demo-name">
                                        <?php _e( 'Name', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe"/> 
                                </div>                                 
                                <div class="field half"> 
                                    <label for="demo-email">
                                        <?php _e( 'Email', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld"/> 
                                </div>                                 
                                <div class="field"> 
                                    <label for="demo-category">
                                        <?php _e( 'Category', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                    <select name="demo-category" id="demo-category"> 
                                        <option value="">-</option>                                         
                                        <option value="1">
                                            <?php _e( 'Manufacturing', 'default_roblox_theme' ); ?>
                                        </option>                                         
                                        <option value="1">
                                            <?php _e( 'Shipping', 'default_roblox_theme' ); ?>
                                        </option>                                         
                                        <option value="1">
                                            <?php _e( 'Administration', 'default_roblox_theme' ); ?>
                                        </option>                                         
                                        <option value="1">
                                            <?php _e( 'Human Resources', 'default_roblox_theme' ); ?>
                                        </option>                                         
                                    </select>                                     
                                </div>                                 
                                <div class="field half"> 
                                    <input type="radio" id="demo-priority-low" name="demo-priority" checked> 
                                    <label for="demo-priority-low">
                                        <?php _e( 'Low', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                </div>                                 
                                <div class="field half"> 
                                    <input type="radio" id="demo-priority-high" name="demo-priority"> 
                                    <label for="demo-priority-high">
                                        <?php _e( 'High', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                </div>                                 
                                <div class="field half"> 
                                    <input type="checkbox" id="demo-copy" name="demo-copy"> 
                                    <label for="demo-copy">
                                        <?php _e( 'Email me a copy', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                </div>                                 
                                <div class="field half"> 
                                    <input type="checkbox" id="demo-human" name="demo-human" checked> 
                                    <label for="demo-human">
                                        <?php _e( 'Not a robot', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                </div>                                 
                                <div class="field"> 
                                    <label for="demo-message">
                                        <?php _e( 'Message', 'default_roblox_theme' ); ?>
                                    </label>                                     
                                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea> 
                                </div>                                 
                            </div>                             
                            <ul class="actions"> 
                                <li>
                                    <input type="submit" value="Send Message" class="primary"/>
                                </li>                                 
                                <li>
                                    <input type="reset" value="Reset"/>
                                </li>                                 
                            </ul>                             
                        </form>                         
                    </section>                     
                </article>                 
            </div>             
            <!-- Footer -->             
            <footer id="footer"> 
                <p class="copyright"><?php _e( 'copyright ©2022 Mangossh. All rights reserved', 'default_roblox_theme' ); ?></p> 
            </footer>             
        </div>         
        <!-- BG -->         
        <div id="bg"></div>        

<?php get_footer(); ?>