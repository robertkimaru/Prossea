jQuery(document).ready(function($) {

function goBack() {
    window.history.back();
}			
				
// Javascript to enable link to tab
var hash = document.location.hash;
var prefix = "prod_";
if (hash) {
    $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
});				

});

