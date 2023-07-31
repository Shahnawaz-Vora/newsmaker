<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <style>
    table {
      width: 100%;
    }
    #example_filter {
      float: right;
    }
    #example_paginate {
      float: right;
    }
    label {
      display: inline-flex;
      margin-bottom: .5rem;
      margin-top: .5rem;
    }
    .container {
      padding: 20px;
    }

    /* Align DataTable search input and dropdown */
    .dataTables_filter {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container-fluid p-5">
    <div class="row">
      <div class="col">
        <h3>Contact List</h3>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)
            <tr data-contact-id="{{ $contact->id }}">
              <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->mobile }}</td>
              <td>{{ $contact->Company }}</td>
              <td>{{ $contact->subject }}</td>
              <td>{{ $contact->comments }}</td>
              <td><input type="checkbox" name="" @if($contact->isContacted) checked @endif></td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</body>
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
      "iDisplayLength": 5
    });

    // Handle checkbox click and update the database via AJAX
    $('input[type="checkbox"]').on('click', function() {
      const isChecked = $(this).prop('checked');
      const contactId = $(this).closest('tr').data('contact-id');

      // Send AJAX request to update the isContacted field
      $.ajax({
        method: 'POST',
        url: '/update-contact',
        data: {
          _token: '{{ csrf_token() }}',
          contact_id: contactId,
          is_contacted: isChecked ? 1 : 0
        },
        success: function(response) {
          if (response.success) {
            console.log('Contact status updated successfully.');
          } else {
            console.error('Failed to update contact status:', response.message);
          }
        },
        error: function(xhr, status, error) {
          console.error('AJAX request error:', error);
        }
      });
    });
  });
</script>
</html>
