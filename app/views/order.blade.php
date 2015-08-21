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
              <li class="bold active"><a href="/order">Order</a></li>
              <li class="bold"><a href="/request">Requests</a></li>
              <li class="bold"><a href="/delivery">Delivery</a></li>
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
            <span class="page-title">Order</span>
          </div>

          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <span class="card-title">Items Ordered from Suppliers</span>
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
                        <option value="" disabled selected>Supplier (Any)</option>
                        <option value="1">Apple PH</option>
                        <option value="2">Garena PH</option>
                        <option value="3">Razer</option>
                      </select>
                    </div>
                    <div class="col s12 m12 l4 input-field">
                      <select>
                        <option value="" selected>Quantity (Any)</option>
                        <option value="1">less than 50</option>
                        <option value="2">50 or more</option>
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
                          <th>Order ID</th>
                          <th>Supplier</th>
                          <th>Product Ordered</th>
                          <th>Quantity</th>
                          <th>Product Subtotals</th>
                          <th>Total Price</th>
                          <th>Date Ordered</th>
                          <th>Status</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>ID DAW</td>
                          <td>Apple PH</td>
                          <td>iPhone 6</td>
                          <td>20</td>
                          <td>30,000</td>
                          <td>P600,000</td>
                          <td>06/30/2015</td>
                          <td class="yellow-text bold">Pending</td>
                          <!--<td>
                            <div class="center-btn">
                              <a class="waves-effect waves-light btn btn-small center-text">Edit</a>
                              <a class="waves-effect waves-light btn btn-small center-text">Cancel</a>
                            </div>
                          </td>-->
                        </tr>
                        <tr>
                          <td>ID DAW</td>
                          <td>Razer</td>
                          <td>Razer Deathadder 2013</td>
                          <td>15</td>
                          <td>2,350</td>
                          <td>P35,250</td>
                          <td>07/18/2015</td>
                          <td class="green-text bold">Accepted</td>
                        </tr>

                        <tr>
                          <td>ID DAW</td>
                          <td>Garena Phillippines</td>
                          <td>League of Legends Mouse Pad</td>
                          <td>50</td>
                          <td>150</td>
                          <td>P7,500</td>
                          <td>04/09/2015</td>
                          <td class="red-text bold">Declined</td>
                        </tr>
                      </tbody>
                    </table>
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
      </div>
    </main>

    <!-- SCRIPTS START -->
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <!-- SCRIPTS END -->
  </body>
</html>
