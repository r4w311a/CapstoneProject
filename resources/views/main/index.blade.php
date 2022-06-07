@extends('main.main_master')
@section('content')
<main>
    <!--
    - BANNER
  -->

    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img
              src="{{ asset('images/banner-1.jpg') }}"
              alt="women's latest fashion sale"
              class="banner-img"
            />

            <div class="banner-content">
              <p class="banner-subtitle">Trending item</p>

              <h2 class="banner-title">Women's latest fashion sale</h2>

              <p class="banner-text">starting at &dollar; <b>20</b>.00</p>

              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>

          <div class="slider-item">
            <img
              src="{{ asset('images/banner-2.jpg') }}"
              alt="modern sunglasses"
              class="banner-img"
            />

            <div class="banner-content">
              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">Modern sunglasses</h2>

              <p class="banner-text">starting at &dollar; <b>15</b>.00</p>

              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>

          <div class="slider-item">
            <img
              src="{{ asset('images/banner-3.jpg') }}"
              alt="new fashion summer sale"
              class="banner-img"
            />

            <div class="banner-content">
              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">New fashion summer sale</h2>

              <p class="banner-text">starting at &dollar; <b>29</b>.99</p>

              <a href="#" class="banner-btn">Shop now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!--
    - PRODUCT
  -->

    <div class="product-container">
      <div class="container">
        <!--
        - SIDEBAR
      -->

        <div class="sidebar has-scrollbar" data-mobile-menu>
          <div class="sidebar-category">
            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img
                      src="{{ asset('images/icons/dress.svg') }}"
                      alt="clothes"
                      width="20"
                      height="20"
                      class="menu-title-img"
                    />

                    <p class="menu-title">Clothes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon
                      name="remove-outline"
                      class="remove-icon"
                    ></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shirt</p>
                      <data value="300" class="stock" title="Available Stock"
                        >300</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">shorts & jeans</p>
                      <data value="60" class="stock" title="Available Stock"
                        >60</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">jacket</p>
                      <data value="50" class="stock" title="Available Stock"
                        >50</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">dress & frock</p>
                      <data value="87" class="stock" title="Available Stock"
                        >87</data
                      >
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img
                      src="{{ asset('images/icons/shoes.svg') }}"
                      alt="footwear"
                      class="menu-title-img"
                      width="20"
                      height="20"
                    />

                    <p class="menu-title">Footwear</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon
                      name="remove-outline"
                      class="remove-icon"
                    ></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sports</p>
                      <data value="45" class="stock" title="Available Stock"
                        >45</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Formal</p>
                      <data value="75" class="stock" title="Available Stock"
                        >75</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Casual</p>
                      <data value="35" class="stock" title="Available Stock"
                        >35</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Safety Shoes</p>
                      <data value="26" class="stock" title="Available Stock"
                        >26</data
                      >
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img
                      src="{{ asset('images/icons/jewelry.svg') }}"
                      alt="clothes"
                      class="menu-title-img"
                      width="20"
                      height="20"
                    />

                    <p class="menu-title">Jewelry</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon
                      name="remove-outline"
                      class="remove-icon"
                    ></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Earrings</p>
                      <data value="46" class="stock" title="Available Stock"
                        >46</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Couple Rings</p>
                      <data value="73" class="stock" title="Available Stock"
                        >73</data
                      >
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Necklace</p>
                      <data value="61" class="stock" title="Available Stock"
                        >61</data
                      >
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

          <div class="product-showcase">
            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">
              <div class="showcase-container">
                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img
                      src="{{ asset('images/products/1.jpg') }}"
                      alt="baby fabric shoes"
                      width="75"
                      height="75"
                      class="showcase-img"
                    />
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">baby fabric shoes</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$4.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img
                      src="{{ asset('images/products/2.jpg') }}"
                      alt="men's hoodies t-shirt"
                      class="showcase-img"
                      width="75"
                      height="75"
                    />
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">men's hoodies t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$17.00</del>
                      <p class="price">$7.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img
                      src="{{ asset('images/products/3.jpg') }}"
                      alt="girls t-shirt"
                      class="showcase-img"
                      width="75"
                      height="75"
                    />
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">girls t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$3.00</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img
                      src="{{ asset('images/products/4.jpg') }}"
                      alt="woolen hat for men"
                      class="showcase-img"
                      width="75"
                      height="75"
                    />
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">woolen hat for men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$15.00</del>
                      <p class="price">$12.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-box">
          <!--
          - PRODUCT MINIMAL
        -->

          <div class="product-minimal">
            <div class="product-showcase">
              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="relaxed short full sleeve t-shirt"
                        width="70"
                        class="showcase-img"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Relaxed Short full Sleeve T-Shirt
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$45.00</p>
                        <del>$12.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-2.jpg') }}"
                        alt="girls pink embro design top"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Girls pnk Embro design Top
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$9.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-3.jpg') }}"
                        alt="black floral wrap midi skirt"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Black Floral Wrap Midi Skirt
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$76.00</p>
                        <del>$25.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-4.jpg') }}"
                        alt="pure garment dyed cotton shirt"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Pure Garment Dyed Cotton Shirt
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Mens Fashion</a>

                      <div class="price-box">
                        <p class="price">$68.00</p>
                        <del>$31.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/jacket-1.jpg') }}"
                        alt="men yarn fleece full-zip jacket"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          MEN Yarn Fleece Full-Zip Jacket
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$11.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/jacket-2.jpg') }}"
                        alt="mens winter leathers jackets"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Mens Winter Leathers Jackets
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$32.00</p>
                        <del>$20.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/jacket-3.jpg') }}"
                        alt="mens winter leathers jackets"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Mens Winter Leathers Jackets
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Jackets</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$25.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/shorts-1.jpg') }}"
                        alt="better basics french terry sweatshorts"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Better Basics French Terry Sweatshorts
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Shorts</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$10.00</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">
              <h2 class="title">Trending</h2>

              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/sports-1.jpg') }}"
                        alt="running & trekking shoes - white"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Running & Trekking Shoes - White
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$49.00</p>
                        <del>$15.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/sports-2.jpg') }}"
                        alt="trekking & running shoes - black"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Trekking & Running Shoes - black
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$78.00</p>
                        <del>$36.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/party-wear-1.jpg') }}"
                        alt="womens party wear shoes"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Womens Party Wear Shoes
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Party wear</a>

                      <div class="price-box">
                        <p class="price">$94.00</p>
                        <del>$42.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="sports claw women's shoes"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Sports Claw Women's Shoes
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$54.00</p>
                        <del>$65.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="air tekking shoes - white"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Air Trekking Shoes - white
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$52.00</p>
                        <del>$55.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="Boot With Suede Detail"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>

                      <a href="#" class="showcase-category">boots</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="men's leather formal wear shoes"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Men's Leather Formal Wear shoes
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">formal</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="casual men's brown shoes"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Casual Men's Brown shoes
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Casual</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$55.00</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">
              <h2 class="title">Top Rated</h2>

              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="pocket watch leather pouch"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Pocket Watch Leather Pouch
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$34.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="silver deer heart necklace"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Silver Deer Heart Necklace
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Jewellery</a>

                      <div class="price-box">
                        <p class="price">$84.00</p>
                        <del>$30.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="titan 100 ml womens perfume"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Titan 100 Ml Womens Perfume
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Perfume</a>

                      <div class="price-box">
                        <p class="price">$42.00</p>
                        <del>$10.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="men's leather reversible belt"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Men's Leather Reversible Belt
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Belt</a>

                      <div class="price-box">
                        <p class="price">$24.00</p>
                        <del>$10.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="platinum zircon classic ring"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          platinum Zircon Classic Ring
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$62.00</p>
                        <del>$65.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/watch-1.jpg') }}"
                        alt="smart watche vital plus"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Smart watche Vital Plus
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="shampoo conditioner packs"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          shampoo conditioner packs
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">cosmetics</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{ asset('images/products/clothes-1.jpg') }}"
                        alt="rose gold peacock earrings"
                        class="showcase-img"
                        width="70"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          Rose Gold Peacock Earrings
                        </h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <!--
          - PRODUCT GRID
        -->

          <div class="product-main">
            <h2 class="title">New Products</h2>

            <div class="product-grid">
              <div class="showcase">
                <div class="showcase-banner">
                  <img
                    src="{{ asset('images/products/jacket-4.jpg') }}"
                    alt="Mens Winter Leathers Jackets"
                    width="300"
                    class="product-img default"
                  />
                  <img
                    src="{{ asset('images/products/clothes-1.jpg') }}"
                    alt="Mens Winter Leathers Jackets"
                    width="300"
                    class="product-img hover"
                  />

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">jacket</a>

                  <a href="#">
                    <h3 class="showcase-title">
                      Mens Winter Leathers Jackets
                    </h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">shirt</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Pure Garment Dyed Cotton Shirt</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$45.00</p>
                    <del>$56.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Jacket</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >MEN Yarn Fleece Full-Zip Jacket</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$58.00</p>
                    <del>$65.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <p class="showcase-badge angle pink">new</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">skirt</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Black Floral Wrap Midi Skirt</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$25.00</p>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                    src="{{ asset('images/products/jacket-4.jpg') }}"
                    alt="Mens Winter Leathers Jackets"
                    width="300"
                    class="product-img default"
                  />
                  <img
                    src="{{ asset('images/products/clothes-1.jpg') }}"
                    alt="Mens Winter Leathers Jackets"
                    width="300"
                    class="product-img hover"
                  />

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">casual</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Casual Men's Brown shoes</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$99.00</p>
                    <del>$105.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Pocket Watch Leather Pouch</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$150.00</p>
                    <del>$170.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Smart watche Vital Plus</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$100.00</p>
                    <del>$120.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />
                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">party wear</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Womens Party Wear Shoes</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$25.00</p>
                    <del>$30.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">jacket</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Mens Winter Leathers Jackets</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$32.00</p>
                    <del>$45.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">sports</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Trekking & Running Shoes - black</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$58.00</p>
                    <del>$64.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">formal</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Men's Leather Formal Wear shoes</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$50.00</p>
                    <del>$65.00</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img
                  src="{{ asset('images/products/jacket-4.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img default"
                />
                <img
                  src="{{ asset('images/products/clothes-1.jpg') }}"
                  alt="Mens Winter Leathers Jackets"
                  width="300"
                  class="product-img hover"
                />

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">shorts</a>

                  <h3>
                    <a href="#" class="showcase-title"
                      >Better Basics French Terry Sweatshorts</a
                    >
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$78.00</p>
                    <del>$85.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main
@endsection