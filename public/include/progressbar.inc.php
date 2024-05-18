<style>
.progress{
   position: fixed;
   bottom: 0;
   left: 0;
   height: 5px;
   background-color: gold;
   transition: all linear 0.5s;
   min-width: 1%;
 }
</style>

<div class="progress"></div>


<script>
$(window).on("scroll", function(){
  var pixels = $(document).scrollTop();
  var pageHeight = $(document).height() - $(window).height();
  var progress = 100 * pixels / pageHeight;

  $("div.progress").css("width", progress + "%");
})
</script>
