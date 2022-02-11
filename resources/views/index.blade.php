@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>task</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
    <script>
       $(document).ready(function(){
           $.ajax({
                type: "GET",
                url: "{{ route('tasks') }}",
                dataType : "json",
                success: function(response){
                    $.each(response.todo ,function (key ,item) {
                        var local = moment(item.deadline).local().format('hA , Do MMM');
                        $('tbody').append('<tr>\
                            <th>'+item.id+'</th>\
                             <th>'+item.task+'- Deadline:'+local+'</th>\
                        </tr>')
                    })
                },
                error: function(xhr){
                    console.log(xhr.responseText);
                }
        });
        });
    </script>
@endsection
