



@include('layout.navbar')



<style>
    div.vg{

        width: 100px;
        height: 100px;

    }
    .search{
        width:45% ;
        padding:10px ;
        font-size:20px ;

    }
    .submit{
        width:15% ;
        padding:10px ;
        font-size:20px ;
        background-color:#333333;
        color: white;
    }



</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">




<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">






        <h1 font-color="White" align="center" >Non Academic Staff Salary Payment Details</h1>



        <div class="col-md-12 animate-box fadeInUp animated-fast" width="50%">
            <h3 > </h3>

            <div class="container" style="background-color: white">

                <form class="form-horizontal" action='{{Route('Nstore')}}'>




                    <div class="form-group{{ $errors->has('EmpNo') ? ' has-error' : '' }}">
                        <label for="MonthYear" class="col-md-4 control-label">EmpNo</label>

                        <div class="col-md-8">
                            <input id="EmpNo" type="text" class="form-control" name="EmpNo" placeholder="EmpNo" value="{{ old('EmpNo') }}" required>
                            @if ($errors->has('EmpNo'))
                                <span class="help-block">
										<strong>{{ $errors->first('EmpNo') }}</strong>
									</span>
                            @endif

                        </div>
                    </div>




                    <div class="form-group{{ $errors->has('EmpName') ? ' has-error' : '' }}">
                        <label for="EmpName" class="col-md-4 control-label">EmpName</label>

                        <div class="col-md-8">
                            <div >
                                <input id="EmpName" type="text" class="form-control" name="EmpName" placeholder="Employee Name" value="{{ old('EmpName') }}" required>
                                @if ($errors->has('EmpName'))
                                    <span class="help-block">
										<strong>{{ $errors->first('EmpName') }}</strong>
									</span>
                                @endif

                            </div>
                        </div>

                    </div>
                    <div class="form-group{{ $errors->has('PaySlipNo') ? ' has-error' : '' }}">
                        <label for="PaySlipNo" class="col-md-4 control-label">PaySlipNo</label>

                        <div class="col-md-8">
                            <input id="PaySlipNo" type="text" class="form-control" name="PaySlipNo" placeholder=" PaySlipNo" value="{{ old('PaySlipNo') }}" required >

                            @if ($errors->has('PaySlipNo'))
                                <span class="help-block">
										<strong>{{ $errors->first('PaySlipNo') }}</strong>
									</span>
                            @endif



                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('Designation') ? ' has-error' : '' }}">
                        <label for="Designation" class="col-md-4 control-label">Designation</label>

                        <div class="col-md-6">
                        <!--<input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('Designation') }}" required autofocus>-->

                            <select id="Designation" class="form-control" name="Designation" required>
                                <option value=""
                                        @if (old('Designation')=='')
                                        selected
                                        @endif
                                >Choose</option>
                                <option value="Bookshop Seller"
                                        @if (old('Designation')=='Bookshop Seller')
                                        selected
                                        @endif
                                >Bookshop Seller</option>
                                <option value="Canteen Seller"
                                        @if (old('Designation')=='Canteen Seller ')
                                        selected
                                        @endif
                                >Canteen Seller</option>
                                <option value="Office Clark"
                                        @if (old('Designation')=='Office Clark ')
                                        selected
                                        @endif
                                >Office Clark</option>
                                <option value="Accountant"
                                        @if (old('Designation')=='Accountant ')
                                        selected
                                        @endif
                                >Accountant</option>
                                <option value="Finance Manager"
                                        @if (old('Designation')=='Finance Manager')
                                        selected
                                        @endif
                                >Finance Manager</option>
                                <option value="Driver"
                                        @if (old('Designation')=='Driver')
                                        selected
                                        @endif
                                >Driver</option>

                            </select>

                            @if ($errors->has('Designation'))
                                <span class="help-block">
										<strong>{{ $errors->first('Designation') }}</strong>
									</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('MonthYear') ? ' has-error' : '' }}">
                        <label for="MonthYear" class="col-md-4 control-label">MonthYear</label>

                        <div class="col-md-8">
                            <input id="MonthYear" type="text" class="form-control" name="MonthYear" placeholder=" Month Year" value="{{ old('MonthYear') }}" required >

                            @if ($errors->has('MonthYear'))
                                <span class="help-block">
										<strong>{{ $errors->first('MonthYear') }}</strong>
									</span>
                            @endif



                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('Year') ? ' has-error' : '' }}">
                        <label for="Year" class="col-md-4 control-label">Year</label>

                        <div class="col-md-8">
                            <input id="Year" type="text" class="form-control" name="Year" placeholder=" Year" value="{{ old('Year') }}" required >

                            @if ($errors->has('Year'))
                                <span class="help-block">
										<strong>{{ $errors->first('Year') }}</strong>
									</span>
                            @endif



                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('Amount') ? ' has-error' : '' }}">
                        <label for="ReceivedDate" class="col-md-4 control-label">ReceivedDate</label>

                        <div class="col-md-8">
                            <div >
                                <input id="ReceivedDate" type="date" class="form-control" name="ReceivedDate" value="{{ old('ReceivedDate') }}" required>

                                @if ($errors->has('ReceivedDate'))
                                    <span class="help-block">
										<strong>{{ $errors->first('ReceivedDate') }}</strong>
									</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('Salary') ? ' has-error' : '' }}">
                        <label for="text" class="col-md-4 control-label">Salary</label>

                        <div class="col-md-8">
                            <input id="Salary" type="text" class="form-control" name="Salary" value="{{ old('Salary') }}" required>
                            @if ($errors->has('Salary'))
                                <span class="help-block">
										<strong>{{ $errors->first('Salary') }}</strong>
									</span>
                            @endif

                        </div>
                    </div>





                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>

                            <a class="btn btn-link" href="">
                                Edit
                            </a>
                            <a class="btn btn-link" href="">
                                Delete
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <form action="Nindex" method="get">

            <label for="Place" class="col-md-4 control-label"></label>

            <button type="submit" class="btn btn-primary">
                <h2 style="text:bold">System Detail</h2>
            </button>

        </form>


    </td>




    <td bgcolor="#90ee90"width="50%">

        <form action="Nindex" method="post">
            {{ csrf_field() }}
            <input type="text" name="monthYear" class="search" placeholder="Search" value="{{old('monthYear')}} ">
            <input type="submit" name="submit" class="submit" value="Search">
            @if ($errors->has('monthYear'))
                <span class="help-block">
										<strong>{{ $errors->first('monthYear') }}</strong>
									</span>
            @endif
        </form>



        <img src="/img/image.jpg"width="1100" height="750"></td>

</table>



</div>

</div>
</div>


<div class ="row">
    <div class ="col-md-12">
        @include('layout.footer')



    </div>
</div>


</body>

</html>