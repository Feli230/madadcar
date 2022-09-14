<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- User Card -->
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-xl-3">
        
      </div>
    </div>
    <div class="user-avatar-section">
      <div class="d-flex align-items-center flex-column">
        <img
          class="img-fluid rounded mt-3 mb-2"
          src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
          height="110"
          width="110"
          alt="User avatar"
        />
        <div class="user-info text-center">
          <h4>Keanu Reeves</h4>
          <span class="badge bg-light-success">Active</span>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-around my-2 pt-75">
      <div class="d-flex align-items-start me-2">
        <span class="badge bg-light-primary p-75 rounded">
          <i data-feather="check" class="font-medium-2"></i>
        </span>
        <div class="ms-75">
          <h4 class="mb-0">1.23k</h4>
          <small>Tasks Done</small>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <span class="badge bg-light-primary p-75 rounded">
          <i data-feather="briefcase" class="font-medium-2"></i>
        </span>
        <div class="ms-75">
          <h4 class="mb-0">568</h4>
          <small>Projects Done</small>
        </div>
      </div>
    </div>
    <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
    <div class="info-container">
      <ul class="list-unstyled">
        <li class="mb-75">
          <span class="fw-bolder me-25">Caregiver Code:</span>
          <span>ICH-1979</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">Team:</span>
          <span></span>
        </li>
        {{-- <li class="mb-75">
          <span class="fw-bolder me-25">Role:</span>
          <span>Author</span>
        </li> --}}
        <li class="mb-75">
          <span class="fw-bolder me-25">Agency:</span>
          <span>Independence Care</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">Phone:</span>
          <span>716-335-5605</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">Availability Updated:</span>
          <span>6/15/2022</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">DOB:</span>
          <span>10/17/1997</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">Office:</span>
          <span>Independence Care of New Hampshire</span>
        </li>
        

        <li class="mb-75">
          <span class="fw-bolder me-25">Language:</span>
          <span>English</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">Address:</span>
          <span>40 Chestnut Street, Apt 202, DOVER, NH, 03820</span>
        </li>
        <li class="mb-75">
          <span class="fw-bolder me-25">Caregiver Hours:</span>
          <span>H: 40:00</span>
          <span>V: 0</span>
        </li>
      </ul>
      <div class="d-flex justify-content-center pt-2">
        <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal">
          Edit
        </a>
        <a href="javascript:;" class="btn btn-outline-danger suspend-user">Delete</a>
      </div>
    </div>
  </div>
</div>
<!-- /User Card -->
