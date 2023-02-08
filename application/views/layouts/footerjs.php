<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/slick.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>assets/js/counterup.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		loadCourseCategories();
	});

	function loadCourseCategories(){
		$.ajax({
			url: base_url + 'courses/categorylist',
			method:'GET',      
			dataType:'json',
			success: function(cats) {
				cats = (!cats || cats == null) ? [] : cats;
				if(cats.length > 0) {
					var html = '';
					for (var i=0; i < cats.length; i++) {
						html += '<li>';
						html += '<a href="'+ base_url +'courses/categories/'+ cats[i].catid +'">'+ cats[i].categoryname+'</a>';
						html +=	'</li>';
					}
					$('#course_cat_menu_list').html(html);
				} else {
					$('#course_cat_menu_list').html('<li><a href="#">No categories found</a></li>');
				}
			},
			error: function(error){
				console.log('Error occured while fetching the category list.', error);
			}
		});
	}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Train 2 Success",
  "url": "https://train2success.in/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
