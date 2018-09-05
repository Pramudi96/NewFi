<?php


Route::get('/FF','billController@FF');
Route::get('/TFirst','billController@TFirst');
Route::get('/water','billController@validation');
Route::get('/NewTele','billController@NewTel');
Route::get('/WaterUpdate','billController@WaterUpdate');
Route::get('/ElectricUpdate','billController@ElectricUpdate');


Route::get('/NonAcademicSalary','billController@NonAcademicSalary');
Route::get('/AcademicSalary','billController@AcademicSalary');
Route::get('/StudentFee','billController@StudentFee');
Route::get('/vb','billController@vb');
Route::get('/as','billController@as3');
Route::get('/budget','billController@budget');
Route::get('/all','billController@VV');
Route::get('/All2','billController@VV');
Route::get('/home','billController@HomePage');
Route::get('/Staff','billController@StaffPage');
Route::get('/bill','billController@billPage');
Route::get('/water','billController@WaterPage');
Route::get('/Electric','billController@ElectricPage');
Route::get('/Telephone','billController@TelephonePage');
Route::get('/Other','billController@OtherPage');
Route::get('/Funds','billController@FundsPage');
Route::get('/Academic','billController@AcademicPage');
Route::get('/Nonacademic','billController@NonAcademicPage');
Route::post('/register','billController@reg');
Auth::routes();

Route::resource('waters','WaterController');
Route::resource('electrics','ElectricController');
//Route::resource('telephones','TelephoneController');*/
Route::resource('teles','TeleController');
Route::resource('budgets','BudgetController');

Route::get('store','WaterController@store');
//Route::get('sum','WaterController@sum');
Route::get('show/{MonthYear}','WaterController@show');
Route::get('index','WaterController@index');
Route::post('index','WaterController@search');
Route::get('delete/{MonthYear}','WaterController@destroy');

Route::get('edit/{MonthYear}','WaterController@edit');
Route::post('/Update','WaterController@Update');
Route::get('/MonthlyReport','billController@MonthlyReport');
Route::get('/AnnualReport','billController@AnnualReport');
Route::get('estore','ElectricController@estore');
//Route::get('esum','ElectricController@esum');
Route::get('eshow/{MonthYear}','ElectricController@eshow');
Route::get('eindex','ElectricController@eindex');
Route::post('/eindex','ElectricController@esearch');
Route::get('Eedit/{MonthYear}','ElectricController@Eedit');
Route::post('/eupdate','ElectricController@eupdate');
Route::get('edelete/{MonthYear}','ElectricController@edestroy');


/*Route::get('Tstore','TelephoneController@Tstore');
Route::get('Tsum','TelephoneController@Tsum');
Route::get('Tshow/{MonthYear}','TelephoneController@Tshow');
Route::get('Tindex','TelephoneController@Tindex');
Route::post('Tindex','TelephoneController@Tsearch');
Route::get('Tdelete/{MonthYear}','TelephoneController@Tdestroy');
Route::get('Tedit/{MonthYear}','TelephoneController@Tedit');
Route::post('/TUpdate','TelephoneController@TUpdate');*/

Route::get('Tstore','TeleController@Tstore');
Route::get('Tsum','TeleController@Tsum');
Route::get('Tshow/{MonthYear}','TeleController@Tshow');
Route::get('Tindex','TeleController@Tindex');

Route::post('Tindex','TeleController@Tsearch');

Route::get('Tdelete/{MonthYear}','TeleController@Tdestroy');
Route::get('Tedit/{MonthYear}','TeleController@Tedit');
Route::post('/TUpdate','TeleController@TUpdate');

//Route::get('Tstore','AllController@Tstore');

Route::get('Asum','AllController@Asum');
//Route::get('Tindex','TelephoneController@Tindex');
Route::get('Bstore','BudgetController@Bstore');
//Route::get('sum','TelephoneController@Tsum');
//Route::get('Tshow/{MonthYear}','TelephoneController@Tshow');
Route::get('Bindex','BudgetController@Bindex');
Route::get('Sindex','StudentController@Sindex');
Route::get('zzindex','zzController@zzindex');


Route::get('Eindex','EventController@Eindex');
Route::get('Yindex','TotalController@Yindex');
Route::get('Lindex','LibraryController@Lindex');
Route::get('/EventRecord','billController@EventRecord');
Route::get('Lindex','LibraryController@Lindex');


Route::get('MIncome','MonthController@MIncome');
Route::get('Income','YearController@Income');

Route::group(['middleware' =>['web']],function (){
   Route::get('/Tstore',['uses'=>'TeleController@Tstore','as'=>'Tstore']);

});


Route::group(['middleware' =>['web']],function (){
    Route::get('/store',['uses'=>'WaterController@store','as'=>'store']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/estore',['uses'=>'ElectricController@estore','as'=>'estore']);

});


Route::group(['middleware' =>['web']],function (){
    Route::get('/fstore',['uses'=>'FundsController@fstore','as'=>'fstore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/Astore',['uses'=>'AcademicController@Astore','as'=>'Astore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/Nstore',['uses'=>'NonAcademicController@Nstore','as'=>'Nstore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/fstore',['uses'=>'FundsController@fstore','as'=>'fstore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/Ostore',['uses'=>'OtherController@Ostore','as'=>'Ostore']);

});


Route::get('fstore','FundsController@fstore');




Route::get('/MTotalSum','billController@Mtot');

Route::get('TSum','TotalController@TSum');
Route::get('WSum','TotalController@WSum');
Route::get('eSum','TotalController@eSum');
Route::get('Invindex','InventoryController@Invindex');

//Route::get('Totindex','TotalController@Totindex');
Route::get('Yindex','YearController@Yindex');
Route::get('Mindex','MonthController@Mindex');
Route::get('Bindex','BudgetController@Bindex');


Route::get('fstore','FundsController@fstore');
Route::get('fsum','FundsController@fsum');
Route::get('fshow/{MonthYear}','FundsController@fshow');
Route::get('findex','FundsController@findex');
Route::post('findex','FundsController@fsearch');
Route::get('fdelete/{FundNameMonthYear}','FundsController@fdestroy');
Route::get('fedit/{FundNameMonthYear}','FundsController@fedit');
Route::post('/fUpdate','FundsController@fUpdate');
Route::get('Aindex','AcademicController@Aindex');
Route::post('Aindex','AcademicController@Asearch');
Route::get('Adelete/{EmpNo}','AcademicController@Adestroy');
Route::get('Aedit/{EmpNo}','AcademicController@Aedit');
Route::post('/Aupdate','AcademicController@Aupdate');

Route::get('Oindex','OtherController@Oindex');
Route::post('Oindex','OtherController@Osearch');
Route::get('Odelete/{Purpose}','OtherController@Odestroy');
Route::get('Oedit/{Purpose}','OtherController@Oedit');
Route::post('/Oupdate','OtherController@Oupdate');

Route::get('Nindex','NonAcademicController@Nindex');
Route::post('Nindex','NonAcademicController@Nsearch');
Route::get('Ndelete/{EmpNo}','NonAcademicController@Ndestroy');
Route::get('Nedit/{EmpNo}','NonAcademicController@Nedit');
Route::post('/Nupdate','NonAcademicController@Nupdate');