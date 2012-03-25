<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$bing_app_id = elgg_get_plugin_setting('bing_app_id', 'worldview');

?>

$(document).ready(function()
{
$(".search_input").focus();
$(".search_input").keyup(function() 
{
 
var search_input = $(this).val();
var keyword= encodeURIComponent(search_input);
 
 
var yt_url='http://api.bing.net/json.aspx?JsonType=callback&JsonCallback=?&Appid=<?php echo $bing_app_id;?>&query='+keyword+'&sources=web'; 

 
$.ajax({
type: "GET",
url: yt_url,
dataType:"jsonp",
success: function(response)
{

$("#result").html('');
if(response.SearchResponse.Web.Results.length)
{
 
 
 
$.each(response.SearchResponse.Web.Results, function(i,data)
{

 
var title=data.Title;
var dis=data.Description;
var url=data.Url;

var finalresult="<div class='webresult'><div class='title'><a href='"+url+"'>"+title+"</a></div><div class='desc'>"+dis+"</div><div class='url'>"+url+"</div></div>";

 
$("#result").append(finalresult);
 
});
}
else
{
    $("#result").html("<div id='no'>No results</div>");
}
} 
});
}); 
});
