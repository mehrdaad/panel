
@extends('panelViews::master')
@section('bodyClass')
login
@stop
@section('body')
    <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $message }}</h3>  
                        </div>
                        <div class="panel-body">
                            <div class="logo-holder">
                                <img src="{{asset("packages/serverfireteam/panel/img/logo.png")}}" />
                            </div>
                            <form action="{{ action('Serverfireteam\Panel\RemindersController@postRemind') }}" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="email" name="email" type="email" autofocus>
                                    </div>
                                    
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit"  class="btn btn-lg btn-success btn-block" value="Send Reminder">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@stop
