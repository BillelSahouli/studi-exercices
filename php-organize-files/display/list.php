<?php
  require_once "lineBreak.php";
  /**
     * Display a list of data from an array
     *
     * @param [] $arrayData
     * return string
     */
  function displayList($arrayData) {
    $displayedValue = '';
    foreach($arrayData as $data) {
      $displayedValue .= $data;
      $displayedValue .= displayHTMLLineBreak();
    }

    return $displayedValue;
  }