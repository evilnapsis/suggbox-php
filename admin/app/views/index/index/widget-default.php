
      <div class="page-content">

        <!-- Header Bar -->
<?php Action::load("header");?>



          <div class="row">
            <div class="col-lg-12">
                        <h1>Grafica de mensajes</h1>

              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-tasks"></i> Grafica de Mensajes (Utilmos 30 dias)
                </div>
                <div class="widget-body">
<div id="graph" class="animate" data-animate="fadeInUp" ></div>

<script>

<?php 
echo "var c=0;";
echo "var dates=Array();";
echo "var data=Array();";
echo "var total=Array();";
for($i=0;$i<30;$i++){
  echo "dates[c]=\"".date("Y-m-d",time()-60*60*24*$i)."\";";
  echo "data[c]=\"".ItemData::countAllFromDay(date("Y-m-d",time()-60*60*24*$i))->c."\";";
  echo "total[c]={x: dates[c],y: data[c]};";
  echo "c++;";
}
?>
// Use Morris.Area instead of Morris.Line
Morris.Area({
  element: 'graph',
  data: total,
  xkey: 'x',
  ykeys: ['y',],
  labels: ['Y']
}).on('click', function(i, row){
  console.log(i, row);
});
</script>

                </div>
              </div>
            </div>

          </div>
          </div>