<?php

switch ($page) {
    case 'categories':
    global $db;
    $parent_name  = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent name
    $parent_name  = strtr($parent_name, '-', ' ');
    $parent_name  = ucwords($parent_name);
		$config 			= HTMLPurifier_Config::createDefault();
		$purifier 		= new HTMLPurifier();
		$parent_name  = $purifier->purify($parent_name);
		$status = (int)1;
    $parent_category = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE category_name = :category_name AND status = :status";
    if($stmt = $db->_conndb->prepare($parent_category)){
      $stmt->bindParam(':category_name', $parent_name, PDO::PARAM_STR);
			$stmt->bindParam(':status', $status, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      if($row= $stmt->fetch()){
      $meta_title             = $row['meta_title'];
      $meta_description       = $row['meta_description'];
      $itemprop_title         = $row['itemprop_title'];
      $itemprop_description   = $row['itemprop_description'];
      $itemprop_image         = $row['itemprop_image'];
      $twitter_title          = $row['twitter_title'];
      $twitter_description    = $row['twitter_description'];
      $twitter_site           = $row['twitter_site'];
      $twitter_image          = $row['twitter_image'];
      $og_title               = $row['og_title'];
      $og_description         = $row['og_description'];
      $og_site                = $row['og_site'];
      $og_image               = $row['og_image'];
      echo "<title>$meta_title</title>
      <meta name='description' content='$meta_description' />
      <!-- Schema.org markup for Google+ -->
      <meta itemprop='name' content='$itemprop_title'>
      <meta itemprop='description' content='$itemprop_description'>
      <meta itemprop='image' content='uploads/gallery/social/categories/$itemprop_image'>
      <!-- Twitter Card data -->
      <meta name='twitter:site' $twitter_site'>
      <meta name='twitter:title' content='$twitter_title'>
      <meta name='twitter:description' content='$twitter_description'>
      <meta name='twitter:image:src' content='uploads/gallery/social/categories/$twitter_image'>
      <!-- Open Graph data -->
      <meta property='og:title' content='$og_title' />
      <meta name='twitter:image:src' content='uploads/gallery/social/categories/$og_image'>
      <meta property='og:description' content='$og_description' />
      <meta property='og:site_name' content='$og_site' />";
      echo "\n";
      } else{
      echo "<title>404 - Page Not Found</title>\n";
      }
    }
        break;
    case 'products':
    $parent_name    = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent name
    $category_name  = filter_input(INPUT_GET, 'category_name', FILTER_SANITIZE_STRING); //category name
    $parent_name    = strtr($parent_name, '-', ' ');
    $category_name  = strtr($category_name, '-', ' ');
    $parent_name    = ucwords($parent_name);
    $category_name  = ucwords($category_name);
    $config 			  = HTMLPurifier_Config::createDefault();
		$purifier 		  = new HTMLPurifier();
    $parent_name    = $purifier->purify($parent_name);
		$category_name  = $purifier->purify($category_name);
		$status         = (int)1;
    $parent_category = "SELECT * FROM " . CATEGORIES_TBL_EN . " WHERE 	curl_key = :category_name AND status = :status";
    if($stmt = $db->_conndb->prepare($parent_category)){
      $stmt->bindParam(':category_name', $category_name, PDO::PARAM_STR);
			$stmt->bindParam(':status', $status, PDO::PARAM_INT);
      $stmt->setFetchMode(PDO:: FETCH_ASSOC);
      $stmt->execute();
      if($row= $stmt->fetch()){
      $meta_title             = $row['meta_title'];
      $meta_description       = $row['meta_description'];
      $itemprop_title         = $row['itemprop_title'];
      $itemprop_description   = $row['itemprop_description'];
      $itemprop_image         = $row['itemprop_image'];
      $twitter_title          = $row['twitter_title'];
      $twitter_description    = $row['twitter_description'];
      $twitter_site           = $row['twitter_site'];
      $twitter_image          = $row['twitter_image'];
      $og_title               = $row['og_title'];
      $og_description         = $row['og_description'];
      $og_site                = $row['og_site'];
      $og_image               = $row['og_image'];
      echo "<title>$meta_title</title>
      <meta name='description' content='$meta_description' />
      <!-- Schema.org markup for Google+ -->
      <meta itemprop='name' content='$itemprop_title'>
      <meta itemprop='description' content='$itemprop_description'>
      <meta itemprop='image' content='uploads/gallery/social/categories/$itemprop_image'>
      <!-- Twitter Card data -->
      <meta name='twitter:site' $twitter_site'>
      <meta name='twitter:title' content='$twitter_title'>
      <meta name='twitter:description' content='$twitter_description'>
      <meta name='twitter:image:src' content='uploads/gallery/social/categories/$twitter_image'>
      <!-- Open Graph data -->
      <meta property='og:title' content='$og_title' />
      <meta name='twitter:image:src' content='uploads/gallery/social/categories/$og_image'>
      <meta property='og:description' content='$og_description' />
      <meta property='og:site_name' content='$og_site' />";
      echo "\n";
      } else{
      echo "<title>404 - Page Not Found</title>\n";
      }
    }
      break;
      case 'product_details':
      $parent_name    = filter_input(INPUT_GET, 'parent_name', FILTER_SANITIZE_STRING); //parent name
      $category_name  = filter_input(INPUT_GET, 'category_name', FILTER_SANITIZE_STRING); //category name
      $product_name   = filter_input(INPUT_GET, 'product_name', FILTER_SANITIZE_STRING); //product name
      $parent_name    = strtr($parent_name, '-', ' ');
      $category_name  = strtr($category_name, '-', ' ');
      $product_name   = strtr($product_name, '-', ' ');
      $parent_name    = ucwords($parent_name);
      $category_name  = ucwords($category_name);
      $product_name   = ucwords($product_name);
      $config 			  = HTMLPurifier_Config::createDefault();
  		$purifier 		  = new HTMLPurifier();
      $parent_name    = $purifier->purify($parent_name);
      $category_name  = $purifier->purify($category_name);
  		$product_name   = $purifier->purify($product_name);
  		$status         = (int)1;
      $parent_category = "SELECT * FROM " . PRODUCTS_TBL_EN . " WHERE purl_key = :product_name AND status = :status";
      if($stmt = $db->_conndb->prepare($parent_category)){
        $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
  			$stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        if($row= $stmt->fetch()){
        $meta_title             = $row['meta_title'];
        $meta_description       = $row['meta_description'];
        $itemprop_title         = $row['itemprop_title'];
        $itemprop_description   = $row['itemprop_description'];
        $itemprop_image         = $row['itemprop_image'];
        $twitter_title          = $row['twitter_title'];
        $twitter_description    = $row['twitter_description'];
        $twitter_site           = $row['twitter_site'];
        $twitter_image          = $row['twitter_image'];
        $og_title               = $row['og_title'];
        $og_description         = $row['og_description'];
        $og_site                = $row['og_site'];
        $og_image               = $row['og_image'];
        echo "<title>$meta_title</title>
        <meta name='description' content='$meta_description' />
        <!-- Schema.org markup for Google+ -->
        <meta itemprop='name' content='$itemprop_title'>
        <meta itemprop='description' content='$itemprop_description'>
        <meta itemprop='image' content='uploads/gallery/social/categories/$itemprop_image'>
        <!-- Twitter Card data -->
        <meta name='twitter:site' $twitter_site'>
        <meta name='twitter:title' content='$twitter_title'>
        <meta name='twitter:description' content='$twitter_description'>
        <meta name='twitter:image:src' content='uploads/gallery/social/categories/$twitter_image'>
        <!-- Open Graph data -->
        <meta property='og:title' content='$og_title' />
        <meta name='twitter:image:src' content='uploads/gallery/social/categories/$og_image'>
        <meta property='og:description' content='$og_description' />
        <meta property='og:site_name' content='$og_site' />";
        echo "\n";
        } else{
        echo "<title>404 - Page Not Found</title>\n";
        }
      }
        break;
        case 'contact':
          echo "<title>Contact Details Hassan Amin.</title>
          <meta name='description' content='Lahore, Pakistan. +92 (306) 1209000. info@hassanamin.com' />";
          echo "\n";
        break;
        case 'search':
          echo "<meta name='robots' content='noindex, nofollow'>
          <title>Search Results.</title>";
          echo "\n";
        break;
        case 'competitor-reference':
          echo "<meta name='robots' content='noindex, nofollow'>
          <title>Competitor Reference.</title>";
          echo "\n";
        break;
        case 'cart':
          echo "<meta name='robots' content='noindex, nofollow'>
          <title>Enquiry Cart.</title>";
          echo "\n";
        break;
        case 'checkout':
          echo "<meta name='robots' content='noindex, nofollow'>
          <title>Checkout Enquiry Cart.</title>";
          echo "\n";
        break;
        case 'checkout':
          echo "<meta name='robots' content='noindex, nofollow'>
          <title>Checkout Enquiry Cart.</title>";
          echo "\n";
        break;
        case 'success':
          echo "<meta name='robots' content='noindex, nofollow'>
          <title>Enquiry Successfully Submited.</title>";
          echo "\n";
        break;
        case 'download':
          echo "<title>Catalog Request Form Hassan Amin.</title>
          <meta name='description' content='Catalogs request form' />";
          echo "\n";
        break;
        case 'index':
          echo "<title>Ecommerce Website Demo by Hassan Amin.</title>
			<!--// SITE META DESCRIPTION //-->
			<meta name='description' content='eCommerce and digital marketing specialist with a track record of driving business success through eCommerce and marketing strategies.'/>
			<link href='/assets/css/font-awesome.min.css' media='all' rel='stylesheet' type='text/css'>
			<!-- Facebook Meta -->
			<meta property='og:title' content='Hassan Amin.'/>
			<meta property='og:type' content=''/>
			<meta property='og:url' content='https://hassanamin.com/'/>
			<meta property='og:site_name' content='Hassan Amin.'/>
			<meta property='og:description' content='eCommerce and digital marketing specialist with a track record of driving business success through eCommerce and marketing strategies.'>
			<meta property='og:image' content='https://hassanamin.com/wp-content/uploads/2022/12/fbshare.jpg'/>
			<!-- Twitter Card data -->
			<meta name='twitter:card' content='summary_large_image'>
			<meta name='twitter:title' content='Hassan Amin'>
			<meta name='twitter:description' content='eCommerce and digital marketing specialist with a track record of driving business success through eCommerce and marketing strategies.'>";
          echo "\n";
        break;
  }

?>
