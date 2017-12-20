<div class="side-menu m-t-5" style="position:relative; overflow-y: auto;background: white;">
  <aside class="menu m-l-20 m-t-20">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list" id="list">
    <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
  </ul>
  <p class="menu-label">
    Content
  </p>
  <ul class="menu-list">
    <li>
      <ul class="submenue">
        <li><a href="{{route('posts.index')}}">Blog Post</a></li>
      </ul>
    </li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a class="has-submenu">Roles &amp; Permission</a>
      <ul id="submenue">
        <li><a href="{{route('users.index')}}">Manage Users</a></li>
        <li><a href="{{route('role.index')}}">Roles</a></li>
        <li><a href="{{route('permission.index')}}">Permissions</a></li>
      </ul>
    </li>
     <li><a class="has-submenu">Post Management</a>
      <ul id="submenu">
        <li><a href="{{route('role.index')}}">Roles</a></li>
        <li><a href="{{route('permission.index')}}">Permissions</a></li>
      </ul>
    </li>
     <li><a class="has-submenu">Tag Management</a>
      <ul id="submenu">
        <li><a href="{{route('role.index')}}">Roles</a></li>
        <li><a href="{{route('permission.index')}}">Permissions</a></li>
      </ul>
    </li>
  </ul>
</aside>
</div>
