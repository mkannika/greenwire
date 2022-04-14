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
    <link rel="stylesheet" href="./assets/css/dispensaries.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
    <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include 'elements/header.php'; ?>
    <article>
        <div class="container">
            <!-- Breadcrumb -->
            <!-- <nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item" aria-current="page"><a href="./">Home</a></li>
					<li class="breadcrumb-item"><a href="./strain.php">Strains</a></li>
					<li class="breadcrumb-item"><a href="./strain_review.php">All Reviews</a></li>
					<li class="breadcrumb-item active">Reviews</li>
				</ol>
			</nav> -->

            <section class="main my-5">
				<h2>Strains</h2>
				<p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลาย<br>มาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                <!-- Location -->
                <div id="shop-location" class="shop-location">
                    <div class="row border">
                        <div class="col-md-3 px-0 border-end">
                            <!-- Filter -->
                            <div class="filter-header border-bottom p-4">
                                <div class="filter-by-type btn-filter border-0">
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
                                    <a href="./strain_detail.php" class="btn btn-outline">Read more</a>
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
                                    <a href="./strain_detail.php" class="btn btn-outline">Read more</a>
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
                                    <a href="./strain_detail.php" class="btn btn-outline">Read more</a>
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
                                    <a href="./strain_detail.php" class="btn btn-outline">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </article>
    <?php include 'elements/footer.php'; ?>
    <script src="./assets/js/strain_detail.js"></script>
</body>

</html>