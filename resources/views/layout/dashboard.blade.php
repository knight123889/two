<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titlename")</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
        }

        /* Dashboard Layout Structure */
        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 260px;
            background-color: #1e293b;
            color: #fff;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar a {
            color: #94a3b8;
            text-decoration: none;
            padding: 15px 25px;
            font-size: 16px;
            font-weight: 500;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            color: #ffffff;
            background-color: #334155;
            padding-left: 30px;
        }

        /* Active link indicator */
        .sidebar a.active {
            color: #ffffff;
            background-color: #2563eb;
            border-left: 4px solid #60a5fa;
        }

        /* Main Content Area */
        .content {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        /* Responsive Design for Mobile Devices */
        @media (max-width: 768px) {
            .dashboard {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                padding: 10px 0;
            }
            .sidebar a {
                padding: 10px 20px;
                text-align: center;
            }
            .sidebar a:hover {
                padding-left: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <!-- हटाया गया <br> टैग्स और ऐड की गई active क्लास -->
            <a href="" class="active">DASHBOARD</a>
            <a href="{{route('showproject')}}">PROJECTS</a>
            <a href="{{route('addproject')}}">ADD PROJECTS</a>
        </div>
        <div class="content">
            @yield("contantarea")
        </div>
    </div>
</body>
</html>
