<table>
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Doctor's Name</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($appointment as $index => $appointment)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->email }}</td>
                <td>{{ $appointment->phone }}</td>
                <td>{{ $appointment->doctor }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->message }}</td>
                <td>{{ $appointment->status }}</td>
            </tr>
        @endforeach
    </tbody>
 </table>
