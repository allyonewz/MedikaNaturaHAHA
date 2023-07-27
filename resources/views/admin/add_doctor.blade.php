<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')
    @include('admin.navbar')
    <!-- partial -->

    <!-- partial:partials/_navbar.html -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div align='center'>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss='alert'>
                                            x</button>
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data"
                                    required="">

                                    @csrf

                                    <div style="padding:15px;">
                                        <label>Doctor Name</label>
                                        <input style="color:black;width:220px;" type="text" name="name"
                                            placeholder="Write the name" required="">
                                    </div>

                                    <div style="padding:15px;">
                                        <label>Phone</label>
                                        <input style="color:black;width:220px;" type="number" name="number"
                                            placeholder="Write the number" required="">
                                    </div>

                                    <div style="padding:15px;">
                                        <label>Specialty</label>
                                        <select name="specialty" style="color:black; width:220px;" required="">
                                            <option>---Select---</option>
                                            <option value="Skin">Skin</option>
                                            <option value="Heart">Heart</option>
                                            <option value="Eye">Eye</option>
                                            <option value="Nose">Nose</option>
                                        </select>
                                    </div>
                                    <div style="padding:15px;">
                                        <label>Doctor Image</label>
                                        <input style="width:220px;" type="file" name="file" required="">
                                    </div>

                                    <div style="padding:15px;">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    @include('admin.script')

</body>

</html>
