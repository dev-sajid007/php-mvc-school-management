<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
  <h2><i class="bi bi-speedometer2"></i> Dashboard</h2>
  <a href="/logout" class="btn btn-outline-primary"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- Display flash messages -->
<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="row g-3">
  <div class="col-md-3">
    <div class="card text-white bg-primary shadow-sm">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-people"></i> Students</h5>
        <p class="card-text fs-4">450</p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-white bg-success shadow-sm">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-person-badge"></i> Teachers</h5>
        <p class="card-text fs-4">35</p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-white bg-warning shadow-sm">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-book"></i> Classes</h5>
        <p class="card-text fs-4">18</p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-white bg-danger shadow-sm">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-cash-stack"></i> Pending Fees</h5>
        <p class="card-text fs-4">৳12,000</p>
      </div>
    </div>
  </div>
</div>

<div class="card mt-4 shadow-sm">
  <div class="card-header">
    <i class="bi bi-activity"></i> Recent Activity
  </div>
  <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">New student <strong>Rahim</strong> added to Class 8.</li>
      <li class="list-group-item">Monthly fee collected from Class 10.</li>
      <li class="list-group-item">Teacher <strong>Fatema</strong> updated her profile.</li>
    </ul>
  </div>
</div>