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
                    <li class="breadcrumb-item" aria-current="page">Home</li>
                    <li class="breadcrumb-item active">Strains</li>
                </ol>
            </nav>

            <section class="main">
                <div class="row">
                    <aside class="sidebar col-md-3">
                        <h3>FILTERS</h3>
                        <div class="accordion mb-4" id="accordionFilter">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    THC level
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                                No THC 0% (9)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                Low 1-10% (95)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                Medium 10-20% (1884)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                High >20% (1248)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="accordion-footer mb-4">
                                        <ul>
                                            <li><a>expand all</a></li>
                                            <li><a>collapse all</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    Effects
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <ul class="filter-simple">
                                            <li><a href=""><span class="name">Aroused</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Creative</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Energetic</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Euphoric</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Focused</span> (<span class="qty">3</span>)</a></li>
                                            <li><a href=""><span class="name">Giggly</span> (<span class="qty">3</span>)</a></li>
                                            <li><a href=""><span class="name">Happy</span> (<span class="qty">4</span>)</a></li>
                                            <li><a href=""><span class="name">Hungry</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Relaxed</span> (<span class="qty">6</span>)</a></li>
                                            <li><a href=""><span class="name">Sleepy</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Talkative</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Tingly</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Uplifted</span> (<span class="qty">3</span>)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                    Helps with
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <ul class="filter-simple">
                                            <li><a href=""><span class="name">ADD/ADHD</span></a></li>
                                            <li><a href=""><span class="name">Alzheimer's</span></a></li>
                                            <li><a href=""><span class="name">Anorexia</span></a></li>
                                            <li><a href=""><span class="name">Anxiety</span></a></li>
                                            <li><a href=""><span class="name">Arthritis</span></a></li>
                                            <li><a href=""><span class="name">Asthma</span></a></li>
                                            <li><a href=""><span class="name">Bipolar disorder</span></a></li>
                                            <li><a href=""><span class="name">Cachexia</span></a></li>
                                            <li><a href=""><span class="name">Cancer</span></a></li>
                                            <li><a href=""><span class="name">Cramps</span></a></li>
                                            <li><a href=""><span class="name">Crohn's disease</span></a></li>
                                            <li><a href=""><span class="name">Depression</span></a></li>
                                            <li><a href=""><span class="name">Epilepsy</span></a></li>
                                            <li><a href=""><span class="name">Eye pressure</span></a></li>
                                            <li><a href=""><span class="name">Fatigue</span></a></li>
                                            <li><a href=""><span class="name">Fibromyalgia</span></a></li>
                                            <li><a href=""><span class="name">Gastrointestinal disorder</span></a></li>
                                            <li><a href=""><span class="name">Glaucoma</span></a></li>
                                            <li><a href=""><span class="name">HIV/AIDS</span></a></li>
                                            <li><a href=""><span class="name">Headaches</span></a></li>
                                            <li><a href=""><span class="name">Hypertension</span></a></li>
                                            <li><a href=""><span class="name">Inflammation</span></a></li>
                                            <li><a href=""><span class="name">Insomnia</span></a></li>
                                            <li><a href=""><span class="name">Lack of appetite</span></a></li>
                                            <li><a href=""><span class="name">Migraines</span></a></li>
                                            <li><a href=""><span class="name">Multiple sclerosis</span></a></li>
                                            <li><a href=""><span class="name">Muscle spasms</span></a></li>
                                            <li><a href=""><span class="name">Muscular dystrophy</span></a></li>
                                            <li><a href=""><span class="name">Nausea</span></a></li>
                                            <li><a href=""><span class="name">PMS</span></a></li>
                                            <li><a href=""><span class="name">PTSD</span></a></li>
                                            <li><a href=""><span class="name">Pain</span></a></li>
                                            <li><a href=""><span class="name">Parkinson's</span></a></li>
                                            <li><a href=""><span class="name">Phantom limb pain</span></a></li>
                                            <li><a href=""><span class="name">Seizures</span></a></li>
                                            <li><a href=""><span class="name">Spasticity</span></a></li>
                                            <li><a href=""><span class="name">Spinal cord injury</span></a></li>
                                            <li><a href=""><span class="name">Stress</span></a></li>
                                            <li><a href=""><span class="name">Tinnitus</span></a></li>
                                            <li><a href=""><span class="name">Tourette's syndrome</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                    Effects to avoid
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <ul class="filter-simple">
                                            <li><a href=""><span class="name">Anxious</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Aroused</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Creative</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Dizzy</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Dry eyes</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Dry mouth</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Energetic</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Euphoric</span> (<span class="qty">7</span>)</a></li>
                                            <li><a href=""><span class="name">Focused</span> (<span class="qty">6</span>)</a></li>
                                            <li><a href=""><span class="name">Giggly</span> (<span class="qty">9</span>)</a></li>
                                            <li><a href=""><span class="name">Happy</span> (<span class="qty">5</span>)</a></li>
                                            <li><a href=""><span class="name">Headache</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Hungry</span> (<span class="qty">7</span>)</a></li>
                                            <li><a href=""><span class="name">Paranoid</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Relaxed</span> (<span class="qty">3</span>)</a></li>
                                            <li><a href=""><span class="name">Sleepy</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Talkative</span> (<span class="qty">8</span>)</a></li>
                                            <li><a href=""><span class="name">Tingly</span> (<span class="qty">7</span>)</a></li>
                                            <li><a href=""><span class="name">Uplifted</span> (<span class="qty">6</span>)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                                    Terpenes
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <ul class="filter-terpenes">
                                            <li class="item-caryophyllene"><span class="name">Caryophyllene</span> (<span class="qty">3</span>)</li>
                                            <li class="item-humulene"><span class="name">Humulene</span> (<span class="qty">0</span>)</li>
                                            <li class="item-limonene"><span class="name">Limonene</span> (<span class="qty">0</span>)</li>
                                            <li class="item-linalool"><span class="name">Linalool</span> (<span class="qty">0</span>)</li>
                                            <li class="item-myrcene"><span class="name">Myrcene</span> (<span class="qty">6</span>)</li>
                                            <li class="item-ocimene"><span class="name">Ocimene</span> (<span class="qty">0</span>)</li>
                                            <li class="item-pinene"><span class="name">Pinene</span> (<span class="qty">0</span>)</li>
                                            <li class="item-terpinolene"><span class="name">Terpinolene</span> (<span class="qty">0</span>)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                                    Flavors
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <ul class="filter-simple">
                                            <li><a href=""><span class="name">Ammonia</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Apple</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Apricot</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Berry</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Blueberry</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Blue Cheese</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Butter</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Cheese</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Chemical</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Chestnut</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Citrus</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Coffee</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Diesel</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Earthy</span> (<span class="qty">3</span>)</a></li>
                                            <li><a href=""><span class="name">Flowery</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Grape</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Grapefruit</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Honey</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Lavender</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Lemon</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Lime</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Mango</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Menthol</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Mint</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Nutty</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Orange</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Peach</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Pear</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Pepper</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Pine</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Pineapple</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Plum</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Pungent</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Rose</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Sage</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Skunk</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Spicy/Herbal</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Strawberry</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Sweet</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Tar</span> (<span class="qty">1</span>)</a></li>
                                            <li><a href=""><span class="name">Tea</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Tobacco</span> (<span class="qty">2</span>)</a></li>
                                            <li><a href=""><span class="name">Tree fruit</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Tropical</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Vanilla</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Violet</span> (<span class="qty">0</span>)</a></li>
                                            <li><a href=""><span class="name">Woody</span> (<span class="qty">4</span>)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Your weed strains by type</h3>
                        <ul class="filter-by-type">
                            <li class="active">
                                <div class="card-img-left"><img src="./assets/images/icons/leaf_01.svg" alt="Card image cap"></div>
                                <p class="card-text">Indica</p>
                            </li>
                            <li>
                                <div class="card-img-left"><img src="./assets/images/icons/leaf_02.svg" alt="Card image cap"></div>
                                <p class="card-text">Sativa</p>
                            </li>
                            <li>
                                <div class="card-img-left"><img src="./assets/images/icons/leaf_03.svg" alt="Card image cap"></div>
                                <p class="card-text">Hybrid</p>
                            </li>
                        </ul>
                    </aside>
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
                                        <a href="" class="btn btn-outline">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                            <div class="col-12 col-sm-6 col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-favorite"></div>
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
                                            <span>Caryophyllene</span>
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
                    </div>
                </div>
            </section>
        </div>
    </article>
    <?php include 'elements/footer.php'; ?>
</body>

</html>