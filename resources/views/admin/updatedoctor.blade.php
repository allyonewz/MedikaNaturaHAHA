<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
    label {
        display: inline-block;
        width: 200px;
    }
    </style>

    <base href="/public">
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')
    @include('admin.navbar')


    <div class="container-fluid page-body-wrapper">


        <div class="container" align="center" style="padding-top:30px;">

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss='alert'>
                    x</button>
                {{session()->get('message')}}
            </div>



            @endif

            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data" required="">

                @csrf

                <div style="padding:15px;">
                    <label>Doctor Name</label>
                    <input style="color:black;width:220px;" type="text" name="name" value="{{$data->name}}"
                        required="">
                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input style="color:black;width:220px;" type="number" name="number" value="{{$data->phone}}"
                        required="">
                </div>

                <div style="padding:15px;">
                <label>Specialty</label>
                    <input style="color:black;width:220px;" type="text" name="specialty" value="{{$data->specialty}}"
                        required="">

                </div>



                <div style="padding:15px;">
                <label>Old Image</label>
                    <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>
                <div style="padding:15px;">
                    <label>Change Image</label>
                    <input style="width:220px;" type="file" name="file" value="{{$data->file}}" >
                </div>
                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>


    </div>



    @include('admin.script')

</body>

</html>
