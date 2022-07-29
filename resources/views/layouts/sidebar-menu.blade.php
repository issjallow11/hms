<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <router-link to="/dashboard" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt blue"></i>
        <p>
          Dashboard
        </p>
      </router-link>
    </li>
    <!-- Booking and registration routes -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book green"></i>
        <p>
          Booking & Registration
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <router-link to="/visitors" class="nav-link">
            <i class="nav-icon fas fa-tags green"></i>
            <p>
              Visitors
            </p>
          </router-link>
        </li>

        @if(auth()->user()->type === 'admin' || auth()->user()->type === 'user')
        <li class="nav-item">
          <router-link to="/clients" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Client Registration
            </p>
          </router-link>
        </li>
        @endif
      </ul>
    </li>
    <li class="nav-item">
      <router-link to="/clinicalModule" class="nav-link">
        <i class="fas fa-clinic-medical red"></i>
        <!-- <i class="nav-icon fas fa-tachometer-alt blue"></i> -->
        <p>
          clinical module
        </p>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link to="/lab" class="nav-link">
        <i class="fas fa-clinic-medical red"></i>
        <!-- <i class="nav-icon fas fa-tachometer-alt blue"></i> -->
        <p>
          Lab
        </p>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link to="/referrals" class="nav-link">
        <i class="fas fa-clinic-medical red"></i>
        <!-- <i class="nav-icon fas fa-tachometer-alt blue"></i> -->
        <p>
          Referrals
        </p>
      </router-link>
    </li>

    @can('isAdmin')
    <li class="nav-item">
      <router-link to="/users" class="nav-link">
        <i class="fa fa-users nav-icon blue"></i>
        <p>Users</p>
      </router-link>
    </li>
    @endcan
    @can('isAdmin')
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog green"></i>
        <p>
          Settings
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <router-link to="/settings/ethnicity" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Ethnicity
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/settings/sex" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Sexual Orientation
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/settings/gender" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Gender
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/settings/occupation" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Occupation
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/settings/education_level" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Education Level
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/settings/medical_conditions" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Medical Condtion
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Developer
            </p>
          </router-link>
        </li>
      </ul>
    </li>

    @endcan



    <li class="nav-item">
      <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-power-off red"></i>
        <p>
          {{ __('Logout') }}
        </p>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</nav>