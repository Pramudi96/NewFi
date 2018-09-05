@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
<br/>

            <h3 align="center"> Water Bill Details</h3>
            <br/>
            <table class="table table-bordered">


                <tr>
                    <th>MonthYear</th>
                    <th>Place</th>
                    <th>Amount</th>


                </tr>
                @foreach($students as $row)
                    <tr>

                        <td>{{$row['MonthYear']}}</td>
                        <td>{{$row['Place']}}</td>
                        <td>{{$row['Amount']}}</td>
                    </tr>
@endforeach
            </table>

        </div>


    </div>


@endsection