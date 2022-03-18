<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenwire</title>
    <link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
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
                    <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/images/home/popular_card_img_01.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Popular Shop dispensaries</h3>
                                <div class="card-rating">
                                    <div class="score-desc">
                                        <span>Shop rating:</span>
                                        <span class="rating-number">2.0</span>
                                    </div>
                                    <div class="star-rating">
                                        <input id="box1-star-5" type="radio" name="rating" value="star-5" />
                                        <label for="box1-star-5" title="5 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box1-star-4" type="radio" name="rating" value="star-4" />
                                        <label for="box1-star-4" title="4 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box1-star-3" type="radio" name="rating" value="star-3" />
                                        <label for="box1-star-3" title="3 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box1-star-2" type="radio" name="rating" value="star-2" />
                                        <label for="box1-star-2" title="2 stars">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box1-star-1" type="radio" name="rating" value="star-1" />
                                        <label for="box1-star-1" title="1 star">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                    </div>
                                </div>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่
                                    16</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/images/home/popular_card_img_02.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Popular Shop dispensaries</h3>
                                <div class="card-rating">
                                    <div class="score-desc">
                                        <span>Shop rating:</span>
                                        <span class="rating-number">2.0</span>
                                    </div>
                                    <div class="star-rating">
                                        <input id="box2-star-5" type="radio" name="rating" value="star-5" />
                                        <label for="box2-star-5" title="5 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box2-star-4" type="radio" name="rating" value="star-4" />
                                        <label for="box2-star-4" title="4 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box2-star-3" type="radio" name="rating" value="star-3" />
                                        <label for="box2-star-3" title="3 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box2-star-2" type="radio" name="rating" value="star-2" />
                                        <label for="box2-star-2" title="2 stars">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box2-star-1" type="radio" name="rating" value="star-1" />
                                        <label for="box2-star-1" title="1 star">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                    </div>
                                </div>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่
                                    16</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/images/home/popular_card_img_03.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Popular Shop dispensaries</h3>
                                <div class="card-rating">
                                    <div class="score-desc">
                                        <span>Shop rating:</span>
                                        <span class="rating-number">2.0</span>
                                    </div>
                                    <div class="star-rating">
                                        <input id="box3-star-5" type="radio" name="rating" value="star-5" />
                                        <label for="box3-star-5" title="5 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box3-star-4" type="radio" name="rating" value="star-4" />
                                        <label for="box3-star-4" title="4 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box3-star-3" type="radio" name="rating" value="star-3" />
                                        <label for="box3-star-3" title="3 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box3-star-2" type="radio" name="rating" value="star-2" />
                                        <label for="box3-star-2" title="2 stars">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box3-star-1" type="radio" name="rating" value="star-1" />
                                        <label for="box3-star-1" title="1 star">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                    </div>
                                </div>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่
                                    16</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/images/home/popular_card_img_04.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Popular Shop dispensaries</h3>
                                <div class="card-rating">
                                    <div class="score-desc">
                                        <span>Shop rating:</span>
                                        <span class="rating-number">2.0</span>
                                    </div>
                                    <div class="star-rating">
                                        <input id="box4-star-5" type="radio" name="rating" value="star-5" />
                                        <label for="box4-star-5" title="5 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box4-star-4" type="radio" name="rating" value="star-4" />
                                        <label for="box4-star-4" title="4 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box4-star-3" type="radio" name="rating" value="star-3" />
                                        <label for="box4-star-3" title="3 stars">
                                            <i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box4-star-2" type="radio" name="rating" value="star-2" />
                                        <label for="box4-star-2" title="2 stars">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                        <input id="box4-star-1" type="radio" name="rating" value="star-1" />
                                        <label for="box4-star-1" title="1 star">
                                            <i class="bi bi-star-fill active"></i>
											<i class="bi bi-star"></i>
                                        </label>
                                    </div>
                                </div>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่
                                    16</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- Pagination -->
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li class="page-item active" aria-current="page">
							<a class="page-link" href="#"><i class="bi bi-caret-left-fill"></i></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item disabled">
							<a class="page-link" href="#">...</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">6</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">7</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#"><i class="bi bi-caret-right-fill"></i></a>
						</li>
						
					</ul>
				</nav>
            </div>
        </section>

    </article>
    <?php include 'elements/footer.php'; ?>
    <script src="./assets/js/home.js"></script>
</body>

</html>