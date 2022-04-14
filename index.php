<html>
<head>
    <title>FAF Tournament Match Data</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="" alt="FAF Logo" style="width:40px;" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target='#collapsibleNavbar'>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/match-results/1v1.php">1v1 Match Data</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Add Data</a>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item text-white" href="/add/add_map.php">Map</a></li>
                        <li><a class="dropdown-item text-white" href="/add/add_tournament.php">Tournament</a></li>
                        <li><a class="dropdown-item text-white" href="/add/add_players.php">Player</a></li>
                        <li><a class="dropdown-item text-white" href="/add/add_match_data.php">Match Data</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<body class="bg-dark">
    <main class="container-fluid pt-3 bg-dark text-white">    
    <h1 class="display-1">FAF Tournament Match Data</h1>
    <p class="h4"> This site is to display and look up Tournament data. Currenly 1v1 Data is only mesured at anything with a min of $50 Prize pool</p>
    <img class="rounded mx-auto d-block img-fluid"src="/images/1.jpg" alt="faf image">
    </main>

</body>
</html>