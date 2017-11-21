@extends('layouts.master')

@section('content')


<div class="be-content">
    <div class="main-content container-fluid">


    </div>
    @endsection

    @section('customjs')
    <script type="text/javascript">
        $(document).ready(function () {
            //initialize the javascript
            
            App.dashboard();
            //App.formElements();
        });

    </script>
    @endsection