@extends("layout.master")
@yield('title',"Holidays List")
@section("section1")
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Holidays List</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>                                            
                                <th>Day</th>
                                <th>Date</th>
                                <th>Holiday name</th>
                            </tr>
                        </thead>
                       <tbody>
                        @foreach($holidays as $holiday)
                            <tr class="text-danger">
                                <td>{{$loop->index+1}}</td>
                                <td></td>
                                <td>{{$holiday->HolidayDate}}</td>
                                <td>{{$holiday->HolidayName}}</td>
                            </tr>
                        @endforeach
                           
                          
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection