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
    <link rel="stylesheet" href="./assets/css/strain.css">
</head>

<body>
    <?php include 'elements/header.php'; ?>
    <article>
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Strains</li>
                </ol>
            </nav>

            <section class="main">
                <div class="row">
                    <!-- Sidebar -->
                    <?php include 'elements/sidebar-strain.php'; ?>

                    <!-- Content -->
                    <div class="col-md-9">
                        <h2>Strains</h2>
                        <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลาย<br>มาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                        <div class="border-top mt-4 pt-4"></div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite active"></div>
                                    <div class="card-img">
                                        <img src="./assets/images/strain/strain_01.jpg" alt="Image">
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
                                        <div class="product-details-percent d-flex justify-content-between align-items-center">
                                            <div class="btn btn-default">Indica</div>
                                            <ul class="d-grid">
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span></li>
                                                <li class="d-flex align-items-center"><img src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-details-tags d-flex flex-wrap">
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                            <span class="btn btn-outline d-flex align-items-center"><img src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
                                        </div>
                                        <div class="card-attribute">
                                            <span class="item-caryophyllene">Caryophyllene</span>
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
                </div>
            </section>
        </div>
    </article>
    <?php include 'elements/footer.php'; ?>
</body>

</html>