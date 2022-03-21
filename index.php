<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenwire</title>
    <link rel="stylesheet" href="./assets/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/home.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
    <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include 'elements/header.php'; ?>
    <article>
        <section id="intro" class="section-intro text-center">
            <div class="container">
                <div class="lead-main">
                    <h1>Find the perfect strain for you.</h1>
                    <p class="my-3 my-md-5">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                </div>
                <form method="get" action="" class="filter-select d-flex justify-content-center">
                    <div class="form-group">
                        <select id="my-select" class="form-control" name="">
                            <option>Effect</option>
                            <option>Effect</option>
                            <option>Effect</option>
                        </select>
                    </div>
                    <div class="form-group mx-md-4">
                        <select id="my-select" class="form-control" name="">
                            <option>Wellness</option>
                            <option>Wellness</option>
                            <option>Wellness</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="my-select" class="form-control" name="">
                            <option>Flavor and Aroma</option>
                            <option>Flavor and Aroma</option>
                            <option>Flavor and Aroma</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <div class="section-slide-1 d-flex">
                    <div class="col-4">
                        <div class="card">
                            <span class="icon-leaf"><img src="./assets/images/home/leaf.svg" alt="Leaf"></span>
                            <div class="card-body">
                                <h3 class="card-title">What’s hot!</h3>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                                <a href="" class="btn btn-primary">SHOP NOW</a>
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
                                <div class="swiper-slide">
									<div class="swiper-img"><img src="./assets/images/home/slide_01.jpg" alt="Image"></div>
                                    <div class="swiper-content">
                                        <div class="swiper-header">
                                            <div class="recommend">Recommend<i class="bi bi-star-fill"></i></div>
                                            <h2>Cannabis</h2>
                                        </div>
                                        <div class="swiper-footer">
                                            <div class="product-details">
                                                <h4>Dosidos</h4>
                                            </div>
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
                                            <div class="product-details-percent d-flex justify-content-between align-items-center">
                                                <div class="btn btn-outline">Indica</div>
                                                <ul class="d-grid">
                                                    <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
													<li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-details-tags d-flex flex-wrap">
                                                <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                                <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                            </div>
											<a href="" class="btn btn-primary btn-learn-more">Learn More</a>
                                        </div>
                                    </div>
                                </div>
								<div class="swiper-slide">
									<div class="swiper-img"><img src="./assets/images/home/popular_card_img_01.jpg" alt="Image"></div>
                                    <div class="swiper-content">
                                        <div class="swiper-header">
                                            <div class="recommend">Recommend<i class="bi bi-star-fill"></i></div>
                                            <h2>Cannabis</h2>
                                        </div>
                                        <div class="swiper-footer">
                                            <div class="product-details">
                                                <h4>Dosidos</h4>
                                            </div>
                                            <div class="card-rating">
                                                <div class="score-desc">
                                                    <span>Shop rating:</span>
                                                    <span class="rating-number">4.0</span>
                                                </div>
                                                <div class="star-rating">
                                                    <input id="box1-star-5" type="radio" name="rating" value="star-5" />
                                                    <label for="box1-star-5" title="5 stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </label>
                                                    <input id="box1-star-4" type="radio" name="rating" value="star-4" />
                                                    <label for="box1-star-4" title="4 stars">
                                                        <i class="bi bi-star-fill active"></i>
                                                        <i class="bi bi-star"></i>
                                                    </label>
                                                    <input id="box1-star-3" type="radio" name="rating" value="star-3" />
                                                    <label for="box1-star-3" title="3 stars">
                                                        <i class="bi bi-star-fill active"></i>
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
                                            <div class="product-details-percent d-flex justify-content-between align-items-center">
                                                <div class="btn btn-outline">Indica</div>
                                                <ul class="d-grid">
                                                    <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
													<li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-details-tags d-flex flex-wrap">
                                                <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                                <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                            </div>
											<a href="" class="btn btn-primary btn-learn-more">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <!-- <div class="swiper-scrollbar"></div> -->
                        </div>
                    </div>
                </div>

                <div class="section-slide-2">
					<!-- Slider main container -->
					<div class="swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<div class="col-4 swiper-content">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Cannabis 101</h3>
											<p class="card-text">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
											<a href="" class="btn btn-outline">Learn More</a>
										</div>
									</div>
								</div>
								<div class="col-8">
									<div class="swiper-img"><img src="./assets/images/home/slide_02.jpg" alt="Slide"></div>
								</div>
							</div>
						</div>
						<!-- If we need pagination -->
						<!-- <div class="swiper-pagination"></div> -->

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
						<!-- <div class="swiper-scrollbar"></div> -->
					</div>
                </div>
            </div>
        </section>

        <section id="popular" class="section-popular text-center">
            <div class="container">
                <div class="lead-main text-start">
                    <h2>Popular Shop dispensaries</h2>
                    <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="./assets/images/home/popular_card_img_01.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Popular Shop dispensaries</h4>
                                <div class="card-rating">
                                    <div class="score-desc">
                                        <span>Shop rating:</span>
                                        <span class="rating-number">4.0</span>
                                    </div>
                                    <div class="star-rating">
                                        <input id="box1-star-5" type="radio" name="rating" value="star-5" />
                                        <label for="box1-star-5" title="5 stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                        </label>
                                        <input id="box1-star-4" type="radio" name="rating" value="star-4" />
                                        <label for="box1-star-4" title="4 stars">
                                            <i class="bi bi-star-fill active"></i>
                                            <i class="bi bi-star"></i>
                                        </label>
                                        <input id="box1-star-3" type="radio" name="rating" value="star-3" />
                                        <label for="box1-star-3" title="3 stars">
                                            <i class="bi bi-star-fill active"></i>
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
								<h4 class="card-title">Popular Shop dispensaries</h4>
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
								<h4 class="card-title">Popular Shop dispensaries</h4>
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
								<h4 class="card-title">Popular Shop dispensaries</h4>
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
                        <li cl ass="page-item active" aria-current="page">
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

        <section id="subscribe" class="section-subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <span class="icon-leaf"><img src="./assets/images/home/leaf.svg" alt="Leaf"></span>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">What’s hot product</h2>
                                <p class="card-text">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                                <div class="input-group">
                                    <input class="form-control" type="email" name="" placeholder="email@address.com"
                                        aria-label="email@address.com" aria-describedby="my-addon">
                                    <button class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                                <p class="desc">By providing us with your email address, you agree to Leafly's Terms of
                                    Service and Privacy Policy. Offer valid for new Leafly subscribers. Available to US
                                    residents only, valid only where legal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-hot d-none d-md-block"></div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="container">
                <!-- Location -->
                <div id="shop-location" class="shop-location">
                    <div class="row border">
                        <div class="col-md-3 px-0 border-end">
                            <!-- Filter -->
                            <div class="filter-header border-bottom p-4">
                                <div class="filter-by-type btn-filter">
                                    <button class="btn active filter-button" data-filter="all">All</button>
                                    <button class="btn filter-button" data-filter="pickup">Pickup</button>
                                    <button class="btn filter-button" data-filter="delivery">Delivery</button>
                                </div>
                                <h3>Find a weed dispensary near you</h3>
                            </div>
                            <!-- Sort -->
                            <div class="filter-by-tag border-bottom py-4">
                                <div class="btn-group d-block p-4">
                                    <button class="btn btn-default filter-button" data-filter="">Filters</button>
                                    <button class="btn btn-default filter-button" data-filter="">Recreational</button>
                                    <button class="btn btn-default filter-button" data-filter="">Medical</button>
                                    <button class="btn btn-default filter-button" data-filter="">Open now</button>
                                    <button class="btn btn-default filter-button" data-filter="">Pre-order</button>
                                    <button class="btn btn-default filter-button" data-filter="">CBD & Delta</button>
                                </div>
                                <div class="d-flex justify-content-between px-4">
                                    <div class="filter-result">
                                        <span id="found-result">308</span>
                                        <span>results</span>
                                    </div>
                                    <div class="sort">
                                        <div class="form-group d-flex">
                                            <label for="sort-select">Sort by</label>
                                            <select id="sort-select" class="form-control" name="sort">
                                                <option>Recommended</option>
                                                <option>Lowest Price</option>
                                                <option>Highest Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result Card -->
                            <div class="p-4">
                                <h4>DISPENSARIES</h4>
                                <div class="card border p-2">
                                    <div class="card-img-top rounded"><img src="./assets/images/home/mock_img_01.jpg" alt="Mock"></div>
                                    <div class="card-body">
                                        <h4 class="card-title">Popular Shop dispensaries</h4>
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
                                        <p class="card-text mb-3">เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                            มันได้กลายมาเป็นเนื้อหา</p>
                                        <a href="" class="btn btn-default">Delivery</a>
                                        <div class="card-status">
                                            <span class="close"></span>
                                            <span class="status-text">Closed until tomorrow at 9am PT</span>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top mt-3 pt-3">
                                        <div class="btn btn-sale">30% off</div>
                                        <p class="mt-3">30% Off Sitewide on amuse . com | Code = 30LEAF</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 px-0">
                            <div class="google-map">
                                <!-- Google Map API -->
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- grid Results -->
                <div id="results" class="shop-results mt-5">
                    <h2>Great weed you can find today.</h2>
                    <div class="place-details mt-4 mb-5">
                        <span>These are all found near</span>
                        <a href=""><span>Los Angeles,CA</span><i class="mx-2"><img src="./assets/images/icons/arrow_right.svg" alt="Arrow"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="border">
                                <i><img src="./assets/images/icons/happy.svg" alt="Happy"></i>
                                <span>Top happy strain in your area</span>
                            </div>
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="./assets/images/home/popular_card_img_01.jpg" alt="Image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Popular Shop dispensaries</h4>
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
                                    <a href="" class="btn btn-outline">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="border">
                                <i><img src="./assets/images/icons/happy.svg" alt="Happy"></i>
                                <span>Top happy strain in your area</span>
                            </div>
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="./assets/images/home/popular_card_img_01.jpg" alt="Image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Popular Shop dispensaries</h4>
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
                                    <a href="" class="btn btn-outline">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="border">
                                <i><img src="./assets/images/icons/happy.svg" alt="Happy"></i>
                                <span>Top happy strain in your area</span>
                            </div>
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="./assets/images/home/popular_card_img_01.jpg" alt="Image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Popular Shop dispensaries</h4>
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
                                    <a href="" class="btn btn-outline">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="border">
                                <i><img src="./assets/images/icons/happy.svg" alt="Happy"></i>
                                <span>Top happy strain in your area</span>
                            </div>
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="./assets/images/home/popular_card_img_01.jpg" alt="Image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Popular Shop dispensaries</h4>
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
                                    <a href="" class="btn btn-outline">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li cl ass="page-item active" aria-current="page">
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
            </div>

        </section>

         <!-- Welcome -->
         <section id="welcome" class="section-welcome border-top">
            <div class="container">
                <div class="text-center mb-4">
                    <h2>Welcome to Greenwire</h2>
                    <p>A great place to discover cannabis.</p>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">A weed community</h4>
                                <p class="card-text">11,000+ articles. 5,000+ strains. 1.3mm+ reviews. Legalization
                                    advocates with a social justice and equity mindset.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Making life easy</h4>
                                <p class="card-text">Shop by strain, price, deals, dispensary, location, brand,
                                    star-rating, or vibes. Find the best legal weed near you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buy local, everywhere</h4>
                                <p class="card-text">Find the neighborhood dispensaries wherever you are. Place a
                                    free online order, pay when you get it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>
    <?php include 'elements/footer.php'; ?>
    <script src="./assets/js/home.js"></script>
</body>

</html>