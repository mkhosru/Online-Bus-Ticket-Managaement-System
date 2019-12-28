<?php



// Frontend App

// Route::get('/logout', 'Auth.LoginController@check')->name('log_out');


















// mail
Route::get('/send/email', 'MailController@mail');




//User Info check
Route::get('/user/info', 'frontendController@user_index')->name('user_info');



// User Buy Ticket(choose seat and boarding point)
Route::post('/user/ticket', 'frontendController@user_buy_ticket')->name('buy_ticket_user');



//Buy ticket
Route::post('/user/buy/ticket', 'frontendController@buy_ticket')->name('ticket_buy');









// stripr
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');




// Dashboard------------------------>
Route::get('/admin/dashboardpages', 'dashboardhomeController@index')->name('dashboard_home');
Route::get('/admin/add_bus', 'dashboardhomeController@add')->name('dashboard_add_bus');
Route::get('/admin/not_found', 'ticketinfoController@not_found')->name('dashboard_not_found');

//Admin can view registered list
Route::get('/admin/reg/customer/list', 'ticketinfoController@reg_customer_list')->name('Reg_list_customer');

//Individual Bus report by Chassis No
Route::get('/admin/bus/report', 'ReportController@bus_report')->name('report_bus');

Route::post('/report', 'ReportController@report')->name('report');

Route::get('/admin/report', 'ReportController@report_info')->name('info_report');



//admin ticket cancelled view
Route::get('/admin/cancel', 'dashboardhomeController@cancel_list')->name('list_cancel');





// Route::post('/admin/bus/insert', 'dashboardhomeController@insert')->name('bus_insert');


//Full Bus List
//Add Bus information
//dashboard Add bus Info form view blade
Route::get('/admin/bus/addbus', 'addbusController@add_bus')->name('bus_add');
//dashboard Add bus Insert info 
Route::post('/admin/addbus/insert', 'addbusController@insert_bus_info')->name('insert_bus_add');
//Bus list view complete list
Route::get('/admin/buslist/view', 'addbusController@bus_list')->name('list_view');

//Bus list Edit
Route::get('/admin/buslist/Edit/{id}', 'addbusController@bus_list_edit')->name('bus_edit');

//Bus list Update
Route::post('/admin/buslist/update', 'addbusController@bus_list_update')->name('bus_list_update');

//Bus List Delete
Route::get('/admin/buslist/delete/{id}', 'addbusController@bus_list_delete')->name('bus_list_delete');











//Idividual Bus Info
// Ticket Info all part Dashboard ViewPage------------------------>
Route::get('/admin/bus/busname', 'ticketinfoController@busname')->name('bus_busname');
Route::get('/admin/bus/date', 'ticketinfoController@date')->name('bus_date');
Route::get('/admin/bus/departure', 'ticketinfoController@departure')->name('bus_departure');
Route::get('/admin/bus/destination', 'ticketinfoController@destination')->name('bus_destination');
Route::get('/admin/bus/price', 'ticketinfoController@price')->name('bus_price');
Route::get('/admin/bus/ticket', 'ticketinfoController@ticket')->name('bus_ticket');
Route::get('/admin/bus/time', 'ticketinfoController@time')->name('bus_time');

//Bus Total Seat view page
Route::get('/admin/bus/totalseat', 'ticketinfoController@totalseat')->name('bus_totalseat');

//Coach type view page
Route::get('/admin/bus/coach', 'ticketinfoController@coach')->name('bus_coach');

//Duration (Hour) view page
Route::get('/admin/bus/duration', 'ticketinfoController@duration')->name('bus_duration');

//Terminal name view page
Route::get('/admin/bus/terminal', 'ticketinfoController@terminal')->name('bus_terminal');

//Registered Terminal (view data)
Route::get('/admin/bus/regterminal', 'ticketinfoController@reg_terminal')->name('bus_terminal_reg');









// Ticket Info all part Insert---------------------------------------------->
Route::post('/admin/bus/busname/insert', 'ticketinfoController@busname_insert')->name('bus_busname_insert');
Route::post('/admin/bus/date/insert', 'ticketinfoController@date_insert')->name('bus_date_insert');
Route::post('/admin/departure/insert', 'ticketinfoController@departure_insert')->name('bus_departure_insert');

//destination insert Insert
Route::post('/admin/destination/insert', 'ticketinfoController@destination_insert')->name('bus_destination_inseart');

//price insert(not working) Insert
Route::post('/admin/price/insert', 'ticketinfoController@price_insert')->name('bus_price_insert');

//Bus time(Leaving Time) Insert
Route::post('/admin/time/insert', 'ticketinfoController@time_insert')->name('bus_time_insert');

//Bus Total Seat Insert
Route::post('/admin/totalseat/insert', 'ticketinfoController@totalseat_insert')->name('total_seat_insert');

//Bus Coach Type Insert
Route::post('/admin/coach/insert', 'ticketinfoController@coach_insert')->name('bus_coach_insert');

//Bus Duration (reaching hour) Insert
Route::post('/admin/duration/insert', 'ticketinfoController@duration_insert')->name('bus_duration_insert');

//Bus Terminal Insert
Route::post('/admin/terminal/insert', 'ticketinfoController@terminal_insert')->name('bus_terminal_insert');

//Registered Terminal Insert 
Route::post('/admin/regterminal/insert', 'ticketinfoController@reg_terminal_insert')->name('register_terminal_insert');

////Registered Terminal View List
Route::get('/admin/reg_terminal/list', 'ticketinfoController@reg_list')->name('list_reg');








