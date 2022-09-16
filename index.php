<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱，可以自定義
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/index.css" />
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="indexContainer">
      <div class="indexBox">
        <div id="area1" class="I-mainSection">
          <div class="mainTop">
            <div class="mainLogo">
              <img src="./images/logo-1.svg" alt="" />
            </div>
            <div class="mainNav">
              <div class="mainNav-wrap">
                <div class="nav-1">
                  <div class="nav-1L">
                      商品分類
                  </div>
                  <div class="nav-1R">
                    <svg id="product-listbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 12.64"><defs></defs><g id="_圖層_1-2"><path class="cls-1" d="M9.69,12.06L16.83,2.23c.68-.93,0-2.23-1.14-2.23H1.41C.26,0-.4,1.3,.27,2.23L7.41,12.06c.56,.77,1.71,.77,2.28,0Z"/></g></svg>
                  </div>
                </div>
                <div class="nav-line">
                  |
                </div>
                <div class="nav-2">
                  <div class="nav-2box">
                      溫馨送禮
                  </div>
                </div>
                <div class="nav-line">
                  |
                </div>
                <div class="nav-3">
                  <div class="nav-3box">
                      YouTube
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="app" class="p-index-container">
            <card data-image="https://drive.google.com/file/d/1TtiOxb1LLF7AEV3eC3sNnAKDaDG9vb5U/view?usp=sharing" >
              <h1 slot="header">Canyons</h1>
              <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </card>
            <card data-image="https://images.unsplash.com/photo-1479659929431-4342107adfc1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
              <h1 slot="header">Beaches</h1>
              <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </card>
            <card data-image="https://images.unsplash.com/photo-1479644025832-60dabb8be2a1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
              <h1 slot="header">Trees</h1>
              <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </card>
            <card data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
              <h1 slot="header">Lakes</h1>
              <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </card>
          </div>




          <div class="mainBotton">
            <!-- <div class="mainRow">
              <div class="mainCard">
                <img src="./images/whiteCard-m-index.svg" alt="">
              </div>
            </div>
            <div class="mainRow">
              <div class="mainCard">
                <img src="./images/whiteCard-m-index.svg" alt="">
              </div>
            </div>
            <div class="mainRow">
              <div class="mainCard">
                <img src="./images/whiteCard-m-index.svg" alt="">
              </div>
            </div>
            <div class="mainRow">
              <div class="mainCard">
                <img src="./images/whiteCard-m-index.svg" alt="">
              </div>
            </div>
          </div> -->
        </div>
        </div>
      </div>
        <div id="area2" class="I-storySection">
          <div class="storyTitle">
            <h2>Bling Bling</h2>
            <h2>Gifts</h2>
            <div class="I-story-text d-flex">
              <h3 class="mr-2">can</h3>
              <h2>Give you...</h2>
            </div>
          </div>
          <div class="storyInfor">
            <p class="storyInfor-text">Bling Bling 有禮說話不在多，在於說得對，說中了事和理的要害，能打動聽者的心。這句話改變了我的人生。如果此時我們選擇忽略送禮物，那後果可想而知。送禮物可以說是有著成為常識的趨勢。赫茲里特講過一句值得人反覆尋思的話，小人物在社會中是一種必要的調劑。每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮送禮物的各種可能。俗話說的好，掌握思考過程，也就掌握了送禮物。</p>
          </div>
        </div>
        <div id="area3" class="I-populerSection">
          <div class="populerTitle">
            <h2>Populer</h2>
            <div class="poupler-text d-flex">
              <h3 class="mr-2">熱門商品</h3>
              <h2>...</h2>
            </div>
          </div>
          <div class="populerInfor">
            <div class="populerInfor-line">
              <img src="./images/line_style01.svg" alt="">
            </div>
            <div class="populerInforBox">
              <div class="populerInfor-botton d-flex">
                <div class="populerInfor-row">
                  <div class="populerCard-s">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-01.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-b">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-02.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-s">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-03.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-b">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-04.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-s">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-05.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-b">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-06.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-s">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-01.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-b">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-02.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-s">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-03.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-b">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-04.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                <div class="populerInfor-row">
                  <div class="populerCard-s">
                    <div class="populerCardTop">
                      <img class="w-100" src="./images/products/populer-05.jpeg" alt="">
                    </div>
                    <div class="populerCardInfor mt-2">
                      <p class="populerCardTitle">Minor Figures 小人物 | 燕麥奶 一般版 6入</p>
                      <p class="populerCardPrice mt-1">3200</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
  
        </div>
        <div id="area4" class="I-FestivalSection">
          <div class="FestivalBox">
            <!-- <div class="Festival-TextL">
              <img src="./images/festival-text.svg" alt="">
            </div> -->
            <div class="FestivalMainBox">
              <div class="FestivalRow">
                <div class="FestivalCardRow">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-01.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.1</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow FestivalCardRowDown">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-02.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.2</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-03.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.3</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow FestivalCardRowDown">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-04.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.4</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-05.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.5</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow FestivalCardRowDown">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-06.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.6</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-07.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.7</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FestivalCardRow FestivalCardRowDown">
                  <div class="FestivalCard">
                    <div class="FestivalCard-Top">
                      <div class="img-wrap">
                        <img class="w-100" src="./images/products/festival-08.jpeg" alt="">
                      </div>
                      <div class="Top-text">
                        <p>TOP.8</p>
                      </div>
                      <div class="FestivalCard-Infor">
                        <div class="FestivalCard-InforL ">
                          <p class="">青山依舊在，幾度夕陽紅。慣看秋月春風。</p>
                        </div>
                        <div class="FestivalCard-InforR">
                          <div class="FestivalCard-PriceBox">
                            <div class="FestivalCard-Price">
                              <p>TWD</p>
                              <p>3200</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
            <!-- <div class="Festival-TextR">
              <img src="./images/recommend-text.svg" alt="">
            </div> -->
          </div>
          
  
        </div>
        <div id="area5" class="I-newSection">
          <div class="newSection-Top d-flex">
            <div class="newTitle">
              <h2>New</h2>
              <h2>Products</h2>
              <div class="new-text d-flex">
                <h3 class="mr-2">最新商品</h3>
                <h2>...</h2>
              </div>
            </div>
            <div class="newRow-Top">
              <div class="newCardBox">
                <div class="newCardRow">
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-01.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-02.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-03.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-01.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-02.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-03.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="newSection-botton">
            <div class="newRow-botton">
              <div class="newCardBox">
                <div class="newCardRow-botton">
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-01.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-02.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-03.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-04.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-04.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-01.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-02.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-03.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-04.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                  <div class="newCard">
                    <div class="newCardImg">
                      <img src="./images/products/new-04.jpeg" alt="">
                    </div>
                    <div class="newCardInfor">
                      <p>
                        Minor Figures 小人物 | 燕麥奶 一般版 6入
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        <div id="area6" class="I-NEWSsection">
          <div class="w-NEWScontainer">
            <div class="NEWScontainer">
              <div class="NEWStitle">
                <h2>Bling Bling</h2>
                <h2>NEWS...</h2>
                <div class="NEWSinfor">
                  <p>
                    斯賓諾莎曾經認為，智慧，不是死的默念，而是生的深思。這段話對世界的改變有著深遠的影響。
                  </p>
              </div>
            </div> 
          </div>
          <div class="NEWSbotton">
            <div class="p-NEWScontainer">
              <input type="radio" name="slider" id="item-1" checked>
              <input type="radio" name="slider" id="item-2">
              <input type="radio" name="slider" id="item-3">
            <div class="p-NEWScards">
              <label class="p-NEWScard" for="item-1" id="song-1">
                <img src="./images/products/news-01.jpeg" alt="song">
                <div class="p-NEWScard-text">
                  10大女用包款推薦
                </div>
              </label>
              <label class="p-NEWScard" for="item-2" id="song-2">
                <div class="p-NEWScard-text">
                  10大女用包款推薦
                </div>
                <img src="./images/products/news-02.jpeg" alt="song">
              </label>
              <label class="p-NEWScard" for="item-3" id="song-3">
                <div class="p-NEWScard-text">
                  10大女用包款推薦
                </div>
                <img src="./images/products/news-03.jpeg" alt="song">
              </label>
            </div>
          
            </div>
          </div>
          <div class="NEWSmore">
            <div class="NEWSbtn d-flex">
              <div class="NEWSbtn-L">
                <p>查看更多</p>
              </div>
              <div class="NEWSbtn-R">
                <img src="./images/more-arrow-01.svg" alt="">
              </div>
            </div>
          </div>
          </div>
        </div>
    <div id="area7" class="I-brandSection">
      <div class="brandBox">
        <div class="brandSlide d-flex">
          <div class="brandTop d-flex">
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-01.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-02.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-03.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-04.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-05.svg" alt="">
            </div>
 

          </div>
          <div class="brandTop2 d-flex">
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-01.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-02.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-03.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-04.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-05.svg" alt="">
            </div>
 

          </div>
        </div>
        <div class="brandSlide d-flex">
          <div class="brandTop d-flex">
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-05.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-04.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-03.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-02.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-01.svg" alt="">
            </div>
 

          </div>
          <div class="brandTop2 d-flex">
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-05.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-04.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-03.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-02.svg" alt="">
            </div>
            <div class="brandImgWarp ">
              <img src="./images/brands/brand-logo-01.svg" alt="">
            </div>
 

          </div>
        </div>
        

      </div>

    </div>
   </div> 

<!-- <?php include __DIR__ . '/parts/footer.php'; ?> -->
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/index.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>