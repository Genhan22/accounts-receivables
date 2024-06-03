@extends('layouts.admin')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<div class="row">
            <div class="col-md-12 grid-margin">
              <div class="flex-wrap d-flex justify-content-between">
                <div class="flex-wrap d-flex align-items-end">
                  <div class="me-md-3 me-xl-5">
                    @if(session('status'))
                    <h2>{{ session('status') }},</h2>
                    @endif
                    <p class="mb-md-0">Your analytics dashboard.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="mb-0 text-muted hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="mb-0 text-primary hover-cursor">Analytics</p>
                  </div>
                </div>
                <!--<div class="flex-wrap d-flex justify-content-between align-items-end">
                  <button type="button" class="bg-white btn btn-light btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="mt-2 bg-white btn btn-light btn-icon me-3 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="mt-2 bg-white btn btn-light btn-icon me-3 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button> -->
                  <button class="mt-2 btn btn-primary mt-xl-0">Generate report</button>
                </div>
              </div>
            </div>
            <body>
          <div class="container">
              <h1>Dashboard</h1>
              <div class="row">
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">New Invoices</h5>
                              <!-- Dummy list of new invoices -->
                              <ul>
                                  <li>Invoice 1</li>
                                  <li>Invoice 2</li>
                                  <li>Invoice 3</li>
                                  <li>Invoice 4</li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Invoice Statistics</h5>
                              <!-- Dummy chart -->
                              <canvas id="invoiceChart"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <script>
              // Dummy data for chart
              var ctx = document.getElementById('invoiceChart').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                      datasets: [{
                          label: 'Number of Invoices',
                          data: [12, 19, 3, 5, 2, 3], // Dummy data
                          backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                              'rgba(255, 206, 86, 0.2)',
                              'rgba(75, 192, 192, 0.2)',
                              'rgba(153, 102, 255, 0.2)',
                              'rgba(255, 159, 64, 0.2)'
                          ],
                          borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)'
                          ],
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });
          </script>
      </body>
</div>

@endsection