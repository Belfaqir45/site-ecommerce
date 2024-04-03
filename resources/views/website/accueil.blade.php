@extends("layouts.template")

@section("titre")
page d'accueil
@endsection

@section("contenu")
<!-- debut de product-->
<div class="product-area pb-60">
    <div class="container">
        <div class="tab-filter-wrap mb-60">
            <div class="product-tab-list-2 nav">
                <a href="#product-1" data-bs-toggle="tab" >
                    <h4>New Arrivals  </h4>
                </a>
                <a class="active" href="#product-2" data-bs-toggle="tab">
                    <h4>Best Sellers </h4>
                </a>
                <a href="#product-3" data-bs-toggle="tab">
                    <h4>Sale Items</h4>
                </a>
            </div>
            <div class="filter-active">
                <a href="#"><i class="fa fa-plus"></i> filter</a>
            </div>
        </div>
        <div class="product-filter-wrapper">
            <div class="row">
                <!-- Product Filter -->
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="product-filter">
                        <h5>Sort by</h5>
                        <ul class="sort-by">
                            <li><a href="#">Default</a></li>
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: Low to High</a></li>
                            <li><a href="#">Price: High to Low</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Product Filter -->
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="product-filter">
                        <h5>color filters</h5>
                        <ul class="color-filter">
                            <li><input type="checkbox" value=""> <a href="#">Black</a></li>
                            <li><input type="checkbox" value=""> <a href="#">Brown</a></li>
                            <li><input type="checkbox" value=""> <a href="#">Orange</a></li>
                            <li><input type="checkbox" value=""> <a href="#">red</a></li>
                            <li><input type="checkbox" value=""> <a href="#">Yellow</a></li>
                            <li><input type="checkbox" value=""> <a href="#">purple</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Product Filter -->
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="product-filter">
                        <h5>product tags</h5>
                        <div class="product-tags">
                            <ul>
                                <li><a href="#">New</a></li>
                                <li><a href="#">brand</a></li>
                                <li><a href="#">black</a></li>
                                <li><a href="#">white</a></li>
                                <li><a href="#">chire</a></li>
                                <li><a href="#">table</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Product Filter -->
                <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                    <div class="product-filter">
                        <h5>Filter by price</h5>
                        <div class="price-filter mt-25">
                            <div class="price-slider-amount">
                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane" id="product-1">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-5.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-5.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Awesome Tote Bag</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-4.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-4.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Timex Watch</a></h3>
                                    <div class="price-2">
                                        <span>$ 70.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-3.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-3.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Leather Crossbody Purse</a></h3>
                                    <div class="price-2">
                                        <span>$ 40.00</span>
                                        <span class="old">$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-2.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-2.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Sunflower Shoes</a></h3>
                                    <div class="price-2">
                                        <span>$ 80.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-1.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-1.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Winter Zipper </a></h3>
                                    <div class="price-2">
                                        <span>$ 30.00</span>
                                        <span class="old">$ 40.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-8.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-8.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Winter Zipper </a></h3>
                                    <div class="price-2">
                                        <span>$ 90.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-7.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-7.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Makeup Brushes</a></h3>
                                    <div class="price-2">
                                        <span>$ 20.00</span>
                                        <span class="old">$ 30.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-6.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-6.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Ladies Gown</a></h3>
                                    <div class="price-2">
                                        <span>$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="product-2">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-1.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-1.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Winter Zipper</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-2.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-2.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Sunflower Shoes</a></h3>
                                    <div class="price-2">
                                        <span>$ 70.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-3.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-3.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Leather Crossbody Purse</a></h3>
                                    <div class="price-2">
                                        <span>$ 40.00</span>
                                        <span class="old">$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-4.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-4.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Timex Watch</a></h3>
                                    <div class="price-2">
                                        <span>$ 80.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-5.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-5.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Awesome Tote Bag</a></h3>
                                    <div class="price-2">
                                        <span>$ 30.00</span>
                                        <span class="old">$ 40.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-6.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-6.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Ladies Gown</a></h3>
                                    <div class="price-2">
                                        <span>$ 90.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-7.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-7.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Makeup Brushes</a></h3>
                                    <div class="price-2">
                                        <span>$ 20.00</span>
                                        <span class="old">$ 30.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-8.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-8.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Winter Zipper</a></h3>
                                    <div class="price-2">
                                        <span>$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="product-3">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-8.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-8.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Winter Zipper</a></h3>
                                    <div class="price-2">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-7.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-7.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Makeup Brushes</a></h3>
                                    <div class="price-2">
                                        <span>$ 70.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-6.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-6.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Ladies Gown</a></h3>
                                    <div class="price-2">
                                        <span>$ 40.00</span>
                                        <span class="old">$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-5.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-5.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Awesome Tote Bag</a></h3>
                                    <div class="price-2">
                                        <span>$ 80.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-4.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-4.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Timex Watch</a></h3>
                                    <div class="price-2">
                                        <span>$ 30.00</span>
                                        <span class="old">$ 40.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-3.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-3.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Leather Crossbody Purse</a></h3>
                                    <div class="price-2">
                                        <span>$ 90.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-2.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-2.jpg')}}" alt="">
                                </a>
                                <span class="pink">-10%</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Sunflower Shoes</a></h3>
                                    <div class="price-2">
                                        <span>$ 20.00</span>
                                        <span class="old">$ 30.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                        <div class="product-wrap-2 mb-25">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{asset('assets/img/product/hm2-pro-1.jpg')}}" alt="">
                                    <img class="hover-img" src="{{asset('assets/img/product/hm2-pro-1.jpg')}}" alt="">
                                </a>
                                <span class="purple">New</span>
                                <div class="product-action-2">
                                    <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                    <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                                </div>
                            </div>
                            <div class="product-content-2">
                                <div class="title-price-wrap-2">
                                    <h3><a href="product-details.html">Winter Zipper </a></h3>
                                    <div class="price-2">
                                        <span>$ 50.00</span>
                                    </div>
                                </div>
                                <div class="pro-wishlist-2">
                                    <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin de product-->

<!-- debut de blog erea-->
<div class="blog-area pb-55">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h2>OUR BLOG</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt=""></a>
                        <span class="pink">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin de blog erea-->

@endsection
