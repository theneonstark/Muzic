$(document).ready(function(){
    const links = document.querySelectorAll('.link');
    let err = document.getElementById('err');
    console.log(err)
    links.forEach(function(elem,idx){
        elem.id = `link${idx}`;
        elem.addEventListener('click',(e)=>{
            const ids = e.target.id
            const link = document.getElementById(ids);
            const link_name = link.innerText.toString().toLowerCase(); 
            console.log(link_name)
            if(elem.id == ids){
                $.ajax({
                    url: `${link_name}.php`,
                    success: function(res){
                        $('main').html(res);
                    },
                    error: function() {
                        $('main').html(`<a href="index.php" class="back_to_home">
                        <div class="page-wrapper">
                        <div class="needle-wrapper">
                          <div class="base"></div>
                          <div class="lines">
                            <div class="vertical"></div>
                        
                            <div class="horizontal"></div>
                          </div>
                        </div>
                        <div class="disk-wrapper">
                          <div class="light-left"></div>
                          <div class="light-right"></div>
                          <div class="disk">
                            <div class="half-circle-top"></div>
                            <div class="half-circle-bottom"></div>
                            <div class="separator"></div>
                            <div class="inner-circle">
                              <span>4</span>
                              <div class="dot"></div>
                              <span>4</span>
                            </div>
                          </div>
                          </div>
                          </div>
                        <div class="error">Uh oh! Looks like we've skipped a beat </div>
                        </a>
                        <section class="footer">
                <div class="footer_layout">
                    <div class="contact_layout f_layout">
                        <img src="img/logo.png" alt="">
                        <p>Non Music Label & Online Muzic</p>
                        <p>admin@muzic.com</p>
                        <p>0 0000 000-0-0</p>
                    </div>
                    <div class="Brand_layout f_layout">
                        <h1>Brand</h1>
                        <p class="link">About</p>
                        <p class="link">Profile</p>
                        <p class="link">Pricing</p>
                        <p class="link">Contact</p>
                    </div>
                    <div class="Browser_layout f_layout">
                        <h1>Browser</h1>
                        <p class="link">Artist</p>
                        <p class="link">Releases</p>
                        <p class="link">Event</p>
                        <p class="link">Prodcast</p>
                    </div>
                    <div class="Browser_layout_right f_layout">
                        <p></p>
                        <p class="link">News</p>
                        <p class="link">Store</p>
                        <p class="link">Video</p>
                    </div>
                </div>
            </section>
            <script src="javascript/refresh.js"></script>
            `)
                    }
                })
                }
        })
    })
})