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
      const rX = this.mousePX * 30;
      const rY = this.mousePY * -30;
      return {
        transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
      };
    },
    cardBgTransform() {
      const tX = this.mousePX * -40;
      const tY = this.mousePY * -40;
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






//-------各元素滑動出現---------------

$(window).scroll(function () {
  console.log('scrollTop:', $(window).scrollTop());


  if ($(window).scrollTop() >= 600) {
      $('.I-storySection').css({
          transform: 'translateY(0px)',
          opacity: 1,
      })
  }
  else{
      $('.I-storySection').css({
          transform: 'translateY(200px)',
          opacity: 0,
      })
  }

  if ($(window).scrollTop() >= 700) {
      $('.I-populerSection').css({
          transform: 'translateY(0px)',
          opacity: 1,
      })
  }
  else{
      $('.I-populerSection').css({
          transform: 'translateY(200px)',
          opacity: 0,
      })
  }

  if ($(window).scrollTop() >= 2  000) {
      $('.FestivalMainBox').css({
          transform: 'translateY(0px)',
          opacity: 1,
      })
  }
  else{
      $('.FestivalMainBox').css({
          transform: 'translateY(200px)',
          opacity: 0,
      })
  }

  
  if ($(window).scrollTop() >= 2150) {
      $('.fishOne').css({
          'right':'5%',
          opacity: 1,
      })
  }
  else{
      $('.fishOne').css({
          'right':'0',
          opacity: 0,
      })
  }
  if ($(window).scrollTop() >= 2585) {
      $('.fishTwo').css({
          'left':'25%',
          opacity: 1,
      })
  }
  else{
      $('.fishTwo').css({
          'left':'0',
          opacity: 0,
      })
  }

  // if ($(window).scrollTop() >= 1976) {
  //     $('.coach-mainBox').css({
  //         transform: 'translateY(0px)',
  //         opacity: 1,
  //     })
  // }
  // else{
  //     $('.coach-mainBox').css({
  //         transform: 'translateY(200px)',
  //         opacity: 0,
  //     })
  // } 
  // let areaTop2 = $('#area2').offset().top - (100)
  if (
      $(window).scrollTop() >= $('#area1').offset().top &&
      $(window).scrollTop() < $('#area2').offset().top
  ) {
      //除了被點擊到的游標，其他都恢復成原來的顏色
      $('.nav li').removeClass('active');
      $('.nav li:eq(0)').addClass('active');
  } else if (
      $(window).scrollTop() >= $('#area2').offset().top &&
      $(window).scrollTop() < $('#area3').offset().top
  ) {
      $('.nav li').removeClass('active');
      $('.nav li:eq(1)').addClass('active');
  } else if (
      $(window).scrollTop() >= $('#area3').offset().top &&
      $(window).scrollTop() < $('#area4').offset().top
  ) {
      $('.nav li').removeClass('active');
      $('.nav li:eq(2)').addClass('active');

  } else if ($(window).scrollTop() >= $('#area4').offset().top) {
      $('.nav li').removeClass('active');
      $('.nav li:eq(3)').addClass('active');
  }
})