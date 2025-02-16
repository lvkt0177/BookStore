@extends('layout.template')
@section('subtile','Home')
@section('content')

    <section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
      style="background-image: url(images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
      <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper main-swiper">
        <div class="swiper-wrapper d-flex align-items-center">
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>The Fine Print Book Collection</h2>
                    <p>Best Offer Save 30%. Grab it now!</p>
                    <a href="index.html" class="btn mt-3">Shop Collection</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/banner-image2.png" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>How Innovation works</h2>
                    <p>Discount available. Grab it now!</p>
                    <a href="index.html" class="btn mt-3">Shop Product</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/banner-image1.png" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>Your Heart is the Sea</h2>
                    <p>Limited stocks available. Grab it now!</p>
                    <a href="index.html" class="btn mt-3">Shop Collection</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/banner-image.png" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container my-5">
        <section id="company-services" class="padding-large pb-0">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                  <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                      <svg class="cart-outline">
                        <use xlink:href="#cart-outline" />
                      </svg>
                    </div>
                    <div class="icon-box-content">
                      <h4 class="card-title mb-1 text-capitalize text-dark">Free delivery</h4>
                      <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                  <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                      <svg class="quality">
                        <use xlink:href="#quality" />
                      </svg>
                    </div>
                    <div class="icon-box-content">
                      <h4 class="card-title mb-1 text-capitalize text-dark">Quality guarantee</h4>
                      <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                  <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                      <svg class="price-tag">
                        <use xlink:href="#price-tag" />
                      </svg>
                    </div>
                    <div class="icon-box-content">
                      <h4 class="card-title mb-1 text-capitalize text-dark">Daily offers</h4>
                      <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                  <div class="icon-box d-flex">
                    <div class="icon-box-icon pe-3 pb-3">
                      <svg class="shield-plus">
                        <use xlink:href="#shield-plus" />
                      </svg>
                    </div>
                    <div class="icon-box-content">
                      <h4 class="card-title mb-1 text-capitalize text-dark">100% secure payment</h4>
                      <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>

    <section id="best-selling-items" class="position-relative padding-large ">
        <div class="container">
          <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
            <h3 class="d-flex align-items-center">Best selling items</h3>
            <a href="index.html" class="btn">View All</a>
          </div>
          <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
            <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
              <use xlink:href="#alt-arrow-right-outline"></use>
            </svg>
          </div>
          <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
            <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
              <use xlink:href="#alt-arrow-left-outline"></use>
            </svg>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
                @foreach ($products as $item)
                  {{-- swiper-slide --}}
                    <div class="swiper-slide">
                      <div class="card position-relative p-4 border rounded-3">
                        
                        <img src="images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
                        <h6 class="mt-4 mb-0 fw-bold"><a href="/">{{$item->title}}</a></h6>
                        <div class="review-content">
                          <p class="my-2 me-2 text-black-50" style="font-size: 13px">{{$item->author}}</p>
                          
                          {{-- Rating --}}
                          <div class="rating text-warning d-flex align-items-center">
                            <svg class="star star-fill">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                            <svg class="star star-fill">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                            <svg class="star star-fill">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                            <svg class="star star-fill">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                            <svg class="star star-fill">
                              <use xlink:href="#star-fill"></use>
                            </svg>
                          </div>
                        </div>
                        <span class="price text-primary fw-bold mb-2 fs-5">${{$item->price}}</span>
                        <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                          <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Tooltip on top">
                            <svg class="cart">
                              <use xlink:href="#cart"></use>
                            </svg>
                          </button>
                          <a href="#" class="btn btn-dark">
                            <span>
                              <svg class="wishlist">
                                <use xlink:href="#heart"></use>
                              </svg>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  {{-- end swiper-slide --}}
                @endforeach
            </div>
            {{-- end swiper-wrapper --}}
          </div>
        </div>
      </section>

    <section id="limited-offer" class="padding-large"
      style="background-image: url(images/banner-image-bg-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 text-center">
            <div class="image-holder">
              <img src="images/banner-image3.png" class="img-fluid" alt="banner">
            </div>
          </div>
          <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
            <h2>30% Discount on all items. Hurry Up !!!</h2>
            <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
              <div class="time d-grid pe-3">
                <span class="days fs-1 fw-normal"></span>
                <small>Days</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="hours fs-1 fw-normal"></span>
                <small>Hrs</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="minutes fs-1 fw-normal"></span>
                <small>Min</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid ps-3">
                <span class="seconds fs-1 fw-normal"></span>
                <small>Sec</small>
              </div>
            </div>
            <a href="index.html" class="btn mt-3">Shop Collection</a>
          </div>
        </div>
      </div>
      </div>
    </section>

<section id="categories" class="padding-large pt-0 mt-5">
    <div class="container">
        <div class="section-title overflow-hidden mb-4">
        <h3 class="d-flex align-items-center">Categories</h3>
        </div>
        <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 border-0 rounded-3 position-relative">
            <a href="index.html">
                <img src="images/category1.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Romance</a></h6>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
            <a href="index.html">
                <img src="images/category2.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Lifestyle</a></h6>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
            <a href="index.html">
                <img src="images/category3.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Recipe</a></h6>
            </a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section id="latest-posts" class="padding-large">
    <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center">Latest posts</h3>
        <a href="index.html" class="btn">View All</a>
        </div>
        <div class="row">
        <div class="col-md-3 posts mb-4">
            <img src="images/post-item1.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">10 Must-Read Books of the Year: Our Top Picks!</a></h4>
            <p class="mb-2">Dive into the world of cutting-edge technology with our latest blog post, where we highlight
            five essential gadge. <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
            </p>
        </div>
        <div class="col-md-3 posts mb-4">
            <img src="images/post-item2.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">The Fascinating Realm of Science Fiction</a></h4>
            <p class="mb-2">Explore the intersection of technology and sustainability in our latest blog post. Learn about
            the innovative <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span> </p>
        </div>
        <div class="col-md-3 posts mb-4">
            <img src="images/post-item3.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Finding Love in the Pages of a Book</a></h4>
            <p class="mb-2">Stay ahead of the curve with our insightful look into the rapidly evolving landscape of
            wearable technology. <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
            </p>
        </div>
        <div class="col-md-3 posts mb-4">
            <img src="images/post-item4.jpg" alt="post image" class="img-fluid rounded-3">
            <a href="blog.html" class="fs-6 text-primary">Books</a>
            <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Reading for Mental Health: How Books Can Heal and Inspire</a></h4>
            <p class="mb-2">In today's remote work environment, productivity is key. Discover the top apps and tools that
            can help you stay <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
            </p>
        </div>
        </div>
    </div>
    </section>
  
@endsection