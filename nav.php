
<div id="nav">

  <?php if ($page == "main") { ?>
    <span>Main</span>
  <?php } else { ?>
    <a href="index.php">Main</a>
  <?php } ?>

  <?php if ($page == "ext_abs") { ?>
    <span>Extended Abstract</span>
  <?php } else { ?>
    <a href="ext_abs.php">Extended Abstract</a>
  <?php } ?>
  
  <?php if ($page == "organizers") { ?>
    <span>Organizers</span>
  <?php } else { ?>
    <a href="organizers.php">Organizers</a>
  <?php } ?>
  
  <?php if ($page == "schedule") { ?>
    <span>Schedule</span>
  <?php } else { ?>
    <a href="schedule.php">Schedule</a>
  <?php } ?>

  <?php if ($page == "proceedings") { ?>
    <span>Proceedings</span>    
  <?php } else { ?>
    <a href="proceedings.php">Proceedings</a>
  <?php } ?>
</div>
