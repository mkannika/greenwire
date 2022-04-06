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
                    <li class="breadcrumb-item active">All Reviews</li>
                </ol>
            </nav>

            <section class="main">
                <div class="review-wrapper px-5 mb-5">
                    <div class="d-flex justify-content-between mb-4">
                        <h2 class="review-title">Reviews <span>(1,845)</span></h2>
                        <a href="./write_review.php" class="btn btn-outline">เขียนบทวิจารณ์</a>
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
                                    <a href="#">Read full review</a>
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
                                    <a href="#">Read full review</a>
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
                                    <a href="#">Read full review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="pagination-wrapper d-flex align-items-center justify-content-between">
                        <div class="pagination-summary">
                            <span>1</span> of <span>200</span>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item" aria-current="page">
                                    <a class="page-link prev" href="#"><i class="bi bi-caret-left-fill"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#" tabindex="-1" aria-disabled="true">1</a>
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
                                    <a class="page-link next" href="#"><i class="bi bi-caret-right-fill"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        </div>
    </article>
    <?php include 'elements/footer.php'; ?>
    <script src="./assets/js/strain_detail.js"></script>
</body>

</html>