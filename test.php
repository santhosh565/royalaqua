<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Layout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .content {
            padding: 20px;
        }

        .animated {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- First Row: Content left, Image right -->
        <div class="row">
            <div class="col-md-6 content animated">
                <h2>Permits</h2>
                <p><strong>Overview:</strong> Before construction, a fiber construction permit package is essential. It includes all necessary documentation and plans to obtain permits from local authorities or regulatory agencies.</p>
                <h3>Key Components:</h3>
                <ul>
                    <li><strong>Site Plans / Engineering Drawings:</strong> Detailed drawings showing proposed locations of fiber optic cables, equipment, and infrastructure</li>
                    <li><strong>Environmental Impact Assessment:</strong> Assess and mitigate potential environmental impacts or hazards along proposed fiber routes.</li>
                    <li><strong>Utility Coordination:</strong> Ensure compliance with existing infrastructure and regulations.</li>
                    <li><strong>Regulatory Compliance:</strong> Demonstrate compliance with relevant laws, regulations, and industry standards.</li>
                    <li><strong>Public Notification:</strong> Document required public notifications or hearings.</li>
                </ul>
                <h3>Advantages:</h3>
                <p>Permits ensure detailed technical documentation for planning and implementing fiber optic network infrastructure, including City Permits, Highway Permits, and Railroad Permits.</p>
            </div>
            <div class="col-md-6">
                <img src="your-image-source.jpg" class="img-fluid animated" alt="Image description">
            </div>
        </div>

        <!-- Second Row: Image left, Content right -->
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="your-image-source.jpg" class="img-fluid animated" alt="Image description">
            </div>
            <div class="col-md-6 content animated">
                <h2>Permits</h2>
                <p><strong>Overview:</strong> Before construction, a fiber construction permit package is essential. It includes all necessary documentation and plans to obtain permits from local authorities or regulatory agencies.</p>
                <h3>Key Components:</h3>
                <ul>
                    <li><strong>Site Plans / Engineering Drawings:</strong> Detailed drawings showing proposed locations of fiber optic cables, equipment, and infrastructure</li>
                    <li><strong>Environmental Impact Assessment:</strong> Assess and mitigate potential environmental impacts or hazards along proposed fiber routes.</li>
                    <li><strong>Utility Coordination:</strong> Ensure compliance with existing infrastructure and regulations.</li>
                    <li><strong>Regulatory Compliance:</strong> Demonstrate compliance with relevant laws, regulations, and industry standards.</li>
                    <li><strong>Public Notification:</strong> Document required public notifications or hearings.</li>
                </ul>
                <h3>Advantages:</h3>
                <p>Permits ensure detailed technical documentation for planning and implementing fiber optic network infrastructure, including City Permits, Highway Permits, and Railroad Permits.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
