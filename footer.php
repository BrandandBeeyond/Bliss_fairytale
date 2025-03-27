<style>
    .footermain {
        background-color: #FFE4E4;
        padding: 50px 0;
        padding-top: 170px;
        z-index: 1;
    }

    .footermain::before {
        content: "";
        position: absolute;
        background: linear-gradient(180deg, rgba(255, 228, 228, 0) 0%, #FFE4E4 100%);
        height: 192px;
        width: 100%;
        top: -187px;
        left: 0;
    }


    .footlogo {
        height: 241px;
        width: auto;
    }

    .footer-head {
        font-family: "Inter", serif;
        font-weight: 600;
        font-size: 24px;
        line-height: 150%;
        letter-spacing: -1.1%;
        color: #656565;
        text-transform: capitalize;
    }

    .foottop {
        position: relative;
        top: -150px;
    }

    .foot-links {
        font-weight: 500;
        font-size: 18px;
        line-height: 150%;
        letter-spacing: -1.1%;
        color: #656565;
        font-family: "Inter", serif;
        text-decoration: none;
        position: relative;
        z-index: 22;
    }


    @media(max-width:700px) {
        .footlogo {
            height: 124px;
            width: auto;
        }

        .footer-head {
            font-size: 12px;
            line-height: 100%;
            text-transform: capitalize;
        }

        .foot-links {
            font-weight: 500;
            font-size: 10px;
            line-height: 14px;
            letter-spacing: -1.1%;
            color: #656565;
            font-family: "Inter", serif;
            text-decoration: none;
            position: relative;
            z-index: 22;
        }

    }
</style>


<footer class="footermain position-relative">
    <!-- <img loading="lazy" src="assets/img/footervec.svg" class="img-fluid footervec" alt=""> -->
    <div class="container-fluid">
        <div class="row foottop">
            <div class="col-lg-4">
                <div class="d-flex flex-column flex-sm-column flex-md-row align-items-center">
                    <img loading="lazy" src="assets/img/footer-logo.png" class="img-fluid footlogo" alt="">
                    <ul
                        class="d-flex flex-row align-items-center gap-4 list-unstyled ms-0 ms-sm-0 ms-md-5 mt-3 mt-sm-2 mt-md-0">
                        <li class="social-item"><a href="" class="social-links"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-item"><a href="" class="social-links"><i class="bi bi-instagram"></i></a></li>
                        <li class="social-item"><a href="" class="social-links"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="social-item"><a href="" class="social-links"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <h6 class="footer-head">wedding packages</h6>
                <ul class="list-unstyled mt-3">
                    <li class="py-1"><a href="" class="foot-links">Classic</a></li>
                    <li class="py-1"><a href="" class="foot-links">Crafted</a></li>
                    <li class="py-1"><a href="" class="foot-links">Heart Crafted</a></li>
                </ul>
            </div>
            <div class="col-lg-2 text-center">
                <h6 class="footer-head">Quick Links</h6>
                <ul class="list-unstyled mt-3">
                    <li class="py-1"><a href="" class="foot-links">Home</a></li>
                    <li class="py-1"><a href="" class="foot-links">about us</a></li>
                    <li class="py-1"><a href="" class="foot-links">our magic</a></li>
                    <li class="py-1"><a href="" class="foot-links">gallery</a></li>
                    <li class="py-1"><a href="" class="foot-links">blogs</a></li>
                    <li class="py-1"><a href="" class="foot-links">contact us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 text-center">
                <h6 class="footer-head">contact </h6>
                <ul class="list-unstyled mt-3">
                    <li class="py-1"><a href="" class="foot-links">+917854126398</a></li>
                    <li class="py-1"><a href="" class="foot-links">+917854126398</a></li>

                </ul>
                <h6 class="footer-head">Address </h6>
                <ul class="list-unstyled mt-3">
                    <li class="py-1"><a href="" class="foot-links">Bhavali Dam, Road, Bhagatwadi, Igatpuri,
                            Nandgaonsado, Maharashtra 422403</a></li>


                </ul>
            </div>
        </div>
    </div>
</footer>


</main>



</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(".testimonial-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>",
        ],
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.querySelector(".hamburger-init");
        const menuWrapper = document.querySelector(".menu-wrapper");
        const menu = document.querySelector(".menu");
        const menuItems = document.querySelectorAll(".menu li");
        const submenuParents = document.querySelectorAll(".menu-item-has-children > a");

        // Function to disable scrolling
        function disableScroll() {
            document.body.style.overflow = "hidden";
            document.body.style.height = "100vh"; // Prevents extra scrolling
            document.documentElement.style.overflow = "hidden"; // For cross-browser support
        }

        // Function to enable scrolling
        function enableScroll() {
            document.body.style.overflow = "";
            document.body.style.height = "";
            document.documentElement.style.overflow = "";
        }

        // Toggle Hamburger Menu
        hamburger.addEventListener("click", function () {
            this.classList.toggle("active");
            menuWrapper.classList.toggle("visible");
            menu.classList.toggle("menu-active");

            if (menuWrapper.classList.contains("visible")) {
                disableScroll();
            } else {
                enableScroll();
            }

            // Animate Menu Items
            menuItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.2}s`;
                item.style.opacity = "1";
                item.style.transform = "translateY(0)";
            });
        });

        // Toggle Submenus
        submenuParents.forEach(parent => {
            parent.addEventListener("click", function (e) {
                e.preventDefault();
                const parentItem = this.parentElement;
                parentItem.classList.toggle("sub-menu-active");
            });
        });

        // Close menu when clicking outside
        document.addEventListener("click", function (e) {
            if (!hamburger.contains(e.target) && !menuWrapper.contains(e.target)) {
                hamburger.classList.remove("active");
                menuWrapper.classList.remove("visible");
                menu.classList.remove("menu-active");
                enableScroll(); // Re-enable scrolling when menu is closed

                // Hide submenus
                submenuParents.forEach(parent => {
                    parent.parentElement.classList.remove("sub-menu-active");
                });
            }
        });
    });
    if (window.location.pathname.endsWith("index.php") && window.innerWidth <= 768) {
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".footermain").style.marginTop = "-237px";
        });
    }
    gsap.registerPlugin(ScrollTrigger);

    gsap.to("html, body", {
        scrollBehavior: "smooth",
        duration: 1,
        ease: "power1.out",
    });
</script>

</body>

</html>