<?php include '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Hero Section with Background Image -->
    <section class="hero-section d-flex flex-column justify-content-center align-items-center position-relative" 
        style="background: url('../assets/image.png') no-repeat center center; background-size: cover; height: 100vh; position: relative;">
        
        <!-- Main Content Positioned Over Background -->
        <div class="container position-absolute top-50 start-50  translate-middle w-75">
            <div class="card p-4 shadow-lg bg-white bg-opacity-75">
                <h2 class="  text-center">Find Your Next Home & Roommate</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Where do you want to live?</label>
                            <input type="text" class="form-control" placeholder="City, neighborhood, or zip code">
                        </div>
                        <div class="col-md-6">
                            <label>What's your budget?</label>
                            <input type="text" class="form-control" placeholder="$">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Move-in Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Room Type</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Search Type</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="container text-center mt-5 mb-5">
    <h2 class="fw-bold">How RoomMatch Works</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-4 ">
                <i class="fas fa-user fa-3x mb-3"></i>
                <h4 class="mt-2">Create Your Profile</h4>
                <p>Sign up and tell us about your lifestyle, preferences, and what you're looking for in a roommate.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 ">
                <i class="fas fa-users fa-3x mb-3"></i>
                <h4 class="mt-2">Get Matched</h4>
                <p>Our AI algorithm finds compatible roommates based on your preferences, lifestyle, and budget.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 ">
                <i class="fas fa-home fa-3x mb-3"></i>
                <h4 class="mt-2">Find Your Home</h4>
                <p>Chat with potential roommates, tour properties, and find your perfect living situation.</p>
            </div>
        </div>
    </div>
    <button class="btn btn-dark mt-4">Learn More About Our Process</button>
</section>

<div class="container text-center my-5">
    <h2 class="fw-bold">Why Choose RoomMatch?</h2>
    <p class="text-muted">We've revolutionized the roommate-finding process with our AI-powered matching and verified listings.</p>
    
    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow p-3">
                <div class="card-body">
                    <i class="bi bi-robot fs-1"></i>
                    <h5 class="card-title fw-bold mt-3">AI-Powered Matching</h5>
                    <p class="card-text text-muted">Our advanced algorithm finds roommates who match your lifestyle, habits, and preferences for better compatibility.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow p-3">
                <div class="card-body">
                    <i class="bi bi-shield-check fs-1"></i>
                    <h5 class="card-title fw-bold mt-3">Verified Listings & Users</h5>
                    <p class="card-text text-muted">All landlords and roommates are verified through our secure identity verification process.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow p-3">
                <div class="card-body">
                    <i class="bi bi-chat fs-1"></i>
                    <h5 class="card-title fw-bold mt-3">Secure Messaging</h5>
                    <p class="card-text text-muted">Chat with potential roommates and landlords safely within our platform before making any decisions.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow p-3">
                <div class="card-body">
                    <i class="bi bi-eye fs-1"></i>
                    <h5 class="card-title fw-bold mt-3">Virtual Tours</h5>
                    <p class="card-text text-muted">View properties remotely with our virtual tour feature to save time and narrow down your options.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow p-3">
                <div class="card-body">
                    <i class="bi bi-file-earmark-text fs-1"></i>
                    <h5 class="card-title fw-bold mt-3">Lease Automation</h5>
                    <p class="card-text text-muted">Streamlined leasing process with digital contracts and secure payment integration.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow p-3">
                <div class="card-body">
                    <i class="bi bi-headset fs-1"></i>
                    <h5 class="card-title fw-bold mt-3">24/7 Support</h5>
                    <p class="card-text text-muted">Our dedicated customer support team is always available to help with any questions or issues.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<section class="testimonials py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">What Our Users Say</h2>
    <div class="row justify-content-center">
      <!-- Testimonial 1 -->
      <div class="col-md-4">
        <div class="card p-4 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="../assets/image1.png" class="rounded-circle me-3" alt="User Image" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Emily R.</h5>
              <p class="text-muted small">Tenant in NYC</p>
            </div>
          </div>
          <div class="mt-2">
            <span class="text-warning">★★★★★</span>
          </div>
          <p class="mt-3">Finding a compatible roommate used to be such a gamble. RoomMatch made it so much easier with their personality matching. My new roommate and I get along so well!</p>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="col-md-4">
        <div class="card p-4 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="../assets/image1.png" class="rounded-circle me-3 " alt="User Image" style="width: 50px; height: 50px; object-fit: cover;" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h5 class="mb-0">James L.</h5>
              <p class="text-muted small">Landlord in San Francisco</p>
            </div>
          </div>
          <div class="mt-2">
            <span class="text-warning">★★★★☆</span>
          </div>
          <p class="mt-3">As a property owner, I've had much better experiences with tenants since using RoomMatch. The verification process and compatibility matching lead to better long-term tenants.</p>
        </div>
      </div>
      <!-- Testimonial 3 -->
      <div class="col-md-4">
        <div class="card p-4 shadow-sm">
          <div class="d-flex align-items-center">
            <img src="../assets/image1.png" class="rounded-circle me-3" alt="User Image" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Lauren K.</h5>
              <p class="text-muted small">Graduate Student</p>
            </div>
          </div>
          <div class="mt-2">
            <span class="text-warning">★★★★★</span>
          </div>
          <p class="mt-3">I moved to a new city for grad school and was worried about finding housing. RoomMatch connected me with another student with similar study habits and lifestyle. It's been perfect!</p>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include '../includes/footer.php'; ?> 

</body>
</html>
