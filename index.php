<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Event Calendar</h1>
    
    <h2>Create Event</h2>
    <form action="create_event.php" method="POST">
    <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description">
        </div>
    <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="datetime-local" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="datetime-local" id="end_date" name="end_date">
        </div>
        <button type="submit" class="btn">Create Event</button>
    </form>
</div>
    <div class="event">
    <h2>Events</h2>
    <?php include 'display_events.php'; ?>
    </div>
</body>
</html> 