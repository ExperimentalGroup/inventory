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
              <li class="bold"><a href="/delivery">Delivery</a></li>
              <li class="bold"><a href="/branches">Branches</a></li>
              <li class="bold"><a href="/employees">Employees</a></li>
              <li class="bold active"><a href="/suppliers">Suppliers</a></li>
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
            <span class="page-title">Suppliers</span>
          </div>

          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <span class="card-title">Add New Suppliers</span>
                <div class="divider"></div>
                <div class="card-content">
                  <div class="col s12 m12 l4">
                      <div class="form-group">
                      <label for="price">Supplier ID</label>
                      <input type="text" class="form-control" name="suppID" id="suppID" placeholder="SuppID">
                      </div>
                      <label for="price">Company Name</label>
                      <div class="form-group">
                      <input type="text" class="form-control" name="compName" id="compName" placeholder="CompName">
                      </div>
                      <div class="form-group">
                      <label for="price">Owner Name</label>
                      <input type="text" class="form-control" name="ownName" id="ownName" placeholder="OwnName">
                      </div>
                      <div class="form-group">
                      <label for="price">Contact Number</label>
                      <input type="text" class="form-control" name="contNumb" id="contNumb" placeholder="ContNumb">
                      </div>
                      <div class="form-group">
                      <label for="price">Address</label>
                      <input type="text" class="form-control" name="suppAdd" id="suppAdd" placeholder="SuppAdd">
                      </div>
                      <a class="waves-effect waves-light btn btn-small center-text">ADD</a>
                    </div>
                  </div>
           

                  <div class="clearfix">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <span class="card-title">gHuB Suppliers Available</span>
                <div class="divider"></div>
                <div class="card-content">
                  <div class="col s12 m12 l4">
                    <div class="input-field">
                      <i class="prefix mdi-action-search"></i>
                      <input id="search" type="text" placeholder="Search by name"/>
                    </div>
                  </div>


                  <div class="col s12 m12 l12 overflow-x">
                    <table class="centered">
                      <thead>
                        <tr>
                          <th>Supplier ID</th>
                          <th>Company Name</th>
                          <th>Owner Name</th>
                          <th>Contact Number</th>
                          <th>Address</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($suppliers as $suppliers)
                        <tr>
                          <td>{{ $suppliers->strSuppID }}</td>  
                          <td>{{ $suppliers->strSuppCompanyName }}</td>
                          <td>{{ $suppliers->strSuppOwnerLName . ", " . $suppliers->strSuppOwnerFName}}</td>
                          <td>{{ $suppliers->strSuppContactNo }}</td>  
                          <td>{{ $suppliers->strSuppAddress}}</td>
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
