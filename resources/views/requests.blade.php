<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flight Request') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

    <body>
        <div class = "container">
            <div class = "row justify-content-center">
                <div class = "col-md-8">
                    <div class = "card mt-5">
                        <div class = "card-header">Flight Request</div>
                    </div>
                    <div class = "card-body" style = "border: 1px solid silver;">
                        <form action = "/api/request" method = "post" id = "requestform">
                            <div class = "row mb-3">
                                <label for = "email">Email address</label>
                                <div class = "col-md-6"><input type = "email" name = "email" id = "email"></div>
                            </div>
                            <div class = "row mb-3">
                                <label for = "request_type">Choose a Request Type</label>
                                <div class = "col-md-6">
                                <select  name = "request_type" id = "request" form = "requestform">
                                    <option value = "Emergency">Emergency</option>
                                    <option value = "Response">Response</option>
                                    <option value = "Surveillance">Surveillance</option>
                                    <option value = "Mapping">Mapping</option>
                                    <option value = "Other">Other</option>
                                </select>
                                </div>
                                
                            </div>
                            <div class = "row mb-3">
                                <label for = "location">Location</label>
                                <div class = "col-md-6"><input type = "text" name = "location" id = "location"></div>
                            </div>
                            
                            <div class = "row mb-3">
                                <label for = "description">Description</label>
                                <div class = "col-md-6"><input type="text" name = "description" id = "description"></div>
                            </div>

                            <div class = "row mb-3">
                                <label for = "date-time">Date and Time</label>
                                <div class = "col-md-6"><input id = "date-time" type = "datetime-local" name = "date-time" value = "2022-06-25T08:30"></div>
                            </div>
                            <div class = "col-md-6"><input class = "btn btn-primary" type = "submit" value = "Submit" id = "submit"></div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>