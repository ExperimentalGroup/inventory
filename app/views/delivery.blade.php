<html>
  <head>
    <title>Inventory system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- STYLES START -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- STYLES END -->
  </head>
  <body>
    <header>
      <!-- NAVBAR GOES HERE -->
      <div class="navbar-fixed">
        <nav class="blue darken-1">
          <div class="nav-wrapper">
            <span class="app-name">Inventory System</span>
            <ul id="slide-out" class="side-nav fixed">
              <!-- might be horrible to put div inside ul but it works -->
              <div class="logo">
                <img class="responsive-img circle" src="img/logo_1.jpg"/>
              </div>
              <div class="account-pane center-align">
                <!-- use amber for admin, blue for employee, ?? for manager -->
                Logged in as: <span class="bold amber-text text-accent-4">Han Seoul-Oh(Admin)</span>
                <br/>
                Branch: <span class="bold">Main</span>
              </div>
              <li class="bold"><a href="/index">Dashboard</a></li>
              <li class="bold"><a href="/inventory">Inventory</a></li>
              <li class="bold"><a href="/order">Order</a></li>
              <li class="bold"><a href="/request">Requests</a></li>
              <li class="bold active"><a href="/delivery">Delivery</a></li>
              <li class="bold"><a href="/branches">Branches</a></li>
              <li class="bold"><a href="/employees">Employees</a></li>
              <li class="bold"><a href="/suppliers">Suppliers</a></li>
              <li class="bold"><a href="/logout">Log out</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <div class="main-wrapper">
        <!-- ACTUAL PAGE CONTENT GOES HERE -->
        <div class="row">
          <div class="col s12 m12 l12">
            <span class="page-title">Delivery</span>
          </div>

          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <span class="card-title">Delivery from Suppliers</span>
                <div class="divider"></div>
                <div class="card-content">
                  <div class="col s12 m12 l4">
                    <div class="input-field">
                      <i class="prefix mdi-action-search"></i>
                      <input id="search" type="text" placeholder="Search by name"/>
                    </div>
                  </div>

                  


                  <!-- <p>
                    You have no items.
                  </p> -->

                  <div class="clearfix">

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

                  <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <span class="card-title">Delivery to Branches</span>
                <div class="divider"></div>
                <div class="card-content">
                  <div class="col s12 m12 l4">
                    <div class="input-field">
                      <i class="prefix mdi-action-search"></i>
                      <input id="search" type="text" placeholder="Search by name"/>
                    </div>
                  </div>

                  <div class="col s12 m12 l6 offset-l2">
                    <div class="col s12 m12 l4 input-field">
                      <select>
                        <option value="" disabled selected>Quantity (Any)</option>
                        <option value="1">Less than 50</option>
                        <option value="2">50 or more</option>
                      </select>
                    </div>
                    <div class="col s12 m12 l4 input-field">
                      <select>
                        <option value="" selected>Branch (Any)</option>
                        <option value="1">gHub West Avenue</option>
                        <option value="2">gHub Eastwood</option>
                      </select>
                    </div>
                    <div class="col s12 m12 l4 input-field">
                      <select>
                        <option value="" selected>Status (Any)</option>
                        <option value="1">Accepted</option>
                        <option value="2">Pending</option>
                        <option value="3">Declined</option>
                      </select>
                    </div>
                  </div>

                  <div class="col s12 m12 l12 overflow-x">
                    <table class="centered">
                      <thead>
                        <tr>
                          <th>Branch</th>
                          <th>Product Requested</th>
                          <th>Quantity</th>
                          <th>Product Subtotals</th>
                          <th>Total Price</th>
                          <th>Date Requested</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>gHub West Avenue</td>
                          <td>LG Flat Screen Monitor</td>
                          <td>10</td>
                          <td>P1,500.00</td>
                          <td>P15,000.00</td>
                          <td>06/18/2015</td>
                          <td class="yellow-text bold">Pending</td>
                          <td>
                            <div class="center-btn">
                              <a class="waves-effect waves-light btn btn-small center-text">Resend</a>
                              <a class="waves-effect waves-light btn btn-small center-text">Received</a>
                              <a class="waves-effect waves-light btn btn-small center-text">Cancel</a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>gHub Eastwood</td>
                          <td>Creative Dual Speakers with Bass</td>
                          <td>15</td>
                          <td>P500.00</td>
                          <td>P7,500.00</td>
                          <td>03/31/2015</td>
                          <td class="red-text bold">Declined</td>
                          <td>
                            <div class="center-btn">
                             <a class="waves-effect waves-light btn btn-small center-text">Resend</a>
                              <a class="waves-effect waves-light btn btn-small center-text">Received</a>
                              <a class="waves-effect waves-light btn btn-small center-text">Cancel</a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                   <div class="clearfix">

                  </div>

      </div> 
    </main>

    <!-- SCRIPTS START -->
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <!-- SCRIPTS END -->
  </body>
</html>
