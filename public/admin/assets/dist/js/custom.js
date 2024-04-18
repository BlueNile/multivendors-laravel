var $englishForm = $('#english-form');
   var $arForm = $('#arabic-form');
   var $englishLink = $('#english-link');
   var $arLink = $('#arabic-link');

   $englishLink.click(function() {
     $englishLink.toggleClass('bg-aqua-active');
     $englishForm.toggleClass('d-none');
     $arLink.toggleClass('bg-aqua-active');
     $arForm.toggleClass('d-none');
   });

   $arLink.click(function() {
     $englishLink.toggleClass('bg-aqua-active');
     $englishForm.toggleClass('d-none');
     $arLink.toggleClass('bg-aqua-active');
     $arForm.toggleClass('d-none');
   });
//subadmins
   $(function(){
    $('#subadmins').DataTable();
   });

  //sections
$(function(){
  $('#sections').DataTable();
});
//update section status s
$(document).ready(function(){
$(document).on('click','.updateSectionStatus',function(){
var status=$(this).children("i").attr("status");
var section_id=$(this).attr("section_id");
alert(section_id);
  })
});