<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css?v=1.0" />
    </head>
    <body>
    <header>
        <div class="container">
            <nav class="main-menu navbar navbar-expand-xl navbar-light justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <a class="navbar-brand" href="/mototours/index.php">
                        <img src="assets/images/cdc_logo.svg" alt="" />
                    </a>
                    <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H22V2H0V0ZM0 7H22V9H0V7ZM22 14H0V16H22V14Z" fill="#F4F4F4"/>
                        </svg>
                    </button>
                </div>

                <div class="collapse navbar-collapse menu-custom justify-content-end flex-shrink-0" id="navbarNav">
                    <ul id="menu-main-menu" class="navbar-nav menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/mototours/tour.php" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Individuals
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="brandDropdown">
                                <li><a class="dropdown-item" href="/brand?section=1">목공의 마음</a></li>
                                <li><a class="dropdown-item" href="/brand?section=2">목공의 전문성</a></li>
                                <li><a class="dropdown-item" href="/brand?section=3">온열 목공간</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/mototours/tour.php" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Businesses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=130">족욕기</a></li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=131">반신욕기</a></li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=132">홈사우나</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/mototours/about.php">Developers</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

