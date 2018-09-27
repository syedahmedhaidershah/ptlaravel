<?php 
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\IdController;
$total=0;
$c=1;
?>
<h3>{{$month}} {{$year}}</h3>
<table id="stmntdtmemo" cellspacing="0" class="table table-striped" style="width: 500px !important;">
    <thead>
    
    <tr style="background-color: #7474FD; color: white;">
        <th>No.</th>
        <th class="text-center" id="t1" style="width: 20px !important;">Id</th>
        <th class="text-center" id="t2" style="width: 120px !important;">Date</th>
        <th class="text-center" id="t3" style="width: 120px !important;">Total</th>     
    </tr>
    </thead>

    <tbody>

        @if(isset($product_orders))
            @foreach($product_orders as $p)
                <tr>
                    <td>{{$c}}</td>

                    <td style="text-align: center;">
                        <a href="{{route('Salesmemo', ['id' => $p->id])}}"
                            target="_blank"> {{IdController::nSM($p->id)}}</a>
                    </td>
					
                    <td style="text-align: center;">
                         {{UtilityController::s_date($p->created_at)}}
                    </td>
                
                    <td style="text-align: right;">
                        {{$currentCurrency}}&nbsp;{{number_format($p->total/100,2)}}
					</td>
                   
            
                    
                </tr>
              <?php $total+=$p->total;
                    $c+=1;
              ?>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
        <th colspan="4" style="text-align: right;">
            Total&nbsp;{{$currentCurrency}}&nbsp;{{number_format($total/100,2)}}</th>
        </tr>
    </tfoot>
</table>

<script type="text/javascript">
  $(document).ready(function(){
    $('#stmntdtmemo').DataTable({
		 "order": [],
		 "autoWidth": false,
		 scrollX: true,
		 fixedHeader: {
		 
			footer: true
		},
		"columns": [
			{ "width": "20px" },
			{ "width": "180px" },
			{ "width": "180px" },
			{ "width": "180px" }
		  ]
	   
	});
	$(".dataTables_empty").attr("colspan","100%");
	$(window).resize();
  });
</script>


