<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $serviceName }}</title>

    <!-- Include Bootstrap for responsive design (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include your custom styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .service-page {
            padding: 30px;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-page h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
        }

        .img-content {

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .service-image {
            max-width: 50%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .content {
            margin-top: 10px;
            padding: 10px;
            max-width: 800px;
            text-align: center;
        }

        .service-page p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            font-size: 1rem;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .service-page {
                padding: 20px;
            }

            .service-page h1 {
                font-size: 2rem;
            }

            .service-page p {
                font-size: 1rem;
            }

            .img-content {
                flex-direction: column;
                align-items: center;
            }

            .service-image {
                max-width: 80%;
                margin-top: 20px;
            }

            .content {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .service-image {
                max-width: 90%;
            }

            .service-page {
                padding: 15px;
            }

            .back-link {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <!-- Service Detail Section -->
    <div class="service-page">
        <h1>{{ $serviceName }}</h1>

        <!-- Image and content wrapper -->
        <div class="img-content">
            <!-- Service image -->
            <img src="{{ asset($serviceImage) }}" alt="{{ $serviceName }}" class="service-image">
            <!-- Service details -->
            <div class="content">
                <h5>{{ $serviceSub }}</h5>
                <p>{{ $serviceDetails }}</p>



            </div>
        </div>

        <!-- Back to Services link -->
        <div>
            <a href="{{ url('/') }}" class="back-link">Back to Services</a>
        </div>
    </div>

    <!-- Optional: Include Bootstrap JS for components like modal, dropdown (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>