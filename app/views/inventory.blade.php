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
              <li class="bold active"><a href="/inventory">Inventory</a></li>
              <li class="bold"><a href="/order">Order</a></li>
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
            <span class="page-title">Inventory</span>
          </div>

          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <span class="card-title">Items on current branch</span>
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
                        <option value="" disabled selected>Model (Any)</option>
                        <option value="1">Cellphone</option>
                        <option value="2">Mouse</option>
                      </select>
                    </div>
                    <div class="col s12 m12 l4 input-field">
                      <select>
                        <option value="" selected>Brand (Any)</option>
                        <option value="1">Razer</option>
                        <option value="2">Apple</option>
                        <option value="3">ASUS</option>
                      </select>
                    </div>
                    <div class="col s12 m12 l4 input-field">
                      <select>
                        <option value="" selected>Status (Any)</option>
                        <option value="1">Good</option>
                        <option value="2">Critical</option>
                        <option value="3">Empty</option>
                      </select>
                    </div>
                  </div>

                  <div class="col s12 m12 l12 overflow-x">
                    <table class="centered">
                      <thead>
                        <tr>
                          <th>Product ID</th>
                          <th>Product Name</th>
                          <th>Brand</th>
                          <th>Model</th>
                          <th>Retail Price</th>
                          <th>Wholesale Price</th>
                          <th>Available Stock</th>
                          <th>Status</th>
                        </tr>
                      </thead>

                      <tbody>
                         @foreach($inventory as $inventory)
                        <tr>
                          <td>{{ $inventory->strProdID }}</td>
                          <td>{{ $inventory->strProdName }}</td>
                          <td>{{ $inventory->strProdBrand }}</td>
                          <td>{{ $inventory->strProdModel }}</td>
                          <td>{{ $inventory->dblCurRetPrice }}</td>
                          <td>{{ $inventory->dblCurWPrice }}</td>
                          <td>{{ $inventory->intAvailQty }}</td>
                         @if($inventory->intAvailQty <= 1)
                          <td class="red-text bold">DEPLETED</td>
                          @elseif($inventory->intAvailQty <= 10)
                          <td class="orange-text bold">CRITICAL</td>
                          @else
                          <td class="green-text bold">GOOD</td>
                         @endif 
                          <td>
                            <div class="center-btn">
                              <a class="waves-effect waves-light btn btn-small center-text" href="/order">ADJUST</a>
                            </div>
                          </td>
                        </tr>
                        @endforeach
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
