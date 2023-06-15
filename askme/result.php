<!DOCTYPE html>
<html lang="en">
<head>
    <title>Directions</title>
</head>
<body>
    <h1>Directions</h1>
    
    <?php
    $destination = $_GET['destination'];
    $transport = $_GET['transport'];

    if ($destination == 'Westlands') {
        $stage = 'Odeon';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for $destination.";
        }
    }
    elseif ($destination == 'Rongai') {
        $stage = 'Development House';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Kawangware') {
        $stage = 'Kencom';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Kawangware') {
        $stage = 'Railways';
        if ($transport == 'Matatu') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Ruiru') {
        $stage = 'Odeon';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Westlands') {
        $stage = 'Odeon';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Utawala') {
        $stage = 'Ambassadeur';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Langata') {
        $stage = 'Afya Centre';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Kikuyu') {
        $stage = 'Odeon';
        if ($transport == 'Bus') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    elseif ($destination == 'Kikuyu') {
        $stage = 'Kenya Railways';
        if ($transport == 'Train') {
            $message = "To go to $destination, take the $transport at $stage.";
        } else {
            $message = "The $transport is not available for the $destination.";
        }
    }
    else {
        $message = "Destination not found.";
    }

    echo $message;
    ?>

</body>
</html>