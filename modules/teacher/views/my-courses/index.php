<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\teacher\models\SearchCourses */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'My Courses');
$this->params['breadcrumbs'][] = $this->title;
?>

 <script>
  $( function() {
    $( "#accordion" )
      .accordion({
        header: "> div > h3"
      })
      .sortable({
        axis: "y",
        handle: "h3",
        stop: function( event, ui ) {
          // IE doesn't register the blur when sorting
          // so trigger focusout handlers to remove .ui-state-focus
          ui.item.children( "h3" ).triggerHandler( "focusout" );
 
          // Refresh accordion to handle new order
          $( this ).accordion( "refresh" );
        }
      });
  } );
  </script>
<div class="row">
    <div class="col-md-12"> 
        <button class="btn btn-success float-rghit" id="uniet"> add uniet</button>
    </div>
</div>
<div class="my-couresres">
<div id="accordion">
  <div class="group">
    <h3>Section 1 </h3> 
    <div>
      <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
    </div>
  </div>
  <div class="group">
    <h3>Section 2</h3>
    <div>
      <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
    </div>
  </div>
  <div class="group">
    <h3>Section 3</h3>
    <div>
      <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>
      <ul>
        <li>List item one</li>
        <li>List item two</li>
        <li>List item three</li>
      </ul>
    </div>
  </div>
  <div class="group">
    <h3>Section 4</h3>
    <div>
      <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est. </p><p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
    </div>
  </div>

</div>
</div>
<script>
$( document ).ready(function() {
    $("#uniet").click(function(){
         $( "#accordion" ).append( 
        "<div class='group'><h3 class='ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons ui-sortable-handle ui-state-hover' role='tab' id='ui-id-7' aria-controls='ui-id-8' aria-selected='false' aria-expanded='false' tabindex='-1'><span class='ui-accordion-header-icon ui-icon ui-icon-triangle-1-e'></span>Section 4</h3><div class='ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active' id='ui-id-4' aria-labelledby='ui-id-3' role='tabpanel' aria-hidden='false' style='height: 203.578px;'><p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>  </div></div>"
        );
    });
   
});
</script>

