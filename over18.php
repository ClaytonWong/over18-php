<?php
  function chk_18($age)
  {
    // Throw exception if age is under 18
    if($age < 18)
    {
      throw new Exception('Age is under 18.');
    }
    else
    {
      echo "Age is 18 or over";
    }
  }

  try 
  {
    chk_18(18);
    chk_18(13);

    // If exception is thrown following line won't execute
    echo '<p>All 18 or over age checks passed.</p>';
  }

  catch(Exception $e)
  {
    // Handle the exception
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
  }

  // Continue execution
  echo "<p>Continue execution.</p>";
?>