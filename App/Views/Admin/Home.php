<?php

namespace App\Views\Admin;

use App\Views\BaseView;

class Home extends BaseView
{
    public static function render($data = null)
    {

?>

<div class="main-panel">
          <div class="content-wrapper">
            
            
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Order Details</p>
                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                    <div class="d-flex flex-wrap mb-5">
                      <div class="me-5 mt-3">
                        <p class="text-muted">Order value</p>
                        <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                      </div>
                      <div class="me-5 mt-3">
                        <p class="text-muted">Orders</p>
                        <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                      </div>
                      <div class="me-5 mt-3">
                        <p class="text-muted">Users</p>
                        <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                      </div>
                      <div class="mt-3">
                        <p class="text-muted">Downloads</p>
                        <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                      </div>
                    </div>
                    <canvas id="order-chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="card-title">Sales Report</p>
                      <a href="#" class="text-info">View all</a>
                    </div>
                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                    <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                  <div class="card-body">
                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                              <div class="ml-xl-4 mt-3">
                                <p class="card-title">Detailed Reports</p>
                                <h1 class="text-primary">$34040</h1>
                                <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                              <div class="row">
                                <div class="col-md-6 border-right">
                                  <div class="table-responsive mb-3 mb-md-0 mt-3">
                                    <table class="table table-borderless report-table">
                                      <tr>
                                        <td class="text-muted">Illinois</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">713</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Washington</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">583</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Mississippi</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">924</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">California</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">664</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Maryland</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">560</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Alaska</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">793</h5>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="daoughnutchart-wrapper">
                                    <canvas id="north-america-chart"></canvas>
                                  </div>
                                  <div id="north-america-chart-legend">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                              <div class="ml-xl-4 mt-3">
                                <p class="card-title">Detailed Reports</p>
                                <h1 class="text-primary">$34040</h1>
                                <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                              <div class="row">
                                <div class="col-md-6 border-right">
                                  <div class="table-responsive mb-3 mb-md-0 mt-3">
                                    <table class="table table-borderless report-table">
                                      <tr>
                                        <td class="text-muted">Illinois</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">713</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Washington</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">583</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Mississippi</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">924</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">California</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">664</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Maryland</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">560</h5>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-muted">Alaska</td>
                                        <td class="w-100 px-0">
                                          <div class="progress progress-md mx-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5 class="font-weight-bold mb-0">793</h5>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="daoughnutchart-wrapper">
                                    <canvas id="south-america-chart"></canvas>
                                  </div>
                                  <div id="south-america-chart-legend"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#detailedReports" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </a>
                      <a class="carousel-control-next" href="#detailedReports" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          

    <?php

    }
}

    ?>