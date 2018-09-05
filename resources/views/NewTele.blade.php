@include('layout.navbar')

<h1 class="h-bold" style ="color:black" align="center"> Retrieve Electric Bill Payment Records </h1>
<table width="100%" border="0" >
    <td bgcolor="#90ee90"width="50%">


        <table class="table table-hover">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
            <tr style="background-color: #36c94e">
                <th>Month and Year</th>
                <th>Year</th>
                <th>Place</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>PaidDate</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($waters as $users)
                <tr style="background-color: #8fcafe" >
                    <td>{{$users->MonthYear}}</td>
                    <td>{{$users->Year}}</td>
                    <td>{{$users->Place}}</td>
                    <td>{{$users->PaymentMethod}}</td>
                    <td>{{$users->Amount}}</td>
                    <td>{{$users->PaidDate}}</td>
                    <td><a href="show/{{$users->MonthYear}}">Show</a></td>
                    <td><a href="Update/{{$users->MonthYear}}">Edit</a></td>
                    <td><a href="Tdelete/{{$users->MonthYear}}">Delete</a></td>

                </tr>
                @endforeach
                </td>
                    </table></div></div>
        </table>
    </td>
    <td bgcolor="#90ee90"width="50%">
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Submit records
                </button>
            </div>
        </div>

</table>




        @include('layout.footer')






