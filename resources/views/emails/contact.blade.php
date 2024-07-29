<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    border-collapse: collapse;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #dee2e6;
    padding: 0.75rem;
    vertical-align: top;
    text-align: left;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

th[scope="row"] {
    font-weight: bold;
    background-color: #f8f9fa;
}

td {
    background-color: #ffffff;
}

        </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Contact Us | Vandana hospitality</h1>
    <h2 style='color: #333;'>New Contact Form Submission</h2>
        <strong>User details: </strong>
         <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Phone</th>
                    <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                    <th scope="row">Subject</th>
                    <td>{{ $data->subject }}</td>
                </tr>
                <tr>
                    <th scope="row">Message</th>
                    <td>{{ $data->user_query }}</td>
                </tr>
            </tbody>
        </table>
        
        <br><br>
        Thank you!
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>