<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

    @include('admin.sidebar')
    @include('admin.navbar')



    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div align='center'>
                                <table>
                                    <tr style="background-color:black;">
                                        <th style="padding:10px;fontsize:25px;color:white">Customer Name</th>
                                        <th style="padding:10px;fontsize:25px;color:white"align="center">Email</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Phone</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Doctor Name</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Date</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Message</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Status</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Approve</th>
                                        <th style="padding:10px;fontsize:25px;color:white">Cancel</th>
                                    </tr>

                                    @foreach ($data as $appoint)
                                        <tr style="background-color:#00D9A5;" align="center">
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->name }}</td>
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->email }}
                                            </td>
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->phone }}
                                            </td>
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->doctor }}
                                            </td>
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->date }}</td>
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->message }}
                                            </td>
                                            <td style="padding:10px;fontsize:25px;color:white">{{ $appoint->status }}
                                            </td>
                                            <td style="padding:10px;fontsize:25px;color:white"> <a
                                                    class="btn btn-success"
                                                    onclick="return confirm('Are you sure to approve this?')"
                                                    href="{{ url('approve', $appoint->id) }}">Approve</a></td>
                                            <td style="padding:10px;fontsize:25px;color:white"> <a
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Are you sure to cancel this?')"
                                                    href="{{ url('cancelled', $appoint->id) }}">Cancel</a></td>
                                        </tr>
                                    @endforeach
                                </table><br><br>
                                <a href="{{ route('admin.exportExcel') }}" class="btn btn-outline-success">
                                    <i class="bi bi-download me-1"></i> to Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <a href="{{ route('employees.exportExcel') }}" class="btn btn-outline-success">
        <i class="bi bi-download me-1"></i> to Excel
    </a> --}}
    @include('admin.script')

</body>

</html>
