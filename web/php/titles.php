<?php
  $color = "green-text";
  $header_size = 1;
  $header_class = "";
  $lighten = "text-lighten-1";
  $col_tag_begin = '<div class="col s12 $color $lighten">';
  $col_tag_end = "</div>";

  switch ($page)
  {
    case 'about':
      $title_content = "About Me";
      $header_size = 2;
      $col_tag_begin = $col_tag_end = "";
      $header_class = " class=\"header $color text-darken-1\"";
      break;
    case 'assign':
      $title_content = "Landon's Assignments";
      $color = "blue-text";
      break;
    case 'store':
      $title_content = "The Marvelous Magic Source";
      $color= "blue-grey-text";
      $lighten = "text-darken-1";
      $header_size = 4;
      break;
    case 'item_detail':
      $title_content = $_SESSION["detail_item"]->get_name();
      $color = "blue-grey-text";
      $lighten = "text-darken-1";
      $header_size = 4;
      break;
    case 'cart':
      $title_content = "Shopping Cart";
      $color = "blue-grey-text";
      $lighten = "text-darken-1";
      $header_size = 2;
      break;
    case 'checkout':
      $title_content = "Checkout";
      $lighten = "text-lighten-2";
      break;
    case 'confirm':
      $title_content = "Thank you for placing your order!";
      $lighten = "text-lighten-3";
      $header_size = 4;
      break;
    case 'inventory':
      $title_content = $_SESSION['fname'] . " " . $_SESSION['lname'] ."'s Inventory";
      $color = "blue-grey-text";
      $header_size = 4;
      break;
    case 'trade':
      $title_content = $_SESSION['fname'] . " " . $_SESSION['lname'] ."'s Tradelist";
      $color = "blue-grey-text";
      $header_size = 4;
      break;
    case 'want':
      $title_content = $_SESSION['fname'] . " " . $_SESSION['lname'] ."'s Wantlist";
      $color = "blue-grey-text";
      $header_size = 4;
      break;
    case 'login':
      $title_content = "Login";
      $lighten = "text-lighten-2";
      $header_size = 3;
      break;
    case 'create_account':
      $title_content = "Create New Account";
      $color = "blue-grey-text";
      $lighten = "text-lighten-2";
      $header_size = 3;
      break;
    default:
      $title_content = "Web Engineering II";
      break;
  }

  echo strtr(
    "$col_tag_begin
    <h$header_size$header_class>$title_content</h$header_size>
  $col_tag_end\n", array('$color' => $color, '$lighten' => $lighten));
 ?>
