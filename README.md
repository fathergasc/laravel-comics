Laravel project step-by-step:

1: composer create-project --prefer-dist laravel/laravel:^7.0 project-name

2: npm install

3: in /resources/views, create "partials" and "layout" folders

4: inside "layout" we create a new app.blade.php with base html layout. You can use @include('partials.partial-name') to include partials. With @yield('placeholder-name') we can add custom content for the views.

5: Create as many views as necessary, remembering to extend the layout with @extends('layoutName.app') and confining the content inside:
@section('content-name', optional-way-to-add-content) 
    content
@endsection

6: in web.php you declare the routes:

    Route::get('/', function () {

    $variable = ['Home', 'About Us', 'News']; //optional

    return view('view-name', ['datatopass' => $variable]);
    })->name('name-of-route'); //name optional

7: in the "public" folder you can create a folder for images

8: we can create a "partials" folder inside /resources/sass with multiple css files named conventionally with an underscore in front of the name (ex: _typo.scss) and then we can import them into the app.scss with @import './partials/stylefilename.scss'

9: you can add an array in /config adding a php file containing the array. You can pass the data to a view with 
    $variable = config('nameofthephpfile') 
    return view('nameoftheview', ['nameofthedatatopass' => $variable])


