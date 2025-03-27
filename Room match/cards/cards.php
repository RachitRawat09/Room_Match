<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Listings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
      
        .row {
            display: flex;
            justify-content: space-between;
        }
        .col-md-4 {
            display: flex;
            flex: 1;
            max-width: 32%;
        }
        .property-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .property-card img {
            border-radius: 10px;
        }
        .verified-roommates {
            display: flex;
            align-items: center;
            margin-top: auto;
        }
        .verified-roommates img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 5px;
        }
        .view-details-btn {
            position: relative;
            background: white;
            color: black;
            border: 1px solid black;
            margin-top: auto;
            align-self: flex-end;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="property-card">
                    <img src="https://imagecdn.99acres.com/media1/12758/3/255163107M-1741168740325.jpg" class="img-fluid" alt="Modern Downtown Apartment">
                    <h5 class="mt-3">Modern Downtown Apartment</h5>
                    <p><strong>$2500/mo</strong> - New York, NY</p>
                    <p>2 Beds | 2 Baths | 2 Roommates</p>
                  
                    <div class="d-flex justify-content-center">
    <button class="btn btn-light border">View Details</button>
</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-card">
                    <img src="https://imagecdn.99acres.com/media1/12758/3/255163107M-1741168740325.jpg" class="img-fluid" alt="Cozy Studio Near University">
                    <h5 class="mt-3">Cozy Studio Near University</h5>
                    <p><strong>$1200/mo</strong> - Boston, MA</p>
                    <p>0 Beds | 1 Bath | 2 Roommates</p>
                 
                    <div class="d-flex justify-content-center">
    <button class="btn btn-light border">View Details</button>
</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-card">
                    <img src="https://imagecdn.99acres.com/media1/12758/3/255163107M-1741168740325.jpg" class="img-fluid" alt="Luxury 3-Bedroom House with Garden">
                    <h5 class="mt-3">Luxury 3-Bedroom House with Garden</h5>
                    <p><strong>$3800/mo</strong> - San Francisco, CA</p>
                    <p>3 Beds | 2.5 Baths | 2 Roommates</p>
                  
                    <div class="d-flex justify-content-center">
    <button class="btn btn-light border">View Details</button>
</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
