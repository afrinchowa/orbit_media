<!-- resources/views/proven-expertise.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Proven Expertise</h1>
<p>Here we provide detailed information about our expertise...</p>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>

    <!-- Include Bootstrap for responsive design (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include your custom styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .content {
            padding: 10px;
            max-width: 800px;
            text-align: center;
        }

        .img-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .service-page {
            padding: 30px;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-page h1 {
            font-size: 2.5rem;
            color: #007bff;
            /* Blue color for title */
            margin-bottom: 20px;
        }

        .service-page p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .service-image {
            max-width: 50%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

        /* Make the content responsive */
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
        <h1>Proven Expertise</h1>

        <!-- Image and content wrapper -->
        <div class="img-content">
            <!-- Service image -->

            <!-- Service details -->
            <div class="content">
                <p>Proven Expertise Subheading: What Sets Us Apart Description:
                    Our team of digital marketing specialists has honed a wealth of experience over the years, working with a diverse range of clients and industries. We have successfully helped brands grow by leveraging industry best practices, innovative techniques, and a deep understanding of the ever-evolving digital landscape. From SEO to PPC, social media marketing, and content strategy, our track record speaks for itself.



                </p>
                <ul>
                    <li>
                        Track Record of Success: We've achieved measurable results in boosting ROI, increasing website traffic, and improving conversions for our clients.
                    </li>
                    <li>Industry Knowledge: With years of experience, we stay up-to-date with the latest digital marketing trends to ensure that our strategies remain cutting-edge.</li>
                    <li>Customized Strategies: We don’t use a one-size-fits-all approach; every campaign is tailored to meet the unique needs of each client.</li>
                </ul>

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
@endsection