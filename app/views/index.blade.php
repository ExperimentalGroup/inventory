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
              <li class="bold active"><a href="/index">Dashboard</a></li>
              <li class="bold"><a href="/inventory">Inventory</a></li>
              <li class="bold"><a href="/order">Order</a></li>
              <li class="bold"><a href="/request">Requests</a></li>
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
            <span class="page-title">Dashboard</span>
          </div>

          <div class="col s12 m12 l12">
            <div class="input-field">
            <i class="prefix mdi-action-search"></i>
            <input id="search" type="text" placeholder="Search by name"/>
            </div>

          <div class="col s12 m12 l8">
            <div class="card-panel">
              <span class="card-title">Inventory status</span>
              <div class="divider"></div>
              <div class="card-content">
                <p>
                  2 of your items are in <span class="red-text bold">danger</span> stocks.
                </p>

                <table class="centered">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Qty</th>
                      <th>Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Razer Deathadder 2013</td>
                      <td>1</td>
                      <td>
                        <div class="center-btn">
                          <a class="waves-effect waves-light btn btn-small center-text">Order</a>
                          <a class="waves-effect waves-light btn btn-small center-text">Request</a>
                          <a class="waves-effect waves-light btn btn-small center-text">Adjust</a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>iPhone 6</td>
                      <td>0</td>
                      <td>
                        <div class="center-btn">
                          <a class="waves-effect waves-light btn btn-small center-text">Order</a>
                          <a class="waves-effect waves-light btn btn-small center-text">Request</a>
                          <a class="waves-effect waves-light btn btn-small center-text">Adjust</a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <!-- <p>
                  All of your items are in <span class="green-text bold">good</span> stocks.
                </p> -->
              </div>
            </div>

            <div class="card-panel">
              <span class="card-title">Incoming requests</span>
              <div class="divider"></div>
              <div class="card-content">
                <p>
                  You have 1 incoming request.
                </p>
                <table class="centered table-fixed">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Qty</th>
                      <th>Branch</th>
                      <th>Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Samsung Galaxy Y S5360</td>
                      <td>20</td>
                      <td>gHub Cubao</td>
                      <td>
                        <div class="center-btn">
                          <a class="waves-effect waves-light btn btn-small green center-text"><i class="mdi-navigation-check"></i></a>
                          <a class="waves-effect waves-light btn btn-small red center-text"><i class="mdi-navigation-close"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <!-- <p>
                  You have no incoming requests.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="card-panel">
              <span class="card-title">Pending orders</span>
              <div class="divider"></div>
              <div class="card-content">
                <p>
                  You have 3 pending orders.
                </p>
                <table class="centered table-fixed">
                  <thead>
                    <tr>
                      <th >Item</th>
                      <th>Qty</th>
                      <th>Supplier</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>iPhone 6</td>
                      <td>20</td>
                      <td>Apple PH</td>
                    </tr>
                    <tr>
                      <td>Razer Deathadder 2013</td>
                      <td>15</td>
                      <td>Razer</td>
                    </tr>
                    <tr>
                      <td>League of Legends Mouse Pads</td>
                      <td>50</td>
                      <td>Garena Phillipines</td>
                    </tr>
                  </tbody>
                </table>

                <!-- <p>
                  You have no pending orders.
                </p> -->
              </div>
            </div>

            <div class="card-panel">
              <span class="card-title">Pending requests</span>
              <div class="divider"></div>
              <div class="card-content">
                <p>
                  You have 2 pending requests.
                </p>
                <table class="centered">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Qty</th>
                      <th>Branch</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>LG Flat Screen Monitor</td>
                      <td>10</td>
                      <td>gHub West Avenue</td>
                    </tr>
                    <tr>
                      <td>Creative Dual Speakers with Bass</td>
                      <td>15</td>
                      <td>gHub Eastwood</td>
                    </tr>
                    
                  </tbody>
                </table>

                <!-- <p>
                  You have no pending requests.
                </p> -->
              </div>
            </div>
          </div>
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
