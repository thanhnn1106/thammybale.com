<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
    </head>
    <body>
        <!-- Modal active -->
        <div id="active" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Active</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default btn-yes" data-dismiss="modal">Yes</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal deactive -->
        <div id="deactive" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">De-Active</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default btn-yes" data-dismiss="modal">Yes</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>GUID</th>
                        <th>Role 1</th>
                        <th>Role 2</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authenList as $item)
                    <tr>
                        <td>{{ $item->guid }}</td>
                        <td><input type="checkbox" name="role1" id="role1" @if (in_array('1', $item->role)) checked='checked' @endif /></td>
                        <td><input type="checkbox" name="role2" id="role2" @if (in_array('2', $item->role)) checked='checked' @endif/></td>
                        <td><a><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            var status_box = null;
            $('input[type="checkbox"]').click(function(e){
//                $('#myModal').modal();
                e.preventDefault();
                status_box = this;
                if($(this).is(':checked')) {
                  $('#active').modal('show');
                } else {
                  $('#deactive').modal('show');
                }
            });
            $('.btn-yes').click(function(){
                $(status_box).prop('checked', !status_box.checked);
            });
        });
    </script>
</html>
