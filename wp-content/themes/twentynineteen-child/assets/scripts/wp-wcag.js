  /*
|==========================================================================
| Volum8 WCAG
|==========================================================================
| 
| These are various functions gathered over time enhance basic
| accessibility of websites by removing empty elements, adding an
| alert when leaving the site, iframe accessibility. Currently a
| work in progress, and probably needs review.
|
|==========================================================================
|
*/

//clean up orphaned form labels
jQuery('label').each( function() {
  if(!jQuery(this)[0].hasAttribute("for")){
      jQuery(this).contents().unwrap();
    }//if
  }//function
);//each

//fixes what (above) breaks in the search
//Search form label
jQuery("form.search-form").each(function(i){
  jQuery(this).find(".search-field").attr('id','search-field'+i);
  jQuery(this).find("span.screen-reader-text").wrap('<label for="search-field'+i+'"></label>');
});

// $(function() {
//   $("div").each(function() {
//     $(".ginput_counter").attr("id", "gf_text_limit");
//   });
// });


var existsCondition = setInterval( function(){
  if( jQuery('.ginput_counter').length ){
    console.log("Yerrrr");
    clearInterval(existsCondition);
    jQuery(".ginput_counter").attr('id', "gf_text_limit");

  }//if statement

} ,100); //end of set, checks every second