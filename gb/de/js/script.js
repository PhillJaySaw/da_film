$(document).ready(function() {
   $('.more-info').toggle(0);

   $('.more-less-button').on('click', function() {
      $(this).parent().prev().toggle(400);
   });

   $(function(){
   $('.more-less-button').click(function () {
      $(this).text(function(i, text){
          return text === "weniger Info" ? "mehr Info" : "weniger Info";
      })
   });
})
});