// Ticket Info all part Edit----------------------------------------------->
Route::get('/admin/busname/edit/{id}', 'ticketinfoController@busname_edit')->name('bus_busname_edit');
Route::get('/admin/date/edit/{id}', 'ticketinfoController@date_edit')->name('bus_date_edit');

//departure edit
Route::get('/admin/departure/edit/{id}', 'ticketinfoController@departure_edit')->name('bus_departure_edit');

//Destination edit
Route::get('/admin/destination/edit/{id}', 'ticketinfoController@destination_edit')->name('bus_destination_edit');

//price edit
Route::get('/admin/price/edit/{id}', 'ticketinfoController@price_edit')->name('bus_price_edit');

//Time Edit
Route::get('/admin/time/edit/{id}', 'ticketinfoController@time_edit')->name('bus_time_edit');

//TotalSeat edit
Route::get('/admin/totalseat/edit/{id}', 'ticketinfoController@totalseat_edit')->name('bus_totalseat_edit');

//Bus Coach Type Edit
Route::get('/admin/coach/edit/{id}', 'ticketinfoController@coach_edit')->name('bus_coach_edit');

//Bus Duration Edit
Route::get('/admin/duration/edit/{id}', 'ticketinfoController@duration_edit')->name('bus_duration_edit');

//Bus Terminal Edit
Route::get('/admin/terminal/edit/{id}', 'ticketinfoController@terminal_edit')->name('bus_terminal_edit');









// Ticket Info all part Update----------------------------------------------->
Route::post('/admin/busname/update', 'ticketinfoController@busname_update')->name('bus_busname_update');
Route::post('admin/date/update', 'ticketinfoController@date_update')->name('bus_date_update');

//departure update
Route::post('admin/departure/update', 'ticketinfoController@departure_update')->name('bus_departure_update');

//Destination update
Route::post('admin/destination/update', 'ticketinfoController@destination_update')->name('bus_departure_update');

//price update
Route::post('/admin/price/update', 'ticketinfoController@price_update')->name('bus_price_update');

//Date update
Route::post('/admin/time/update', 'ticketinfoController@time_update')->name('bus_time_update');

//TotalSeat Update
Route::post('/admin/totalSeat/update', 'ticketinfoController@totalSeat_update')->name('bus_totalSeat_update');

//Bus Coach Type Update
Route::post('/admin/coach/update', 'ticketinfoController@coach_update')->name('bus_coach_update');

//Bus Duration Update
Route::post('/admin/duration/update', 'ticketinfoController@duration_update')->name('bus_duration_update');

//Bus Trerminal 
Route::post('/admin/terminal/update', 'ticketinfoController@terminal_update')->name('bus_terminal_update');










// Ticket Info all part Delete-------------------------------------------------------->
Route::get('/admin/busname/delete/{id}', 'ticketinfoController@busname_delete')->name('bus_busname_delete');

//date delete
Route::get('/admin/date/delete/{id}', 'ticketinfoController@date_delete')->name('bus_date_delete');

//Departure Delet
Route::get('/admin/departure/delete/{id}', 'ticketinfoController@departure_delete')->name('bus_departure_delete');

//Destination Delete(not working)
Route::get('/admin/destination/delete/{id}', 'ticketinfoController@destination_delete')->name('bus_destination_delete');

//Price delete
Route::get('/admin/price/delete/{id}', 'ticketinfoController@price_delete')->name('bus_price_delete');

//Time Delete
Route::get('/admin/time/delete/{id}', 'ticketinfoController@time_delete')->name('bus_time_delete');

//Totalseat_Delete
Route::get('/admin/totalseat/delete/{id}', 'ticketinfoController@totalseat_delete')->name('bus_totalseat_delete');

//Bus Coach Type Delete
Route::get('/admin/coach/delete/{id}', 'ticketinfoController@coach_delete')->name('bus_coach_delete');

// /Bus Duration Delete
Route::get('/admin/duration/delete/{id}', 'ticketinfoController@duration_delete')->name('bus_duration_delete');

//Bus Terminal delete
Route::get('/admin/terminal/delete/{id}', 'ticketinfoController@terminal_delete')->name('bus_terminal_delete');


















// Frontend------------------------>
Route::get('/', 'frontendController@index')->name('front_home_page');

//contact page
Route::get('/contact', 'registerController@contact')->name('contact');
Route::post('/contact/customer', 'registerController@contact_customer')->name('customer_contact');

// Blog page
Route::get('/blog', 'frontendController@blog')->name('blog');

//faq
Route::get('/faq', 'frontendController@faq')->name('faq');





Route::get('/frontendpages/search', 'frontendController@search')->name('front_search');
Route::get('/frontendpages/seat/{id}', 'frontendController@seat')->middleware('auth')->name('front_seat');
Route::get('/frontendpages/sign', 'frontendController@sign')->name('sign_in');

//About Page
Route::get('/frontendpages/about', 'frontendController@about')->name('about_page');

//Bus List Search Result
Route::post('/search', 'frontendController@search_result')->name('result_search');

//View customer ticket
Route::get('/frontendpages/ticket', 'frontendController@view_ticket')->name('ticket_view');

Route::get('/ticket/delete/{id}', 'frontendController@ticket_delete')->name('delete_ticket');













// Authintication------------------------>
Route::get('/frontendpages/register', 'registerController@register')->name('register_in');
Route::post('/frontendpages/register/create', 'registerController@create')->name('create_register');








// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


