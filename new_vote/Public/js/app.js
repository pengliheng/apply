
require.config({
    baseUrl: "js/",
    paths: {
  "jquery":"libs/jquery",
  "bootstrap":"libs/bootstrap.min",
  "basic":"libs/basic",
    "swiper":"libs/swiper.min"
    },
        waitSeconds: 100,
    shim: {
       'basic': {
          exports: 'basic'
       },
       'bootstrap':{
          deps: ["jquery"],
          exports: 'bootstrap'
       },
    }
}); 


require(["jquery","bootstrap","basic","swiper"],function(){

})