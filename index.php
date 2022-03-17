<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenwire</title>
    <link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include 'elements/header.php'; ?>
    <article>
        <section id="intro" class="section-intro text-center">
            <div class="container">
                <div class="lead-main">
                    <h1>Find the perfect strain for you.</h1>
                    <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                </div>
                <form method="get" action="" class="filter-select">
                    <div class="form-group">
                        <label for="my-select">Effect</label>
                        <select id="my-select" class="form-control" name="">
                            <option>Effect</option>
                            <option>Effect</option>
                            <option>Effect</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="my-select">Wellness</label>
                        <select id="my-select" class="form-control" name="">
                            <option>Wellness</option>
                            <option>Wellness</option>
                            <option>Wellness</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="my-select">Flavor and Aroma</label>
                        <select id="my-select" class="form-control" name="">
                            <option>Flavor and Aroma</option>
                            <option>Flavor and Aroma</option>
                            <option>Flavor and Aroma</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <div class="section-hot d-flex">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">What’s hot!</h5>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                                <a href="">SHOP NOW</a>
                            </div>
                            <div class="card-img"><img src="./assets/images/home/card_img_01.png" alt="Image"></div>
                        </div>
                    </div>
                    <div class="col-8">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>

                <div class="section-learn-more d-flex">
                    <div class="col-4 order-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cannabis 101</h5>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                                <a href="" class="btn btn-outline">Learn More</a>
                            </div>
                            <div class="card-img"><img src="./assets/images/home/card_img_01.png" alt="Image"></div>
                        </div>
                    </div>
                    <div class="col-8 order-1">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="popular" class="section-popular text-center">
            <div class="container">
                <div class="lead-main">
                    <h1>Popular Shop dispensaries</h1>
                    <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                </div>
            </div>
        </section>

    </article>
    <?php include 'elements/footer.php'; ?>
    <script src="./assets/js/home.js"></script>
</body>

</html>