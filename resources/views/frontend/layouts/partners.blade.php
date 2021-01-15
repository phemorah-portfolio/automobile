<style>
    .carousel-nav-icon {
   height: 48px;
   width: 48px;
}
.carousel-item {
   .col, .col-sm, .col-md {
      margin: 8px;
      height: 300px;
      background-size: cover;
      background-position: center center;
   }
}




/* nothing below this point is needed*/
@import url('https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,600,700,800,900&display=swap');
body {
   background-color: #f2f2f2;
   color: #171717;
   height: 100vh;
   min-height: 100%;
   display: flex;
   align-items: center;
   justify-content: center;
}
h1 {
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 700;
}

</style>

<div class="my-5 text-center container">
   <div class="row mb-2">
      <div class="col text-center">
         <h1>Carousel with outer controls</h1>
         <p class="lead">Does what it says on the tin.</p>
      </div>
   </div>
   <div class="row d-flex align-items-center">
      <div class="col-1 d-flex align-items-center justify-content-center">
         <a href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="carousel-nav-icon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
               </svg>
            </div>
         </a>
      </div>
      <div class="col-10">
         <!--Start carousel-->
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div style="background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/flexfun04.jpg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/flexfun02.jpg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/flexfun05.jpg');" class="col-12 col-md d-flex align-items-center justify-content-center" class="col-12 col-md d-flex align-items-center justify-content-center">
                        <h3 class="text-white">Text in the panel.</h3>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="row">
                     <div style="background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/flexfun01.jpg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/flexfun03.jpg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/flexfun06.jpg');" class="col-12 col-md d-flex align-items-center justify-content-center" class="col-12 col-md d-flex align-items-center justify-content-center">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--End carousel-->
      </div>
      <div class="col-1 d-flex align-items-center justify-content-center"><a  href="#carouselExampleIndicators" data-slide="next">
         <div class="carousel-nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
               <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
            </svg>
         </div>
         </a>
      </div>
   </div>
</div>