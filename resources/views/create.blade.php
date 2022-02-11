@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')

    <form action="{{ url('todo') }}" method="post" class="mt-4 p-4">
        {!! csrf_field() !!}
        <div class="form-group m-3">
            <label for="name">Task Name</label>
            <input type="text" class="form-control" name="task">
        </div>
        <div class="form-group m-3">
            <label for="deadline">Deadline</label>
            <div style="position: relative">

            <input type="text" class="form-control" id="datetimepicker" name="deadline">
            </div>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Fire Task">
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker').datetimepicker();
        });
    </script>
@endsection



