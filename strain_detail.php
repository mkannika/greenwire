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
    <link rel="stylesheet" href="./assets/css/strain_detail.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
    <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include 'elements/header.php'; ?>
    <article>
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="./strain.php">Strains</a></li>
                    <li class="breadcrumb-item active">Wedding Cake</li>
                </ol>
            </nav>

            <section class="main">
                <!-- Part 1 -->
                <div id="part-1">
                    <h2>Wedding Cake</h2>
                    <p>aka Gorilla Glue, Original Glue, Gorilla Glue #4, Glue</p>
                    <div class="border-bottom my-4"></div>

                    <div class="row mt-5 text-black">
                        <div class="col-md-6">
                            <!-- Slider main container -->
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-favotite-wrapper">
                                                <div class="card-favorite"></div><span>65,426</span>
                                            </div>
                                            <div class="card-img border">
                                                <img src="./assets/images/strain/strain_01.jpg" alt="Image">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-rating">
                                                    <div class="score-desc">
                                                        <span>Shop rating:</span>
                                                        <span class="rating-number">4.0</span>
                                                    </div>
                                                    <div class="star-rating">
                                                        <input id="box1-star-5" type="radio" name="rating"
                                                            value="star-5" />
                                                        <label for="box1-star-5" title="5 stars">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-4" type="radio" name="rating"
                                                            value="star-4" />
                                                        <label for="box1-star-4" title="4 stars">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-3" type="radio" name="rating"
                                                            value="star-3" />
                                                        <label for="box1-star-3" title="3 stars">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-2" type="radio" name="rating"
                                                            value="star-2" />
                                                        <label for="box1-star-2" title="2 stars">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-1" type="radio" name="rating"
                                                            value="star-1" />
                                                        <label for="box1-star-1" title="1 star">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-favotite-wrapper">
                                                <div class="card-favorite"></div><span>65,426</span>
                                            </div>
                                            <div class="card-img border">
                                                <img src="./assets/images/strain/strain_01.jpg" alt="Image">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-rating">
                                                    <div class="score-desc">
                                                        <span>Shop rating:</span>
                                                        <span class="rating-number">4.0</span>
                                                    </div>
                                                    <div class="star-rating">
                                                        <input id="box1-star-5" type="radio" name="rating"
                                                            value="star-5" />
                                                        <label for="box1-star-5" title="5 stars">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-4" type="radio" name="rating"
                                                            value="star-4" />
                                                        <label for="box1-star-4" title="4 stars">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-3" type="radio" name="rating"
                                                            value="star-3" />
                                                        <label for="box1-star-3" title="3 stars">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-2" type="radio" name="rating"
                                                            value="star-2" />
                                                        <label for="box1-star-2" title="2 stars">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                        <input id="box1-star-1" type="radio" name="rating"
                                                            value="star-1" />
                                                        <label for="box1-star-1" title="1 star">
                                                            <i class="bi bi-star-fill active"></i>
                                                            <i class="bi bi-star"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div
                                    class="product-details-percent d-flex justify-content-between align-items-center  m-0">
                                    <div class="btn btn-default">Indica</div>
                                    <ul class="d-grid">
                                        <li class="d-flex align-items-center"><img
                                                src="./assets/images/home/icon_01.svg" alt="THC"><span>THC 20%</span>
                                        </li>
                                        <li class="d-flex align-items-center"><img
                                                src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG 1%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-attribute mx-3 my-0">
                                    <span class="item-caryophyllene">Caryophyllene</span>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="card-progress">
                                    <div class="d-flex justify-content-between">
                                        <span>สงบ</span>
                                        <span>มีพลัง</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="card-progress">
                                    <div class="d-flex justify-content-between">
                                        <span>THC ต่ำ</span>
                                        <span>THC สูง</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details-tags row">
                                <div class="col-6">
                                    <button
                                        class="btn btn-outline d-flex justify-content-center align-items-center w-100"><img
                                            src="./assets/images/home/icon_flower.svg" alt="THC">
                                        <div class="d-flex flex-column text-start mx-2"><span
                                                class="text-green">รสและกลิ่น</span><span>ดอกไม้</span></div>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button
                                        class="btn btn-outline d-flex justify-content-center align-items-center w-100"><img
                                            src="./assets/images/home/icon_sleep.svg" alt="THC">
                                        <div class="d-flex flex-column text-start mx-2"><span
                                                class="text-green">ผลข้างเคียง</span>ง่วง<span></span></div>
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">เนื้อหาจำลองแบบเรียบๆ
                                        ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                                        เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                        Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ
                                        แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์
                                        และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ.
                                        1960
                                        เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum
                                        และล่าสุดกว่านั้น
                                        คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker
                                        ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title mb-4">Wedding Cake growing info</h3>
                                    <p class="card-text">เนื้อหาจำลองแบบเรียบๆ
                                        ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                                        เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                        Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ
                                        แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์
                                        และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ.
                                        1960
                                        เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum
                                        และล่าสุดกว่านั้น
                                        คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker
                                        ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom my-5"></div>

                <!-- Part 2 -->
                <div id="part-2" class="text-black">
                    <h2>Wedding Cake sensations</h2>
                    <div class="form-report">
                        <div class="form-group my-4">
                            <i class="bi bi-chat-square-text"></i>
                            <input type="text" class="form-control" id="report" aria-describedby="report"
                                placeholder="Reported by 1845 real people like you">
                            <i class="bi bi-info-circle"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Strain effects</h3>
                            <h4 class="my-4 text-black">Feelings</h4>
                            <div class="product-details-tags d-flex flex-wrap mb-4">
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/relax.svg" alt="ปลุกเร้า">ผ่อนคลาย</span>
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/heart.svg" alt="ปลุกเร้า">ปลุกเร้า</span>
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/drooling.svg" alt="หิว">หิว</span>
                            </div>
                            <h4 class="text-black">Negatives</h4>
                            <div class="product-details-tags d-flex flex-wrap mb-4">
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/dizzy.svg" alt="วิงเวียน">วิงเวียน</span>
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/anxious.svg" alt="กังวล">กังวล</span>
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/suspiciously.svg"
                                        alt="หวาดระแวง">หวาดระแวง</span>
                            </div>
                            <h3 class="my-4">Strain flavors</h3>
                            <div class="product-details-tags d-flex flex-wrap">
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                                <span class="btn btn-outline d-flex flex-column align-items-center"><img
                                        src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                            </div>
                        </div>
                        <div class="col-md-6 border-start">
                            <h3 class="mb-4">Wedding Cake helps with</h3>
                            <ul>
                                <li class="mb-3">
                                    <h4 class="text-black d-inline-block">Stress</h4>
                                    <p>22% of people say it helps with stress</p>
                                </li>
                                <li class="mb-3">
                                    <h4 class="text-black d-inline-block">Anxiety</h4>
                                    <p>21% of people say it helps with anxiety</p>
                                </li>
                                <li class="mb-3">
                                    <h4 class="text-black d-inline-block">Depression</h4>
                                    <p>17% of people say it helps with depression</p>
                                </li>
                            </ul>
                            <div class="card card-note border">
                                <div class="card-body">
                                    <div class="title">NOTE *</div>
                                    <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                                        เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom my-5"></div>

                <!-- Part 3 -->
                <div id="part-3">
                    <div class="text-center mb-5">
                        <h2>Wedding Cake sensations</h2>
                        <p>เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                            มันได้กลาย<br>มาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="card">
                                <div class="card-img border">
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
                                    <div
                                        class="product-details-percent d-flex justify-content-between align-items-center">
                                        <div class="btn btn-default">Indica</div>
                                        <ul class="d-grid">
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_01.svg" alt="THC"><span>THC
                                                    20%</span></li>
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG
                                                    1%</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-details-tags d-flex flex-wrap">
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
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
                                <div class="card-img border">
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
                                    <div
                                        class="product-details-percent d-flex justify-content-between align-items-center">
                                        <div class="btn btn-default">Indica</div>
                                        <ul class="d-grid">
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_01.svg" alt="THC"><span>THC
                                                    20%</span></li>
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG
                                                    1%</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-details-tags d-flex flex-wrap">
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
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
                                <div class="card-img border">
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
                                    <div
                                        class="product-details-percent d-flex justify-content-between align-items-center">
                                        <div class="btn btn-default">Indica</div>
                                        <ul class="d-grid">
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_01.svg" alt="THC"><span>THC
                                                    20%</span></li>
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG
                                                    1%</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-details-tags d-flex flex-wrap">
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
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
                                <div class="card-img border">
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
                                    <div
                                        class="product-details-percent d-flex justify-content-between align-items-center">
                                        <div class="btn btn-default">Indica</div>
                                        <ul class="d-grid">
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_01.svg" alt="THC"><span>THC
                                                    20%</span></li>
                                            <li class="d-flex align-items-center"><img
                                                    src="./assets/images/home/icon_02.svg" alt="CBG"><span>CBG
                                                    1%</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-details-tags d-flex flex-wrap">
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_flower.svg" alt="THC">Flowery</span>
                                        <span class="btn btn-outline d-flex align-items-center"><img
                                                src="./assets/images/home/icon_sleep.svg" alt="THC">Sleepy</span>
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
                <div class="border-bottom my-5"></div>

                <div class="review-wrapper px-5 mb-5">
                    <div class="d-flex justify-content-between mb-4">
                        <h2 class="review-title">Reviews <span>(1,845)</span></h2>
                        <a href="#" class="btn btn-outline">เขียนบทวิจารณ์</a>
                    </div>
                    <div class="review-list mb-5">
                        <div class="card border">
                            <div class="card-header">
                                <div class="card-info">
                                    <div class="author">Aroon Chirapaisarnsakul</div>
                                    <div class="card-rating border-start">
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
                                </div>
                                <div class="card-date">September 11, 2017</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                                    เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                    Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ
                                    แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์
                                    และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ.
                                    1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum
                                    และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง
                                    Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย
                                </p>
                                <div class="card-footer d-flex justify-content-between">
                                    <div class="card-helpful">
                                        <p class="card-desc"><span>1072</span> people found this helpful</p>
                                        <p class="btn-helpful"><i class="bi bi-hand-thumbs-up"></i>Helpful</p>
                                    </div>
                                    <a href="./strain_review.php">Read full review</a>
                                </div>
                            </div>
                        </div>
                        <div class="card border">
                            <div class="card-header">
                                <div class="card-info">
                                    <div class="author">Aroon Chirapaisarnsakul</div>
                                    <div class="card-rating border-start">
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
                                </div>
                                <div class="card-date">September 11, 2017</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                                    เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                    Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ
                                    แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์
                                    และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ.
                                    1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum
                                    และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง
                                    Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย
                                </p>
                                <div class="card-footer d-flex justify-content-between">
                                    <div class="card-helpful">
                                        <p class="card-desc"><span>1072</span> people found this helpful</p>
                                        <p class="btn-helpful"><i class="bi bi-hand-thumbs-up"></i>Helpful</p>
                                    </div>
                                    <a href="./strain_review.php">Read full review</a>
                                </div>
                            </div>
                        </div>
                        <div class="card border">
                            <div class="card-header">
                                <div class="card-info">
                                    <div class="author">Aroon Chirapaisarnsakul</div>
                                    <div class="card-rating border-start">
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
                                </div>
                                <div class="card-date">September 11, 2017</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    เนื้อหาจำลองแบบเรียบๆ
                                    ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                                    มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                                    เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                    Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ
                                    แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์
                                    และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ.
                                    1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum
                                    และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง
                                    Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย
                                </p>
                                <div class="card-footer d-flex justify-content-between">
                                    <div class="card-helpful">
                                        <p class="card-desc"><span>1072</span> people found this helpful</p>
                                        <p class="btn-helpful"><i class="bi bi-hand-thumbs-up"></i>Helpful</p>
                                    </div>
                                    <a href="./strain_review.php">Read full review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./strain_review.php">Read all reviews</a>
                </div>
            </section>
        </div>
    </article>
    <?php include 'elements/footer.php'; ?>
    <script src="./assets/js/strain_detail.js"></script>
</body>

</html>