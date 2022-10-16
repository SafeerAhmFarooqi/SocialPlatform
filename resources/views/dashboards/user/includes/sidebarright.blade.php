<div class="col-lg-3">
    <div class="row g-4">
      <!-- Card follow START -->
      <div class="col-sm-6 col-lg-12">
        <div class="card">
          <!-- Card header START -->
          <div class="card-header pb-0 border-0">
            <h5 class="card-title mb-0">Groups List</h5>
          </div>
          <!-- Card header END -->
          <!-- Card body START -->
          <livewire:groups-list/> 
         
          <!-- Card body END -->
        </div>
      </div>
      <!-- Card follow START -->

      <!-- Card News START -->
      <div class="col-sm-6 col-lg-12">
        <div class="card">
          <!-- Card header START -->
          <div class="card-header pb-0 border-0">
            <h5 class="card-title mb-0">Today’s Activity</h5>
          </div>
          <!-- Card header END -->
          <!-- Card body START -->
          <div class="card-body">
            <!-- News item -->
            <div class="mb-3">
              <h6 class="mb-0"><a href="#">Jack Send you message</a></h6>
              <small>2hr</small>
            </div>
            <!-- News item -->
            <div class="mb-3">
              <h6 class="mb-0"><a href="#">Steve Follow you</a></h6>
              <small>3hr</small>
            </div>
          
            <!-- Load more comments -->
            <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center" data-bs-toggle="button" aria-pressed="true">
              <div class="spinner-dots me-2">
                <span class="spinner-dot"></span>
                <span class="spinner-dot"></span>
                <span class="spinner-dot"></span>
              </div>
              View all latest Activity
            </a>
          </div>
          <!-- Card body END -->
        </div>
      </div>

      <livewire:group-request-listing/> 
      
      <!-- Card News END -->
    </div>
  </div>