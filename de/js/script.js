$(document).ready(function() {
   $('.more-info').toggle(0);

   console.log('hello');
   $('.more-less-button').on('click', function() {
      $('.more-info').toggle(400);
   });

   $(function(){
   $('.more-less-button').click(function () {
      $(this).text(function(i, text){
          return text === "mniej..." ? "więcej..." : "mniej...";
      })
   });
})
});
