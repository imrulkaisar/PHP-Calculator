<?php
// Initialize variables
$display = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['display'])) {
    // Get the value from the display field
    $display = $_POST['display'];

    // Handle calculation only when '=' button is pressed
    if (isset($_POST['equals'])) {
      // Evaluate the expression safely using eval
      try {
        // Ensure only safe characters are processed to avoid any security issues
        if (preg_match('/^[0-9+\-*\/\(\)\. ]+$/', $display)) {
          // Use eval to calculate the result
          $result = eval("return $display;");
          $display = $result;
        } else {
          $display = "Error: Invalid characters.";
        }
      } catch (Exception $e) {
        $display = "Error: Invalid input.";
      }
    }

    // Handle clear button
    if (isset($_POST['clear'])) {
      $display = '';
    }
  }
}
