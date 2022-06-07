class MyHeader extends HTMLElement{
    connectedCallback() {
        this.innerHTML = `
        <div class="top_panel inversion">
            <div class="wrap">
                <div class="wrap_float left">
                    <a href="/" class="logo">
                            <img src="img/Sandandpeaks_logo (1).png" alt=""  >
                        </a>
                    </div>
                   
                    <div class="menu_wrap" id="menu_wrap">
                        <div class="scroll">
                            <div class="center">
                                <div class="menu">
                                    <ul>
                                       <li class="dropdown_li">
                                            <a href="https://sandandpeaks.com/For-Indian-Tourist.html" class="active"><span>For Indian Tourist</span></a>
                                            <ul class="dropdown_ul">
                                                <li><a href="https://sandandpeaks.com/Backpacking-Tours.html"> Backpacking Tours</a></li>
                                                <li><a href="https://sandandpeaks.com/Adventure-All-In-One.html">Adventure All In One</a></li>
                                                <li><a href="https://sandandpeaks.com/04X04-Adventures.html"> 04X04 Adventures </a></li>
                                                <li><a href="https://sandandpeaks.com/Biking-Adventure.html"> Biking Adventure </a></li>
                                                <li><a href="https://sandandpeaks.com/Road-Trips.html"> Road Trips </a></li>
                                                <li><a href="https://sandandpeaks.com/Honeymoon-Getaways.html">Honeymoon Getaways</a></li>
                                                <li><a href="https://sandandpeaks.com/International-Getaways.html">International Getaways</a></li>
                                                <li><a href="https://sandandpeaks.com/Personalize-Your-Trip.html">Personalize Your Trip</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://sandandpeaks.com/corporate-travel-management.html"><span>Corporate Tour Planning</span></a></li>
                                        <li><a href="https://blogs.sandandpeaks.com"><span>Blogs</span></a></li>
                                        <li><a href="https://sandandpeaks.com/contacts-us.php"><span>Contact Us</span></a></li>
                                        <li class="dropdown_li">
                                            <a href="https://sandandpeaks.com/More.html" class="active"><span>More</span></a>
                                            <ul class="dropdown_ul">
                                                <li><a href="https://sandandpeaks.com/about-us.html">About Us </a></li>
                                                <li><a href="https://sandandpeaks.com/careers.html">Careers </a></li>
                                                <li><a href="https://sandandpeaks.com/business-relations.html">B2B Colloborations</a>
                                        </li>
                                            </ul>
                                    </ul> 
                                        
                                    <div class="mobile_content">
                                     
                                        <div class="tel">
                                            <a href="tel:+91 9310978587">+91 9310978587</a>
                                            <p>We're Waiting For Your Call</p>
                                        </div>
                                        <div class="social">
                                           <a href="https://www.facebook.com/sandandpeaks/" class="link facebook"><span></span></a>
                                            <a href="https://www.instagram.com/sandandpeaks/" class="link instagram"><span></span></a>
                                            <a href="https://twitter.com/sandandpeaks" class="link twitter"><span></span></a>
                                            <a href="https://www.youtube.com/channel/UC-nKTltqvvm-z32zgddRLxA" class="link youtube"><span></span></a>
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="close" id="menu-close">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="tel"><a href="tel:+91 9310978587"><span>+91 9310978587</span></a></div>                                
                             </div>
                            
                        </div>
                    </div>
                    <div class="mobile_btn" id="mobile_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        
        `

    }
}

customElements.define('my-header', MyHeader)


class MyFooter extends HTMLElement{
    connectedCallback() {
        this.innerHTML = `
        <div class="footer">
        <div class="wrap">
            <div class="wrap_float">
                <div class="footer_top">
                    <div class="left">
                        <div class="col">
                            <div class="_title m_title">Tours</div>
                            <ul>
                            <li><a href="https://sandandpeaks.com/treks.php">Trekking </a></li>
                                <li><a href="https://sandandpeaks.com/weekend-getaways.html">Weekend Getaways
</a></li>
                                <li><a href="https://sandandpeaks.com/backpacking-tours.html">Backpacking Adventure</a></li>
                                <li><a href="https://sandandpeaks.com/honeymoon-packages.html">Honeymoon Planning</a></li>
                                <li><a href="https://sandandpeaks.com/customized-tour-package.html">Customized Tour</a></li>
                                <li><a href="https://sandandpeaks.com/corporate-travel-management.html">Corporate Outings</a></li>
                                <li><a href="https://sandandpeaks.com/featured-tours.html">Featured Tours
</a></li>
                            
                               
                            </ul>
                        </div>
                        <div class="col">
                            <div class="_title m_title">Quick Links</div>
                            <ul>
                               <li><a href="https://sandandpeaks.com/about-us.html">About Us</a></li>
                                <li><a href="https://sandandpeaks.com/contacts-us.php">Contact</a></li>
                                <li><a href="https://sandandpeaks.com/careers.html">Careers</a></li>
                                <li><a href="https://sandandpeaks.com/business-relations.html">B2B Collaboration</a></li>
                                
                            </ul>
                        </div>
                        <div class="col">
                            <div class="_title m_title">Blog</div>
                            <ul>
                              <li><a href="https://blogs.sandandpeaks.com/index.php/2021/10/16/the-secret-to-planning-a-perfect-road-trip/">The Secret To Planning a Perfect Road Trip</a></li>
                                <li><a href="https://blogs.sandandpeaks.com/index.php/2021/10/16/what-is-a-backpacking-adventure-and-how-to-plan-one/ ">What Is A Backpacking Adventure And How To Plan One?</a></li>
                                <li><a href="https://blogs.sandandpeaks.com/index.php/2021/10/16/why-workation-the-new-normal/ ">Why Workation The New Normal?</a></li>
                                <li><a href="https://blogs.sandandpeaks.com/">Read More Travel Blogs</a></li>
                               
                            
                                
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="_title">Contacts</div>
                        <div class="contacts_info">
                            <div class="tel">
                                <a href="tel:+919310978587">+91 9310978587</a>
                                <p>Round the clock support</p>
                            </div>
                            <div class="email">
                                <a href="mailto:hello@sandandpeaks.com">hello@sandandpeaks.com</a>
                                <p>For any questions</p>
                            </div>
                            <div class="address">
                                H-187, Lohia Rd, H Block, Sector 63, Noida, Uttar Pradesh 201301 <br> India
                            </div>
                        </div>
                       <div class="socials social-links">
                            <a href="https://www.facebook.com/sandandpeaks/" class="link facebook"><span></span></a>
                            <a href="https://www.instagram.com/sandandpeaks/" class="link instagram"><span></span></a>
                            <a href="https://www.linkedin.com/company/sandandpeaks/" class="fa-fa-linkedin"><span></span></a>
                            <a href="https://twitter.com/sandandpeaks" class="link twitter"><span></span></a>
                            <a href="https://www.youtube.com/channel/UC-nKTltqvvm-z32zgddRLxA" class="link youtube"><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="left">
                        <a href="https://sandandpeaks.com/privacy-policy.php">Privacy Policy</a>
                    </div>
                    <div class="left" >
                        <a href="https://sandandpeaks.com/terms-and-conditions.html">Terms and Conditions</a>
                    </div>
                    <div class="right">
                        Copyright © 2019 by SandandPeaks
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
    

        
        `

    }
}

customElements.define('my-footer', MyFooter)