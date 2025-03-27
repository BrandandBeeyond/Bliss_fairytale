<?php include('header.php') ?>



<section class="position-relative gallerybanner">
    <div class="d-flex justify-content-center align-items-center h-100">
        <h2 class="text-center text-black maintitle top-down">Gallery</h2>
    </div>
</section>

<section class="sec-padding position-relative abtigt mt-min-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="text-head sec_title">
                    Making Your Wedding Dreams Come True
                </h2>
            </div>
            <div class="col-lg-9 text-center">
                <div class="sec_para my-2 pt-4">
                    <p class="z-up">
                        For generations, weddings at Taj Hotels are synonymous with
                        cherished memories. Embark on a journey of timeless romance as
                        our dedicated experts ensure that every detail is a reflection
                        of your dream celebratio...
                    </p>
                </div>
                <div class="sec_para my-2">
                    <p class="z-up">
                        For generations, weddings at Taj Hotels are synonymous with
                        cherished memories. Embark on a journey of timeless romance as
                        our dedicated experts ensure that every detail is a reflection
                        of your dream celebratio...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-sec">
    <div class="container-fluid">
        <div class="row justify-content-center pb-5">
            <div class="col-lg-11">
                <div class="row mb-5 pb-5">
                    <div class="col-lg-4">
                        <div class="sticky-sidebar d-flex justify-content-center flex-row flex-sm-row flex-md-column flex-wrap gap-3 gap-sm-3 gap-md-5 mb-5">
                            <button class="gallery_tab tab active">
                                Baraat Swagat
                            </button>
                            <button class="gallery_tab tab">Haldi</button>
                            <button class="gallery_tab tab">Sangeet</button>
                            <button class="gallery_tab tab">Wedding</button>
                            <button class="gallery_tab tab">Reception</button>
                        </div>
                    </div>

                    <div class="col-lg-8 col-12">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-lg-6 col-6 pe-0 pe-sm-1 pe-md-1">
                                    <div class="box-left" id="box1"></div>
                                    <div class="box-left" id="box2"></div>
                                    <div class="box-left" id="box3"></div>
                                    <div class="box-left" id="box4"></div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="box-right" id="box1"></div>
                                    <div class="box-right" id="box2"></div>
                                    <div class="box-right" id="box3"></div>
                                    <div class="box-right" id="box4"></div>
                                    <div class="box-right" id="box5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content hidden">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="text-dark">Hello</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="text-dark">Sangeet</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".tab");
        const tabContents = document.querySelectorAll(".tab-content");

        // Check URL hash and activate the corresponding tab
        const activateTabFromHash = () => {
            const hash = location.hash ? location.hash.substring(1) : null;
            let tabIndex = 0; // Default to the first tab if no hash

            // Find tab index based on hash
            tabs.forEach((tab, index) => {
                if (
                    tab.textContent.trim().toLowerCase().replace(/\s+/g, "-") === hash
                ) {
                    tabIndex = index;
                }
            });

            // Activate the selected tab and its content
            tabs.forEach((tab, i) =>
                tab.classList.toggle("active", i === tabIndex)
            );
            tabContents.forEach((content, i) =>
                content.classList.toggle("hidden", i !== tabIndex)
            );
        };

        // Add event listeners for tab clicks
        tabs.forEach((tab, index) => {
            tab.addEventListener("click", function () {
                tabs.forEach((tab) => tab.classList.remove("active"));
                tab.classList.add("active");

                tabContents.forEach((content) => content.classList.add("hidden"));
                tabContents[index].classList.remove("hidden");

                // Update URL hash
                location.hash = tab.textContent
                    .trim()
                    .toLowerCase()
                    .replace(/\s+/g, "-");
            });
        });

        // Initialize based on current hash
        activateTabFromHash();

        // Listen for back/forward navigation
        window.addEventListener("popstate", activateTabFromHash);
    });
</script>