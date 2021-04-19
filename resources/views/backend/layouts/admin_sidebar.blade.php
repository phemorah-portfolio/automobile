<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php $page = Session::get('page'); ?>
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('images/logo.svg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Lanre Shittu Motors</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('images/admin_images/profile/'.Auth::User()->image) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucwords(Auth::User()->name) }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
            $active = ($page == 'dashboard') ? 'active' : '';
          ?>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-ope">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                USER MANAGEMENT
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Employees
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('employees') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Employees</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('add-employee') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Employee</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Customers
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#{{ url('customers') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Customers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#{{ url('add-customer') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Customer</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Admin
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('administrators') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Admins</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('add-edit-admin') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Admin</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Autos -->
          <?php
            $active_dropdown = ($page == 'autos' || $page == 'add-auto') ? 'active' : '';
          ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('autos') }}" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                AUTO
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
              $active = ($page == 'autos') ? 'active' : '';
            ?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Vehicle
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('auto/vehicles') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Vehicles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('auto/add-edit-form-table/auto/?route_v=backend.auto.vehicles.add_edit_') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Vehicle</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Model
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('auto/models') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Models</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('auto/add-edit-form-table/model/?route_v=backend.auto.models.add_edit_') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Model</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Make
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('auto/makes') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Makes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('auto/add-edit-make') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Make</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Body
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('auto/bodies') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Bodies</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('auto/add-edit-form-table/body/?route_v=backend.auto.bodies.add_edit_') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Body</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Manufacturer
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('auto/manufacturers') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Manufacturers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('auto/add-edit-form-table/manufacturer/?route_v=backend.auto.manufacturers.add_edit_') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Manufacturer</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- End Auto Links -->

          <!-- Branches -->
          <?php
            $active_dropdown = ($page == 'branches' || $page == 'add-branch') ? 'active' : '';
          ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('branches') }}" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                BRANCHES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
              $active = ($page == 'branches') ? 'active' : '';
            ?>
              <li class="nav-item">
                <a href="{{ url('branches') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Branches</p>
                </a>
              </li>
              <?php
                $active = ($page == 'add-branch') ? 'active' : '';
              ?>
              <li class="nav-item">
                <a href="{{ url('add-branch') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Branch</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Branches Links -->

          <!-- CMS -->
          <?php $active_dropdown = ($page == 'cms-pages' || $page == 'add-cms-page') ? 'active' : ''; ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('cms-pages') }}" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CMS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
              $active = ($page == 'cms-pages') ? 'active' : '';
            ?>
              <li class="nav-item">
                <a href="{{ url('bodies') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View CMS Pages</p>
                </a>
              </li>
              <?php $active = ($page == 'add-cms-page') ? 'active' : ''; ?>
              <li class="nav-item">
                <a href="{{ url('add-cms-page') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add CMS Page</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End CMS Links -->

          <!-- Special Features -->
          <?php $active_dropdown = ($page == 'special-features' || $page == 'add-special-feature') ? 'active' : ''; ?>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                FEATURES & ROLES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php $active = ($page == 'autos') ? 'active' : ''; ?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Special Features
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('features-access') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Features</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('add-edit-feature') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Feature</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Features Access
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('features-access') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Features Access</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('add-remove-feature-access/'.Auth::User()->user_role) }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add/Remove Features Access</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Site Manager Roles
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('site-roles') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Roles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('add-site-role') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Role</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Positions
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('positions') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Positions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('add-position') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Position</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- End Special Feature -->

          <!-- Statuses -->
          <?php $active_dropdown = ($page == 'statuses' || $page == 'add-status') ? 'active' : ''; ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('statuses') }}" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                STATUSES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php $active = ($page == 'statuses') ? 'active' : ''; ?>
              <li class="nav-item">
                <a href="{{ url('statuses') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Statuses</p>
                </a>
              </li>
              <?php $active = ($page == 'add-status') ? 'active' : ''; ?>
              <li class="nav-item">
                <a href="{{ url('add-status') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Status</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Statuses -->


          <!-- Newsletter Subscribers -->
          <?php
            $active_dropdown = ($page == 'news-letters') ? 'active' : '';
          ?>
          <li class="nav-item">
            <a href="{{ url('news-letters') }}" class="nav-link {{ $active }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                SUBSCRIBERS
              </p>
            </a>
          </li>
          <!-- End Newsletter Subscribers -->

          <!-- Department -->
          <?php $active_dropdown = ($page == 'departments' || $page == 'add-edit-department') ? 'active' : ''; ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('departments') }}" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DEPARTMENTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php $active = ($page == 'departments') ? 'active' : ''; ?>
              <li class="nav-item">
                <a href="{{ url('departments') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Departments</p>
                </a>
              </li>
              <?php $active = ($page == 'add-edit-department') ? 'active' : ''; ?>
              <li class="nav-item">
                <a href="{{ url('add-edit-department') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Edit Department</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Departments -->

          <?php $active_dropdown = ($page == 'update-pswd' || $page == 'update-details') ? 'active' : ''; ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('settings') }}" class="nav-link {{ $active_dropdown }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                SETTINGS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
              $active = ($page == 'update-pswd') ? 'active' : '';
            ?>
              <li class="nav-item">
                <a href="{{ url('update-pswd') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <?php
                $active = ($page == 'update-details') ? 'active' : '';
              ?>
              <li class="nav-item">
                <a href="{{ url('update-details') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Details</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
