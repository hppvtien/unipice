<div class="m-newsletter-signup m-newsletter-signup--no-bg context">
    
    <div class="area" >
        <div class="m-newsletter-signup__content">
            <div class="m-newsletter-signup__heading">
                Theo dõi bản tin của chúng tôi
            </div>
            <p class="m-newsletter-signup__description">
                Đăng ký để là người đầu tiên biết về những tin tức và ưu đãi mới nhất:
            </p>
            <form class="m-newsletter-signup__form" method="post" action="">
                @csrf
                <div class="fieldset">
                    <input id="email1" type="email" data-url="{{ route('post.uni_contact.newsletters') }}" data-type="news" class="m-newsletter-signup__input" aria-label="Enter your email address" placeholder="Nhập địa chỉ Email của bạn">
                </div>
                <button type="button" class="m-newsletter-signup__submit" aria-label="Submit" onclick="get_email();"><span class="icon-arrow-right"></span></button>
            </form>
            
        </div> 
        
    </div >
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

  
  
 

