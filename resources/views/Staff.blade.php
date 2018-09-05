<div class="container-fluid">

<div class ="row">

    <div class ="col-md-12">

        @include('layout.navbar')
    </div>
</div>
</div>





    <body>

    <div class="container-fluid" align="center" style="background-color: #90ee90">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-info" >
                   Academic And Non-Academic Staff Management System
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="Bootstrap Image Preview" width="80%" src="/img/teacher.jpg" />
                <a href="/AcademicSalary"> <h2>
                       Academic Staff Salary Details
                    </h2></a>
            </div>
            <div class="col-md-6">
                <img alt="Bootstrap Image Preview" width="80%" src="/img/image.jpg" />
                <a href="/NonAcademicSalary"> <h2>
                        Non-Academic Staff Salary Details
                    </h2></a>
            </div>
        </div>

    </div>


    <div class ="row">
        <div class ="col-md-12">
            @include('layout.footer')



        </div>
    </div>
