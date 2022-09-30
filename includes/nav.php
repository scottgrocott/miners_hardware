 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a <?php echo ($_SERVER['REQUEST_URI'] == '/dashboard') ? 'class="nav-link active" aria-current="page"': 'class="nav-link"'; ?> href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a <?php echo ($_SERVER['REQUEST_URI'] == '/deliveries') ? 'class="nav-link active" aria-current="page"': 'class="nav-link"'; ?> href="/deliveries">
              <span data-feather="truck"></span>
              Deliveries
            </a>
          </li>		  
          <li class="nav-item">
            <a <?php echo ($_SERVER['REQUEST_URI'] == '/screens') ? 'class="nav-link active" aria-current="page"': 'class="nav-link"'; ?> href="/screens">
              <span data-feather="file"></span>
              Screens
            </a>
          </li>
          <li class="nav-item">
            <a <?php echo ($_SERVER['REQUEST_URI'] == '/products') ? 'class="nav-link active" aria-current="page"': 'class="nav-link"'; ?> href="/products">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a <?php echo ($_SERVER['REQUEST_URI'] == '/customers') ? 'class="nav-link active" aria-current="page"': 'class="nav-link"'; ?> href="/customers">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>


        </ul>

      </div>
    </nav>