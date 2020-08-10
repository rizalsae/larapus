@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><div class="text-center"> Obrolan</div></div>

                <div class="panel-body" style="height: 300px;  overflow:auto;">
                    <div class="chat-body" style="margin-top: 10px;">
                        <div class="header">
                            <strong> Admin</strong>
                            <small class="pull-right text-muted"> 4 min ago</small>
                        </div>
                        <div class="chatcolor">
                            Haloo, ...
                            @{{ message }}
                        </div>    
                    </div>
                </div>
            </div>
            <div id="app">
            <div class="panel-footer">
                <div class="input-group">
                    <input type="" class="form-control" v-model="input" @keyup.enter="push" placeholder="ketik disini....." name="">
                    <span class="input-group-btn">
                        <button class="btn btn-warning" @click.prevent='push'>Kirim</button>
                    </span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style type="text/css">
.chatcolor{
    background-color: #099;
    padding: 10px;
    border-bottom-left-radius: 24px;
    border-bottom-right-radius: 24px; 
    border-top-right-radius: 20px;
    margin-top: 6px; 
    color: white;
}
</style>
