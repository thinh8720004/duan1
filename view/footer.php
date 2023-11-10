<script>
    const langEl = document.querySelector('.langWrap');
    const link = document.querySelectorAll('a');
    const timeEl = document.querySelector('.time');
    const homeEl = document.querySelector('.home');
    const productEl = document.querySelector('.product');
    const introduceEl = document.querySelector('.introduce');
    const newsEl = document.querySelector('.news');
    const contactEl = document.querySelector('.contact');


    link.forEach(el => {
        el.addEventListener('click', () => {
            langEl.querySelector('.active').classList.remove('active');
            el.classList.add('active');
            const attr = el.getAttribute('language');

            homeEl.textContent = data[attr].home;
            timeEl.textContent = data[attr].time;
            productEl.textContent = data[attr].product;
            introduceEl.textContent = data[attr].introduce;
            newsEl.textContent = data[attr].news;
            contactEl.textContent = data[attr].contact;
        });
    });

    var data = {
        "english": {
            "time" : "Operating hours: 09:00 - 22:00 every day"  ,
            "home": "Home",
            "product": "Product",
            "introduce": "Introduce",
            "news": "News",
            "contact": "Contact"
        },
        "vietnamese": {
            "time":"Thời gian hoạt động:  09:00 - 22:00 mỗi ngày",
            "home": " Trang chủ",
            "product": "Sản phẩm",
            "introduce": "Giới thiệu",
            "news": "Tin tức",
            "contact": "Liên hệ"
        },
    }
</script>  
<style>
        .langWrap {
            margin-top: 15px;
            float: right;
            width: 10%;
            text-align: center;
        }

        .langWrap a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-weight: 1vw;
            background: #555656;
            font-size: 18px;
            border-radius: 10px;
        }

        .langWrap a:focus {
            background: #f21313;
        }
    </style>   
    </div>  
    <footer class="clear">
        <div class="ft-top1a">
            <div class="ft-top1">
                <div>
                    <div>Tổng đài hỗ trợ</div>
                    <p>Hotline: 036.37.38.586</p>
                    <p>Fanpage : dhpd.org - Món gì cũng có</p>
                    <p>Zalo: 036.37.38.586</p>
                    <p>Địa chỉ: 18 Hoàng Cầu, Đống Đa, Hà Nội</p>
                    <p>Email: dhpd-duan-bandoannhanh@gmail.com</p>
                </div>
                <div>
                    <div>Chính Sách</div>
                    <p><a href="index.php?act=doitra">Chính sách đổi trả</a></p>
                    <p><a href="index.php?act=muahang">Chính sách mua hàng</a></p>
                    <p><a href="index.php?act=gioithieu">Giới thiệu cửa hàng</a></p>
                    <p><a href="index.php?act=lienhe">Liên hệ cửa hàng</a></p>
                </div>
                <div>
                    <div>Tổng đài hỗ trợ</div>
                    <p class="mb20">Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                    <a class="aa" href="index.php?act=dangky">Đăng ký thành viên</a>
                </div>
            </div>
        </div>
        <div class="ft-top2a">
            <div class="ft-top2">
                <div>© Ăn gì cũng có | Vận hành bởi Đoàn Huy Phúc Đạo DHPD</div>
                <div>
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCCktTAW7qH63-vP3izvbsOA"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.tiktok.com/vi-VN"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <div>
            
            </div>
            
        </div>
    </footer>



    <!-- Script SlideShow  -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html> 