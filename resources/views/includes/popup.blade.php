    @extends('navigation.result')
    @section('popup')
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg"  style="background-color:#f5f5f5;width:700px;">

    <!-- Modal content-->
    <div class="modal-content"  style="background-color:#f5f5f5;width:700px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <img src="{{url($hotel[0]->featured1)}}" style="float:left;width:300px;margin-left:20px;">
        
        <img src="{{url($hotel[0]->featured2)}}" style="float:left;width:300px;margin-left:20px;">
        <br><br><br>
        <img src="{{url($hotel[0]->featured3)}}" style="float:left;width:300px;margin-left:20px;">
        <img src="{{url($hotel[0]->featured4)}}" style="float:left;width:300px;margin-left:20px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="font-size:0.9em;float:left;" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop