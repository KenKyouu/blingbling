
Vue.config.devtools = true;

Vue.component('card', {
  template: `
    <div class="card-wrap"
      @mousemove="handleMouseMove"
      @mouseenter="handleMouseEnter"
      @mouseleave="handleMouseLeave"
      ref="card">
      <div class="card"
        :style="cardStyle">
        <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
        <div class="card-info">
          <slot name="header"></slot>
          <slot name="content"></slot>
        </div>
      </div>
    </div>`,
  mounted() {
    this.width = this.$refs.card.offsetWidth;
    this.height = this.$refs.card.offsetHeight;
  },
  props: ['dataImage'],
  data: () => ({
    width: 0,
    height: 0,
    mouseX: 0,
    mouseY: 0,
    mouseLeaveDelay: null
  }),
  computed: {
    mousePX() {
      return this.mouseX / this.width;
    },
    mousePY() {
      return this.mouseY / this.height;
    },
    cardStyle() {
      const rX = this.mousePX * -10;
      const rY = this.mousePY * 5;
      return {
        transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
      };
    },
    cardBgTransform() {
      const tX = this.mousePX * -30;
      const tY = this.mousePY * -30;
      return {
        transform: `translateX(${tX}px) translateY(${tY}px)`
      }
    },
    cardBgImage() {
      return {
        backgroundImage: `url(${this.dataImage})`
      }
    }
  },
  methods: {
    handleMouseMove(e) {
      this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width/2;
      this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height/2;
    },
    handleMouseEnter() {
      clearTimeout(this.mouseLeaveDelay);
    },
    handleMouseLeave() {
      this.mouseLeaveDelay = setTimeout(()=>{
        this.mouseX = 0;
        this.mouseY = 0;
      }, 1000);
    }
  }
});

const app = new Vue({
  el: '#app'
});


//----開場--------
const OPENING = document.getElementById('openArea');

$('.giftAnimateArea').click(function(){
  console.log('hi');
  $('#openArea').addClass('animation-start')
})


// let OpenAreaHeight = $('#openArea').css('height')
//   console.log(OpenAreaHeight.substring(0, OpenAreaHeight.length -2));
// let OpenAreaHeightStr= OpenAreaHeight.substring(0, OpenAreaHeight.length -2)
// console.log('OpenAreaHeightStr',OpenAreaHeightStr)
// console.log(typeof(Number(OpenAreaHeightStr)));


  
// if(Number(OpenAreaHeightStr==0)){
  
//   $('#menuFixed').addClass('.menuFixed')
// }
//-----menuSection-------


$('.w-indexHeader-menu').click(function(){
  console.log('hi')
  const Opacity = $('.w-indexHeader-menuSection').css('opacity')
  console.log(Opacity)
  if(Opacity==1){
    $('.w-indexHeader-menuSection').css('opacity','0')
  }else{
    $('.w-indexHeader-menuSection').css('opacity','1')
  }
})


// $('.w-indexHeader-menu, .w-indexHeader-menuSection').mouseenter(function(){
//   $('.w-indexHeader-menuSection').show();
// });
// $('.w-indexHeader-menu,.w-indexHeader-menuSection').mouseleave(function(){
//   $('.w-indexHeader-menuSection').hide();
// });、、

//------滑鼠滾動---------------


$(window).scroll(function () {
  console.log('scrollTop:', $(window).scrollTop());


  if ($(window).scrollTop() >= 750) {
      $('#area3').css({
          transform: 'translateY(0px)',
          opacity: 1,
      })
  }  else{
    $('#area3').css({
        transform: 'translateY(200px)',
        opacity: 0,
    })
  }

//   if ($(window).scrollTop() >= 2350) {
//     $('#area4').css({
//         transform: 'translateY(0px)',
//         opacity: 1,
//     })
// }  else{
//   $('#area4').css({
//       transform: 'translateY(200px)',
//       opacity: 0,
//   })
// }
})

//   // if ($(window).scrollTop() >= 1074) {
//   //     $('.place-window').css({
//   //         transform: 'translateY(0px)',
//   //         opacity: 1,
//   //     })
//   // }
//   // else{
//   //     $('.place-window').css({
//   //         transform: 'translateY(200px)',
//   //         opacity: 0,
//   //     })
//   // }

//   // if ($(window).scrollTop() >= 977) {
//   //     $('.place-mainBox-M').css({
//   //         transform: 'translateY(0px)',
//   //         opacity: 1,
//   //     })
//   // }
//   // else{
//   //     $('.place-mainBox-M').css({
//   //         transform: 'translateY(200px)',
//   //         opacity: 0,
//   //     })
//   // }

  
//   // if ($(window).scrollTop() >= 2150) {
//   //     $('.fishOne').css({
//   //         'right':'5%',
//   //         opacity: 1,
//   //     })
//   // }
//   // else{
//   //     $('.fishOne').css({
//   //         'right':'0',
//   //         opacity: 0,
//   //     })
//   // }
//   // if ($(window).scrollTop() >= 2585) {
//   //     $('.fishTwo').css({
//   //         'left':'25%',
//   //         opacity: 1,
//   //     })
//   // }
//   // else{
//   //     $('.fishTwo').css({
//   //         'left':'0',
//   //         opacity: 0,
//   //     })
//   // }

//   // if (
//   //     $(window).scrollTop() >= $('#area1').offset().top &&
//   //     $(window).scrollTop() < $('#area2').offset().top
//   // ) {
//   //     //除了被點擊到的游標，其他都恢復成原來的顏色
//   //     $('.nav li').removeClass('active');
//   //     $('.nav li:eq(0)').addClass('active');
//   // } else if (
//   //     $(window).scrollTop() >= $('#area2').offset().top &&
//   //     $(window).scrollTop() < $('#area3').offset().top
//   // ) {
//   //     $('.nav li').removeClass('active');
//   //     $('.nav li:eq(1)').addClass('active');
//   // } else if (
//   //     $(window).scrollTop() >= $('#area3').offset().top &&
//   //     $(window).scrollTop() < $('#area4').offset().top
//   // ) {
//   //     $('.nav li').removeClass('active');
//   //     $('.nav li:eq(2)').addClass('active');

//   // } else if ($(window).scrollTop() >= $('#area4').offset().top) {
//   //     $('.nav li').removeClass('active');
//   //     $('.nav li:eq(3)').addClass('active');
//   // }
// })
