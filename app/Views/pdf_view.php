<!doctype html>

<html lang="en">


<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Codeigniter 4 PDF Example</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>


<body>

  <div class="container mt-5">


    <h2>Generate PDF in Codeigniter from View</h2>


    <div class="d-flex flex-row-reverse bd-highlight">

      <a href="<?php echo base_url('PdfController/htmlToPDF') ?>" class="btn btn-primary">

        Download PDF

      </a>

    </div>


    <table class="table table-striped table-hover mt-4">

      <thead>

        <tr>

          <th>Name</th>

          <th>City</th>

          <th>Date</th>

        </tr>

      </thead>

      <tbody>

        <tr>

         <td>Ravi</td>

         <td>Rajkot</td>

         <td>22/10/2020</td>

        </tr>

        <tr>

         <td>Sunil</td>

         <td>Jamanagar</td>

         <td>23/10/2020</td>

        </tr>

        <tr>

         <td>Jd</td>

         <td>Rajkot</td>

         <td>25/10/2020</td>

        </tr>

        <tr>

         <td>Mehul</td>

         <td>jamanagar</td>

         <td>22/10/2020</td>

        </tr>

      </tbody>

    </table>

  </div>

</body>


</html>