@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12 ">
     <h2>Danh sách đơn hàng</h2>   
        
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th style="text-align: center">ID</th>
                <th style="text-align: center">Link</th>
                <th style="text-align: center">Image</th>
              </tr>
            </thead>

            <tbody >
           @foreach($slide as $sl)
              <tr >
                <td style="text-align: center"><a href="{{route('admin.slide.getEdit',$sl->id)}}">{{$sl->id}}</a></td>
                <td style="text-align: center">{{$sl->link}}</td>
                <td style="text-align: center">{{$sl->image}}</td>                 
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <div id="ketquaz"></div>
    </div>
    </div>
</div>
@endsection