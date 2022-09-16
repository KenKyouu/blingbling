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
            <div class="w-indexHeader">
                <div class="w-indexHeaderBox">
                    <div class="w-indexHeader-item1">
                        <img src="./images/icons/index-icon-searcg.svg" alt="">
                    </div>
                    <div class="w-indexHeader-item1">
                        <img src="./images/icons/index-icon-shop.svg" alt="">
                    </div>
                    <div class="w-indexHeader-item1">
                        <img src="./images/icons/index-icon-member.svg" alt="">
                    </div>
                    <div class="w-indexHeader-menu">
                        <img src="./images/icons/index-icon-menu.svg" alt="">
                    </div>
                </div>
            </div>
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
            <card data-image="./images/story_card_02.png">
              <h1 slot="header">Beaches</h1>
              <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </card>
            <card data-image="./images/story_card_03.png">
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
          <a href="./kol.php">
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
          </a>
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
    <div class="footer-mobile">
        <div class="footer-bg">
            <div class="footer-logo">
                <img src="./images/logo-footer.svg" alt="" />
            </div>
            <div class="footer-nav">
                <ul>
                    <li><a href="#">聯絡我們</a></li>
                    <li><a href="#">幫助中心</a></li>
                    <li><a href="#">會員中心</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#">
                    <div class="send">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1764 0C5.00142 0 0 5.00142 0 11.1764C0 17.3514 5.00142 22.3528 11.1764 22.3528C17.3514 22.3528 22.3528 17.3514 22.3528 11.1764C22.3528 5.00142 17.3514 0 11.1764 0ZM16.5033 7.26605C16.4712 7.71989 16.2145 9.30146 15.9532 11.0114C15.5635 13.4319 15.1464 16.0816 15.1464 16.0816C15.1464 16.0816 15.0822 16.8242 14.5321 16.9526C13.982 17.0809 13.0789 16.4987 12.9184 16.3704C12.7901 16.2741 10.4979 14.8209 9.65444 14.1103C9.42981 13.9178 9.16851 13.5281 9.68653 13.0789C10.8509 12.0153 12.24 10.6905 13.0789 9.84698C13.4685 9.45732 13.8536 8.55422 12.24 9.65444C9.94783 11.236 7.6878 12.7213 7.6878 12.7213C7.6878 12.7213 7.16978 13.0422 6.2025 12.7534C5.23522 12.4646 4.10291 12.0749 4.10291 12.0749C4.10291 12.0749 3.32817 11.589 4.65302 11.0756C4.65302 11.0756 10.2412 8.78343 12.1804 7.9766C12.923 7.6557 15.4444 6.61967 15.4444 6.61967C15.4444 6.61967 16.6088 6.16583 16.5079 7.26605H16.5033Z" fill="white" />
                        </svg>
                    </div>
                </a>
                <a href="#">
                    <div class="facebook">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8236 0C5.64864 0 0.647217 5.00142 0.647217 11.1764C0.647217 17.3514 5.64864 22.3528 11.8236 22.3528C17.9986 22.3528 23 17.3514 23 11.1764C23 5.00142 17.994 0 11.8236 0ZM16.2199 5.64322H14.9088C13.6207 5.64322 13.2172 6.44546 13.2172 7.26605V9.21435H16.0962L15.6377 12.217H13.2172V19.4693H9.97159V12.217H7.33565V9.21435H9.97159V6.92681C9.97159 4.32754 11.5211 2.88808 13.8911 2.88808C15.028 2.88808 16.2153 3.08979 16.2153 3.08979V5.64322H16.2199Z" fill="white" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="footer-c">
                <p>&copy;&nbsp;bling&nbsp;bling&nbsp;gift,&nbsp;Inc.</p>
            </div>
        </div>
    </div>
    <div class="footer-pc">
        <div class="footer-pc-up">
            <div class="footer-nav">
                <ul>
                    <li><a href="#">聯絡我們</a></li>
                    <li><a href="#">幫助中心</a></li>
                    <li><a href="#">會員中心</a></li>
                </ul>
            </div>
            <div class="footer-c">
                <p>&copy;&nbsp;bling&nbsp;bling&nbsp;gift,&nbsp;Inc.</p>
            </div>
            <div class="footer-social">
                <a href="#">
                    <div class="send">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1764 0C5.00142 0 0 5.00142 0 11.1764C0 17.3514 5.00142 22.3528 11.1764 22.3528C17.3514 22.3528 22.3528 17.3514 22.3528 11.1764C22.3528 5.00142 17.3514 0 11.1764 0ZM16.5033 7.26605C16.4712 7.71989 16.2145 9.30146 15.9532 11.0114C15.5635 13.4319 15.1464 16.0816 15.1464 16.0816C15.1464 16.0816 15.0822 16.8242 14.5321 16.9526C13.982 17.0809 13.0789 16.4987 12.9184 16.3704C12.7901 16.2741 10.4979 14.8209 9.65444 14.1103C9.42981 13.9178 9.16851 13.5281 9.68653 13.0789C10.8509 12.0153 12.24 10.6905 13.0789 9.84698C13.4685 9.45732 13.8536 8.55422 12.24 9.65444C9.94783 11.236 7.6878 12.7213 7.6878 12.7213C7.6878 12.7213 7.16978 13.0422 6.2025 12.7534C5.23522 12.4646 4.10291 12.0749 4.10291 12.0749C4.10291 12.0749 3.32817 11.589 4.65302 11.0756C4.65302 11.0756 10.2412 8.78343 12.1804 7.9766C12.923 7.6557 15.4444 6.61967 15.4444 6.61967C15.4444 6.61967 16.6088 6.16583 16.5079 7.26605H16.5033Z" fill="white" />
                        </svg>
                    </div>
                </a>
                <a href="#">
                    <div class="facebook">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8236 0C5.64864 0 0.647217 5.00142 0.647217 11.1764C0.647217 17.3514 5.64864 22.3528 11.8236 22.3528C17.9986 22.3528 23 17.3514 23 11.1764C23 5.00142 17.994 0 11.8236 0ZM16.2199 5.64322H14.9088C13.6207 5.64322 13.2172 6.44546 13.2172 7.26605V9.21435H16.0962L15.6377 12.217H13.2172V19.4693H9.97159V12.217H7.33565V9.21435H9.97159V6.92681C9.97159 4.32754 11.5211 2.88808 13.8911 2.88808C15.028 2.88808 16.2153 3.08979 16.2153 3.08979V5.64322H16.2199Z" fill="white" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer-logo">
            <img src="./images/logo-footer.svg" alt="" />
        </div>
    </div>
   </div> 




<!-- <?php include __DIR__ . '/parts/footer.php'; ?> -->
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/index.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>