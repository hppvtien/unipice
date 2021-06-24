<div class="footer">
    <div class="container">
        <div uk-grid>
            <div class="uk-width-1-3@m">
                <a href="" class="uk-logo">
                    <!-- logo icon -->
                    <i class="uil-graduation-hat"> </i>
                    {!! nl2br($configuration->name ?? '') !!}
                </a>
                    <p class="footer-description">{!! nl2br($configuration->footer_description ?? '') !!}</p>
            </div>
            <div class="uk-width-expand@s uk-width-1-2">
                <div class="footer-links pl-lg-8">
                <a href="" class="uk-logo">
                Explore
                </a>
                    
                    <ul>
                        <li><a href="course-card.html"> Courses </a></li>
                        <li><a href="course-path.html"> Track </a></li>
                        <li><a href="blog-card.html"> Blog </a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-expand@s uk-width-1-2">
                <div class="footer-links pl-lg-8">
                <a href="" class="uk-logo">
                Explore
                </a>
                    <ul>
                        <li><a href="profile-1.html"> Profile </a></li>
                        <li><a href="#"> Settings </a></li>
                        <li><a href="#"> Projects </a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-expand@s uk-width-1-2">
                <div class="footer-links pl-lg-8">
                <a href="" class="uk-logo">
                Resources
                </a>
                    <ul>
                        <li><a href="#"> Contact </a></li>
                        <li><a href="page-Privacy.html"> Privacy Policy </a></li>
                        <li><a href="page-term.html"> Terms of Use </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="uk-grid-collapse" uk-grid>
            <div class="uk-width-expand@s uk-first-column">
                <p>{!! nl2br($configuration->footer_bottom ?? '') !!}</p>
            </div>
            <div class="uk-width-auto@s">
                <nav class="footer-nav-icon">
                    <ul>
                        <li><a href="{!! nl2br($configuration->facebook ?? '') !!}"><i class="icon-brand-facebook"></i></a></li>
                        <li><a href="{!! nl2br($configuration->instagram ?? '') !!}"><i class="icon-brand-dribbble"></i></a></li>
                        <li><a href="{!! nl2br($configuration->youtube ?? '') !!}"><i class="icon-brand-youtube"></i></a></li>
                        <li><a href="{!! nl2br($configuration->twitter ?? '') !!}"><i class="icon-brand-twitter"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>