<!Doctype html>
<head>
    <title>View Records</title>
    <style>
        table,tr,td{
            border-collapse: collapse;

            padding-left: 2.5em;
        }

        div.water{
            background-color: lightblue;
            width: 400px;
            padding: 105px;
            border: 15px solid navy;
        }







    </style>
</head>

<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>
<h1 class="h-bold" style ="color:black" align="center"> MONTHLY EXPENCES AND INCOME</h1>


<table width="100%" border="0">
    <td bgcolor="#90ee90"width="50%">

        <div class="col-md-12 animate-box fadeInUp animated-fast" width="50%">
            <h3 > </h3>

            <div class="container" style="background-color: white">





            <form action="Mindex" method="get">
                <div class="form-group{{ $errors->has('Year') ? ' has-error' : '' }}">
            <label for="Place" class="col-md-4 control-label"><h3>ENTER MONTHYEAR </h3></label>
            <input type="text" name="MonthYear" id="MonthYear" style="size: 1000px" value="{{old('MonthYear')}}">

                    @if ($errors->has('MonthYear'))
                        <span class="help-block">
										<strong>{{ $errors->first('MonthYear') }}</strong>
									</span>
                    @endif




            <button type="submit" class="btn btn-primary">
                <h2 style="text:bold">Enter</h2>
            </button></form></div></div></td>

        </form>





    </td>
            <td bgcolor="#90ee90"width="50%">


                <img src="/img/Mreport.jpg"width="1100" height="750">





        </table>



        <div class ="row">
            <div class ="col-md-12">
                @include('layout.footer')



            </div>
        </div>

        </body>
        </html>