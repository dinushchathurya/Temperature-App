@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        @if(session('login-success'))
            <div class="alert alert-success" role="alert">
                {{ session('login-success') }}
            </div>
        @endif
        
        <h1><strong>Login Temperatures</strong></h1>
        
        <table style="width:100%">
            
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                   
                    </div>
                    <div class="col-sm">
                   
                    </div>
                    <div class="col-sm">
                        <button class="warning">@sortablelink('col_temp', 'HOTTEST FIRST')</button>
                        <button class="default">@sortablelink('logged_at', 'RESET ORDER')</button>
                    </div>
                </div>
            </div>
          
            <tr class="pt-5" style="text-align:center">
                <th colspan="2">
                    <h2>
                        <b>Colombo</b>
                    </h2>
                </th>
                <th colspan="2">
                    <h2>
                        <b>Melbourne</b>
                    </h2>
                </th>
            </tr>

            <tr>
                @foreach($data as $value)
                    <tr>
                        <td>{{$value->logged_at}}</td>
                        <td>{{$value->col_temp}} °C</td>
                        <td>{{Helper::convert($value->col_temp)}} °F</td>
                        <td>{{$value->logged_at}}</td>
                        <td>{{$value->mel_temp}} °C</td>
                        <td>{{Helper::convert($value->mel_temp)}} °F</td>
                    </tr>
                @endforeach
            </tr>
            
        </table>
    </div>
</div>
@endsection

@section('js')

    <script>
        function sortTable() {
        
        }
    </script>

@endsection