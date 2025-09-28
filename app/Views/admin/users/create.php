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



<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['title']; ?></h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $data['title']; ?></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12 mb-4">
      <!-- Simple Tables -->
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">User Management</h6>
          <a href="/users" class="btn btn-sm btn-dark"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
            <form class="px-3 py-3" action="/admin/users/create" method="POST">   
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Enter full name"
                        required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="phone"
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="e.g. 017XXXXXXXX"
                        required>
                    <div class="form-text">Must be 11 digits.</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Enter password"
                        minlength="6"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Create User</button>
            </form>
        <div class="card-footer"></div>
      </div>
    </div>
  </div>
  <!--Row-->

</div>