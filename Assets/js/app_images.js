var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition:true,
  columnWidth: '.grid-sizer'
});
//Mansory after each images
$grid.imagesLoaded().progress( function(){
  $grid.masonry();
})
