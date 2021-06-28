@extends('admin.layouts.main')

@section('contenido')
<h2>AVISOS</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Avisos:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                             Día
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                           Semana
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            Mes
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                          <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                          <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                          <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                        <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                          <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                        <tr>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection

@section('scripts')
    <script>console.log("NEGOCIOS")</script>
@endsection