<nav class="navbar navbar-expand-lg navbar-light header-container">
  <a class="navbar-brand" href="#"><h1>Admin</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Payouts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/payouts/pending">Pending Payouts</a>
          <a class="dropdown-item" href="/admin/payouts/paid">Payouts Paid</a>
          <a class="dropdown-item" href="/admin/payouts/history">Payout History</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin">Logout</a>
      </li>
    </ul>
  </div>
</nav>