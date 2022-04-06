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
    <link rel="stylesheet" href="./assets/css/write_review.css">

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
                    <li class="breadcrumb-item"><a href="./strain_review.php">All Reviews</a></li>
                    <li class="breadcrumb-item active">Reviews</li>
                </ol>
            </nav>

            <section class="main">
                <div class="review-write">
                    <div class="review-header">
                        <div class="review-img"><img src="./assets/images/product/wedding_cake.jpg" alt="Mockup"></div>
                        <div class="review-head">
                            <h2>Wedding Cake</h2>
                            <p>aka Gorilla Glue, Original Glue, Gorilla Glue #4, Glue</p>
                        </div>
                    </div>
                    <div class="border-bottom my-4"></div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border">
                                <div class="card-body">
                                    <p class="card-text">ให้กี่ดาวคะ?</p>
                                    <div class="card-rating">
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
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border">
                                <div class="card-body">
                                    <p class="card-text">ได้รับความรู้สึกอย่างไร?</p>
                                    <div class="card-vote">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">กลิ่นหอม</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">มีสมาธิ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">กินได้</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio4" value="option4">
                                            <label class="form-check-label" for="inlineRadio4">ดำมืด</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom my-4"></div>
                    
                    <!-- Feeling -->
                    <div id="feeling">
                        <div class="d-flex justify-content-between mb-4">
                            <h2 class="review-title">คุณรู้สึกอย่างไร <span>(Choose up to 4)</span></h2>
                        </div>
                        <div class="product-details-tags d-flex flex-wrap mb-4">
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/relax.svg" alt="ปลุกเร้า">ผ่อนคลาย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/heart.svg" alt="ปลุกเร้า">ปลุกเร้า</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/drooling.svg" alt="หิว">หิว</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/relax.svg" alt="ปลุกเร้า">ผ่อนคลาย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/heart.svg" alt="ปลุกเร้า">ปลุกเร้า</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/drooling.svg" alt="หิว">หิว</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/relax.svg" alt="ปลุกเร้า">ผ่อนคลาย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/heart.svg" alt="ปลุกเร้า">ปลุกเร้า</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/drooling.svg" alt="หิว">หิว</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/relax.svg" alt="ปลุกเร้า">ผ่อนคลาย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/heart.svg" alt="ปลุกเร้า">ปลุกเร้า</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/drooling.svg" alt="หิว">หิว</span>
                        </div>
                    </div>
                    <div class="border-bottom my-4"></div>

                    <!-- Smell and Sensation -->
                    <div id="smell-and-sensation">
                        <div class="d-flex justify-content-between mb-4">
                            <h2 class="review-title">รสชาติและกลิ่น <span>(Choose up to 4)</span></h2>
                        </div>
                        <div class="product-details-tags d-flex flex-wrap mb-4">
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/vanilla.svg" alt="วนิลา">วนิลา</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/pepper.svg" alt="พริกไทย">พริกไทย</span>
                            <span class="btn btn-outline d-flex flex-column align-items-center"><img src="./assets/images/icons/effect/sweet.svg" alt="หวาน">หวาน</span>
                        </div>
                    </div>
                    <div class="border-bottom my-4"></div>

                    <!-- Healing -->
                    <div id="healing">
                        <div class="d-flex justify-content-between mb-4">
                            <h2 class="review-title">รักษาโรค <span>(Choose up to 4)</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                        ADD/ADHD
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Alzheimer's
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Anorexia
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Anxiety
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Arthritis
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Asthma
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Bipolar disorder
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Cachexia
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Cancer
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Cramps
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Crohn's disease
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Depression
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Epilepsy
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Eye pressure
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Fatigue
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Fibromyalgia
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Gastrointestinal disorder
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Glaucoma
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        HIV/AIDS
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Headaches
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Hypertension
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Inflammation
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Insomnia
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Lack of appetite
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Migraines
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Multiple sclerosis
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Muscle spasms
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Muscular dystrophy
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Nausea
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        PMS
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        PTSD
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Pain
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Parkinson's
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Phantom limb pain
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Seizures
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Spasticity
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Spinal cord injury
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Stress
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Tinnitus
                                    </label>
                                </div>
                                <div class="form-check form-check-green">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Tourette's syndrome
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom my-4"></div>

                    <!-- Comment -->
                    <div id="comment">
                        <h2>มีความคิดเพิ่มเติมหรือไม่?</h2>
                        <p>ข้อมูลของคุณมีความสำคัญและช่วยสร้างชุมชนกัญชาของเราที่ Greenwire</p>
                        <div class="comment-content">
                            <form class="row align-items-center">
                                <div class="col-12">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="แชร์ประสบการณ์ของคุณ . . ."></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label" for="inlineFormCheck">
                                            บันทึกเป็นบทวิจารณ์ส่วนตัว
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button>ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary">เผยแพร่บทวิจารณ์</button>
                                </div>
                            </form>
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