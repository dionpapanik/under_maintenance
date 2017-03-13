<?php
ini_set('display_errors', '1');
require_once('../app/Mage.php');
umask();
Mage::app();

Header('Content-Type: text/html; charset=utf-8');

$name = Mage::getStoreConfig('general/store_information/name');
$address = Mage::getStoreConfig('general/store_information/address');
$phone = Mage::getStoreConfig('general/store_information/phone');
$email = Mage::getStoreConfig('trans_email/ident_general/email');
$logo = Mage::getStoreConfig('design/header/logo_src');
$skin_url = Mage::getDesign()->getSkinUrl();
$logo_path = $skin_url . $logo;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:300,700&subset=greek,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title><?php echo Mage::getStoreConfig('general/store_information/name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/page.css">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top:30px;">
        <div class="col-md-12"><img src="<?php echo $logo_path; ?>" alt="<?php echo $name; ?>"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $name; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="header"><i class="fa fa-spinner fa-pulse fa-lg fa-fw"></i>Website currently is under maintenance!
            </h1>
            <h2 class="sub-header">We are coming back soon with new features!</h2>
            <?php if ($address) : ?>
                <p>
                    <i class="fa fa-map-marker fa-lg"></i><?php echo $address; ?>
                </p>
            <?php endif; ?>
            <?php if ($phone) : ?>
                <p>
                    <i class="fa fa-phone fa-lg"></i><?php echo $phone; ?>
                </p>
            <?php endif; ?>

            <?php if ($email) : ?>
                <p>
                    <i class="fa fa-envelope fa-lg"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>